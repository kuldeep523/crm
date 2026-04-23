/**
 * CRM Landing Voice Agent Widget
 * ================================
 * Drop-in voice agent popup for any website.
 *
 * USAGE — add these 2 lines before </body> in any HTML/PHP page:
 *
 *   <script>window.VoiceAgentConfig = { url: "https://your-ngrok-url.ngrok-free.app" };</script>
 *   <script src="voice-agent-widget.js"></script>
 *
 * OPTIONAL CONFIG:
 *   window.VoiceAgentConfig = {
 *     url:        "https://your-ngrok-url.ngrok-free.app",  // required
 *     logo:       "images/crmLanding_logo.png",             // path to your logo
 *     position:   "right",                                  // "right" or "left"
 *     bottom:     "25px",                                   // distance from bottom
 *     side:       "25px",                                   // distance from side
 *     width:      "370px",                                  // popup width
 *     height:     "520px",                                  // popup height
 *   };
 */

(function () {
  "use strict";

  // ── Config ────────────────────────────────────────────────────────────────
  var cfg = window.VoiceAgentConfig || {};
  var AGENT_URL = cfg.url        || "https://subcontiguous-kase-subcandid.ngrok-free.dev";
  var LOGO      = cfg.logo       || null;
  var POSITION  = cfg.position   || "right";
  var BOTTOM    = cfg.bottom     || "25px";
  var SIDE      = cfg.side       || "25px";
  var WIDTH     = cfg.width      || "370px";
  var HEIGHT    = cfg.height     || "520px";

  // ── Inject CSS ────────────────────────────────────────────────────────────
  var style = document.createElement("style");
  style.textContent = [
    "#va-btn {",
    "  position: fixed;",
    "  bottom: " + BOTTOM + ";",
    "  " + POSITION + ": " + SIDE + ";",
    "  width: 64px; height: 64px;",
    "  background: transparent;",
    "  border-radius: 50%;",
    "  display: flex;",
    "  align-items: center;",
    "  justify-content: center;",
    "  cursor: pointer;",
    "  z-index: 999999;",
    "  box-shadow: 0 4px 18px rgba(0,0,0,0.20);",
    "  border: none;",
    "  overflow: hidden;",
    "  padding: 0;",
    "  transition: transform .15s, box-shadow .2s;",
    "}",
    "#va-btn:hover {",
    "  transform: scale(1.07);",
    "  box-shadow: 0 6px 28px rgba(0,0,0,0.28);",
    "}",
    "#va-btn img { width: 100%; height: 100%; object-fit: contain; display: block; }",

    /* fallback emoji button if no logo */
    "#va-btn .va-emoji {",
    "  width: 100%; height: 100%;",
    "  background: #1a1916;",
    "  border-radius: 50%;",
    "  display: flex; align-items: center; justify-content: center;",
    "  font-size: 26px;",
    "}",

    "#va-popup {",
    "  position: fixed;",
    "  bottom: calc(" + BOTTOM + " + 78px);",
    "  " + POSITION + ": " + SIDE + ";",
    "  width: " + WIDTH + ";",
    "  height: " + HEIGHT + ";",
    "  display: none;",
    "  border-radius: 16px;",
    "  overflow: hidden;",
    "  box-shadow: 0 10px 40px rgba(0,0,0,0.22);",
    "  z-index: 999998;",
    "  background: #fff;",
    "  border: 1px solid #e2e8f0;",
    "}",
    "#va-popup.va-open {",
    "  animation: vaPopIn .2s ease forwards;",
    "}",
    "@keyframes vaPopIn {",
    "  from { opacity: 0; transform: translateY(12px) scale(0.97); }",
    "  to   { opacity: 1; transform: translateY(0) scale(1); }",
    "}",
    "#va-popup iframe {",
    "  width: 100%; height: 100%; border: none;",
    "}",

    /* close button inside popup */
    "#va-close {",
    "  position: absolute;",
    "  top: 8px; right: 10px;",
    "  width: 24px; height: 24px;",
    "  background: rgba(0,0,0,0.06);",
    "  border: none;",
    "  border-radius: 50%;",
    "  cursor: pointer;",
    "  font-size: 13px;",
    "  color: #64748b;",
    "  display: flex; align-items: center; justify-content: center;",
    "  z-index: 999999;",
    "  line-height: 1;",
    "  transition: background .15s;",
    "}",
    "#va-close:hover { background: rgba(0,0,0,0.12); }",
  ].join("\n");
  document.head.appendChild(style);

  // ── Build button ──────────────────────────────────────────────────────────
  var btn = document.createElement("div");
  btn.id = "va-btn";
  btn.title = "Talk to our AI Agent";

  if (LOGO) {
    var img = document.createElement("img");
    img.src = LOGO;
    img.alt = "Voice Agent";
    btn.appendChild(img);
  } else {
    var emoji = document.createElement("div");
    emoji.className = "va-emoji";
    emoji.textContent = "🎙";
    btn.appendChild(emoji);
  }

  // ── Build popup ───────────────────────────────────────────────────────────
  var popup = document.createElement("div");
  popup.id = "va-popup";

  var closeBtn = document.createElement("button");
  closeBtn.id = "va-close";
  closeBtn.innerHTML = "&#x2715;"; // ✕
  closeBtn.title = "Close";

  // Iframe is created lazily on first open so mic permission isn't
  // triggered until the user actually clicks the button.
  var iframeLoaded = false;

  function loadIframe() {
    if (iframeLoaded) return;
    iframeLoaded = true;
    var iframe = document.createElement("iframe");
    iframe.src = AGENT_URL;
    iframe.allow = "microphone; autoplay";
    iframe.setAttribute("allowfullscreen", "");
    popup.appendChild(iframe);
  }

  popup.appendChild(closeBtn);
  document.body.appendChild(btn);
  document.body.appendChild(popup);

  // ── Toggle logic ──────────────────────────────────────────────────────────
  function openPopup() {
    loadIframe();
    popup.style.display = "block";
    // Re-trigger animation by removing and adding class
    popup.classList.remove("va-open");
    void popup.offsetWidth; // force reflow
    popup.classList.add("va-open");
  }

  function closePopup() {
    popup.style.display = "none";
    popup.classList.remove("va-open");
  }

  btn.addEventListener("click", function (e) {
    e.stopPropagation();
    if (popup.style.display === "block") {
      closePopup();
    } else {
      openPopup();
    }
  });

  closeBtn.addEventListener("click", function (e) {
    e.stopPropagation();
    closePopup();
  });

  // Click outside to close
  document.addEventListener("click", function (e) {
    if (
      popup.style.display === "block" &&
      !popup.contains(e.target) &&
      e.target !== btn &&
      !btn.contains(e.target)
    ) {
      closePopup();
    }
  });

  // Escape key to close
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && popup.style.display === "block") {
      closePopup();
    }
  });

})();
