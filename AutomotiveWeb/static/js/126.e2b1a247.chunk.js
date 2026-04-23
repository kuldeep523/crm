(this.webpackJsonpfrontend = this.webpackJsonpfrontend || []).push([
    [126], {
        805: function(e, c, l) {
            "use strict";
            l.r(c);
            var t = l(1),
                r = l(46),
                s = l(0);
            c.default = function() {
                let [e, c] = Object(t.useState)(!0);
                return Object(t.useEffect)((() => {
                    window.location.href.indexOf("mobileAppView") > 0 || localStorage.getItem("mobileAppView") ? (localStorage.setItem("mobileAppView", !0), c(!1)) : c(!0), window.location.pathname.toLowerCase() == "/STW2024".toLowerCase() && c(!1)
                }), []), Object(s.jsx)(s.Fragment, {
                    children: e ? Object(s.jsx)(s.Fragment, {
                        children: Object(s.jsxs)("footer", {
                            className: "main-footer",
                            children: [Object(s.jsx)("div", {
                                className: "top-footer",
                                children: Object(s.jsxs)("div", {
                                    className: "container",
                                    children: [Object(s.jsxs)("div", {
                                        className: "row",
                                        children: [Object(s.jsx)("div", {
                                            className: "col-lg-3 col-12 col-sm-12 col-md-3",
                                            children: Object(s.jsxs)("div", {
                                                className: "footer-menu",
                                                children: [Object(s.jsx)("img", {
                                                    alt: "Electric Bike Icon\n",
                                                    loading: "lazy",
                                                    src: "/images/bikefooter.svg"
                                                }), Object(s.jsx)("h3", {
                                                    children: "Motorcycles"
                                                }), Object(s.jsxs)("ul", {
                                                    children: [Object(s.jsx)("li", {
                                                        children: Object(s.jsx)(r.b, {
                                                            to: "/rv1",
                                                            children: "RV1"
                                                        })
                                                    }), Object(s.jsx)("li", {
                                                        children: Object(s.jsx)(r.b, {
                                                            to: "/rv1plus",
                                                            children: "RV1+"
                                                        })
                                                    }), Object(s.jsx)("li", {
                                                        children: Object(s.jsx)(r.b, {
                                                            to: "/rv400-brz",
                                                            children: "RV400 BRZ"
                                                        })
                                                    }), Object(s.jsx)("li", {
                                                        children: Object(s.jsx)(r.b, {
                                                            to: "/rv400",
                                                            children: "RV400"
                                                        })
                                                    })]
                                                })]
                                            })
                                        }), Object(s.jsx)("div", {
                                            className: "col-lg-3 col-12 col-sm-12 col-md-3",
                                            children: Object(s.jsxs)("div", {
                                                className: "footer-menu",
                                                children: [Object(s.jsx)("img", {
                                                    alt: "Revolt Motors Icon",
                                                    loading: "lazy",
                                                    src: "/images/F_Revolt_Icon.svg"
                                                }), Object(s.jsx)("h3", {
                                                    children: "Revolt"
                                                }), Object(s.jsxs)("ul", {
                                                    children: [Object(s.jsx)("li", {
                                                        children: Object(s.jsx)("a", {
                                                            href: "https://blog.revoltmotors.com",
                                                            target: "_blank",
                                                            children: "Blog"
                                                        })
                                                    }), Object(s.jsx)("li", {
                                                        children: Object(s.jsx)(r.b, {
                                                            to: "/about-us",
                                                            children: "Our Story"
                                                        })
                                                    }), Object(s.jsx)("li", {
                                                        children: Object(s.jsx)("a", {
                                                            href: "mailto:career@revoltmotors.com",
                                                            target: "_blank",
                                                            children: "Career@revoltmotors.com"
                                                        })
                                                    }), Object(s.jsx)("li", {
                                                        children: Object(s.jsx)(r.b, {
                                                            to: "/becomedealer",
                                                            children: "Become a Dealer"
                                                        })
                                                    })]
                                                })]
                                            })
                                        }), Object(s.jsx)("div", {
                                            className: "col-lg-3 col-12 col-sm-12 col-md-3",
                                            children: Object(s.jsxs)("div", {
                                                className: "footer-menu",
                                                children: [Object(s.jsx)("img", {
                                                    alt: "Legal Icon",
                                                    loading: "lazy",
                                                    src: "/images/Legal.svg"
                                                }), Object(s.jsx)("h3", {
                                                    children: "Legal"
                                                }), Object(s.jsxs)("ul", {
                                                    children: [Object(s.jsx)("li", {
                                                        children: Object(s.jsx)(r.b, {
                                                            to: "/terms",
                                                            children: "Terms & Conditions"
                                                        })
                                                    }), Object(s.jsx)("li", {
                                                        children: Object(s.jsx)(r.b, {
                                                            to: "/privacy-policy",
                                                            children: "Privacy Policy"
                                                        })
                                                    }), Object(s.jsx)("li", {
                                                        children: Object(s.jsx)(r.b, {
                                                            to: "/disclaimer-details",
                                                            children: "Caution Notice"
                                                        })
                                                    }), Object(s.jsx)("li", {
                                                        children: Object(s.jsx)(r.b, {
                                                            to: "/myrevolt-eula",
                                                            children: "EULA "
                                                        })
                                                    })]
                                                })]
                                            })
                                        }), Object(s.jsx)("div", {
                                            className: "col-lg-3 col-12 col-sm-12 col-md-3",
                                            children: Object(s.jsxs)("div", {
                                                className: "footer-menu",
                                                children: [Object(s.jsx)("h3", {
                                                    children: "Follow us"
                                                }), Object(s.jsxs)("ul", {
                                                    className: "social-linls",
                                                    children: [Object(s.jsx)("li", {
                                                        children: Object(s.jsx)("a", {
                                                            href: "//www.facebook.com/revoltmotorsin/",
                                                            rel: "noopener noreferrer",
                                                            target: "_blank",
                                                            children: Object(s.jsx)("i", {
                                                                className: "fa fa-facebook",
                                                                "aria-hidden": "true"
                                                            })
                                                        })
                                                    }), Object(s.jsx)("li", {
                                                        children: Object(s.jsx)("a", {
                                                            href: "//twitter.com/RevoltMotorsIN",
                                                            rel: "noopener noreferrer",
                                                            target: "_blank",
                                                            children: Object(s.jsx)("i", {
                                                                className: "fa fa-twitter",
                                                                "aria-hidden": "true"
                                                            })
                                                        })
                                                    }), Object(s.jsx)("li", {
                                                        children: Object(s.jsx)("a", {
                                                            href: "//www.linkedin.com/company/revolt-intellicorp/",
                                                            rel: "noopener noreferrer",
                                                            target: "_blank",
                                                            children: Object(s.jsx)("i", {
                                                                className: "fa fa-linkedin",
                                                                "aria-hidden": "true"
                                                            })
                                                        })
                                                    }), Object(s.jsx)("li", {
                                                        children: Object(s.jsx)("a", {
                                                            href: "//www.instagram.com/revoltmotorsin/",
                                                            rel: "noopener noreferrer",
                                                            target: "_blank",
                                                            children: Object(s.jsx)("i", {
                                                                className: "fa fa-instagram",
                                                                "aria-hidden": "true"
                                                            })
                                                        })
                                                    }), Object(s.jsx)("li", {
                                                        children: Object(s.jsx)("a", {
                                                            href: "//www.youtube.com/channel/UC2tW9kRUr1mGhS8oA_IQEnQ",
                                                            rel: "noopener noreferrer",
                                                            target: "_blank",
                                                            children: Object(s.jsx)("i", {
                                                                className: "fa fa-youtube-play",
                                                                "aria-hidden": "true"
                                                            })
                                                        })
                                                    })]
                                                })]
                                            })
                                        })]
                                    }), Object(s.jsx)("div", {
                                        className: "row",
                                        children: Object(s.jsx)("div", {
                                            className: "col-12",
                                            children: Object(s.jsx)("div", {
                                                className: "top-download mt-3 text-center",
                                                children: Object(s.jsxs)("p", {
                                                    children: ["Download the App Now", " ", Object(s.jsx)("a", {
                                                        href: "https://apps.apple.com/us/app/myrevolt/id1477594974",
                                                        children: Object(s.jsx)("img", {
                                                            alt: "Revolt App Store",
                                                            loading: "lazy",
                                                            src: "/images/apple1.svg"
                                                        })
                                                    }), " ", Object(s.jsx)("a", {
                                                        href: "https://play.google.com/store/apps/details?id=com.myrevolt.app",
                                                        children: Object(s.jsx)("img", {
                                                            alt: "Revolt Playstore App",
                                                            loading: "lazy",
                                                            src: "/images/playstore.svg"
                                                        })
                                                    })]
                                                })
                                            })
                                        })
                                    })]
                                })
                            }), Object(s.jsx)("div", {
                                className: "bottom-footer",
                                children: Object(s.jsx)("div", {
                                    className: "container",
                                    children: Object(s.jsx)("div", {
                                        className: "row",
                                        children: Object(s.jsx)("div", {
                                            className: "col-12",
                                            children: Object(s.jsx)("div", {
                                                className: "cpy",
                                                children: "All information is subject to specific conditions | Copyright \xa9 2024 Revolt Intellicorp Private Limited. All right reserved."
                                            })
                                        })
                                    })
                                })
                            })]
                        })
                    }) : null
                })
            }
        }
    }
]);