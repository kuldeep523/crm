(this.webpackJsonpfrontend = this.webpackJsonpfrontend || []).push([
    [39], {
        334: function(e, t, r) {
            "use strict";
            r.d(t, "a", (function() {
                return i
            }));
            r(1);
            var n = r(0);

            function i(e) {
                return Object(n.jsx)("div", {
                    className: `alert alert-${e.variant||"info"}`,
                    children: e.children
                })
            }
        },
        335: function(e, t, r) {
            "use strict";
            r.d(t, "a", (function() {
                return i
            }));
            r(1);
            var n = r(0);

            function i() {
                return Object(n.jsx)("div", {
                    className: "loading",
                    children: "Loading..."
                })
            }
        },
        336: function(e, t, r) {
            "use strict";
            Object.defineProperty(t, "__esModule", {
                value: !0
            }), t.default = t.MetaContext = void 0;
            var n = function(e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var r in e)
                        if (Object.prototype.hasOwnProperty.call(e, r)) {
                            var n = Object.defineProperty && Object.getOwnPropertyDescriptor ? Object.getOwnPropertyDescriptor(e, r) : {};
                            n.get || n.set ? Object.defineProperty(t, r, n) : t[r] = e[r]
                        }
                return t.default = e, t
            }(r(1));

            function i(e) {
                return i = "function" === typeof Symbol && "symbol" === typeof Symbol.iterator ? function(e) {
                    return typeof e
                } : function(e) {
                    return e && "function" === typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
                }, i(e)
            }

            function o(e, t) {
                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
            }

            function c(e, t) {
                for (var r = 0; r < t.length; r++) {
                    var n = t[r];
                    n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
                }
            }

            function l(e, t) {
                return !t || "object" !== i(t) && "function" !== typeof t ? function(e) {
                    if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                    return e
                }(e) : t
            }

            function a(e) {
                return a = Object.setPrototypeOf ? Object.getPrototypeOf : function(e) {
                    return e.__proto__ || Object.getPrototypeOf(e)
                }, a(e)
            }

            function s(e, t) {
                return s = Object.setPrototypeOf || function(e, t) {
                    return e.__proto__ = t, e
                }, s(e, t)
            }
            var d = (0, n.createContext)({});
            t.MetaContext = d;
            var u = function(e) {
                    function t() {
                        return o(this, t), l(this, a(t).apply(this, arguments))
                    }
                    var r, i, u;
                    return function(e, t) {
                        if ("function" !== typeof t && null !== t) throw new TypeError("Super expression must either be null or a function");
                        e.prototype = Object.create(t && t.prototype, {
                            constructor: {
                                value: e,
                                writable: !0,
                                configurable: !0
                            }
                        }), t && s(e, t)
                    }(t, e), r = t, (i = [{
                        key: "render",
                        value: function() {
                            return n.default.createElement(d.Provider, {
                                value: {
                                    extract: this.props.extract
                                }
                            }, n.Children.only(this.props.children))
                        }
                    }]) && c(r.prototype, i), u && c(r, u), t
                }(n.Component),
                b = u;
            t.default = b
        },
        337: function(e, t, r) {
            "use strict";
            Object.defineProperty(t, "__esModule", {
                value: !0
            }), t.default = void 0;
            var n, i = function(e) {
                    if (e && e.__esModule) return e;
                    var t = {};
                    if (null != e)
                        for (var r in e)
                            if (Object.prototype.hasOwnProperty.call(e, r)) {
                                var n = Object.defineProperty && Object.getOwnPropertyDescriptor ? Object.getOwnPropertyDescriptor(e, r) : {};
                                n.get || n.set ? Object.defineProperty(t, r, n) : t[r] = e[r]
                            }
                    return t.default = e, t
                }(r(1)),
                o = (n = r(54)) && n.__esModule ? n : {
                    default: n
                },
                c = r(341),
                l = r(336);

            function a(e) {
                return a = "function" === typeof Symbol && "symbol" === typeof Symbol.iterator ? function(e) {
                    return typeof e
                } : function(e) {
                    return e && "function" === typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
                }, a(e)
            }

            function s(e, t) {
                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
            }

            function d(e, t) {
                for (var r = 0; r < t.length; r++) {
                    var n = t[r];
                    n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
                }
            }

            function u(e, t) {
                return !t || "object" !== a(t) && "function" !== typeof t ? function(e) {
                    if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                    return e
                }(e) : t
            }

            function b(e) {
                return b = Object.setPrototypeOf ? Object.getPrototypeOf : function(e) {
                    return e.__proto__ || Object.getPrototypeOf(e)
                }, b(e)
            }

            function j(e, t) {
                return j = Object.setPrototypeOf || function(e, t) {
                    return e.__proto__ = t, e
                }, j(e, t)
            }
            var p = function(e) {
                function t() {
                    return s(this, t), u(this, b(t).apply(this, arguments))
                }
                var r, n, l;
                return function(e, t) {
                    if ("function" !== typeof t && null !== t) throw new TypeError("Super expression must either be null or a function");
                    e.prototype = Object.create(t && t.prototype, {
                        constructor: {
                            value: e,
                            writable: !0,
                            configurable: !0
                        }
                    }), t && j(e, t)
                }(t, e), r = t, (n = [{
                    key: "componentDidMount",
                    value: function() {
                        this.temporaryElement = document.createElement("div"), this.handleChildrens()
                    }
                }, {
                    key: "componentDidUpdate",
                    value: function(e) {
                        e.children !== this.props.children && this.handleChildrens()
                    }
                }, {
                    key: "componentWillUnmount",
                    value: function() {
                        this.temporaryElement && o.default.unmountComponentAtNode(this.temporaryElement)
                    }
                }, {
                    key: "extractChildren",
                    value: function() {
                        var e = this.context.extract,
                            t = this.props.children;
                        t && e && e(t)
                    }
                }, {
                    key: "handleChildrens",
                    value: function() {
                        var e = this,
                            t = this.props.children;
                        if (!this.context.extract && t) {
                            var r = i.default.createElement("div", {
                                className: "react-head-temp"
                            }, t);
                            o.default.render(r, this.temporaryElement, (function() {
                                var t = e.temporaryElement.innerHTML;
                                if (e.lastChildStr !== t) {
                                    e.lastChildStr = t;
                                    var r = e.temporaryElement.querySelector(".react-head-temp");
                                    if (null !== r) {
                                        var n = Array.prototype.slice.call(r.children),
                                            i = document.head,
                                            o = i.innerHTML;
                                        (n = (n = n.filter((function(e) {
                                            return -1 === o.indexOf(e.outerHTML)
                                        }))).map((function(e) {
                                            return e.cloneNode(!0)
                                        }))).forEach((function(e) {
                                            var t = e.tagName.toLowerCase();
                                            if ("title" === t) {
                                                var r = (0, c.getDuplicateTitle)();
                                                r && (0, c.removeChild)(i, r)
                                            } else if (e.id) {
                                                var n = (0, c.getDuplicateElementById)(e);
                                                n && (0, c.removeChild)(i, n)
                                            } else if ("meta" === t) {
                                                var o = (0, c.getDuplicateMeta)(e);
                                                o && (0, c.removeChild)(i, o)
                                            } else if ("link" === t && "canonical" === e.rel) {
                                                var l = (0, c.getDuplicateCanonical)(e);
                                                l && (0, c.removeChild)(i, l)
                                            }
                                        })), (0, c.appendChild)(document.head, n)
                                    }
                                }
                            }))
                        }
                    }
                }, {
                    key: "render",
                    value: function() {
                        return this.extractChildren(), null
                    }
                }]) && d(r.prototype, n), l && d(r, l), t
            }(i.Component);
            ! function(e, t, r) {
                t in e ? Object.defineProperty(e, t, {
                    value: r,
                    enumerable: !0,
                    configurable: !0,
                    writable: !0
                }) : e[t] = r
            }(p, "contextType", l.MetaContext);
            var h = p;
            t.default = h, e.exports = t.default
        },
        338: function(e, t, r) {
            "use strict";
            Object.defineProperty(t, "__esModule", {
                value: !0
            }), Object.defineProperty(t, "MetaTagsContext", {
                enumerable: !0,
                get: function() {
                    return n.default
                }
            }), Object.defineProperty(t, "MetaTags", {
                enumerable: !0,
                get: function() {
                    return i.default
                }
            }), Object.defineProperty(t, "ReactTitle", {
                enumerable: !0,
                get: function() {
                    return o.default
                }
            }), t.default = void 0;
            var n = c(r(336)),
                i = c(r(337)),
                o = c(r(342));

            function c(e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            }
            var l = i.default;
            t.default = l
        },
        341: function(e, t, r) {
            "use strict";
            Object.defineProperty(t, "__esModule", {
                value: !0
            }), t.filterAndArrangeTags = function(e) {
                var t = null,
                    r = null,
                    n = [],
                    c = [];
                return e.forEach((function(e) {
                    var i = e.type,
                        o = e.props;
                    "title" === i ? t = e : "link" === i && "canonical" === o.rel ? r = e : "meta" === i ? n.push(e) : c.push(e)
                })), [t].concat(function(e) {
                    return function(e) {
                        if (Array.isArray(e)) {
                            for (var t = 0, r = new Array(e.length); t < e.length; t++) r[t] = e[t];
                            return r
                        }
                    }(e) || function(e) {
                        if (Symbol.iterator in Object(e) || "[object Arguments]" === Object.prototype.toString.call(e)) return Array.from(e)
                    }(e) || function() {
                        throw new TypeError("Invalid attempt to spread non-iterable instance")
                    }()
                }(function(e) {
                    var t = {};
                    o.forEach((function(e) {
                        t[e] = []
                    }));
                    for (var r = [], n = function(n) {
                            var c = e[n],
                                l = c.props.id;
                            (l ? !t.id[l] : 0 === i.filter((function(e) {
                                var r = c.props[e],
                                    n = t[e][r];
                                return n && !n.props.id
                            })).length) && (r.unshift(c), o.forEach((function(e) {
                                var r = c.props[e];
                                r && (t[e][r] = c)
                            })))
                        }, c = e.length - 1; c >= 0; c--) n(c);
                    return r
                }(n)), [r], c)
            }, t.getDuplicateTitle = function() {
                return document.head.querySelectorAll("title")
            }, t.getDuplicateCanonical = function() {
                return document.head.querySelectorAll('link[rel="canonical"]')
            }, t.getDuplicateElementById = function(e) {
                var t = e.id;
                return t && document.head.querySelector("#".concat(t))
            }, t.getDuplicateMeta = function(e) {
                var t = document.head;
                return n.reduce((function(r, n) {
                    var i, o = e.getAttribute(n);
                    return o ? r.concat((i = t.querySelectorAll("[".concat(n, ' = "').concat(o, '"]')), (i = Array.prototype.slice.call(i || [])).filter((function(e) {
                        return !e.id
                    })))) : r
                }), [])
            }, t.appendChild = function(e, t) {
                void 0 === t.length && (t = [t]);
                for (var r = document.createDocumentFragment(), n = 0, i = t.length; n < i; n++) r.appendChild(t[n]);
                e.appendChild(r)
            }, t.removeChild = function(e, t) {
                void 0 === t.length && (t = [t]);
                for (var r = 0, n = t.length; r < n; r++) e.removeChild(t[r])
            };
            var n = ["property", "name", "itemprop"],
                i = n.concat(["itemProp"]),
                o = i.concat(["id"])
        },
        342: function(e, t, r) {
            "use strict";
            Object.defineProperty(t, "__esModule", {
                value: !0
            }), t.default = void 0;
            var n, i = function(e) {
                    if (e && e.__esModule) return e;
                    var t = {};
                    if (null != e)
                        for (var r in e)
                            if (Object.prototype.hasOwnProperty.call(e, r)) {
                                var n = Object.defineProperty && Object.getOwnPropertyDescriptor ? Object.getOwnPropertyDescriptor(e, r) : {};
                                n.get || n.set ? Object.defineProperty(t, r, n) : t[r] = e[r]
                            }
                    return t.default = e, t
                }(r(1)),
                o = (n = r(337)) && n.__esModule ? n : {
                    default: n
                };

            function c(e) {
                return c = "function" === typeof Symbol && "symbol" === typeof Symbol.iterator ? function(e) {
                    return typeof e
                } : function(e) {
                    return e && "function" === typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
                }, c(e)
            }

            function l(e, t) {
                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
            }

            function a(e, t) {
                for (var r = 0; r < t.length; r++) {
                    var n = t[r];
                    n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
                }
            }

            function s(e, t) {
                return !t || "object" !== c(t) && "function" !== typeof t ? function(e) {
                    if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                    return e
                }(e) : t
            }

            function d(e) {
                return d = Object.setPrototypeOf ? Object.getPrototypeOf : function(e) {
                    return e.__proto__ || Object.getPrototypeOf(e)
                }, d(e)
            }

            function u(e, t) {
                return u = Object.setPrototypeOf || function(e, t) {
                    return e.__proto__ = t, e
                }, u(e, t)
            }
            var b = function(e) {
                    function t() {
                        return l(this, t), s(this, d(t).apply(this, arguments))
                    }
                    var r, n, c;
                    return function(e, t) {
                        if ("function" !== typeof t && null !== t) throw new TypeError("Super expression must either be null or a function");
                        e.prototype = Object.create(t && t.prototype, {
                            constructor: {
                                value: e,
                                writable: !0,
                                configurable: !0
                            }
                        }), t && u(e, t)
                    }(t, e), r = t, (n = [{
                        key: "render",
                        value: function() {
                            return i.default.createElement(o.default, null, i.default.createElement("title", null, this.props.title))
                        }
                    }]) && a(r.prototype, n), c && a(r, c), t
                }(i.Component),
                j = b;
            t.default = j, e.exports = t.default
        },
        807: function(e, t, r) {
            "use strict";
            r.r(t), r.d(t, "default", (function() {
                return O
            }));
            var n = r(1),
                i = r.n(n),
                o = r(37),
                c = r(10),
                l = r(6),
                a = (r(95), r(335), r(334), r(23), r(9)),
                s = (r(96), r(338)),
                d = r.n(s),
                u = r(25),
                b = r.n(u),
                j = r(98),
                p = r(99),
                h = r(38),
                m = r(55),
                f = r(0);
            const v = "Get flat \u20b915,000 off* + Additional benefits worth up to \u20b925,700* on RV400 BRZ";

            function O(e) {
                const {
                    search: t
                } = Object(l.f)(), [r, s] = Object(n.useState)(v), [u, O] = Object(n.useState)(""), [g, x] = Object(n.useState)([]), [y, N] = Object(n.useState)(!0), [w, k] = Object(n.useState)("RV1"), _ = Object(o.c)((e => e.state_city_hub_upgrade)), S = localStorage.getItem("state_city_hub"), R = S ? JSON.parse(S) : null === _ || void 0 === _ ? void 0 : _.state_city_hub_upgrade, C = null === R || void 0 === R ? void 0 : R.state, P = null === R || void 0 === R ? void 0 : R.city, M = null === R || void 0 === R ? void 0 : R.hub, [E, V] = Object(n.useState)(""), B = localStorage.getItem("userInfo"), T = JSON.parse(B), A = Object(n.useRef)(!1), [D, I] = Object(n.useState)(null !== T && void 0 !== T && T.isSeller ? "Y" : "N"), [L, Z] = Object(n.useState)(""), H = Object(l.g)(), [z, q] = Object(n.useState)(D ? "" : null !== T && void 0 !== T && T.name ? T.name : ""), [W, Y] = Object(n.useState)(null !== T && void 0 !== T && T.mobile ? T.mobile : ""), [F, J] = Object(n.useState)(null !== T && void 0 !== T && T.email ? T.email : ""), [K, U] = Object(n.useState)(""), [$, G] = Object(n.useState)(""), [Q, X] = i.a.useState(null !== T && void 0 !== T && T.state ? T.state : ""), [ee, te] = i.a.useState(null !== T && void 0 !== T && T.city ? T.city : ""), [re, ne] = i.a.useState(null !== T && void 0 !== T && T.area ? T.area : ""), [ie, oe] = Object(n.useState)([]), [ce, le] = Object(n.useState)([]), [ae, se] = Object(n.useState)(""), [de, ue] = Object(n.useState)(!1), [be, je] = Object(n.useState)(!1), [pe, he] = Object(n.useState)(!0), me = null === C || void 0 === C ? void 0 : C.filter((e => 1 == e.status)), fe = null === P || void 0 === P ? void 0 : P.filter((e => e.state_id == Q && 1 == e.status)), ve = null === M || void 0 === M ? void 0 : M.filter((e => e.city_id == ee)), Oe = null === ve || void 0 === ve ? void 0 : ve.filter((e => e.hub_id == re)), ge = Object(o.c)((e => e.productDetails)), {
                    loading: xe,
                    product: ye
                } = ge, [Ne, we] = Object(n.useState)(!1), ke = null !== ye && void 0 !== ye && ye[w] ? [...null === ye || void 0 === ye ? void 0 : ye[w]].reverse() : [];
                let [_e, Se] = Object(n.useState)({});
                Object(n.useEffect)((() => {
                    b.a.event.push("Page View", {
                        "Page Name": "Test Ride",
                        "Page Url": window.location.href
                    });
                    Re(Object(m.e)(""))
                }), []), Object(n.useEffect)((async () => {
                    const {
                        data: e
                    } = await c.a.get(`${a.g}/api/v1/customer/dropdown`);
                    x(e.message)
                }), []), Object(n.useEffect)((() => {
                    var e, t;
                    console.log("Window is", window.location.href.split("=")[1]), null !== (e = window.location.href.split("?")) && void 0 !== e && null !== (t = e[1]) && void 0 !== t && t.includes("model=RV400BRZ") && k("RV400BRZ"), localStorage.getItem("state_city_hub") || (Re(Object(m.h)()), Re(Object(m.j)()), Re(Object(m.i)()))
                }), []), Object(n.useEffect)((() => {
                    var e, t;
                    V(null === Oe || void 0 === Oe || null === (e = Oe[0]) || void 0 === e ? void 0 : e.dealer_pincode), console.log(null === Oe || void 0 === Oe || null === (t = Oe[0]) || void 0 === t ? void 0 : t.dealer_pincode)
                }), [Oe]), Object(n.useEffect)((() => {
                    var e;
                    Se(null !== ye && void 0 !== ye && null !== (e = ye[w]) && void 0 !== e && e.length ? { ...null === ye || void 0 === ye ? void 0 : ye[w][(null === ye || void 0 === ye ? void 0 : ye[w].length) - 1]
                    } : {})
                }), [ye]);
                const Re = Object(o.b)();
                return Object(f.jsxs)(f.Fragment, {
                    children: [xe || Ne ? Object(f.jsx)(h.a, {}) : null, Object(f.jsxs)(d.a, {
                        id: "testride",
                        children: [Object(f.jsx)("title", {
                            children: "Book Your Test Ride Now - Revolt Motors"
                        }), Object(f.jsx)("meta", {
                            name: "description",
                            content: "Feel the future of biking! Book a quick and easy electric bike test ride with us. Experience the fun, speed, and eco-friendly ride. Join us for a ride like no other!          "
                        }), Object(f.jsx)("meta", {
                            property: "og:title",
                            content: "Book Your Test Ride Now - Revolt Motors"
                        }), Object(f.jsx)("meta", {
                            property: "og:description",
                            content: "Feel the future of biking! Book a quick and easy electric bike test ride with us. Experience the fun, speed, and eco-friendly ride. Join us for a ride like no other! "
                        }), Object(f.jsx)("meta", {
                            name: "twitter:site",
                            content: "@RevoltMotorsIN"
                        }), Object(f.jsx)("meta", {
                            name: "twitter:image",
                            content: "https://www.revoltmotors.com/images/revolt-motors-logo.svg"
                        }), Object(f.jsx)("link", {
                            rel: "canonical",
                            href: "https://www.revoltmotors.com/test-ride"
                        })]
                    }), Object(f.jsx)("section", {
                        className: "light-grey bookNow newBookNow",
                        children: Object(f.jsx)("div", {
                            className: "container-fluid",
                            children: Object(f.jsxs)("div", {
                                className: "row align-items-center",
                                children: [Object(f.jsxs)("div", {
                                    className: "col-xs-12 col-sm-8 rv-pr",
                                    children: [Object(f.jsx)("div", {
                                        className: "placeholder-text " + ("RV400BRZ" === w ? "brz" : ""),
                                        children: w
                                    }), Object(f.jsxs)("div", {
                                        className: "row",
                                        children: [Object(f.jsx)("div", {
                                            className: "col-12 col-sm-9 order-sm-2 order-md-2 rv-pr",
                                            children: Object(f.jsxs)("div", {
                                                className: "carouselView test-ride",
                                                children: [Object.keys(_e).length ? Object(f.jsx)("img", {
                                                    loading: "lazy",
                                                    src: "/images/" + _e.image,
                                                    className: "rounded mx-auto d-block"
                                                }) : "", Object(f.jsxs)("div", {
                                                    className: "bikeColorList text-center p-3",
                                                    children: [Object(f.jsx)("div", {
                                                        style: {
                                                            marginBottom: "10px",
                                                            fontSize: "14px"
                                                        },
                                                        children: _e.color
                                                    }), Object(f.jsx)("ul", {
                                                        children: null === ke || void 0 === ke ? void 0 : ke.map(((e, t) => Object(f.jsx)("li", {
                                                            onClick: () => {
                                                                Se({ ...e
                                                                })
                                                            },
                                                            children: Object(f.jsxs)("div", {
                                                                className: "bikeColorBox " + (e.color === _e.color ? "active" : ""),
                                                                children: [" ", Object(f.jsx)("span", {
                                                                    style: {
                                                                        background: e.hex_color_code,
                                                                        height: "25px",
                                                                        width: "25px"
                                                                    }
                                                                })]
                                                            })
                                                        })))
                                                    })]
                                                })]
                                            })
                                        }), Object(f.jsxs)("div", {
                                            className: "col-12 col-sm-3 order-sm-1 order-md-1",
                                            children: ["RV1" === w ? Object(f.jsx)("div", {
                                                className: "bike-card-box",
                                                children: Object(f.jsx)("div", {
                                                    className: "bike-model-card",
                                                    style: {
                                                        backgroundColor: "transparent"
                                                    },
                                                    children: Object(f.jsxs)("div", {
                                                        className: "bike-model-body",
                                                        style: {
                                                            backgroundColor: "transparent",
                                                            border: "1px solid #707070",
                                                            borderRadius: "10px"
                                                        },
                                                        children: [Object(f.jsxs)("div", {
                                                            className: "bike-box",
                                                            children: [Object(f.jsx)("img", {
                                                                alt: "Revolt Battery",
                                                                src: "/images/calenderhours.svg"
                                                            }), Object(f.jsx)("p", {
                                                                children: "0-80 %"
                                                            }), Object(f.jsxs)("h5", {
                                                                children: ["IN ", "2 Hrs 15 Mins"]
                                                            })]
                                                        }), Object(f.jsxs)("div", {
                                                            className: "bike-box",
                                                            children: [Object(f.jsx)("img", {
                                                                alt: "Electric bike speed",
                                                                src: "/images/speed.svg"
                                                            }), Object(f.jsxs)("p", {
                                                                children: ["70 KM/H ", Object(f.jsx)("span", {
                                                                    children: "*"
                                                                })]
                                                            }), Object(f.jsx)("h5", {
                                                                children: "TOP SPEED"
                                                            })]
                                                        }), Object(f.jsxs)("div", {
                                                            className: "bike-box",
                                                            children: [Object(f.jsx)("img", {
                                                                alt: "Motorcycle Battery Lifespan",
                                                                src: "/images/battery.svg"
                                                            }), Object(f.jsxs)("p", {
                                                                children: ["100 KMS ", Object(f.jsx)("span", {
                                                                    children: "*"
                                                                })]
                                                            }), Object(f.jsxs)("h5", {
                                                                children: ["Per Charge ", Object(f.jsx)("br", {}), "Eco Mode"]
                                                            })]
                                                        })]
                                                    })
                                                })
                                            }) : null, "RV1+" === w && Object(f.jsx)("div", {
                                                className: "bike-card-box",
                                                children: Object(f.jsx)("div", {
                                                    className: "bike-model-card",
                                                    style: {
                                                        backgroundColor: "transparent"
                                                    },
                                                    children: Object(f.jsxs)("div", {
                                                        className: "bike-model-body",
                                                        style: {
                                                            backgroundColor: "transparent",
                                                            border: "1px solid #707070",
                                                            borderRadius: "10px"
                                                        },
                                                        children: [Object(f.jsxs)("div", {
                                                            className: "bike-box",
                                                            children: [Object(f.jsx)("img", {
                                                                alt: "Revolt Battery",
                                                                src: "/images/calenderhours.svg"
                                                            }), Object(f.jsx)("p", {
                                                                children: "0-80 %"
                                                            }), Object(f.jsxs)("h5", {
                                                                children: ["IN ", "3 Hrs 30 Mins"]
                                                            })]
                                                        }), Object(f.jsxs)("div", {
                                                            className: "bike-box",
                                                            children: [" ", Object(f.jsx)("img", {
                                                                alt: "Motorcycle Battery Lifespan",
                                                                src: "/images/fast-charging.png"
                                                            }), Object(f.jsxs)("p", {
                                                                className: "fastCharging",
                                                                children: [Object(f.jsx)("span", {
                                                                    className: "charge",
                                                                    children: "Fast Charging "
                                                                }), Object(f.jsx)("span", {
                                                                    children: "0-80%"
                                                                })]
                                                            }), Object(f.jsx)("h5", {
                                                                children: " In 1 Hrs 20 Mins"
                                                            })]
                                                        }), Object(f.jsxs)("div", {
                                                            className: "bike-box",
                                                            children: [Object(f.jsx)("img", {
                                                                alt: "Electric bike speed",
                                                                src: "/images/speed.svg"
                                                            }), Object(f.jsxs)("p", {
                                                                children: ["70 KM/H ", Object(f.jsx)("span", {
                                                                    children: "*"
                                                                })]
                                                            }), Object(f.jsx)("h5", {
                                                                children: "TOP SPEED"
                                                            })]
                                                        }), Object(f.jsxs)("div", {
                                                            className: "bike-box",
                                                            children: [Object(f.jsx)("img", {
                                                                alt: "Motorcycle Battery Lifespan",
                                                                src: "/images/battery.svg"
                                                            }), Object(f.jsxs)("p", {
                                                                children: ["160 KMS ", Object(f.jsx)("span", {
                                                                    children: "*"
                                                                })]
                                                            }), Object(f.jsxs)("h5", {
                                                                children: ["Per Charge", Object(f.jsx)("br", {}), "Eco Mode"]
                                                            })]
                                                        })]
                                                    })
                                                })
                                            }), "RV400" === w || "RV400BRZ" === w ? Object(f.jsx)("div", {
                                                className: "bike-card-box",
                                                children: Object(f.jsx)("div", {
                                                    className: "bike-model-card",
                                                    style: {
                                                        backgroundColor: "transparent"
                                                    },
                                                    children: Object(f.jsxs)("div", {
                                                        className: "bike-model-body",
                                                        style: {
                                                            backgroundColor: "transparent",
                                                            border: "1px solid #707070",
                                                            borderRadius: "10px"
                                                        },
                                                        children: [Object(f.jsxs)("div", {
                                                            className: "bike-box",
                                                            children: [Object(f.jsx)("img", {
                                                                alt: "Revolt Battery",
                                                                src: "/images/calenderhours.svg"
                                                            }), Object(f.jsx)("p", {
                                                                children: "0-80%"
                                                            }), Object(f.jsxs)("h5", {
                                                                children: ["IN ", "3 Hrs 30 Mins"]
                                                            })]
                                                        }), Object(f.jsxs)("div", {
                                                            className: "bike-box",
                                                            children: [" ", Object(f.jsx)("img", {
                                                                alt: "Motorcycle Battery Lifespan",
                                                                src: "/images/fast-charging.png"
                                                            }), Object(f.jsxs)("p", {
                                                                className: "fastCharging",
                                                                children: [Object(f.jsx)("span", {
                                                                    className: "charge",
                                                                    children: "Fast Charging "
                                                                }), Object(f.jsx)("span", {
                                                                    children: "0-80%"
                                                                })]
                                                            }), Object(f.jsx)("h5", {
                                                                children: " In 1 Hrs 20 Mins"
                                                            })]
                                                        }), Object(f.jsxs)("div", {
                                                            className: "bike-box",
                                                            children: [Object(f.jsx)("img", {
                                                                alt: "Electric bike speed",
                                                                src: "/images/speed.svg"
                                                            }), Object(f.jsxs)("p", {
                                                                children: ["85 KM/H ", Object(f.jsx)("span", {
                                                                    children: "*"
                                                                })]
                                                            }), Object(f.jsx)("h5", {
                                                                children: "TOP SPEED"
                                                            })]
                                                        }), Object(f.jsxs)("div", {
                                                            className: "bike-box",
                                                            children: [Object(f.jsx)("img", {
                                                                alt: "Motorcycle Battery Lifespan",
                                                                src: "/images/battery.svg"
                                                            }), Object(f.jsxs)("p", {
                                                                children: ["150 KMS ", Object(f.jsx)("span", {
                                                                    children: "*"
                                                                })]
                                                            }), Object(f.jsx)("h5", {
                                                                children: "Per Charge"
                                                            })]
                                                        }), "RV400" === w && Object(f.jsxs)("div", {
                                                            className: "bike-box",
                                                            children: [Object(f.jsx)("img", {
                                                                alt: "Revolt Mobile App",
                                                                style: {
                                                                    maxWidth: "18px"
                                                                },
                                                                src: "/images/phone.svg"
                                                            }), Object(f.jsx)("p", {
                                                                style: {
                                                                    textTransform: "capitalize"
                                                                },
                                                                children: "mobile app"
                                                            }), Object(f.jsxs)("h5", {
                                                                children: ["WITH SMART ", Object(f.jsx)("br", {}), " FEATURES"]
                                                            })]
                                                        })]
                                                    })
                                                })
                                            }) : null]
                                        })]
                                    })]
                                }), Object(f.jsx)("div", {
                                    className: "col-xs-12 col-sm-4 testRideView formView",
                                    children: Object(f.jsx)("form", {
                                        id: "msformNew",
                                        className: "form",
                                        onSubmit: async e => {
                                            e.preventDefault();
                                            var r = document.getElementById("message");
                                            try {
                                                r.innerHTML = "", N(!1), A.current || (A.current = !0, Re(async function(e, r, n, i, o, l, s, d, h, m, f, v, O) {
                                                    const {
                                                        data: g
                                                    } = await c.a.post(`${a.g}/api/v1/customer/testRide`, {
                                                        name: e,
                                                        mobile: r,
                                                        email: n,
                                                        otp: v,
                                                        product_type: i,
                                                        model: i,
                                                        state: o,
                                                        city: l,
                                                        hub: s,
                                                        pincode: d,
                                                        testdate: h,
                                                        timeslot: m,
                                                        whatsapp: f,
                                                        search: t,
                                                        isSeller: "Y" === D,
                                                        source: O,
                                                        add_comments: u
                                                    });
                                                    le(g);
                                                    var x, y = document.getElementById("message");
                                                    0 == (null === g || void 0 === g ? void 0 : g.status) ? (y.style.color = "#ed1c24", y.innerHTML = g.message) : (b.a.onUserLogin.push({
                                                        Site: {
                                                            Name: e,
                                                            Identity: r,
                                                            Email: n,
                                                            Phone: "+91" + r,
                                                            "MSG-whatsapp": f
                                                        }
                                                    }), b.a.event.push("Test Ride Booked", {
                                                        Name: e,
                                                        Mobile: r,
                                                        Email: n,
                                                        "Preferred Model": i,
                                                        City: null === (x = fe.filter(((e, t) => e.city_id == ee))) || void 0 === x ? void 0 : x[0].city_name,
                                                        State: me.filter(((e, t) => e.state_id == Q))[0].state_name,
                                                        "Dealer Hub": ve.filter(((e, t) => e.hub_id == re))[0].hub_name,
                                                        "Test Ride Date": new Date(K),
                                                        "Time Slot": $,
                                                        IsOptInWhatsApp: f,
                                                        "Device Name": Object(j.a)(),
                                                        "Browser Type": Object(p.a)(),
                                                        Date: new Date
                                                    }), H(`/thankyouride/${g.ride_id}`))
                                                }(z, W, F, w, Q, ee, re, E, K, $, pe, ae, L)))
                                            } catch (n) {}
                                        },
                                        children: Object(f.jsxs)("div", {
                                            className: "form-card test-ride-card",
                                            children: [Object(f.jsx)("div", {
                                                className: "row",
                                                children: Object(f.jsx)("div", {
                                                    className: "col-sm-12",
                                                    children: Object(f.jsxs)("div", {
                                                        children: [Object.keys(_e).length ? Object(f.jsx)("span", {
                                                            children: "\xa0"
                                                        }) : "", Object(f.jsxs)("div", {
                                                            className: "rvModel-choose",
                                                            children: [Object(f.jsx)("h1", {
                                                                children: "Book your test ride"
                                                            }), Object(f.jsx)("h4", {
                                                                children: "Choose your model"
                                                            }), Object(f.jsxs)("div", {
                                                                className: "rvModel-chooseBlock",
                                                                children: [Object(f.jsx)("div", {
                                                                    id: "rv1",
                                                                    className: "model-item " + ("RV1" === w ? "selected-bg" : ""),
                                                                    onClick: () => {
                                                                        var e, t;
                                                                        k("RV1"), Se(null !== ye && void 0 !== ye && null !== (e = ye.RV1) && void 0 !== e && e.length ? { ...null === ye || void 0 === ye || null === (t = ye.RV1) || void 0 === t ? void 0 : t[(null === ye || void 0 === ye ? void 0 : ye.RV1.length) - 1]
                                                                        } : {})
                                                                    },
                                                                    children: "RV1"
                                                                }), Object(f.jsx)("div", {
                                                                    id: "rv+",
                                                                    className: "model-item " + ("RV1+" === w ? "selected-bg" : ""),
                                                                    onClick: () => {
                                                                        var e, t;
                                                                        k("RV1+"), Se(null !== ye && void 0 !== ye && null !== (e = ye["RV1+"]) && void 0 !== e && e.length ? { ...null === ye || void 0 === ye || null === (t = ye["RV1+"]) || void 0 === t ? void 0 : t[(null === ye || void 0 === ye ? void 0 : ye["RV1+"].length) - 1]
                                                                        } : {})
                                                                    },
                                                                    children: "RV1+"
                                                                }), Object(f.jsx)("div", {
                                                                    id: "rv400brz",
                                                                    className: "model-item " + ("RV400BRZ" === w ? "selected-bg" : ""),
                                                                    onClick: () => {
                                                                        var e, t;
                                                                        k("RV400BRZ"), Se(null !== ye && void 0 !== ye && null !== (e = ye.RV400BRZ) && void 0 !== e && e.length ? { ...null === ye || void 0 === ye || null === (t = ye.RV400BRZ) || void 0 === t ? void 0 : t[(null === ye || void 0 === ye ? void 0 : ye.RV400BRZ.length) - 1]
                                                                        } : {}), s(v)
                                                                    },
                                                                    children: "RV400 BRZ"
                                                                }), Object(f.jsx)("div", {
                                                                    id: "rv400",
                                                                    className: "model-item " + ("RV400" === w ? "selected-bg" : ""),
                                                                    onClick: () => {
                                                                        var e, t;
                                                                        k("RV400"), Se(null !== ye && void 0 !== ye && null !== (e = ye.RV400) && void 0 !== e && e.length ? { ...null === ye || void 0 === ye || null === (t = ye.RV400) || void 0 === t ? void 0 : t[(null === ye || void 0 === ye ? void 0 : ye.RV400.length) - 1]
                                                                        } : {}), s("Get flat \u20b910,000 off* + Additional benefits worth up to \u20b923,200* on RV400")
                                                                    },
                                                                    children: "RV400"
                                                                })]
                                                            })]
                                                        })]
                                                    })
                                                })
                                            }), Object(f.jsx)("div", {
                                                className: "form-default",
                                                children: Object(f.jsxs)("div", {
                                                    className: "row",
                                                    children: [Object(f.jsxs)("div", {
                                                        className: "form-group col-md-12 name-group",
                                                        children: [Object(f.jsxs)("div", {
                                                            className: "palceholder",
                                                            children: [Object(f.jsx)("label", {
                                                                children: "User Name / Mobile Number"
                                                            }), Object(f.jsx)("span", {
                                                                className: "star",
                                                                children: "*"
                                                            })]
                                                        }), Object(f.jsx)("input", {
                                                            type: "text",
                                                            className: "form-control inputfield",
                                                            id: "name",
                                                            placeholder: "Name",
                                                            required: !0,
                                                            value: z,
                                                            maxLength: 40,
                                                            onChange: e => q(e.target.value),
                                                            onInput: e => e.target.value = e.target.value.replace(/([^a-z 0-9]+)/gi, "")
                                                        })]
                                                    }), Object(f.jsxs)("div", {
                                                        className: "form-group col-md-12 name-group",
                                                        children: [Object(f.jsxs)("div", {
                                                            className: "palceholder",
                                                            children: [Object(f.jsx)("label", {
                                                                children: "Mobile "
                                                            }), Object(f.jsx)("span", {
                                                                className: "star",
                                                                children: "*"
                                                            })]
                                                        }), Object(f.jsx)("input", {
                                                            type: "text",
                                                            id: "mobile",
                                                            className: "form-control inputfield",
                                                            placeholder: "Mobile",
                                                            value: W,
                                                            minLength: "10",
                                                            maxLength: "10",
                                                            pattern: "[6-9]{1,1}[0-9]{9,9}",
                                                            title: "Please enter a valid mobile number",
                                                            onInput: e => {
                                                                let t = e.target.value;
                                                                e.target.value = e.target.value.slice(0, 10), /[A-Za-z]/.test(t) && (e.target.value = W)
                                                            },
                                                            required: !0,
                                                            onChange: e => {
                                                                (!e.target.value || parseInt(e.target.value[e.target.value.length - 1]) > -1) && (console.log("Mobile", e.target.value), Y(e.target.value))
                                                            }
                                                        })]
                                                    }), Object(f.jsxs)("div", {
                                                        className: "form-group col-md-12 email-group",
                                                        children: [Object(f.jsxs)("div", {
                                                            className: "palceholder",
                                                            children: [Object(f.jsx)("label", {
                                                                children: "Email "
                                                            }), Object(f.jsx)("span", {
                                                                className: "star",
                                                                children: "*"
                                                            })]
                                                        }), Object(f.jsx)("input", {
                                                            type: "email",
                                                            id: "email",
                                                            pattern: "^[A-Za-z]{1,1}[A-Za-z0-9]{0,}(?!.*\\.\\.)[_.A-Za-z0-9]{1,}[a-zA-Z0-9]{1,1}@[A-Za-z]{1,}\\.([a-zA-Z]{2,})(\\.([a-zA-Z]{2,})){0,1}$",
                                                            title: "Please enter a valid email address",
                                                            className: "form-control inputfield",
                                                            placeholder: "Email",
                                                            required: !0,
                                                            value: F,
                                                            maxLength: 50,
                                                            onChange: e => J(e.target.value),
                                                            onInput: e => {
                                                                let t = e.target.value,
                                                                    r = t.length;
                                                                "\\" == t[r - 1] && (e.target.value = t.slice(0, r - 1))
                                                            }
                                                        })]
                                                    }), Object(f.jsx)("div", {
                                                        className: "form-group col-md-6",
                                                        children: Object(f.jsxs)("select", {
                                                            id: "state",
                                                            className: "form-control",
                                                            placeholder: "Select State",
                                                            required: !0,
                                                            value: Q,
                                                            onChange: e => (e => {
                                                                X(e), te(""), ne(""), U(""), G("")
                                                            })(e.target.value),
                                                            disabled: "Y" == D,
                                                            children: [Object(f.jsx)("option", {
                                                                children: "Choose State"
                                                            }), null === me || void 0 === me ? void 0 : me.map(((e, t) => Object(f.jsx)("option", {
                                                                value: e.state_id,
                                                                children: e.state_name
                                                            }, t)))]
                                                        })
                                                    }), Object(f.jsx)("div", {
                                                        className: "form-group col-md-6",
                                                        children: Object(f.jsxs)("select", {
                                                            id: "city",
                                                            className: "form-control",
                                                            placeholder: "City",
                                                            value: ee,
                                                            onChange: e => (e => {
                                                                te(e), ne(""), U(""), G("")
                                                            })(e.target.value),
                                                            disabled: "Y" == D,
                                                            required: !0,
                                                            children: [Object(f.jsx)("option", {
                                                                children: "Choose City"
                                                            }), null === fe || void 0 === fe ? void 0 : fe.map(((e, t) => Object(f.jsx)("option", {
                                                                value: e.city_id,
                                                                children: e.city_name
                                                            }, t)))]
                                                        })
                                                    }), Object(f.jsx)("div", {
                                                        className: "form-group col-md-12",
                                                        children: Object(f.jsxs)("select", {
                                                            id: "area",
                                                            placeholder: "Dealer Hub",
                                                            className: "form-control",
                                                            required: !0,
                                                            value: re,
                                                            onChange: e => (e => {
                                                                ne(e), U(""), G("")
                                                            })(e.target.value),
                                                            disabled: "Y" == D,
                                                            children: [Object(f.jsx)("option", {
                                                                value: "",
                                                                children: "Dealer Hub "
                                                            }), null === ve || void 0 === ve ? void 0 : ve.map(((e, t) => Object(f.jsx)("option", {
                                                                value: e.hub_id,
                                                                children: e.hub_name
                                                            }, t)))]
                                                        })
                                                    }), Object(f.jsx)("div", {
                                                        className: "form-group col-md-12",
                                                        children: Object(f.jsxs)("select", {
                                                            id: "area",
                                                            placeholder: "Where did you hear about Revolt?",
                                                            className: "form-control",
                                                            required: !0,
                                                            value: L,
                                                            onChange: e => Z(e.target.value),
                                                            children: [Object(f.jsx)("option", {
                                                                value: "",
                                                                children: "Where did you hear about Revolt?"
                                                            }), null === g || void 0 === g ? void 0 : g.map(((e, t) => Object(f.jsx)("option", {
                                                                value: e.id,
                                                                children: e.source
                                                            }, t)))]
                                                        })
                                                    }), "Y" != D || 5 != L && 10 != L ? null : Object(f.jsxs)("div", {
                                                        children: [Object(f.jsxs)("div", {
                                                            className: "palceholder",
                                                            children: [Object(f.jsx)("label", {
                                                                htmlFor: "name",
                                                                children: "Comments"
                                                            }), Object(f.jsx)("span", {
                                                                className: "star",
                                                                children: "*"
                                                            })]
                                                        }), Object(f.jsx)("textarea", {
                                                            rows: 2,
                                                            style: {
                                                                resize: "none"
                                                            },
                                                            className: "form-control inputfield",
                                                            id: "name",
                                                            placeholder: "Please provide more details",
                                                            name: "name",
                                                            maxlength: "80",
                                                            required: !0,
                                                            value: u,
                                                            onChange: e => O(e.target.value),
                                                            onInput: e => e.target.value = e.target.value.replace(/([^a-z ]+)/gi, "")
                                                        })]
                                                    }), Object(f.jsx)("div", {
                                                        className: "col-md-12 whatsaapform ",
                                                        children: Object(f.jsxs)("p", {
                                                            children: ["Get", " ", Object(f.jsxs)("b", {
                                                                children: [" ", Object(f.jsx)("img", {
                                                                    src: "/images/whtsapp_icon.jpg"
                                                                }), "WhatsApp"]
                                                            }), " ", "reminders & updates on everything that's relevant"]
                                                        })
                                                    }), Object(f.jsx)("div", {
                                                        className: "form-group col-md-12 checkboxihave",
                                                        children: Object(f.jsxs)("label", {
                                                            children: [Object(f.jsx)("input", {
                                                                type: "checkbox",
                                                                id: "check",
                                                                name: "whatsapp",
                                                                className: "input",
                                                                checked: pe,
                                                                onChange: e => he(e.target.checked)
                                                            }), " ", "Yes, opt me in"]
                                                        })
                                                    }), Object(f.jsxs)("div", {
                                                        className: "form-group",
                                                        children: [Object(f.jsx)("span", {
                                                            id: "message"
                                                        }), Object(f.jsx)("div", {
                                                            className: "testride_submit_wrapper ",
                                                            children: Object(f.jsx)("div", {
                                                                className: "test-ride-box",
                                                                children: y && Object(f.jsx)("input", {
                                                                    style: {
                                                                        width: "100%"
                                                                    },
                                                                    type: "submit",
                                                                    disabled: de,
                                                                    name: "next",
                                                                    className: "next action-button ",
                                                                    value: "Submit",
                                                                    id: "sumbtn"
                                                                })
                                                            })
                                                        }), Object(f.jsx)("div", {
                                                            className: "text-start",
                                                            children: Object(f.jsx)("p", {
                                                                className: "mb-0 terms",
                                                                children: "*By clicking \u201cSubmit\u201d, I give my consent to Revolt Intellicorp Private Limited and its authorised service providers to hold my personal data and communicate with me by e-mail, WhatsApp, SMS or phone call for Notify purposes."
                                                            })
                                                        })]
                                                    })]
                                                })
                                            })]
                                        })
                                    })
                                })]
                            })
                        })
                    })]
                })
            }
        }
    }
]);