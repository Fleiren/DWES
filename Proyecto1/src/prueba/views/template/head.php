<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8" />
<meta
        name="viewport"
        content="width=device-width, initial-scale=1"
        id="wixDesktopViewport"
/>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="generator" content="Wix.com Website Builder" />

<link
        rel="icon"
        sizes="192x192"
        href="https://www.wix.com/favicon.ico"
        type="image/x-icon"
/>
<link
        rel="shortcut icon"
        href="https://www.wix.com/favicon.ico"
        type="image/x-icon"
/>
<link
        rel="apple-touch-icon"
        href="https://www.wix.com/favicon.ico"
        type="image/x-icon"
/>

<!-- Safari Pinned Tab Icon -->
<!-- <link rel="mask-icon" href="https://www.wix.com/favicon.ico"> -->

<!-- Original trials -->

<!-- Segmenter Polyfill -->
<script>
    if (!window.Intl || !window.Intl.Segmenter) {
        (function () {
            var script = document.createElement("script");
            script.src =
                "https://static.parastorage.com/unpkg/@formatjs/intl-segmenter@11.7.10/polyfill.iife.js";
            document.head.appendChild(script);
        })();
    }
</script>

<!-- Legacy Polyfills -->
<script
        nomodule=""
        src="https://static.parastorage.com/unpkg/core-js-bundle@3.2.1/minified.js"
></script>
<script
        nomodule=""
        src="https://static.parastorage.com/unpkg/focus-within-polyfill@5.0.9/dist/focus-within-polyfill.js"
></script>

<!-- Performance API Polyfills -->
<script>
    (function () {
        var noop = function noop() {};
        if ("performance" in window === false) {
            window.performance = {};
        }
        window.performance.mark = performance.mark || noop;
        window.performance.measure = performance.measure || noop;
        if ("now" in window.performance === false) {
            var nowOffset = Date.now();
            if (performance.timing && performance.timing.navigationStart) {
                nowOffset = performance.timing.navigationStart;
            }
            window.performance.now = function now() {
                return Date.now() - nowOffset;
            };
        }
    })();
</script>

<!-- Globals Definitions -->
<script>
    (function () {
        var now = Date.now();
        window.initialTimestamps = {
            initialTimestamp: now,
            initialRequestTimestamp: Math.round(
                performance.timeOrigin
                    ? performance.timeOrigin
                    : now - performance.now()
            ),
        };

        window.thunderboltTag = "libs-releases-GA-local";
        window.thunderboltVersion = "1.16312.0";
    })();
</script>

<!-- Essential Viewer Model -->
<script type="application/json" id="wix-essential-viewer-model">
    {
        "fleetConfig": {
            "fleetName": "wix-thunderbolt",
            "type": "GA",
            "code": 0
        },
        "mode": {
            "qa": false,
            "enableTestApi": false,
            "debug": false,
            "ssrIndicator": false,
            "ssrOnly": false,
            "siteAssetsFallback": "enable",
            "versionIndicator": false
        },
        "componentsLibrariesTopology": [
            {
                "artifactId": "editor-elements",
                "namespace": "wixui",
                "url": "https:\/\/static.parastorage.com\/services\/editor-elements\/1.14367.0"
            },
            {
                "artifactId": "editor-elements",
                "namespace": "dsgnsys",
                "url": "https:\/\/static.parastorage.com\/services\/editor-elements\/1.14367.0"
            }
        ],
        "siteFeaturesConfigs": {
            "sessionManager": { "isRunningInDifferentSiteContext": false }
        },
        "language": { "userLanguage": "es" },
        "siteAssets": {
            "clientTopology": {
                "mediaRootUrl": "https:\/\/static.wixstatic.com",
                "staticMediaUrl": "https:\/\/static.wixstatic.com\/media",
                "moduleRepoUrl": "https:\/\/static.parastorage.com\/unpkg",
                "fileRepoUrl": "https:\/\/static.parastorage.com\/services",
                "viewerAppsUrl": "https:\/\/viewer-apps.parastorage.com",
                "siteAssetsUrl": "https:\/\/siteassets.parastorage.com",
                "pageJsonServerUrls": [
                    "https:\/\/pages.parastorage.com",
                    "https:\/\/staticorigin.wixstatic.com",
                    "https:\/\/fallback.wix.com\/wix-html-editor-pages-webapp\/page"
                ],
                "pathOfTBModulesInFileRepoForFallback": "wix-thunderbolt\/dist\/"
            }
        },
        "siteFeatures": [
            "appMonitoring",
            "assetsLoader",
            "businessLogger",
            "captcha",
            "clickHandlerRegistrar",
            "commonConfig",
            "componentsLoader",
            "componentsRegistry",
            "consentPolicy",
            "contentReflow",
            "customCss",
            "cyclicTabbing",
            "domStore",
            "embeddedInIframe",
            "environmentWixCodeSdk",
            "environment",
            "lightbox",
            "locationWixCodeSdk",
            "mpaNavigation",
            "navigationManager",
            "navigationPhases",
            "ooi",
            "pages",
            "panorama",
            "protectedPages",
            "renderer",
            "reporter",
            "routerFetch",
            "router",
            "scrollRestoration",
            "seoWixCodeSdk",
            "seo",
            "sessionManager",
            "siteMembersWixCodeSdk",
            "siteMembers",
            "siteScrollBlocker",
            "siteWixCodeSdk",
            "speculationRules",
            "ssrCache",
            "stores",
            "structureApi",
            "thunderboltInitializer",
            "tpaCommons",
            "translations",
            "usedPlatformApis",
            "warmupData",
            "windowMessageRegistrar",
            "windowWixCodeSdk",
            "wixCustomElementComponent",
            "wixEmbedsApi",
            "componentsReact",
            "platform"
        ],
        "site": {
            "externalBaseUrl": "https:\/\/www.wix.com\/templateses\/2514-accessories-sto",
            "isSEO": false
        },
        "media": {
            "staticMediaUrl": "https:\/\/static.wixstatic.com\/media",
            "mediaRootUrl": "https:\/\/static.wixstatic.com\/",
            "staticVideoUrl": "https:\/\/video.wixstatic.com\/"
        },
        "requestUrl": "https:\/\/www.wix.com\/templateses\/2514-accessories-sto",
        "rollout": {
            "siteAssetsVersionsRollout": false,
            "isDACRollout": 0,
            "isTBRollout": false
        },
        "commonConfig": {
            "brand": "wix",
            "host": "VIEWER",
            "bsi": "",
            "consentPolicy": {},
            "consentPolicyHeader": {},
            "siteRevision": "109",
            "renderingFlow": "NONE",
            "language": "es",
            "locale": "es-mx"
        },
        "interactionSampleRatio": 0.01,
        "dynamicModelUrl": "https:\/\/www.wix.com\/templateses\/2514-accessories-sto\/_api\/v2\/dynamicmodel",
        "accessTokensUrl": "https:\/\/www.wix.com\/templateses\/2514-accessories-sto\/_api\/v1\/access-tokens",
        "isExcludedFromSecurityExperiments": false,
        "experiments": { "specs.thunderbolt.hardenFetchAndXHR": true }
    }
</script>
<script>
    window.viewerModel = JSON.parse(
        document.getElementById("wix-essential-viewer-model").textContent
    );
</script>

<script>
    window.commonConfig = viewerModel.commonConfig;
</script>

<script
        data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/handleAccessTokens.inline.9b374162.bundle.min.js"
>
    (() => {
        "use strict";
        const e = (e) =>
                "string" == typeof e
                    ? decodeURIComponent(e).toLowerCase().trimStart()
                    : e,
            o = "client-session-bind",
            t = new Set(
                [
                    o,
                    "client-binding",
                    "svSession",
                    "smSession",
                    "server-session-bind",
                    "wixSession2",
                ].map((e) => e.toLowerCase())
            ),
            i = Object.getOwnPropertyDescriptor(Document.prototype, "cookie"),
            n = (e = "") =>
                `${o}=; ${e} max-age=0; path=/; expires=Thu, 01 Jan 1970 00:00:01 GMT`,
            r = (o) => {
                const i = "string" == typeof o ? o.split("=")[0].trim() : o.name,
                    n = e(i).toLowerCase();
                return t.has(n);
            },
            s = (e) => {
                let o;
                return (
                    (o = "string" == typeof e ? e.split(";").map((e) => e.trim()) : e),
                        o.filter((e) => !r(e))
                );
            },
            l = "tbReady",
            a = "security_overrideGlobals",
            {
                experiments: c,
                siteFeaturesConfigs: d,
                accessTokensUrl: g,
            } = window.viewerModel,
            b = g,
            u = {},
            m = (() => {
                const e = document.cookie
                    .split(";")
                    .map((e) => e.trim())
                    .filter((e) => e?.startsWith(o))[0]
                    ?.split("=")[1];
                return (
                    (() => {
                        const e = `domain=${location.hostname};`,
                            o = n(),
                            t = n(e);
                        i.set.call(document, o), i.set.call(document, t);
                    })(),
                        e
                );
            })();
        m && (u["client-binding"] = m);
        let h = fetch;
        addEventListener(l, function e(o) {
            const { logger: t } = o.detail;
            try {
                window.tb.init({ fetch: h, fetchHeaders: u });
            } catch (e) {
                const o = new Error("TB003");
                t.meter(`${a}_${o.message}`, {
                    paramsOverrides: { errorType: a, eventString: o.message },
                }),
                window?.viewerModel?.mode.debug && console.error(e);
            } finally {
                removeEventListener(l, e), (h = fetch);
            }
        }),
        c["specs.thunderbolt.hardenFetchAndXHR"] ||
        ((window.fetchDynamicModel = () =>
            d.sessionManager.isRunningInDifferentSiteContext
                ? Promise.resolve({})
                : fetch(b, { credentials: "same-origin", headers: u }).then(
                    function (e) {
                        if (!e.ok) throw new Error(`[${e.status}]${e.statusText}`);
                        return e.json();
                    }
                )),
            (window.dynamicModelPromise = window.fetchDynamicModel())),
            Object.defineProperty(document, "cookie", {
                get() {
                    const e = i.get.call(document);
                    return s(e).join("; ");
                },
                set(o) {
                    const n = e(o.split(";")[0]);
                    [...t].every((e) => !n?.startsWith(e.toLowerCase())) &&
                    i.set.call(document, o);
                },
                enumerable: !0,
                configurable: !1,
            }),
            (() => {
                if (!globalThis.cookieStore) return;
                const e = globalThis.cookieStore.get.bind(globalThis.cookieStore),
                    o = globalThis.cookieStore.getAll.bind(globalThis.cookieStore),
                    i = globalThis.cookieStore.set.bind(globalThis.cookieStore),
                    n = globalThis.cookieStore.delete.bind(globalThis.cookieStore);
                Object.defineProperty(globalThis.CookieStore.prototype, "get", {
                    value: async (o) =>
                        t.has(o.toLowerCase()) ? null : e.call(void 0, o),
                    enumerable: !0,
                    configurable: !1,
                }),
                    Object.defineProperty(globalThis.CookieStore.prototype, "getAll", {
                        value: async () => {
                            const e = await o.call(void 0);
                            return s(e);
                        },
                        enumerable: !0,
                        configurable: !1,
                    }),
                    Object.defineProperty(globalThis.CookieStore.prototype, "set", {
                        value: async (...e) => {
                            const o = 1 === e.length ? e[0].name : e[0];
                            if (!r(o)) return i.call(void 0, ...e);
                        },
                        enumerable: !0,
                        configurable: !1,
                    }),
                    Object.defineProperty(globalThis.CookieStore.prototype, "delete", {
                        value: async (...e) => {
                            const o = 1 === e.length ? e[0].name : e[0];
                            if (!r(o)) return n.call(void 0, ...e);
                        },
                        enumerable: !0,
                        configurable: !1,
                    });
            })();
    })();
    //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/handleAccessTokens.inline.9b374162.bundle.min.js.map
</script>

<!-- Overriding Globals JS  -->

<script
        data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/overrideGlobals.inline.68e65733.bundle.min.js"
>
    (() => {
        "use strict";
        const { ownKeys: e } = Reflect,
            t = ["toString", "toLocaleString", "valueOf"],
            r = (r, o) => {
                const n = o[r];
                if (!n) return;
                let i = !1;
                try {
                    const e = Object.getOwnPropertyDescriptor(o, r);
                    e && (i = e.enumerable || !1);
                } catch (e) {
                    console.warn(
                        `Failed to get property descriptor for key "${r}":`,
                        e
                    );
                }
                globalThis.defineStrictProperty(r, n, o, i);
                const c = n?.prototype;
                if (c) {
                    const e = Object.getOwnPropertyDescriptors(c);
                    Object.keys(e).forEach((r) => {
                        const o = e[r];
                        o &&
                        ((e, r, o) => {
                            if (
                                "constructor" !== r &&
                                "value" in o &&
                                o.configurable &&
                                !t.includes(String(r))
                            ) {
                                const { value: t, enumerable: n, get: i, set: c } = o,
                                    s = {
                                        enumerable: n,
                                        configurable: !1,
                                        ...(t
                                            ? { value: t, writable: !1 }
                                            : { get: i, set: c }),
                                    };
                                Object.defineProperty(e, r, s);
                            }
                        })(c, r, o);
                    });
                }
                e(n).forEach((e) => {
                    const t = Object.getOwnPropertyDescriptor(n, e);
                    t &&
                    (t.writable || t.configurable) &&
                    globalThis.defineStrictProperty(
                        e.toString(),
                        n[e],
                        n,
                        t.enumerable
                    );
                });
            },
            o = (e) =>
                "string" == typeof e
                    ? decodeURIComponent(e).toLowerCase().trimStart()
                    : e,
            n = (e, t, r, o) => {
                ((e) =>
                    e?.set &&
                    e?.get &&
                    "function" == typeof e.set &&
                    "function" == typeof e.get &&
                    !e.get.toString().includes("[native code]") &&
                    !e.set.toString().includes("[native code]"))(t)
                    ? Object.defineProperty(r || globalThis, e, {
                        get: t.get,
                        set: t.set,
                        configurable: !1,
                        enumerable: o || !1,
                    })
                    : Object.defineProperty(r || globalThis, e, {
                        value: t,
                        writable: !1,
                        configurable: !1,
                        enumerable: o || !1,
                    });
            },
            i = () => {
                const e = globalThis.open,
                    t = document.open,
                    r = (t, r, o) => {
                        const n = "string" != typeof t,
                            i = e.call(window, t, r, o);
                        return n ||
                        ((c = t).startsWith("//") &&
                        /(?:[a-z0-9](?:[a-z0-9-]{0,61}[a-z0-9])?\.)+[a-z0-9][a-z0-9-]{0,61}[a-z0-9]/g.test(
                            `${location.protocol}:${c}`
                        ) &&
                        (c = `${location.protocol}${c}`),
                        !c.startsWith("http") ||
                        new URL(c).hostname === location.hostname)
                            ? {}
                            : i;
                        var c;
                    };
                defineStrictProperty("open", r, globalThis, !0),
                    defineStrictProperty(
                        "open",
                        (e, o, n) => (e ? r(e, o, n) : t.call(document, e, o, n)),
                        document,
                        !0
                    );
            },
            c = document.createElement,
            s = (e, t) => {
                const r = c.call(document, e, t),
                    n = Element.prototype.setAttribute,
                    i = Element.prototype.setAttributeNS;
                if ("iframe" === o(e)) {
                    globalThis.defineStrictProperty(
                        "srcdoc",
                        {
                            get: () => {},
                            set: () => {
                                console.error("`srcdoc` is not allowed in iframe elements.");
                            },
                        },
                        r,
                        !1
                    );
                    const e = function (e, t) {
                            "srcdoc" !== e.toLowerCase()
                                ? n.call(r, e, t)
                                : console.error(
                                    "`srcdoc` attribute is not allowed to be set."
                                );
                        },
                        t = function (e, t, o) {
                            "srcdoc" !== t.toLowerCase()
                                ? i.call(r, e, t, o)
                                : console.error(
                                    "`srcdoc` attribute is not allowed to be set."
                                );
                        };
                    (r.setAttribute = e), (r.setAttributeNS = t);
                }
                return r;
            },
            a = "client-binding",
            l = "security_overrideGlobals",
            d = [
                "/_api/v1/access-tokens",
                "/_api/v2/dynamicmodel",
                "/_api/one-app-session-web/v3/businesses",
            ],
            p = (e) => (
                e instanceof Headers
                    ? e.forEach((t, r) => {
                        decodeURIComponent(r).toLowerCase() === a && e.delete(r);
                    })
                    : Object.keys(e).forEach((t) => {
                        decodeURIComponent(t).toLowerCase() === a && delete e[t];
                    }),
                    e
            ),
            u = (e) => {
                let t = !0;
                const r = ((e) => {
                        let t, r;
                        if (globalThis.Request && e instanceof Request) t = e.url;
                        else {
                            if ("function" != typeof e?.toString)
                                throw new Error("Unsupported type for url");
                            t = e.toString();
                        }
                        try {
                            return new URL(t).pathname;
                        } catch (e) {
                            return (
                                (r = t.replace(/#.+/gi, "").split("?").shift()),
                                    r.startsWith("/") ? r : `/${r}`
                            );
                        }
                    })(e),
                    n = o(r);
                return d.some((e) => n.includes(e)) && (t = !1), t;
            },
            f = (e = globalThis) => {
                const t = fetch;
                e.defineStrictProperty("fetch", function () {
                    const r =
                        ((o = arguments),
                            globalThis.Request && o[0] instanceof Request && o[0]?.headers
                                ? p(o[0].headers)
                                : o[1]?.headers && p(o[1].headers),
                            o);
                    var o;
                    return u(arguments[0])
                        ? t.apply(e, Array.from(r))
                        : new Promise((e, t) => {
                            const r = new Error("TB002");
                            window.fedops?.interactionStarted(r, l), t(r);
                        });
                });
            };
        performance.mark("overrideGlobals started");
        const { isExcludedFromSecurityExperiments: g, experiments: b } =
                window.viewerModel,
            m = !g && b["specs.thunderbolt.securityExperiments"];
        try {
            ((e = globalThis) => {
                Object.defineProperty(e, "defineStrictProperty", {
                    value: n,
                    writable: !1,
                    enumerable: !1,
                    configurable: !1,
                });
            })(),
                i(),
            m &&
            globalThis.defineStrictProperty("createElement", s, document, !0),
            b["specs.thunderbolt.hardenFetchAndXHR"] &&
            m &&
            (f(),
                ((e = globalThis) => {
                    const t = XMLHttpRequest;
                    function r() {
                        const e = new t(),
                            r = e.open,
                            o = e.setRequestHeader;
                        return (
                            (e.open = function () {
                                if (arguments.length < 2 || u(arguments[1]))
                                    return r.apply(e, Array.from(arguments));
                                {
                                    const e = new Error("TB002");
                                    throw (window.fedops?.interactionStarted(e, l), e);
                                }
                            }),
                                (e.setRequestHeader = function (t, r) {
                                    decodeURIComponent(t).toLowerCase() !== a &&
                                    o.call(e, t, r);
                                }),
                                e
                        );
                    }
                    Object.keys(t).forEach((e) => {
                        r[e] = t[e];
                    }),
                        e.defineStrictProperty("XMLHttpRequest", r);
                })()),
                (() => {
                    if (navigator && "serviceWorker" in navigator)
                        (navigator.serviceWorker.register = () =>
                            console.log("Service worker registration is not allowed")),
                            Promise.resolve();
                })(),
                ((e) => {
                    let t = [],
                        o = [];
                    (o = o.concat(["TextEncoder", "TextDecoder"])),
                    e && (o = o.concat(["XMLHttpRequestEventTarget", "EventTarget"])),
                        (o = o.concat(["URL", "JSON"])),
                    e && (t = t.concat(["addEventListener", "removeEventListener"])),
                        (t = t.concat([
                            "encodeURI",
                            "encodeURIComponent",
                            "decodeURI",
                            "decodeURIComponent",
                        ])),
                        (o = o.concat(["String", "Number"])),
                    e && o.push("Object"),
                        (o = o.concat(["Reflect"])),
                        t.forEach((e) => {
                            Object.freeze(globalThis[e]),
                            ["addEventListener", "removeEventListener"].includes(e) &&
                            globalThis.defineStrictProperty(
                                e,
                                document[e],
                                document,
                                !0
                            ),
                                globalThis.defineStrictProperty(
                                    e,
                                    globalThis[e],
                                    globalThis,
                                    !0
                                );
                        }),
                        o.forEach((e) => {
                            r(e, globalThis);
                        });
                })(m),
            m &&
            (defineStrictProperty("preventStringArgument", (e, t, r) => {
                const o = r || globalThis,
                    n = o[e];
                defineStrictProperty(
                    e,
                    function () {
                        const r = Array.from(arguments);
                        if ("string" != typeof r[t]) return n.apply(o, r);
                        console.warn(
                            `Calling ${e} with a String Argument at index ${t} is not allowed`
                        );
                    },
                    o
                );
            }),
                preventStringArgument("setTimeout", 0),
                preventStringArgument("setInterval", 0));
        } catch (e) {
            window?.viewerModel?.mode.debug && console.error(e);
            const t = new Error("TB006");
            window.fedops?.reportError(t, "security_overrideGlobals"),
                window.Sentry
                    ? window.Sentry.captureException(t)
                    : globalThis.defineStrictProperty("sentryBuffer", [t], window, !1);
        }
        performance.mark("overrideGlobals ended");
    })();
    //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/overrideGlobals.inline.68e65733.bundle.min.js.map
</script>

<script>
    window.commonConfig = viewerModel.commonConfig;
</script>

<!-- Initial CSS -->
<style
        src="./css/min.css"
>

</style>

<meta name="format-detection" content="telephone=no" />
<meta name="skype_toolbar" content="skype_toolbar_parser_compatible" />

<!--pageHtmlEmbeds.head start-->
<script type="wix/htmlEmbeds" id="pageHtmlEmbeds.head start"></script>

<script type="wix/htmlEmbeds" id="pageHtmlEmbeds.head end"></script>
<!--pageHtmlEmbeds.head end-->

<!-- head performance data start -->

<!-- head performance data end -->

<meta
        http-equiv="X-Wix-Meta-Site-Id"
        content="6e05b9b0-f6d5-451d-a2b8-987df3272a26"
/>
<meta
        http-equiv="X-Wix-Application-Instance-Id"
        content="1be4fccc-0084-4328-a01d-9918204ffc22"
/>

<meta http-equiv="X-Wix-Published-Version" content="109" />

<meta http-equiv="etag" content="bug" />

<!-- render-head end -->

<style
        href="./min2.css"
>

</style>
<style
        data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt_bootstrap.a1b00b19.min.css"
>
    .cwL6XW {
        cursor: pointer;
    }
    .sNF2R0 {
        opacity: 0;
    }
    .hLoBV3 {
        transition: opacity var(--transition-duration)
        cubic-bezier(0.37, 0, 0.63, 1);
    }
    .Rdf41z,
    .hLoBV3 {
        opacity: 1;
    }
    .ftlZWo {
        transition: opacity var(--transition-duration)
        cubic-bezier(0.37, 0, 0.63, 1);
    }
    .ATGlOr,
    .ftlZWo {
        opacity: 0;
    }
    .KQSXD0 {
        transition: opacity var(--transition-duration)
        cubic-bezier(0.64, 0, 0.78, 0);
    }
    .KQSXD0,
    .pagQKE {
        opacity: 1;
    }
    ._6zG5H {
        opacity: 0;
        transition: opacity var(--transition-duration)
        cubic-bezier(0.22, 1, 0.36, 1);
    }
    .BB49uC {
        transform: translateX(100%);
    }
    .j9xE1V {
        transition: transform var(--transition-duration)
        cubic-bezier(0.87, 0, 0.13, 1);
    }
    .ICs7Rs,
    .j9xE1V {
        transform: translateX(0);
    }
    .DxijZJ {
        transition: transform var(--transition-duration)
        cubic-bezier(0.87, 0, 0.13, 1);
    }
    .B5kjYq,
    .DxijZJ {
        transform: translateX(-100%);
    }
    .cJijIV {
        transition: transform var(--transition-duration)
        cubic-bezier(0.87, 0, 0.13, 1);
    }
    .cJijIV,
    .hOxaWM {
        transform: translateX(0);
    }
    .T9p3fN {
        transform: translateX(100%);
        transition: transform var(--transition-duration)
        cubic-bezier(0.87, 0, 0.13, 1);
    }
    .qDxYJm {
        transform: translateY(100%);
    }
    .aA9V0P {
        transition: transform var(--transition-duration)
        cubic-bezier(0.87, 0, 0.13, 1);
    }
    .YPXPAS,
    .aA9V0P {
        transform: translateY(0);
    }
    .Xf2zsA {
        transition: transform var(--transition-duration)
        cubic-bezier(0.87, 0, 0.13, 1);
    }
    .Xf2zsA,
    .y7Kt7s {
        transform: translateY(-100%);
    }
    .EeUgMu {
        transition: transform var(--transition-duration)
        cubic-bezier(0.87, 0, 0.13, 1);
    }
    .EeUgMu,
    .fdHrtm {
        transform: translateY(0);
    }
    .WIFaG4 {
        transform: translateY(100%);
        transition: transform var(--transition-duration)
        cubic-bezier(0.87, 0, 0.13, 1);
    }
    body:not(.responsive) .JsJXaX {
        overflow-x: clip;
    }
    :root:active-view-transition .JsJXaX {
        view-transition-name: page-group;
    }
    .AnQkDU {
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: 1fr;
        height: 100%;
    }
    .AnQkDU > div {
        align-self: stretch !important;
        grid-area: 1/1/2/2;
        justify-self: stretch !important;
    }
    .StylableButton2545352419__root {
        -archetype: box;
        border: none;
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        height: 100%;
        min-height: 10px;
        min-width: 10px;
        padding: 0;
        touch-action: manipulation;
        width: 100%;
    }
    .StylableButton2545352419__root[disabled] {
        pointer-events: none;
    }
    .StylableButton2545352419__root:not(:hover):not(
				[disabled]
			).StylableButton2545352419--hasBackgroundColor {
        background-color: var(--corvid-background-color) !important;
    }
    .StylableButton2545352419__root:hover:not(
				[disabled]
			).StylableButton2545352419--hasHoverBackgroundColor {
        background-color: var(--corvid-hover-background-color) !important;
    }
    .StylableButton2545352419__root:not(
				:hover
			)[disabled].StylableButton2545352419--hasDisabledBackgroundColor {
        background-color: var(--corvid-disabled-background-color) !important;
    }
    .StylableButton2545352419__root:not(:hover):not(
				[disabled]
			).StylableButton2545352419--hasBorderColor {
        border-color: var(--corvid-border-color) !important;
    }
    .StylableButton2545352419__root:hover:not(
				[disabled]
			).StylableButton2545352419--hasHoverBorderColor {
        border-color: var(--corvid-hover-border-color) !important;
    }
    .StylableButton2545352419__root:not(
				:hover
			)[disabled].StylableButton2545352419--hasDisabledBorderColor {
        border-color: var(--corvid-disabled-border-color) !important;
    }
    .StylableButton2545352419__root.StylableButton2545352419--hasBorderRadius {
        border-radius: var(--corvid-border-radius) !important;
    }
    .StylableButton2545352419__root.StylableButton2545352419--hasBorderWidth {
        border-width: var(--corvid-border-width) !important;
    }
    .StylableButton2545352419__root:not(:hover):not(
				[disabled]
			).StylableButton2545352419--hasColor,
    .StylableButton2545352419__root:not(:hover):not(
				[disabled]
			).StylableButton2545352419--hasColor
    .StylableButton2545352419__label {
        color: var(--corvid-color) !important;
    }
    .StylableButton2545352419__root:hover:not(
				[disabled]
			).StylableButton2545352419--hasHoverColor,
    .StylableButton2545352419__root:hover:not(
				[disabled]
			).StylableButton2545352419--hasHoverColor
    .StylableButton2545352419__label {
        color: var(--corvid-hover-color) !important;
    }
    .StylableButton2545352419__root:not(
				:hover
			)[disabled].StylableButton2545352419--hasDisabledColor,
    .StylableButton2545352419__root:not(
				:hover
			)[disabled].StylableButton2545352419--hasDisabledColor
    .StylableButton2545352419__label {
        color: var(--corvid-disabled-color) !important;
    }
    .StylableButton2545352419__link {
        -archetype: box;
        box-sizing: border-box;
        color: #000;
        text-decoration: none;
    }
    .StylableButton2545352419__container {
        align-items: center;
        display: flex;
        flex-basis: auto;
        flex-direction: row;
        flex-grow: 1;
        height: 100%;
        justify-content: center;
        overflow: hidden;
        transition: all 0.2s ease, visibility 0s;
        width: 100%;
    }
    .StylableButton2545352419__label {
        -archetype: text;
        -controller-part-type: LayoutChildDisplayDropdown,
        LayoutFlexChildSpacing(first);
        max-width: 100%;
        min-width: 1.8em;
        overflow: hidden;
        text-align: center;
        text-overflow: ellipsis;
        transition: inherit;
        white-space: nowrap;
    }
    .StylableButton2545352419__root.StylableButton2545352419--isMaxContent
    .StylableButton2545352419__label {
        text-overflow: unset;
    }
    .StylableButton2545352419__root.StylableButton2545352419--isWrapText
    .StylableButton2545352419__label {
        min-width: 10px;
        overflow-wrap: break-word;
        white-space: break-spaces;
        word-break: break-word;
    }
    .StylableButton2545352419__icon {
        -archetype: icon;
        -controller-part-type: LayoutChildDisplayDropdown,
        LayoutFlexChildSpacing(last);
        flex-shrink: 0;
        height: 50px;
        min-width: 1px;
        transition: inherit;
    }
    .StylableButton2545352419__icon.StylableButton2545352419--override {
        display: block !important;
    }
    .StylableButton2545352419__icon svg,
    .StylableButton2545352419__icon > span {
        display: flex;
        height: inherit;
        width: inherit;
    }
    .StylableButton2545352419__root:not(:hover):not(
				[disalbed]
			).StylableButton2545352419--hasIconColor
    .StylableButton2545352419__icon
    svg {
        fill: var(--corvid-icon-color) !important;
        stroke: var(--corvid-icon-color) !important;
    }
    .StylableButton2545352419__root:hover:not(
				[disabled]
			).StylableButton2545352419--hasHoverIconColor
    .StylableButton2545352419__icon
    svg {
        fill: var(--corvid-hover-icon-color) !important;
        stroke: var(--corvid-hover-icon-color) !important;
    }
    .StylableButton2545352419__root:not(
				:hover
			)[disabled].StylableButton2545352419--hasDisabledIconColor
    .StylableButton2545352419__icon
    svg {
        fill: var(--corvid-disabled-icon-color) !important;
        stroke: var(--corvid-disabled-icon-color) !important;
    }
    .aeyn4z {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
    }
    .qQrFOK {
        cursor: pointer;
    }
    .VDJedC {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        fill: var(--corvid-fill-color, var(--fill));
        fill-opacity: var(--fill-opacity);
        stroke: var(--corvid-stroke-color, var(--stroke));
        stroke-opacity: var(--stroke-opacity);
        stroke-width: var(--stroke-width);
        filter: var(--drop-shadow, none);
        opacity: var(--opacity);
        transform: var(--flip);
    }
    .VDJedC,
    .VDJedC svg {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
    }
    .VDJedC svg {
        height: var(--svg-calculated-height, 100%);
        margin: auto;
        padding: var(--svg-calculated-padding, 0);
        width: var(--svg-calculated-width, 100%);
    }
    .VDJedC svg:not([data-type="ugc"]) {
        overflow: visible;
    }
    .l4CAhn * {
        vector-effect: non-scaling-stroke;
    }
    .Z_l5lU {
        -webkit-text-size-adjust: 100%;
        -moz-text-size-adjust: 100%;
        text-size-adjust: 100%;
    }
    ol.font_100,
    ul.font_100 {
        color: #080808;
        font-family: "Arial, Helvetica, sans-serif", serif;
        font-size: 10px;
        font-style: normal;
        font-variant: normal;
        font-weight: 400;
        letter-spacing: normal;
        line-height: normal;
        margin: 0;
        text-decoration: none;
    }
    ol.font_100 li,
    ul.font_100 li {
        margin-bottom: 12px;
    }
    ol.wix-list-text-align,
    ul.wix-list-text-align {
        list-style-position: inside;
    }
    ol.wix-list-text-align h1,
    ol.wix-list-text-align h2,
    ol.wix-list-text-align h3,
    ol.wix-list-text-align h4,
    ol.wix-list-text-align h5,
    ol.wix-list-text-align h6,
    ol.wix-list-text-align p,
    ul.wix-list-text-align h1,
    ul.wix-list-text-align h2,
    ul.wix-list-text-align h3,
    ul.wix-list-text-align h4,
    ul.wix-list-text-align h5,
    ul.wix-list-text-align h6,
    ul.wix-list-text-align p {
        display: inline;
    }
    .HQSswv {
        cursor: pointer;
    }
    .yi6otz {
        clip: rect(0 0 0 0);
        border: 0;
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
    }
    .zQ9jDz [data-attr-richtext-marker="true"] {
        display: block;
    }
    .zQ9jDz [data-attr-richtext-marker="true"] table {
        border-collapse: collapse;
        margin: 15px 0;
        width: 100%;
    }
    .zQ9jDz [data-attr-richtext-marker="true"] table td {
        padding: 12px;
        position: relative;
    }
    .zQ9jDz [data-attr-richtext-marker="true"] table td:after {
        border-bottom: 1px solid currentColor;
        border-left: 1px solid currentColor;
        bottom: 0;
        content: "";
        left: 0;
        opacity: 0.2;
        position: absolute;
        right: 0;
        top: 0;
    }
    .zQ9jDz [data-attr-richtext-marker="true"] table tr td:last-child:after {
        border-right: 1px solid currentColor;
    }
    .zQ9jDz [data-attr-richtext-marker="true"] table tr:first-child td:after {
        border-top: 1px solid currentColor;
    }
    @supports (-webkit-appearance: none) and (stroke-color: transparent) {
        .qvSjx3 > * > :first-child {
            vertical-align: top;
        }
    }
    @supports (-webkit-touch-callout: none) {
        .qvSjx3 > * > :first-child {
            vertical-align: top;
        }
    }
    .LkZBpT
    :is(
				p,
				h1,
				h2,
				h3,
				h4,
				h5,
				h6,
				ul,
				ol,
				span[data-attr-richtext-marker],
				blockquote,
				div
			)
    [class$="rich-text__text"],
    .LkZBpT
    :is(
				p,
				h1,
				h2,
				h3,
				h4,
				h5,
				h6,
				ul,
				ol,
				span[data-attr-richtext-marker],
				blockquote,
				div
			)[class$="rich-text__text"] {
        color: var(--corvid-color, currentColor);
    }
    .LkZBpT
    :is(
				p,
				h1,
				h2,
				h3,
				h4,
				h5,
				h6,
				ul,
				ol,
				span[data-attr-richtext-marker],
				blockquote,
				div
			)
    span[style*="color"] {
        color: var(--corvid-color, currentColor) !important;
    }
    .Kbom4H {
        direction: var(--text-direction);
        min-height: var(--min-height);
        min-width: var(--min-width);
    }
    .Kbom4H .upNqi2 {
        word-wrap: break-word;
        height: 100%;
        overflow-wrap: break-word;
        position: relative;
        width: 100%;
    }
    .Kbom4H .upNqi2 ul {
        list-style: disc inside;
    }
    .Kbom4H .upNqi2 li {
        margin-bottom: 12px;
    }
    .MMl86N blockquote,
    .MMl86N div,
    .MMl86N h1,
    .MMl86N h2,
    .MMl86N h3,
    .MMl86N h4,
    .MMl86N h5,
    .MMl86N h6,
    .MMl86N p {
        letter-spacing: normal;
        line-height: normal;
    }
    .gYHZuN {
        min-height: var(--min-height);
        min-width: var(--min-width);
    }
    .gYHZuN .upNqi2 {
        word-wrap: break-word;
        height: 100%;
        overflow-wrap: break-word;
        position: relative;
        width: 100%;
    }
    .gYHZuN .upNqi2 ol,
    .gYHZuN .upNqi2 ul {
        letter-spacing: normal;
        line-height: normal;
        margin-inline-start: 0.5em;
        padding-inline-start: 1.3em;
    }
    .gYHZuN .upNqi2 ul {
        list-style-type: disc;
    }
    .gYHZuN .upNqi2 ol {
        list-style-type: decimal;
    }
    .gYHZuN .upNqi2 ol ul,
    .gYHZuN .upNqi2 ul ul {
        line-height: normal;
        list-style-type: circle;
    }
    .gYHZuN .upNqi2 ol ol ul,
    .gYHZuN .upNqi2 ol ul ul,
    .gYHZuN .upNqi2 ul ol ul,
    .gYHZuN .upNqi2 ul ul ul {
        line-height: normal;
        list-style-type: square;
    }
    .gYHZuN .upNqi2 li {
        font-style: inherit;
        font-weight: inherit;
        letter-spacing: normal;
        line-height: inherit;
    }
    .gYHZuN .upNqi2 h1,
    .gYHZuN .upNqi2 h2,
    .gYHZuN .upNqi2 h3,
    .gYHZuN .upNqi2 h4,
    .gYHZuN .upNqi2 h5,
    .gYHZuN .upNqi2 h6,
    .gYHZuN .upNqi2 p {
        letter-spacing: normal;
        line-height: normal;
        margin-block: 0;
        margin: 0;
    }
    .gYHZuN .upNqi2 a {
        color: inherit;
    }
    .MMl86N,
    .ku3DBC {
        word-wrap: break-word;
        direction: var(--text-direction);
        min-height: var(--min-height);
        min-width: var(--min-width);
        mix-blend-mode: var(--blendMode, normal);
        overflow-wrap: break-word;
        pointer-events: none;
        text-align: start;
        text-shadow: var(--textOutline, 0 0 transparent),
        var(--textShadow, 0 0 transparent);
        text-transform: var(--textTransform, "none");
    }
    .MMl86N > *,
    .ku3DBC > * {
        pointer-events: auto;
    }
    .MMl86N li,
    .ku3DBC li {
        font-style: inherit;
        font-weight: inherit;
        letter-spacing: normal;
        line-height: inherit;
    }
    .MMl86N ol,
    .MMl86N ul,
    .ku3DBC ol,
    .ku3DBC ul {
        letter-spacing: normal;
        line-height: normal;
        margin-inline-end: 0;
        margin-inline-start: 0.5em;
    }
    .MMl86N:not(.Vq6kJx) ol,
    .MMl86N:not(.Vq6kJx) ul,
    .ku3DBC:not(.Vq6kJx) ol,
    .ku3DBC:not(.Vq6kJx) ul {
        padding-inline-end: 0;
        padding-inline-start: 1.3em;
    }
    .MMl86N ul,
    .ku3DBC ul {
        list-style-type: disc;
    }
    .MMl86N ol,
    .ku3DBC ol {
        list-style-type: decimal;
    }
    .MMl86N ol ul,
    .MMl86N ul ul,
    .ku3DBC ol ul,
    .ku3DBC ul ul {
        list-style-type: circle;
    }
    .MMl86N ol ol ul,
    .MMl86N ol ul ul,
    .MMl86N ul ol ul,
    .MMl86N ul ul ul,
    .ku3DBC ol ol ul,
    .ku3DBC ol ul ul,
    .ku3DBC ul ol ul,
    .ku3DBC ul ul ul {
        list-style-type: square;
    }
    .MMl86N blockquote,
    .MMl86N div,
    .MMl86N h1,
    .MMl86N h2,
    .MMl86N h3,
    .MMl86N h4,
    .MMl86N h5,
    .MMl86N h6,
    .MMl86N p,
    .ku3DBC blockquote,
    .ku3DBC div,
    .ku3DBC h1,
    .ku3DBC h2,
    .ku3DBC h3,
    .ku3DBC h4,
    .ku3DBC h5,
    .ku3DBC h6,
    .ku3DBC p {
        margin-block: 0;
        margin: 0;
    }
    .MMl86N a,
    .ku3DBC a {
        color: inherit;
    }
    .Vq6kJx li {
        margin-inline-end: 0;
        margin-inline-start: 1.3em;
    }
    .Vd6aQZ {
        overflow: hidden;
        padding: 0;
        pointer-events: none;
        white-space: nowrap;
    }
    .mHZSwn {
        display: none;
    }
    .lvxhkV {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        width: 100%;
    }
    .QJjwEo {
        transform: translateY(-100%);
        transition: 0.2s ease-in;
    }
    .kdBXfh {
        transition: 0.2s;
    }
    .MP52zt {
        opacity: 0;
        transition: 0.2s ease-in;
    }
    .MP52zt.Bhu9m5 {
        z-index: -1 !important;
    }
    .LVP8Wf {
        opacity: 1;
        transition: 0.2s;
    }
    .VrZrC0 {
        height: auto;
    }
    .VrZrC0,
    .cKxVkc {
        position: relative;
        width: 100%;
    }
    :host(:not(.device-mobile-optimized)) .vlM3HR,
    body:not(.device-mobile-optimized) .vlM3HR {
        margin-left: calc((100% - var(--site-width)) / 2);
        width: var(--site-width);
    }
    .AT7o0U[data-focuscycled="active"] {
        outline: 1px solid transparent;
    }
    .AT7o0U[data-focuscycled="active"]:not(:focus-within) {
        outline: 2px solid transparent;
        transition: outline 0.01s ease;
    }
    .AT7o0U .vlM3HR {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
    }
    .Tj01hh,
    .jhxvbR {
        display: block;
        height: 100%;
        width: 100%;
    }
    .jhxvbR img {
        max-width: var(--wix-img-max-width, 100%);
    }
    .jhxvbR[data-animate-blur] img {
        filter: blur(9px);
        transition: filter 0.8s ease-in;
    }
    .jhxvbR[data-animate-blur] img[data-load-done] {
        filter: none;
    }
    .WzbAF8 {
        direction: var(--direction);
    }
    .WzbAF8 .mpGTIt .O6KwRn {
        display: var(--item-display);
        height: var(--item-size);
        margin-block: var(--item-margin-block);
        margin-inline: var(--item-margin-inline);
        width: var(--item-size);
    }
    .WzbAF8 .mpGTIt .O6KwRn:last-child {
        margin-block: 0;
        margin-inline: 0;
    }
    .WzbAF8 .mpGTIt .O6KwRn .oRtuWN {
        display: block;
    }
    .WzbAF8 .mpGTIt .O6KwRn .oRtuWN .YaS0jR {
        height: var(--item-size);
        width: var(--item-size);
    }
    .WzbAF8 .mpGTIt {
        height: 100%;
        position: absolute;
        white-space: nowrap;
        width: 100%;
    }
    :host(.device-mobile-optimized) .WzbAF8 .mpGTIt,
    body.device-mobile-optimized .WzbAF8 .mpGTIt {
        white-space: normal;
    }
    .big2ZD {
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: 1fr;
        height: calc(100% - var(--wix-ads-height));
        left: 0;
        margin-top: var(--wix-ads-height);
        position: fixed;
        top: 0;
        width: 100%;
    }
    .SHHiV9,
    .big2ZD {
        pointer-events: none;
        z-index: var(--pinned-layer-in-container, var(--above-all-in-container));
    }
</style>
<style
        data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt_bootstrap-classic.72e6a2a3.min.css"
>
    .PlZyDq {
        touch-action: manipulation;
    }
    .uDW_Qe {
        align-items: center;
        box-sizing: border-box;
        display: flex;
        justify-content: var(--label-align);
        min-width: 100%;
        text-align: initial;
        width: -moz-max-content;
        width: max-content;
    }
    .uDW_Qe:before {
        max-width: var(--margin-start, 0);
    }
    .uDW_Qe:after,
    .uDW_Qe:before {
        align-self: stretch;
        content: "";
        flex-grow: 1;
    }
    .uDW_Qe:after {
        max-width: var(--margin-end, 0);
    }
    .FubTgk {
        height: 100%;
    }
    .FubTgk .uDW_Qe {
        border-radius: var(--corvid-border-radius, var(--rd, 0));
        bottom: 0;
        box-shadow: var(--shd, 0 1px 4px rgba(0, 0, 0, 0.6));
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        transition: var(
                --trans1,
                border-color 0.4s ease 0s,
                background-color 0.4s ease 0s
        );
    }
    .FubTgk .uDW_Qe:link,
    .FubTgk .uDW_Qe:visited {
        border-color: transparent;
    }
    .FubTgk .l7_2fn {
        color: var(--corvid-color, rgb(var(--txt, var(--color_15, color_15))));
        font: var(--fnt, var(--font_5));
        margin: 0;
        position: relative;
        transition: var(--trans2, color 0.4s ease 0s);
        white-space: nowrap;
    }
    .FubTgk[aria-disabled="false"] .uDW_Qe {
        background-color: var(
                --corvid-background-color,
                rgba(var(--bg, var(--color_17, color_17)), var(--alpha-bg, 1))
        );
        border: solid
        var(
                --corvid-border-color,
                rgba(var(--brd, var(--color_15, color_15)), var(--alpha-brd, 1))
        )
        var(--corvid-border-width, var(--brw, 0));
        cursor: pointer !important;
    }
    :host(.device-mobile-optimized)
    .FubTgk[aria-disabled="false"]:active
    .uDW_Qe,
    body.device-mobile-optimized .FubTgk[aria-disabled="false"]:active .uDW_Qe {
        background-color: var(
                --corvid-hover-background-color,
                rgba(var(--bgh, var(--color_18, color_18)), var(--alpha-bgh, 1))
        );
        border-color: var(
                --corvid-hover-border-color,
                rgba(var(--brdh, var(--color_15, color_15)), var(--alpha-brdh, 1))
        );
    }
    :host(.device-mobile-optimized)
    .FubTgk[aria-disabled="false"]:active
    .l7_2fn,
    body.device-mobile-optimized .FubTgk[aria-disabled="false"]:active .l7_2fn {
        color: var(
                --corvid-hover-color,
                rgb(var(--txth, var(--color_15, color_15)))
        );
    }
    :host(:not(.device-mobile-optimized))
    .FubTgk[aria-disabled="false"]:hover
    .uDW_Qe,
    body:not(.device-mobile-optimized)
    .FubTgk[aria-disabled="false"]:hover
    .uDW_Qe {
        background-color: var(
                --corvid-hover-background-color,
                rgba(var(--bgh, var(--color_18, color_18)), var(--alpha-bgh, 1))
        );
        border-color: var(
                --corvid-hover-border-color,
                rgba(var(--brdh, var(--color_15, color_15)), var(--alpha-brdh, 1))
        );
    }
    :host(:not(.device-mobile-optimized))
    .FubTgk[aria-disabled="false"]:hover
    .l7_2fn,
    body:not(.device-mobile-optimized)
    .FubTgk[aria-disabled="false"]:hover
    .l7_2fn {
        color: var(
                --corvid-hover-color,
                rgb(var(--txth, var(--color_15, color_15)))
        );
    }
    .FubTgk[aria-disabled="true"] .uDW_Qe {
        background-color: var(
                --corvid-disabled-background-color,
                rgba(var(--bgd, 204, 204, 204), var(--alpha-bgd, 1))
        );
        border-color: var(
                --corvid-disabled-border-color,
                rgba(var(--brdd, 204, 204, 204), var(--alpha-brdd, 1))
        );
        border-style: solid;
        border-width: var(--corvid-border-width, var(--brw, 0));
    }
    .FubTgk[aria-disabled="true"] .l7_2fn {
        color: var(--corvid-disabled-color, rgb(var(--txtd, 255, 255, 255)));
    }
    .uUxqWY {
        align-items: center;
        box-sizing: border-box;
        display: flex;
        justify-content: var(--label-align);
        min-width: 100%;
        text-align: initial;
        width: -moz-max-content;
        width: max-content;
    }
    .uUxqWY:before {
        max-width: var(--margin-start, 0);
    }
    .uUxqWY:after,
    .uUxqWY:before {
        align-self: stretch;
        content: "";
        flex-grow: 1;
    }
    .uUxqWY:after {
        max-width: var(--margin-end, 0);
    }
    .Vq4wYb[aria-disabled="false"] .uUxqWY {
        cursor: pointer;
    }
    :host(.device-mobile-optimized)
    .Vq4wYb[aria-disabled="false"]:active
    .wJVzSK,
    body.device-mobile-optimized .Vq4wYb[aria-disabled="false"]:active .wJVzSK {
        color: var(
                --corvid-hover-color,
                rgb(var(--txth, var(--color_15, color_15)))
        );
        transition: var(--trans, color 0.4s ease 0s);
    }
    :host(:not(.device-mobile-optimized))
    .Vq4wYb[aria-disabled="false"]:hover
    .wJVzSK,
    body:not(.device-mobile-optimized)
    .Vq4wYb[aria-disabled="false"]:hover
    .wJVzSK {
        color: var(
                --corvid-hover-color,
                rgb(var(--txth, var(--color_15, color_15)))
        );
        transition: var(--trans, color 0.4s ease 0s);
    }
    .Vq4wYb .uUxqWY {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
    }
    .Vq4wYb .wJVzSK {
        color: var(--corvid-color, rgb(var(--txt, var(--color_15, color_15))));
        font: var(--fnt, var(--font_5));
        transition: var(--trans, color 0.4s ease 0s);
        white-space: nowrap;
    }
    .Vq4wYb[aria-disabled="true"] .wJVzSK {
        color: var(--corvid-disabled-color, rgb(var(--txtd, 255, 255, 255)));
    }
    :host(:not(.device-mobile-optimized)) .CohWsy,
    body:not(.device-mobile-optimized) .CohWsy {
        display: flex;
    }
    :host(:not(.device-mobile-optimized)) .V5AUxf,
    body:not(.device-mobile-optimized) .V5AUxf {
        -moz-column-gap: var(--margin);
        column-gap: var(--margin);
        direction: var(--direction);
        display: flex;
        margin: 0 auto;
        position: relative;
        width: calc(100% - var(--padding) * 2);
    }
    :host(:not(.device-mobile-optimized)) .V5AUxf > *,
    body:not(.device-mobile-optimized) .V5AUxf > * {
        direction: ltr;
        flex: var(--column-flex) 1 0%;
        left: 0;
        margin-bottom: var(--padding);
        margin-top: var(--padding);
        min-width: 0;
        position: relative;
        top: 0;
    }
    :host(.device-mobile-optimized) .V5AUxf,
    body.device-mobile-optimized .V5AUxf {
        display: block;
        padding-bottom: var(--padding-y);
        padding-left: var(--padding-x, 0);
        padding-right: var(--padding-x, 0);
        padding-top: var(--padding-y);
        position: relative;
    }
    :host(.device-mobile-optimized) .V5AUxf > *,
    body.device-mobile-optimized .V5AUxf > * {
        margin-bottom: var(--margin);
        position: relative;
    }
    :host(.device-mobile-optimized) .V5AUxf > :first-child,
    body.device-mobile-optimized .V5AUxf > :first-child {
        margin-top: var(--firstChildMarginTop, 0);
    }
    :host(.device-mobile-optimized) .V5AUxf > :last-child,
    body.device-mobile-optimized .V5AUxf > :last-child {
        margin-bottom: var(--lastChildMarginBottom);
    }
    .LIhNy3 {
        backface-visibility: hidden;
    }
    .jhxvbR,
    .mtrorN {
        display: block;
        height: 100%;
        width: 100%;
    }
    .jhxvbR img {
        max-width: var(--wix-img-max-width, 100%);
    }
    .jhxvbR[data-animate-blur] img {
        filter: blur(9px);
        transition: filter 0.8s ease-in;
    }
    .jhxvbR[data-animate-blur] img[data-load-done] {
        filter: none;
    }
    .if7Vw2 {
        height: 100%;
        left: 0;
        -webkit-mask-image: var(--mask-image, none);
        mask-image: var(--mask-image, none);
        -webkit-mask-position: var(--mask-position, 0);
        mask-position: var(--mask-position, 0);
        -webkit-mask-repeat: var(--mask-repeat, no-repeat);
        mask-repeat: var(--mask-repeat, no-repeat);
        -webkit-mask-size: var(--mask-size, 100%);
        mask-size: var(--mask-size, 100%);
        overflow: hidden;
        pointer-events: var(--fill-layer-background-media-pointer-events);
        position: absolute;
        top: 0;
        width: 100%;
    }
    .if7Vw2.f0uTJH {
        clip: rect(0, auto, auto, 0);
    }
    .if7Vw2 .i1tH8h {
        height: 100%;
        position: absolute;
        top: 0;
        width: 100%;
    }
    .if7Vw2 .DXi4PB {
        height: var(--fill-layer-image-height, 100%);
        opacity: var(--fill-layer-image-opacity);
    }
    .if7Vw2 .DXi4PB img {
        height: 100%;
        width: 100%;
    }
    @supports (-webkit-hyphens: none) {
        .if7Vw2.f0uTJH {
            clip: auto;
            -webkit-clip-path: inset(0);
        }
    }
    .wG8dni {
        height: 100%;
    }
    .tcElKx {
        background-color: var(--bg-overlay-color);
        background-image: var(--bg-gradient);
        transition: var(--inherit-transition);
    }
    .ImALHf,
    .Ybjs9b {
        opacity: var(--fill-layer-video-opacity);
    }
    .UWmm3w {
        bottom: var(--media-padding-bottom);
        height: var(--media-padding-height);
        position: absolute;
        top: var(--media-padding-top);
        width: 100%;
    }
    .Yjj1af {
        transform: scale(var(--scale, 1));
        transition: var(--transform-duration, transform 0s);
    }
    .ImALHf {
        height: 100%;
        position: relative;
        width: 100%;
    }
    .KCM6zk {
        opacity: var(
                --fill-layer-video-opacity,
                var(--fill-layer-image-opacity, 1)
        );
    }
    .KCM6zk .DXi4PB,
    .KCM6zk .ImALHf,
    .KCM6zk .Ybjs9b {
        opacity: 1;
    }
    ._uqPqy {
        clip-path: var(--fill-layer-clip);
    }
    ._uqPqy,
    .eKyYhK {
        position: absolute;
        top: 0;
    }
    ._uqPqy,
    .eKyYhK,
    .x0mqQS img {
        height: 100%;
        width: 100%;
    }
    .pnCr6P {
        opacity: 0;
    }
    .blf7sp,
    .pnCr6P {
        position: absolute;
        top: 0;
    }
    .blf7sp {
        height: 0;
        left: 0;
        overflow: hidden;
        width: 0;
    }
    .rWP3Gv {
        left: 0;
        pointer-events: var(--fill-layer-background-media-pointer-events);
        position: var(--fill-layer-background-media-position);
    }
    .Tr4n3d,
    .rWP3Gv,
    .wRqk6s {
        height: 100%;
        top: 0;
        width: 100%;
    }
    .wRqk6s {
        position: absolute;
    }
    .Tr4n3d {
        background-color: var(--fill-layer-background-overlay-color);
        opacity: var(--fill-layer-background-overlay-blend-opacity-fallback, 1);
        position: var(--fill-layer-background-overlay-position);
        transform: var(--fill-layer-background-overlay-transform);
    }
    @supports (mix-blend-mode: overlay) {
        .Tr4n3d {
            mix-blend-mode: var(--fill-layer-background-overlay-blend-mode);
            opacity: var(--fill-layer-background-overlay-blend-opacity, 1);
        }
    }
    .VXAmO2 {
        --divider-pin-height__: min(
                1,
                calc(var(--divider-layers-pin-factor__) + 1)
        );
        --divider-pin-layer-height__: var(--divider-layers-pin-factor__);
        --divider-pin-border__: min(
                1,
                calc(var(--divider-layers-pin-factor__) / -1 + 1)
        );
        height: calc(
                var(--divider-height__) + var(--divider-pin-height__) *
                var(--divider-layers-size__) * var(--divider-layers-y__)
        );
    }
    .VXAmO2,
    .VXAmO2 .dy3w_9 {
        left: 0;
        position: absolute;
        width: 100%;
    }
    .VXAmO2 .dy3w_9 {
        --divider-layer-i__: var(--divider-layer-i, 0);
        background-position: left
        calc(
                50% + var(--divider-offset-x__) + var(--divider-layers-x__) *
                var(--divider-layer-i__)
        )
        bottom;
        background-repeat: repeat-x;
        border-bottom-style: solid;
        border-bottom-width: calc(
                var(--divider-pin-border__) * var(--divider-layer-i__) *
                var(--divider-layers-y__)
        );
        height: calc(
                var(--divider-height__) + var(--divider-pin-layer-height__) *
                var(--divider-layer-i__) * var(--divider-layers-y__)
        );
        opacity: calc(
                1 - var(--divider-layer-i__) / (var(--divider-layer-i__) + 1)
        );
    }
    .UORcXs {
        --divider-height__: var(--divider-top-height, auto);
        --divider-offset-x__: var(--divider-top-offset-x, 0px);
        --divider-layers-size__: var(--divider-top-layers-size, 0);
        --divider-layers-y__: var(--divider-top-layers-y, 0px);
        --divider-layers-x__: var(--divider-top-layers-x, 0px);
        --divider-layers-pin-factor__: var(--divider-top-layers-pin-factor, 0);
        border-top: var(--divider-top-padding, 0) solid
        var(--divider-top-color, currentColor);
        opacity: var(--divider-top-opacity, 1);
        top: 0;
        transform: var(--divider-top-flip, scaleY(-1));
    }
    .UORcXs .dy3w_9 {
        background-image: var(--divider-top-image, none);
        background-size: var(--divider-top-size, contain);
        border-color: var(--divider-top-color, currentColor);
        bottom: 0;
        filter: var(--divider-top-filter, none);
    }
    .UORcXs .dy3w_9[data-divider-layer="1"] {
        display: var(--divider-top-layer-1-display, block);
    }
    .UORcXs .dy3w_9[data-divider-layer="2"] {
        display: var(--divider-top-layer-2-display, block);
    }
    .UORcXs .dy3w_9[data-divider-layer="3"] {
        display: var(--divider-top-layer-3-display, block);
    }
    .Io4VUz {
        --divider-height__: var(--divider-bottom-height, auto);
        --divider-offset-x__: var(--divider-bottom-offset-x, 0px);
        --divider-layers-size__: var(--divider-bottom-layers-size, 0);
        --divider-layers-y__: var(--divider-bottom-layers-y, 0px);
        --divider-layers-x__: var(--divider-bottom-layers-x, 0px);
        --divider-layers-pin-factor__: var(--divider-bottom-layers-pin-factor, 0);
        border-bottom: var(--divider-bottom-padding, 0) solid
        var(--divider-bottom-color, currentColor);
        bottom: 0;
        opacity: var(--divider-bottom-opacity, 1);
        transform: var(--divider-bottom-flip, none);
    }
    .Io4VUz .dy3w_9 {
        background-image: var(--divider-bottom-image, none);
        background-size: var(--divider-bottom-size, contain);
        border-color: var(--divider-bottom-color, currentColor);
        bottom: 0;
        filter: var(--divider-bottom-filter, none);
    }
    .Io4VUz .dy3w_9[data-divider-layer="1"] {
        display: var(--divider-bottom-layer-1-display, block);
    }
    .Io4VUz .dy3w_9[data-divider-layer="2"] {
        display: var(--divider-bottom-layer-2-display, block);
    }
    .Io4VUz .dy3w_9[data-divider-layer="3"] {
        display: var(--divider-bottom-layer-3-display, block);
    }
    .YzqVVZ {
        overflow: visible;
        position: relative;
    }
    .mwF7X1 {
        backface-visibility: hidden;
    }
    .YGilLk {
        cursor: pointer;
    }
    .Tj01hh {
        display: block;
    }
    .MW5IWV,
    .Tj01hh {
        height: 100%;
        width: 100%;
    }
    .MW5IWV {
        left: 0;
        -webkit-mask-image: var(--mask-image, none);
        mask-image: var(--mask-image, none);
        -webkit-mask-position: var(--mask-position, 0);
        mask-position: var(--mask-position, 0);
        -webkit-mask-repeat: var(--mask-repeat, no-repeat);
        mask-repeat: var(--mask-repeat, no-repeat);
        -webkit-mask-size: var(--mask-size, 100%);
        mask-size: var(--mask-size, 100%);
        overflow: hidden;
        pointer-events: var(--fill-layer-background-media-pointer-events);
        position: absolute;
        top: 0;
    }
    .MW5IWV.N3eg0s {
        clip: rect(0, auto, auto, 0);
    }
    .MW5IWV .Kv1aVt {
        height: 100%;
        position: absolute;
        top: 0;
        width: 100%;
    }
    .MW5IWV .dLPlxY {
        height: var(--fill-layer-image-height, 100%);
        opacity: var(--fill-layer-image-opacity);
    }
    .MW5IWV .dLPlxY img {
        height: 100%;
        width: 100%;
    }
    @supports (-webkit-hyphens: none) {
        .MW5IWV.N3eg0s {
            clip: auto;
            -webkit-clip-path: inset(0);
        }
    }
    .VgO9Yg {
        height: 100%;
    }
    .LWbAav {
        background-color: var(--bg-overlay-color);
        background-image: var(--bg-gradient);
        transition: var(--inherit-transition);
    }
    .K_YxMd,
    .yK6aSC {
        opacity: var(--fill-layer-video-opacity);
    }
    .NGjcJN {
        bottom: var(--media-padding-bottom);
        height: var(--media-padding-height);
        position: absolute;
        top: var(--media-padding-top);
        width: 100%;
    }
    .mNGsUM {
        transform: scale(var(--scale, 1));
        transition: var(--transform-duration, transform 0s);
    }
    .K_YxMd {
        height: 100%;
        position: relative;
        width: 100%;
    }
    wix-media-canvas {
        display: block;
        height: 100%;
    }
    .I8xA4L {
        opacity: var(
                --fill-layer-video-opacity,
                var(--fill-layer-image-opacity, 1)
        );
    }
    .I8xA4L .K_YxMd,
    .I8xA4L .dLPlxY,
    .I8xA4L .yK6aSC {
        opacity: 1;
    }
    .bX9O_S {
        clip-path: var(--fill-layer-clip);
    }
    .Z_wCwr,
    .bX9O_S {
        position: absolute;
        top: 0;
    }
    .Jxk_UL img,
    .Z_wCwr,
    .bX9O_S {
        height: 100%;
        width: 100%;
    }
    .K8MSra {
        opacity: 0;
    }
    .K8MSra,
    .YTb3b4 {
        position: absolute;
        top: 0;
    }
    .YTb3b4 {
        height: 0;
        left: 0;
        overflow: hidden;
        width: 0;
    }
    .SUz0WK {
        left: 0;
        pointer-events: var(--fill-layer-background-media-pointer-events);
        position: var(--fill-layer-background-media-position);
    }
    .FNxOn5,
    .SUz0WK,
    .m4khSP {
        height: 100%;
        top: 0;
        width: 100%;
    }
    .FNxOn5 {
        position: absolute;
    }
    .m4khSP {
        background-color: var(--fill-layer-background-overlay-color);
        opacity: var(--fill-layer-background-overlay-blend-opacity-fallback, 1);
        position: var(--fill-layer-background-overlay-position);
        transform: var(--fill-layer-background-overlay-transform);
    }
    @supports (mix-blend-mode: overlay) {
        .m4khSP {
            mix-blend-mode: var(--fill-layer-background-overlay-blend-mode);
            opacity: var(--fill-layer-background-overlay-blend-opacity, 1);
        }
    }
    ._C0cVf {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        width: 100%;
    }
    .hFwGTD {
        transform: translateY(-100%);
        transition: 0.2s ease-in;
    }
    .IQgXoP {
        transition: 0.2s;
    }
    .Nr3Nid {
        opacity: 0;
        transition: 0.2s ease-in;
    }
    .Nr3Nid.l4oO6c {
        z-index: -1 !important;
    }
    .iQuoC4 {
        opacity: 1;
        transition: 0.2s;
    }
    .CJF7A2 {
        height: auto;
    }
    .CJF7A2,
    .U4Bvut {
        position: relative;
        width: 100%;
    }
    :host(:not(.device-mobile-optimized)) .G5K6X8,
    body:not(.device-mobile-optimized) .G5K6X8 {
        margin-left: calc((100% - var(--site-width)) / 2);
        width: var(--site-width);
    }
    .xU8fqS[data-focuscycled="active"] {
        outline: 1px solid transparent;
    }
    .xU8fqS[data-focuscycled="active"]:not(:focus-within) {
        outline: 2px solid transparent;
        transition: outline 0.01s ease;
    }
    .xU8fqS ._4XcTfy {
        background-color: var(
                --screenwidth-corvid-background-color,
                rgba(var(--bg, var(--color_11, color_11)), var(--alpha-bg, 1))
        );
        border-bottom: var(--brwb, 0) solid
        var(
                --screenwidth-corvid-border-color,
                rgba(var(--brd, var(--color_15, color_15)), var(--alpha-brd, 1))
        );
        border-top: var(--brwt, 0) solid
        var(
                --screenwidth-corvid-border-color,
                rgba(var(--brd, var(--color_15, color_15)), var(--alpha-brd, 1))
        );
        bottom: 0;
        box-shadow: var(--shd, 0 0 5px rgba(0, 0, 0, 0.7));
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
    }
    .xU8fqS .gUbusX {
        background-color: rgba(
                var(--bgctr, var(--color_11, color_11)),
                var(--alpha-bgctr, 1)
        );
        border-radius: var(--rd, 0);
        bottom: var(--brwb, 0);
        top: var(--brwt, 0);
    }
    .xU8fqS .G5K6X8,
    .xU8fqS .gUbusX {
        left: 0;
        position: absolute;
        right: 0;
    }
    .xU8fqS .G5K6X8 {
        bottom: 0;
        top: 0;
    }
    :host(.device-mobile-optimized) .xU8fqS .G5K6X8,
    body.device-mobile-optimized .xU8fqS .G5K6X8 {
        left: 10px;
        right: 10px;
    }
    .SPY_vo {
        pointer-events: none;
    }
    .BmZ5pC {
        min-height: calc(100vh - var(--wix-ads-height));
        min-width: var(--site-width);
        position: var(--bg-position);
        top: var(--wix-ads-height);
    }
    .BmZ5pC,
    .nTOEE9 {
        height: 100%;
        width: 100%;
    }
    .nTOEE9 {
        overflow: hidden;
        position: relative;
    }
    .nTOEE9.sqUyGm:hover {
        cursor: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAAH6ji2bAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpmMWUzNTlkMS1hYjZhLTNkNDctYmM0ZC03MWMyZDYyMWNmNDgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6ODM3MEUzMUU4OTAyMTFFMzk3Q0FCMkFEODdDNzUzMjQiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODM3MEUzMUQ4OTAyMTFFMzk3Q0FCMkFEODdDNzUzMjQiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjk0ZTkyMTRlLThiNDQtNjc0My04MWZiLTZlYjIzYTA2ZjcwNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpmMWUzNTlkMS1hYjZhLTNkNDctYmM0ZC03MWMyZDYyMWNmNDgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4bqsJgAAACF0lEQVR42mJgQAd8fHz/gdRvRigfxGEACCA4YvwPBMgCbgABBGOAJP6LiooiZBUUFMCC7969Awk6AQQQA1bAxMTUOnXq1P8/f/78j2zdf5BDQDgoKAgiyMgItv0/1AkozlgJlHwPpDWB+AhAACFL1EJVwvBPIGZHd8P/OXPmgI0F2YdmxXQUhX///sVQqK2tDVL4DFkhF8zK2NjY/4aGhshOOMJAJAB5ZjdAADGQCpiB4Cear3uwKQR74vv372BPLFq0CKZ4GnLcdMGiFtnXmzZtQo0Bdnb2r/b29nBFMIwUjkxghby8vHfFxMQwTMQWp0YggZcvX/5HBpqamhgKQdafAQnq6en9j4+P/4/me150nzsCPfYOKrkWKvYCymcjJozPgqIYIMAYcUjKAnEcELsDbVECOpkNiO8B+buAeCEQ3yUqFllYWNYh+4Obm/u/ubn5f0tLy//QPIqM90ATHVagDHTJH5BCfn7+/xcvXvyPC9y7d+8/KHqghv4FYj0M04BxeAOkQEhI6P+vX79QDECOeBj49+/ffzk5OZih91FyP4gAGiIDooH5hIGVlRUsAXQpGMMAMh+Y1xksLCzg5QxGrAFzwAxY2GzYsIGgC48cOYIclsuwBiIbG9sCmCJFRcX/+/fvxwi/EydOwIoDGH6JLQEiA26ga1egxSY2vAUpkcKKEV5iCwVOIObBU8w8RzLYgYHaAAACg5CxaxSLgwAAAABJRU5ErkJggg==),
        auto;
    }
    .nTOEE9.C_JY0G:hover {
        cursor: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAAH6ji2bAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpmMWUzNTlkMS1hYjZhLTNkNDctYmM0ZC03MWMyZDYyMWNmNDgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0I4QkNGQTI4OTAyMTFFMzg0RDlBRkM5NDA5QjczRTEiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0I4QkNGQTE4OTAyMTFFMzg0RDlBRkM5NDA5QjczRTEiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjk0ZTkyMTRlLThiNDQtNjc0My04MWZiLTZlYjIzYTA2ZjcwNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpmMWUzNTlkMS1hYjZhLTNkNDctYmM0ZC03MWMyZDYyMWNmNDgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7hiSPZAAACGklEQVR42mJgQAd8fHz/gdRvRigfxGEACCA4YvwPBMgCbgABBGOAJP6LiooiZBUUFMCC7969Awk6AQQQA1bAxMTUOnXq1P8/f/78j2zdf5BDQDgoKAgiyMgItv0/1AkozlgJlHwPpDWB+AhAACFL1EJVwvBPIGZHd8P/OXPm/EcHUA3TURT+/fsXQ6G2tjZI4TNkhVwwK2NjY/8bGhoiO+EIA5EA5JndAAHEQCpgBoKfaL7uwaYQHLrfv38He2LRokUwxdOQ46YLFrXIYNOmTagxwM7O/tXe3h4sCYs3EEYKRyawQl5e3rtiYmL/sQH0ODUCCbx8+RJFkaamJoZCkPVnQIJ6enr/4+Pj/6P5nhfd545Aj72DSq6Fir2A8tmICeOzoCgGCDBGHJKyQBwHxO5AW5SATmYD4ntA/i4gXgjEd4mKRRYWlnXI/uDm5v5vbm7+39LS8j80jyLjPdBEhxUoA13yB6SQn5///8WLF//jAvfu3fsPih6ooX+BWA/DNGAc3gApEBIS+v/r16//hMC/f//+y8nJwQy9j2wWC4gAGiIDooH5hIGVlRUsAXQpVq98/PgRVBAwWFhYMDx69AhczkBj7RdyFpgBC5sNGzYQdOGRI0eQw3IZVpvZ2NgWwBQpKir+379/P4ZBJ06cgBUHMPwSWwJEBtxA165Ai01seAtSIoUVI7zEFgqcQMyDp5h5jmSwAwO1AQBU5q033XYWQwAAAABJRU5ErkJggg==),
        auto;
    }
    .RZQnmg {
        background-color: rgb(var(--color_11));
        border-radius: 50%;
        bottom: 12px;
        height: 40px;
        opacity: 0;
        pointer-events: none;
        position: absolute;
        right: 12px;
        width: 40px;
    }
    .RZQnmg path {
        fill: rgb(var(--color_15));
    }
    .RZQnmg:focus {
        cursor: auto;
        opacity: 1;
        pointer-events: auto;
    }
    .rYiAuL {
        cursor: pointer;
    }
    .gSXewE {
        height: 0;
        left: 0;
        overflow: hidden;
        top: 0;
        width: 0;
    }
    .OJQ_3L,
    .gSXewE {
        position: absolute;
    }
    .OJQ_3L {
        background-color: rgb(var(--color_11));
        border-radius: 300px;
        bottom: 0;
        cursor: pointer;
        height: 40px;
        margin: 16px 16px;
        opacity: 0;
        pointer-events: none;
        right: 0;
        width: 40px;
    }
    .OJQ_3L path {
        fill: rgb(var(--color_12));
    }
    .OJQ_3L:focus {
        cursor: auto;
        opacity: 1;
        pointer-events: auto;
    }
    .j7pOnl {
        box-sizing: border-box;
        height: 100%;
        width: 100%;
    }
    .BI8PVQ {
        min-height: var(--image-min-height);
        min-width: var(--image-min-width);
    }
    .BI8PVQ img,
    img.BI8PVQ {
        filter: var(--filter-effect-svg-url);
        -webkit-mask-image: var(--mask-image, none);
        mask-image: var(--mask-image, none);
        -webkit-mask-position: var(--mask-position, 0);
        mask-position: var(--mask-position, 0);
        -webkit-mask-repeat: var(--mask-repeat, no-repeat);
        mask-repeat: var(--mask-repeat, no-repeat);
        -webkit-mask-size: var(--mask-size, 100% 100%);
        mask-size: var(--mask-size, 100% 100%);
        -o-object-position: var(--object-position);
        object-position: var(--object-position);
    }
    .MazNVa {
        left: var(--left, auto);
        position: var(--position-fixed, static);
        top: var(--top, auto);
        z-index: var(--z-index, auto);
    }
    .MazNVa .BI8PVQ img {
        box-shadow: 0 0 0 #000;
        position: static;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    .MazNVa .j7pOnl {
        display: block;
        overflow: hidden;
    }
    .MazNVa .BI8PVQ {
        overflow: hidden;
    }
    .c7cMWz {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
    }
    .FVGvCX {
        height: auto;
        position: relative;
        width: 100%;
    }
    body:not(.responsive) .zK7MhX {
        align-self: start;
        grid-area: 1/1/1/1;
        height: 100%;
        justify-self: stretch;
        left: 0;
        position: relative;
    }
    :host(:not(.device-mobile-optimized)) .c7cMWz,
    body:not(.device-mobile-optimized) .c7cMWz {
        margin-left: calc((100% - var(--site-width)) / 2);
        width: var(--site-width);
    }
    .fEm0Bo .c7cMWz {
        background-color: rgba(
                var(--bg, var(--color_11, color_11)),
                var(--alpha-bg, 1)
        );
        overflow: hidden;
    }
    :host(.device-mobile-optimized) .c7cMWz,
    body.device-mobile-optimized .c7cMWz {
        left: 10px;
        right: 10px;
    }
    .PFkO7r {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
    }
    .HT5ybB {
        height: auto;
        position: relative;
        width: 100%;
    }
    body:not(.responsive) .dBAkHi {
        align-self: start;
        grid-area: 1/1/1/1;
        height: 100%;
        justify-self: stretch;
        left: 0;
        position: relative;
    }
    :host(:not(.device-mobile-optimized)) .PFkO7r,
    body:not(.device-mobile-optimized) .PFkO7r {
        margin-left: calc((100% - var(--site-width)) / 2);
        width: var(--site-width);
    }
    :host(.device-mobile-optimized) .PFkO7r,
    body.device-mobile-optimized .PFkO7r {
        left: 10px;
        right: 10px;
    }
</style>
<style
        data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[LoginSocialBar].39d1e022.min.css"
>
    .z3SJ3E {
        color: var(
                --arrow-bg-color,
                rgb(var(--fillcolor, var(--color_18, color_18)))
        );
        display: var(--arrow-display, none);
        flex-shrink: 0;
        padding-left: 7px;
        padding-right: 7px;
    }
    .c4iU97 {
        height: var(--arrow-size, 14px);
        width: var(--arrow-size, 14px);
    }
    .Cg44ot {
        display: flex;
        height: 100%;
        width: 100%;
    }
    .Cg44ot:before {
        background-color: currentColor;
        content: " ";
        display: block;
        height: 100%;
        -webkit-mask-image: var(
                --arrow-icon,
                url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 26 26'%3E%3Cpath d='M13 20.4 0 7.4l1.8-1.8L13 16.8 24.2 5.6 26 7.4z'/%3E%3C/svg%3E")
        );
        mask-image: var(
                --arrow-icon,
                url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 26 26'%3E%3Cpath d='M13 20.4 0 7.4l1.8-1.8L13 16.8 24.2 5.6 26 7.4z'/%3E%3C/svg%3E")
        );
        -webkit-mask-position: center;
        mask-position: center;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        width: 100%;
    }
    .dVkVf7 {
        display: flex;
        height: 100%;
        width: 100%;
    }
    .dVkVf7:before {
        background-color: currentColor;
        content: " ";
        display: block;
        height: 100%;
        -webkit-mask-image: var(
                --arrow-icon,
                url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 26 26'%3E%3Cpath d='M13 20.4 0 7.4l1.8-1.8L13 16.8 24.2 5.6 26 7.4z'/%3E%3C/svg%3E")
        );
        mask-image: var(
                --arrow-icon,
                url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 26 26'%3E%3Cpath d='M13 20.4 0 7.4l1.8-1.8L13 16.8 24.2 5.6 26 7.4z'/%3E%3C/svg%3E")
        );
        -webkit-mask-position: center;
        mask-position: center;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        width: 100%;
    }
    .aeyn4z {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
    }
    .qQrFOK {
        cursor: pointer;
    }
    .VDJedC {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        fill: var(--corvid-fill-color, var(--fill));
        fill-opacity: var(--fill-opacity);
        stroke: var(--corvid-stroke-color, var(--stroke));
        stroke-opacity: var(--stroke-opacity);
        stroke-width: var(--stroke-width);
        filter: var(--drop-shadow, none);
        opacity: var(--opacity);
        transform: var(--flip);
    }
    .VDJedC,
    .VDJedC svg {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
    }
    .VDJedC svg {
        height: var(--svg-calculated-height, 100%);
        margin: auto;
        padding: var(--svg-calculated-padding, 0);
        width: var(--svg-calculated-width, 100%);
    }
    .VDJedC svg:not([data-type="ugc"]) {
        overflow: visible;
    }
    .l4CAhn * {
        vector-effect: non-scaling-stroke;
    }
    .zS8yv5 {
        align-items: center;
        aspect-ratio: 1;
        display: flex;
        justify-content: center;
        letter-spacing: 0;
        overflow: hidden;
        position: relative;
        text-align: center;
    }
    .zS8yv5:before {
        font-family: Madefor, Helvetica Neue, Helvetica, Arial, メイリオ, meiryo,
        ヒラギノ角ゴ pro w3, hiragino kaku gothic pro, sans-serif;
        font-weight: 500;
    }
    .EJYIOZ:before {
        align-items: center;
        content: attr(data-initials);
        display: flex;
        justify-content: center;
    }
    .EJYIOZ:before,
    .JdvX72:before {
        height: 100%;
        position: absolute;
        width: 100%;
    }
    .JdvX72:before {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg id='Layer_1' data-name='Layer 1' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 200'%3E%3Cdefs%3E%3Cstyle%3E.cls-anonymous-icon{fill:%23969696}%3C/style%3E%3C/defs%3E%3Cellipse class='cls-anonymous-icon' cx='103.7' cy='74.3' rx='38.3' ry='38.7'/%3E%3Cpath style='fill:none' d='M0 0h200v200H0z'/%3E%3Cpath class='cls-anonymous-icon' d='M188.4 200c-7.4-43.6-44.2-76.8-88.4-76.8S19 156.4 11.6 200Z'/%3E%3C/svg%3E");
        content: "";
    }
    .Tj01hh,
    .jhxvbR {
        display: block;
        height: 100%;
        width: 100%;
    }
    .jhxvbR img {
        max-width: var(--wix-img-max-width, 100%);
    }
    .jhxvbR[data-animate-blur] img {
        filter: blur(9px);
        transition: filter 0.8s ease-in;
    }
    .jhxvbR[data-animate-blur] img[data-load-done] {
        filter: none;
    }
    .V8gwZj {
        fill: var(
                --avatar-fill-color,
                rgba(
                        var(--fillcolor, var(--color_18, color_18)),
                        var(--alpha-fillcolor, 1)
                )
        );
        fill-opacity: var(--alpha-fillcolor);
        border-radius: var(--avatarCornerRadius, 100px);
        display: var(--logged-in-avatar-display, block);
        flex-shrink: 0;
        margin-left: 7px;
        margin-right: 7px;
        overflow: hidden;
        position: inherit;
    }
    .V8gwZj.CiSb4N {
        border: var(--avatarAndArrowStrokeWidth, 0) solid
        rgba(var(--brd, var(--color_15, color_15)), var(--alpha-brd, 1));
    }
    .V8gwZj .aBATL4 {
        position: static;
    }
    .V8gwZj img,
    .V8gwZj svg {
        display: block;
        position: static !important;
    }
    .V8gwZj .ZeCqr2,
    .V8gwZj img,
    .V8gwZj svg {
        height: var(--icon-size, 26px) !important;
        width: var(--icon-size, 26px) !important;
    }
    .V8gwZj .ZeCqr2 {
        background-color: var(
                --avatar-fill-color,
                rgba(
                        var(--fillcolor, var(--color_18, color_18)),
                        var(--alpha-fillcolor, 1)
                )
        );
    }
    .V8gwZj .ZeCqr2:before {
        color: #fff;
        font-size: calc(var(--icon-size, 26px) * 0.5) !important;
        line-height: var(--icon-size, 26px) !important;
    }
    .V8gwZj.b2cSkJ {
        display: var(--logged-out-avatar-display, block);
        height: var(--logged-out-icon-size, 26px);
    }
    .V8gwZj.b2cSkJ .ZeCqr2,
    .V8gwZj.b2cSkJ img,
    .V8gwZj.b2cSkJ svg {
        height: var(--logged-out-icon-size, 26px) !important;
        width: var(--logged-out-icon-size, 26px) !important;
    }
    .V8gwZj.b2cSkJ .ZeCqr2:before {
        font-size: calc(var(--logged-out-icon-size, 26px) * 0.5) !important;
        line-height: var(--logged-out-icon-size, 26px) !important;
    }
    .Awml3x {
        fill: rgba(
                var(--fillcolor, var(--color_0, color_0)),
                var(--alpha-fillcolor, 1)
        );
        fill-opacity: var(--alpha-fillcolor);
        display: var(--logged-in-avatar-display, block);
        flex-shrink: 0;
        height: var(--icon-size, 26px);
        padding-left: 7px;
        padding-right: 7px;
        position: inherit;
    }
    .Awml3x.GodvU2 {
        height: calc(
                var(--icon-size, 26px) + var(--avatarAndArrowStrokeWidth, 0px)
        );
    }
    .Awml3x.GodvU2 .H3TGaA,
    .Awml3x.GodvU2 img,
    .Awml3x.GodvU2 svg {
        border: var(--avatarAndArrowStrokeWidth, 0) solid
        rgba(var(--brd, var(--color_15, color_15)), var(--alpha-brd, 1));
        border-radius: var(--avatarCornerRadius, 100px);
    }
    .Awml3x .ZSUPFt {
        position: static;
    }
    .Awml3x img,
    .Awml3x svg {
        display: block;
        position: static !important;
    }
    .Awml3x .H3TGaA,
    .Awml3x img,
    .Awml3x svg {
        height: var(--icon-size, 26px) !important;
        width: var(--icon-size, 26px) !important;
    }
    .Awml3x .H3TGaA {
        background-color: rgba(
                var(--fillcolor, var(--color_18, color_18)),
                var(--alpha-fillcolor, 1)
        );
    }
    .Awml3x .H3TGaA:before {
        color: #fff;
        font-size: calc(var(--icon-size, 26px) * 0.5) !important;
        line-height: var(--icon-size, 26px) !important;
    }
    .Awml3x.p6L7cw {
        display: var(--logged-out-avatar-display, block);
        height: var(--logged-out-icon-size, 26px);
    }
    .Awml3x.p6L7cw.GodvU2 {
        height: calc(
                var(--logged-out-icon-size, 26px) +
                var(--avatarAndArrowStrokeWidth, 0px)
        );
    }
    .Awml3x.p6L7cw .H3TGaA,
    .Awml3x.p6L7cw img,
    .Awml3x.p6L7cw svg {
        height: var(--logged-out-icon-size, 26px) !important;
        width: var(--logged-out-icon-size, 26px) !important;
    }
    .Awml3x.p6L7cw .H3TGaA:before {
        font-size: calc(var(--logged-out-icon-size, 26px) * 0.5) !important;
        line-height: var(--logged-out-icon-size, 26px) !important;
    }
    .p6HTCy {
        background-color: rgba(
                var(--bg-dd, var(--color_11, color_11)),
                var(--alpha-bg-dd, 1)
        );
        border: var(--brw-dd, 1px) solid
        rgba(var(--brd-dd, var(--color_15, color_15)), var(--alpha-brd-dd, 1));
        border-radius: var(--rd-dd, 0);
        box-shadow: var(--shd-dd, 0 0 0 transparent);
        box-sizing: border-box;
        display: none;
        font: var(--fnt, var(--font_8));
        font-size: var(--fnt-size-dd, 15px);
        inset-inline-end: 14px;
        max-width: 300px;
        min-width: 100px;
        padding: 10px 0;
        position: absolute;
        z-index: 99999;
    }
    .p6HTCy:not(.RZMHje) {
        top: calc(100% + var(--brw, 0px));
    }
    .p6HTCy.RZMHje {
        opacity: 0;
    }
    .p6HTCy.RZMHje.KXBgPq {
        opacity: 1;
    }
    .p6HTCy.jO2Fxa {
        display: block;
    }
    .p6HTCy hr {
        margin: 5px 20px;
        opacity: 0.4;
    }
    .s01nH_ {
        --force-state-metadata: selected;
    }
    .lsOYYV {
        border-radius: var(--rd-dd, 0);
        color: rgb(var(--txt-dd, var(--color_15, color_15)));
        cursor: pointer;
        display: flex;
        justify-content: var(--menu-items-alignment, flex-start);
        line-height: 260%;
        padding: 0 20px;
    }
    .lsOYYV.s01nH_ {
        color: rgb(var(--txt-slct-dd, var(--color_19, color_19)));
    }
    .lsOYYV:hover {
        color: rgb(var(--txth-dd, var(--color_19, color_19)));
    }
    .lsOYYV .HZf5Ym {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    .lsOYYV .e1wX6W {
        opacity: 0.6;
    }
    .e1wX6W {
        padding-inline-start: 12px;
    }
    .XVPL8q {
        align-self: center;
        display: flex;
        flex-shrink: 0;
        padding-bottom: 6px;
        padding-inline-end: 3px;
        padding-top: 6px;
        padding-inline-start: 14px;
    }
    .XVPL8q ._3sKSe {
        height: 21px;
        position: relative;
        width: 21px;
    }
    .XVPL8q ._3sKSe svg {
        fill: rgba(
                var(--fillcolor, var(--color_0, color_0)),
                var(--alpha-fillcolor, 1)
        );
        fill-opacity: var(--alpha-fillcolor);
        height: 21px;
        width: 21px;
    }
    .XVPL8q ._SWmiG {
        margin-inline-end: 10px;
    }
    .XVPL8q .NUcgT6 {
        inset-inline-start: 50%;
    }
    .NUcgT6 {
        background-color: rgba(
                var(--badge-bg, 226, 28, 33),
                var(--alpha-badge-bg, 1)
        );
        border-radius: 10px;
        color: rgb(var(--badge-txt, var(--color_11, color_11)));
        display: block;
        height: 18px;
        letter-spacing: 1px;
        line-height: 18px;
        padding-left: 6px;
        padding-right: 6px;
        pointer-events: none;
        text-align: center;
        top: 0;
    }
    .NUcgT6,
    .v7QsJY {
        position: absolute;
    }
    .v7QsJY {
        cursor: pointer;
        font-size: var(--fnt-size-dd, 15px);
        height: 100%;
        left: 0;
        opacity: 0;
        width: 100%;
    }
    .YkbuRz {
        align-items: center;
        display: flex;
        height: 100%;
        max-width: 100%;
        position: relative;
    }
    .G6GNlz {
        display: var(--icons-display, block);
    }
    .bLcQyE .K0sbQf {
        padding-inline-start: var(--user-section-padding-start, 7px);
    }
    .K0sbQf {
        align-items: center;
        cursor: pointer;
        display: flex;
        min-width: 0;
        padding: 6px 7px;
        position: relative;
        text-align: center;
        white-space: nowrap;
    }
    .K0sbQf,
    .K0sbQf .ukB2Bd {
        color: rgb(var(--txt, var(--color_18, color_18)));
        font: var(--fnt, var(--font_8));
    }
    .K0sbQf .ukB2Bd {
        display: var(--logged-in-text-display, block);
        min-width: 60px;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .K0sbQf .ukB2Bd,
    .K0sbQf .zhlV_J {
        padding-left: 7px;
        padding-right: 7px;
    }
    .K0sbQf .zhlV_J {
        color: rgb(var(--fillcolor, var(--color_18, color_18)));
        display: var(--arrow-display, none);
        flex-shrink: 0;
    }
    .K0sbQf .zhlV_J .m11Au3 {
        height: var(--arrow-size, 14px);
        width: var(--arrow-size, 14px);
    }
    .K0sbQf:hover .m11Au3,
    .K0sbQf:hover .ukB2Bd {
        color: rgb(var(--txth, var(--color_19, color_19)));
    }
    #SITE_CONTAINER.focus-ring-active.keyboard-tabbing-on
    .K0sbQf.Tmx_Fq:focus-within {
        outline: 2px solid #116dff;
        outline-offset: 1px;
    }
    .Vc2GM7 {
        display: var(--greeting-text-display, none);
    }
    .eUGVn8 {
        align-items: center;
        border-radius: var(--rd, 0);
        color: rgb(var(--txt, var(--color_18, color_18)));
        cursor: pointer;
        display: flex;
        font: var(--fnt, var(--font_8));
        min-width: 0;
        padding: 6px 7px;
        position: relative;
        white-space: nowrap;
    }
    .eUGVn8 .LcZX5c {
        display: var(--logged-out-text-display, block);
        padding-left: 7px;
        padding-right: 7px;
    }
    .eUGVn8:hover .LcZX5c {
        opacity: 0.7;
    }
    .pGZMn2 {
        --display: flex;
        --line-arrow-icon: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 26 26'%3E%3Cpath d='M13 20.4 0 7.4l1.8-1.8L13 16.8 24.2 5.6 26 7.4z'/%3E%3C/svg%3E");
        --full-arrow-icon: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"><path d="M13 18.7 26 7.3H0z"/></svg>');
        align-items: center;
        background-color: rgba(
                var(--bg, var(--color_11, color_11)),
                var(--alpha-bg, 1)
        );
        border: var(--brw, 0) solid
        rgba(var(--brd, var(--color_15, color_15)), var(--alpha-brd, 1));
        border-radius: var(--rd, 0);
        box-shadow: var(--shd, 0 0 0 transparent);
        box-sizing: border-box;
        display: var(--display);
    }
</style>
<style
        data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[SearchButton].742509c2.min.css"
>
    .DPAltb {
        background: var(--background);
        border-bottom: var(--border-bottom);
        border-bottom-left-radius: var(--border-bottom-left-radius);
        border-bottom-right-radius: var(--border-bottom-right-radius);
        border-left: var(--border-left);
        border-right: var(--border-right);
        border-top: var(--border-top);
        border-top-left-radius: var(--border-top-left-radius);
        border-top-right-radius: var(--border-top-right-radius);
        box-shadow: var(--box-shadow);
        box-sizing: border-box;
        cursor: pointer;
        direction: var(--btn-direction);
        display: block;
        height: 100%;
        min-height: 10px;
        min-width: var(--btn-min-width);
        padding-bottom: var(--padding-bottom);
        padding-left: var(--padding-left);
        padding-right: var(--padding-right);
        padding-top: var(--padding-top);
        touch-action: manipulation;
        width: 100%;
    }
    .DPAltb.HJQL50:not(:hover):not(:disabled) {
        border-color: var(--corvid-border-color, initial);
    }
    .DPAltb.JYQq3z:not(:hover):not(:disabled) {
        background-color: var(--corvid-background-color, var(--background));
    }
    .DPAltb [data-preview="hover"],
    .DPAltb:hover {
        background: var(--hover-background, var(--background));
        border-bottom: var(--hover-border-bottom, var(--border-bottom));
        border-bottom-left-radius: var(
                --hover-border-bottom-left-radius,
                var(--border-bottom-left-radius)
        );
        border-bottom-right-radius: var(
                --hover-border-bottom-right-radius,
                var(--border-bottom-right-radius)
        );
        border-left: var(--hover-border-left, var(--border-left));
        border-right: var(--hover-border-right, var(--border-right));
        border-top: var(--hover-border-top, var(--border-top));
        border-top-left-radius: var(
                --hover-border-top-left-radius,
                var(--border-top-left-radius)
        );
        border-top-right-radius: var(
                --hover-border-top-right-radius,
                var(--border-top-right-radius)
        );
        box-shadow: var(--hover-box-shadow, var(--box-shadow));
        padding-bottom: var(--hover-padding-bottom, var(--padding-bottom));
        padding-left: var(--hover-padding-left, var(--padding-left));
        padding-right: var(--hover-padding-right, var(--padding-right));
        padding-top: var(--hover-padding-top, var(--padding-top));
    }
    .DPAltb.lpKmSx:hover:not(:disabled) {
        border-color: var(--corvid-hover-border-color, initial);
    }
    .DPAltb.bk6HFS:hover:not(:disabled) {
        background-color: var(
                --corvid-hover-background-color,
                var(--hover-background, var(--background))
        );
    }
    .DPAltb [data-preview="disabled"],
    .DPAltb:disabled {
        background: var(--disabled-background, var(--background));
        border-bottom: var(--disabled-border-bottom, var(--border-bottom));
        border-bottom-left-radius: var(
                --disabled-border-bottom-left-radius,
                var(--border-bottom-left-radius)
        );
        border-bottom-right-radius: var(
                --disabled-border-bottom-right-radius,
                var(--border-bottom-right-radius)
        );
        border-left: var(--disabled-border-left, var(--border-left));
        border-right: var(--disabled-border-right, var(--border-right));
        border-top: var(--disabled-border-top, var(--border-top));
        border-top-left-radius: var(
                --disabled-border-top-left-radius,
                var(--border-top-left-radius)
        );
        border-top-right-radius: var(
                --disabled-border-top-right-radius,
                var(--border-top-right-radius)
        );
        box-shadow: var(--disabled-box-shadow, var(--box-shadow));
        cursor: default;
        padding-bottom: var(--disabled-padding-bottom, var(--padding-bottom));
        padding-left: var(--disabled-padding-left, var(--padding-left));
        padding-right: var(--disabled-padding-right, var(--padding-right));
        padding-top: var(--disabled-padding-top, var(--padding-top));
    }
    .DPAltb.ivX9Rv:disabled:not(:hover) {
        border-color: var(--corvid-disabled-border-color, initial);
    }
    .DPAltb.E9JJpO:disabled:not(:hover) {
        background-color: var(
                --corvid-disabled-background-color,
                var(--disabled-background, var(--background))
        );
    }
    .gIbEBg {
        background-color: var(--text-highlight, transparent);
        color: var(--color);
        direction: var(--direction);
        display: var(--label-display);
        font: var(--font, var(--font_8));
        letter-spacing: var(--letter-spacing);
        line-height: var(--line-height);
        max-width: 100%;
        min-width: 1.8em;
        overflow: var(--overflow, hidden);
        text-align: var(--text-align, revert);
        text-decoration-line: var(--text-decoration);
        text-overflow: var(--label-text-overflow);
        text-shadow: var(--text-outline), var(--text-shadow);
        text-transform: var(--text-transform);
        transition: inherit;
        white-space: var(--label-white-space);
    }
    .DPAltb.spiv_Z:not(:hover):not(:disabled) .gIbEBg {
        color: var(--corvid-color, var(--color));
    }
    .DPAltb [data-preview="hover"] .gIbEBg,
    .DPAltb:hover .gIbEBg {
        background-color: var(
                --hover-text-highlight,
                var(--text-highlight, transparent)
        );
        color: var(--hover-color, var(--color));
        direction: var(--hover-direction, var(--direction));
        display: var(--hover-label-display, var(--label-display));
        font: var(--hover-font, var(--font));
        letter-spacing: var(--hover-letter-spacing, var(--letter-spacing));
        line-height: var(--hover-line-height, var(--line-height));
        text-align: var(--hover-text-align, var(--text-align, revert));
        text-decoration-line: var(
                --hover-text-decoration,
                var(--text-decoration)
        );
        text-shadow: var(--hover-text-outline, var(--text-outline)),
        var(--hover-text-shadow, var(--text-shadow));
        text-transform: var(--hover-text-transform, var(--text-transform));
    }
    .DPAltb.pkDIbl:hover:not(:disabled) .gIbEBg {
        color: var(--corvid-hover-color, var(--hover-color, var(--color)));
    }
    .DPAltb [data-preview="disabled"] .gIbEBg,
    .DPAltb:disabled .gIbEBg {
        background-color: var(
                --disabled-text-highlight,
                var(--text-highlight, transparent)
        );
        color: var(--disabled-color, var(--color));
        direction: var(--disabled-direction, var(--direction));
        display: var(--disabled-label-display, var(--label-display));
        font: var(--disabled-font, var(--font));
        letter-spacing: var(--disabled-letter-spacing, var(--letter-spacing));
        line-height: var(--disabled-line-height, var(--line-height));
        text-align: var(--disabled-text-align, var(--text-align, revert));
        text-decoration-line: var(
                --disabled-text-decoration,
                var(--text-decoration)
        );
        text-shadow: var(--disabled-text-outline, var(--text-outline)),
        var(--disabled-text-shadow, var(--text-shadow));
        text-transform: var(--disabled-text-transform, var(--text-transform));
    }
    .DPAltb.FOmtsV:disabled:not(:hover) .gIbEBg {
        color: var(--corvid-disabled-color, var(--disabled-color, var(--color)));
    }
    .OoFUKI {
        box-sizing: border-box;
        color: #000;
        text-decoration: none;
    }
    .wpLgnL {
        align-items: var(--container-align-items);
        display: flex;
        flex-basis: auto;
        flex-direction: var(--container-flex-direction);
        flex-grow: 1;
        gap: var(--content-gap, "0px");
        height: 100%;
        justify-content: var(--container-justify-content);
        overflow: hidden;
        transition: all 0.4s ease, visibility 0s;
        width: 100%;
    }
    .HvvH6i {
        fill: var(--icon-color);
        display: var(--icon-display);
        flex-shrink: 0;
        height: var(--icon-size);
        min-width: 1px;
        order: var(--icon-order, 0);
        transform: rotate(var(--icon-rotation));
        transition: inherit;
        width: var(--icon-size);
    }
    .DPAltb.EENh5d:not(:hover):not(:disabled) .HvvH6i {
        fill: var(--corvid-icon-color, var(--icon-color));
    }
    .DPAltb [data-preview="hover"] .HvvH6i,
    .DPAltb:hover .HvvH6i {
        fill: var(--hover-icon-color, var(--icon-color));
        display: var(--hover-icon-display, var(--icon-display));
        height: var(--hover-icon-size, var(--icon-size));
        transform: rotate(var(--hover-icon-rotation, var(--icon-rotation)));
        width: var(--hover-icon-size, var(--icon-size));
    }
    .DPAltb.tN8hsm:hover:not(:disabled) .HvvH6i {
        fill: var(
                --corvid-hover-icon-color,
                var(--hover-icon-color, var(--icon-color))
        );
    }
    .DPAltb [data-preview="disabled"] .HvvH6i,
    .DPAltb:disabled .HvvH6i {
        fill: var(--disabled-icon-color, var(--icon-color));
        display: var(--disabled-icon-display, var(--icon-display));
        height: var(--disabled-icon-size, var(--icon-size));
        transform: rotate(var(--disabled-icon-rotation, var(--icon-rotation)));
        width: var(--disabled-icon-size, var(--icon-size));
    }
    .DPAltb.lVrFcO:disabled:not(:hover) .HvvH6i {
        fill: var(
                --corvid-disabled-icon-color,
                var(--disabled-icon-color, var(--icon-color))
        );
    }
    .HvvH6i svg,
    .HvvH6i > span {
        display: flex;
        height: inherit;
        width: inherit;
    }
    .bkrqiN {
        min-height: 0;
        min-width: 0;
    }
</style>
<style
        data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[TextInput].de084f5c.min.css"
>
    #SITE_CONTAINER.focus-ring-active.keyboard-tabbing-on .KvoMHf:focus {
        outline: 2px solid #116dff;
        outline-offset: 1px;
    }
    .KvoMHf.ErucfC[type="number"]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        -moz-appearance: none;
        margin: 0;
    }
    .KvoMHf[disabled] {
        pointer-events: none;
    }
    .MpKiNN {
        --display: flex;
        direction: var(--direction);
        display: var(--display);
        flex-direction: column;
        min-height: 25px;
        position: relative;
        text-align: var(--align, start);
    }
    .MpKiNN .pUnTVX {
        height: var(--inputHeight);
        position: relative;
    }
    .MpKiNN .eXvLsN {
        align-items: center;
        display: flex;
        font: var(
                --fntprefix,
                normal normal normal 16px/1.4em helvetica-w01-roman
        );
        justify-content: center;
        left: 0;
        max-height: 100%;
        min-height: 100%;
        position: absolute;
        top: 0;
        width: 50px;
    }
    .MpKiNN .KvoMHf,
    .MpKiNN .eXvLsN {
        color: var(--corvid-color, rgb(var(--txt, var(--color_15, color_15))));
    }
    .MpKiNN .KvoMHf {
        -webkit-appearance: none;
        -moz-appearance: none;
        background-color: var(
                --corvid-background-color,
                rgba(var(--bg, 255, 255, 255), var(--alpha-bg, 1))
        );
        border-color: var(
                --corvid-border-color,
                rgba(var(--brd, 227, 227, 227), var(--alpha-brd, 1))
        );
        border-radius: var(--corvid-border-radius, var(--rd, 0));
        border-style: solid;
        border-width: var(--corvid-border-width, var(--brw, 1px));
        box-shadow: var(--shd, 0 0 0 transparent);
        box-sizing: border-box !important;
        direction: var(--inputDirection, "inherit");
        font: var(--fnt, var(--font_8));
        margin: 0;
        max-width: 100%;
        min-height: var(--inputHeight);
        padding: var(--textPadding);
        padding-inline-end: var(--textPadding_end);
        padding-inline-start: var(--textPadding_start);
        text-align: var(--inputAlign, "inherit");
        text-overflow: ellipsis;
        width: 100%;
    }
    .MpKiNN .KvoMHf[type="number"] {
        -webkit-appearance: textfield;
        -moz-appearance: textfield;
        width: 100%;
    }
    .MpKiNN .KvoMHf::-moz-placeholder {
        color: rgb(var(--txt2, var(--color_15, color_15)));
    }
    .MpKiNN .KvoMHf:-ms-input-placeholder {
        color: rgb(var(--txt2, var(--color_15, color_15)));
    }
    .MpKiNN .KvoMHf::placeholder {
        color: rgb(var(--txt2, var(--color_15, color_15)));
    }
    .MpKiNN .KvoMHf:hover {
        background-color: rgba(var(--bgh, 255, 255, 255), var(--alpha-bgh, 1));
        border-color: rgba(var(--brdh, 163, 217, 246), var(--alpha-brdh, 1));
        border-style: solid;
        border-width: var(--brwh, 1px);
    }
    .MpKiNN .KvoMHf:disabled {
        background-color: rgba(var(--bgd, 204, 204, 204), var(--alpha-bgd, 1));
        border-color: rgba(var(--brdd, 163, 217, 246), var(--alpha-brdd, 1));
        border-style: solid;
        border-width: var(--brwd, 1px);
        color: rgb(var(--txtd, 255, 255, 255));
    }
    .MpKiNN:not(.LyB02C) .KvoMHf:focus {
        background-color: rgba(var(--bgf, 255, 255, 255), var(--alpha-bgf, 1));
        border-color: rgba(var(--brdf, 163, 217, 246), var(--alpha-brdf, 1));
        border-style: solid;
        border-width: var(--brwf, 1px);
    }
    .MpKiNN.LyB02C .KvoMHf:invalid {
        background-color: rgba(var(--bge, 255, 255, 255), var(--alpha-bge, 1));
        border-color: rgba(var(--brde, 163, 217, 246), var(--alpha-brde, 1));
        border-style: solid;
        border-width: var(--brwe, 1px);
    }
    .MpKiNN.LyB02C .KvoMHf:not(:invalid):focus {
        background-color: rgba(var(--bgf, 255, 255, 255), var(--alpha-bgf, 1));
        border-color: rgba(var(--brdf, 163, 217, 246), var(--alpha-brdf, 1));
        border-style: solid;
        border-width: var(--brwf, 1px);
    }
    .MpKiNN .wPeA6j {
        display: none;
    }
    .MpKiNN.qzvPmW .wPeA6j {
        color: rgb(var(--txtlbl, var(--color_15, color_15)));
        direction: var(--labelDirection, inherit);
        display: inline-block;
        font: var(--fntlbl, var(--font_8));
        line-height: 1;
        margin-bottom: var(--labelMarginBottom);
        padding-inline-end: var(--labelPadding_end);
        padding-inline-start: var(--labelPadding_start);
        text-align: var(--labelAlign, inherit);
        word-break: break-word;
    }
    .MpKiNN.qzvPmW.lPl_oN .wPeA6j:after {
        color: rgba(var(--txtlblrq, 0, 0, 0), var(--alpha-txtlblrq, 0));
        content: " *";
        display: var(--requiredIndicationDisplay, none);
    }
    .ZXdXNL {
        --display: flex;
        direction: var(--direction);
        display: var(--display);
        flex-direction: column;
        justify-content: var(--align, start);
        text-align: var(--align, start);
    }
    .ZXdXNL .pUnTVX {
        display: flex;
        flex: 1;
        flex-direction: column;
        position: relative;
    }
    .ZXdXNL .eXvLsN {
        align-items: center;
        display: flex;
        font: var(
                --fntprefix,
                normal normal normal 16px/1.4em helvetica-w01-roman
        );
        justify-content: center;
        left: 0;
        max-height: 100%;
        position: absolute;
        top: 0;
        width: 50px;
    }
    .ZXdXNL .KvoMHf,
    .ZXdXNL .eXvLsN {
        color: var(--corvid-color, rgb(var(--txt, var(--color_15, color_15))));
        min-height: 100%;
    }
    .ZXdXNL .KvoMHf {
        -webkit-appearance: none;
        -moz-appearance: none;
        background-color: var(
                --corvid-background-color,
                rgba(var(--bg, 255, 255, 255), var(--alpha-bg, 1))
        );
        border-color: var(
                --corvid-border-color,
                rgba(var(--brd, 227, 227, 227), var(--alpha-brd, 1))
        );
        border-radius: var(--corvid-border-radius, var(--rd, 0));
        border-style: solid;
        border-width: var(--corvid-border-width, var(--brw, 1px));
        box-shadow: var(--shd, 0 0 0 transparent);
        box-sizing: border-box !important;
        direction: var(--inputDirection, "inherit");
        flex: 1;
        font: var(--fnt, var(--font_8));
        margin: 0;
        padding: var(--textPadding);
        padding-inline-end: var(--textPadding_end);
        padding-inline-start: var(--textPadding_start);
        text-align: var(--inputAlign, "inherit");
        text-overflow: ellipsis;
        width: 100%;
    }
    .ZXdXNL .KvoMHf[type="number"] {
        -webkit-appearance: textfield;
        -moz-appearance: textfield;
    }
    .ZXdXNL .KvoMHf::-moz-placeholder {
        color: rgb(var(--txt2, var(--color_15, color_15)));
    }
    .ZXdXNL .KvoMHf:-ms-input-placeholder {
        color: rgb(var(--txt2, var(--color_15, color_15)));
    }
    .ZXdXNL .KvoMHf::placeholder {
        color: rgb(var(--txt2, var(--color_15, color_15)));
    }
    .ZXdXNL .KvoMHf:hover {
        background-color: rgba(var(--bgh, 255, 255, 255), var(--alpha-bgh, 1));
        border-color: rgba(var(--brdh, 163, 217, 246), var(--alpha-brdh, 1));
        border-style: solid;
        border-width: var(--brwh, 1px);
    }
    .ZXdXNL .KvoMHf:disabled {
        background-color: rgba(var(--bgd, 204, 204, 204), var(--alpha-bgd, 1));
        border-color: rgba(var(--brdd, 163, 217, 246), var(--alpha-brdd, 1));
        border-style: solid;
        border-width: var(--brwd, 1px);
        color: rgb(var(--txtd, 255, 255, 255));
    }
    .ZXdXNL:not(.LyB02C) .KvoMHf:focus {
        background-color: rgba(var(--bgf, 255, 255, 255), var(--alpha-bgf, 1));
        border-color: rgba(var(--brdf, 163, 217, 246), var(--alpha-brdf, 1));
        border-style: solid;
        border-width: var(--brwf, 1px);
    }
    .ZXdXNL.LyB02C .KvoMHf:invalid {
        background-color: rgba(var(--bge, 255, 255, 255), var(--alpha-bge, 1));
        border-color: rgba(var(--brde, 163, 217, 246), var(--alpha-brde, 1));
        border-style: solid;
        border-width: var(--brwe, 1px);
    }
    .ZXdXNL.LyB02C .KvoMHf:not(:invalid):focus {
        background-color: rgba(var(--bgf, 255, 255, 255), var(--alpha-bgf, 1));
        border-color: rgba(var(--brdf, 163, 217, 246), var(--alpha-brdf, 1));
        border-style: solid;
        border-width: var(--brwf, 1px);
    }
    .ZXdXNL .wPeA6j {
        display: none;
    }
    .ZXdXNL.qzvPmW .wPeA6j {
        color: rgb(var(--txtlbl, var(--color_15, color_15)));
        direction: var(--labelDirection, inherit);
        display: inline-block;
        font: var(--fntlbl, var(--font_8));
        line-height: 1;
        margin-bottom: var(--labelMarginBottom);
        padding-inline-end: var(--labelPadding_end);
        padding-inline-start: var(--labelPadding_start);
        text-align: var(--labelAlign, inherit);
        word-break: break-word;
    }
    .ZXdXNL.qzvPmW.lPl_oN .wPeA6j:after {
        color: rgba(var(--txtlblrq, 0, 0, 0), var(--alpha-txtlblrq, 0));
        content: " *";
        display: var(--requiredIndicationDisplay, none);
    }
    .wBdYEC {
        align-items: center;
        color: rgb(var(--errorTextColor, #ff4040));
        direction: var(--errorDirection);
        display: flex;
        flex-direction: row;
        gap: 4px;
        justify-content: var(--errorAlign, inherit);
        padding: 8px 0 0;
    }
    .wBdYEC .cfVDAB {
        flex: none;
        flex-grow: 0;
        order: 0;
    }
    .wBdYEC .YCipIB {
        display: inline-block;
        flex-grow: 0;
        font: var(--errorTextFont, var(--font_8));
        line-height: 1;
        order: 1;
        word-break: break-word;
    }
</style>
<style
        data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[StripColumnsContainer_Default].74034efe.min.css"
>
    :host(:not(.device-mobile-optimized)) .CohWsy,
    body:not(.device-mobile-optimized) .CohWsy {
        display: flex;
    }
    :host(:not(.device-mobile-optimized)) .V5AUxf,
    body:not(.device-mobile-optimized) .V5AUxf {
        -moz-column-gap: var(--margin);
        column-gap: var(--margin);
        direction: var(--direction);
        display: flex;
        margin: 0 auto;
        position: relative;
        width: calc(100% - var(--padding) * 2);
    }
    :host(:not(.device-mobile-optimized)) .V5AUxf > *,
    body:not(.device-mobile-optimized) .V5AUxf > * {
        direction: ltr;
        flex: var(--column-flex) 1 0%;
        left: 0;
        margin-bottom: var(--padding);
        margin-top: var(--padding);
        min-width: 0;
        position: relative;
        top: 0;
    }
    :host(.device-mobile-optimized) .V5AUxf,
    body.device-mobile-optimized .V5AUxf {
        display: block;
        padding-bottom: var(--padding-y);
        padding-left: var(--padding-x, 0);
        padding-right: var(--padding-x, 0);
        padding-top: var(--padding-y);
        position: relative;
    }
    :host(.device-mobile-optimized) .V5AUxf > *,
    body.device-mobile-optimized .V5AUxf > * {
        margin-bottom: var(--margin);
        position: relative;
    }
    :host(.device-mobile-optimized) .V5AUxf > :first-child,
    body.device-mobile-optimized .V5AUxf > :first-child {
        margin-top: var(--firstChildMarginTop, 0);
    }
    :host(.device-mobile-optimized) .V5AUxf > :last-child,
    body.device-mobile-optimized .V5AUxf > :last-child {
        margin-bottom: var(--lastChildMarginBottom);
    }
    .LIhNy3 {
        backface-visibility: hidden;
    }
    .jhxvbR,
    .mtrorN {
        display: block;
        height: 100%;
        width: 100%;
    }
    .jhxvbR img {
        max-width: var(--wix-img-max-width, 100%);
    }
    .jhxvbR[data-animate-blur] img {
        filter: blur(9px);
        transition: filter 0.8s ease-in;
    }
    .jhxvbR[data-animate-blur] img[data-load-done] {
        filter: none;
    }
    .if7Vw2 {
        height: 100%;
        left: 0;
        -webkit-mask-image: var(--mask-image, none);
        mask-image: var(--mask-image, none);
        -webkit-mask-position: var(--mask-position, 0);
        mask-position: var(--mask-position, 0);
        -webkit-mask-repeat: var(--mask-repeat, no-repeat);
        mask-repeat: var(--mask-repeat, no-repeat);
        -webkit-mask-size: var(--mask-size, 100%);
        mask-size: var(--mask-size, 100%);
        overflow: hidden;
        pointer-events: var(--fill-layer-background-media-pointer-events);
        position: absolute;
        top: 0;
        width: 100%;
    }
    .if7Vw2.f0uTJH {
        clip: rect(0, auto, auto, 0);
    }
    .if7Vw2 .i1tH8h {
        height: 100%;
        position: absolute;
        top: 0;
        width: 100%;
    }
    .if7Vw2 .DXi4PB {
        height: var(--fill-layer-image-height, 100%);
        opacity: var(--fill-layer-image-opacity);
    }
    .if7Vw2 .DXi4PB img {
        height: 100%;
        width: 100%;
    }
    @supports (-webkit-hyphens: none) {
        .if7Vw2.f0uTJH {
            clip: auto;
            -webkit-clip-path: inset(0);
        }
    }
    .wG8dni {
        height: 100%;
    }
    .tcElKx {
        background-color: var(--bg-overlay-color);
        background-image: var(--bg-gradient);
        transition: var(--inherit-transition);
    }
    .ImALHf,
    .Ybjs9b {
        opacity: var(--fill-layer-video-opacity);
    }
    .UWmm3w {
        bottom: var(--media-padding-bottom);
        height: var(--media-padding-height);
        position: absolute;
        top: var(--media-padding-top);
        width: 100%;
    }
    .Yjj1af {
        transform: scale(var(--scale, 1));
        transition: var(--transform-duration, transform 0s);
    }
    .ImALHf {
        height: 100%;
        position: relative;
        width: 100%;
    }
    wix-media-canvas {
        display: block;
        height: 100%;
    }
    .KCM6zk {
        opacity: var(
                --fill-layer-video-opacity,
                var(--fill-layer-image-opacity, 1)
        );
    }
    .KCM6zk .DXi4PB,
    .KCM6zk .ImALHf,
    .KCM6zk .Ybjs9b {
        opacity: 1;
    }
    ._uqPqy {
        clip-path: var(--fill-layer-clip);
    }
    ._uqPqy,
    .eKyYhK {
        position: absolute;
        top: 0;
    }
    ._uqPqy,
    .eKyYhK,
    .x0mqQS img {
        height: 100%;
        width: 100%;
    }
    .pnCr6P {
        opacity: 0;
    }
    .blf7sp,
    .pnCr6P {
        position: absolute;
        top: 0;
    }
    .blf7sp {
        height: 0;
        left: 0;
        overflow: hidden;
        width: 0;
    }
    .rWP3Gv {
        left: 0;
        pointer-events: var(--fill-layer-background-media-pointer-events);
        position: var(--fill-layer-background-media-position);
    }
    .Tr4n3d,
    .rWP3Gv,
    .wRqk6s {
        height: 100%;
        top: 0;
        width: 100%;
    }
    .wRqk6s {
        position: absolute;
    }
    .Tr4n3d {
        background-color: var(--fill-layer-background-overlay-color);
        opacity: var(--fill-layer-background-overlay-blend-opacity-fallback, 1);
        position: var(--fill-layer-background-overlay-position);
        transform: var(--fill-layer-background-overlay-transform);
    }
    @supports (mix-blend-mode: overlay) {
        .Tr4n3d {
            mix-blend-mode: var(--fill-layer-background-overlay-blend-mode);
            opacity: var(--fill-layer-background-overlay-blend-opacity, 1);
        }
    }
    .VXAmO2 {
        --divider-pin-height__: min(
                1,
                calc(var(--divider-layers-pin-factor__) + 1)
        );
        --divider-pin-layer-height__: var(--divider-layers-pin-factor__);
        --divider-pin-border__: min(
                1,
                calc(var(--divider-layers-pin-factor__) / -1 + 1)
        );
        height: calc(
                var(--divider-height__) + var(--divider-pin-height__) *
                var(--divider-layers-size__) * var(--divider-layers-y__)
        );
    }
    .VXAmO2,
    .VXAmO2 .dy3w_9 {
        left: 0;
        position: absolute;
        width: 100%;
    }
    .VXAmO2 .dy3w_9 {
        --divider-layer-i__: var(--divider-layer-i, 0);
        background-position: left
        calc(
                50% + var(--divider-offset-x__) + var(--divider-layers-x__) *
                var(--divider-layer-i__)
        )
        bottom;
        background-repeat: repeat-x;
        border-bottom-style: solid;
        border-bottom-width: calc(
                var(--divider-pin-border__) * var(--divider-layer-i__) *
                var(--divider-layers-y__)
        );
        height: calc(
                var(--divider-height__) + var(--divider-pin-layer-height__) *
                var(--divider-layer-i__) * var(--divider-layers-y__)
        );
        opacity: calc(
                1 - var(--divider-layer-i__) / (var(--divider-layer-i__) + 1)
        );
    }
    .UORcXs {
        --divider-height__: var(--divider-top-height, auto);
        --divider-offset-x__: var(--divider-top-offset-x, 0px);
        --divider-layers-size__: var(--divider-top-layers-size, 0);
        --divider-layers-y__: var(--divider-top-layers-y, 0px);
        --divider-layers-x__: var(--divider-top-layers-x, 0px);
        --divider-layers-pin-factor__: var(--divider-top-layers-pin-factor, 0);
        border-top: var(--divider-top-padding, 0) solid
        var(--divider-top-color, currentColor);
        opacity: var(--divider-top-opacity, 1);
        top: 0;
        transform: var(--divider-top-flip, scaleY(-1));
    }
    .UORcXs .dy3w_9 {
        background-image: var(--divider-top-image, none);
        background-size: var(--divider-top-size, contain);
        border-color: var(--divider-top-color, currentColor);
        bottom: 0;
        filter: var(--divider-top-filter, none);
    }
    .UORcXs .dy3w_9[data-divider-layer="1"] {
        display: var(--divider-top-layer-1-display, block);
    }
    .UORcXs .dy3w_9[data-divider-layer="2"] {
        display: var(--divider-top-layer-2-display, block);
    }
    .UORcXs .dy3w_9[data-divider-layer="3"] {
        display: var(--divider-top-layer-3-display, block);
    }
    .Io4VUz {
        --divider-height__: var(--divider-bottom-height, auto);
        --divider-offset-x__: var(--divider-bottom-offset-x, 0px);
        --divider-layers-size__: var(--divider-bottom-layers-size, 0);
        --divider-layers-y__: var(--divider-bottom-layers-y, 0px);
        --divider-layers-x__: var(--divider-bottom-layers-x, 0px);
        --divider-layers-pin-factor__: var(--divider-bottom-layers-pin-factor, 0);
        border-bottom: var(--divider-bottom-padding, 0) solid
        var(--divider-bottom-color, currentColor);
        bottom: 0;
        opacity: var(--divider-bottom-opacity, 1);
        transform: var(--divider-bottom-flip, none);
    }
    .Io4VUz .dy3w_9 {
        background-image: var(--divider-bottom-image, none);
        background-size: var(--divider-bottom-size, contain);
        border-color: var(--divider-bottom-color, currentColor);
        bottom: 0;
        filter: var(--divider-bottom-filter, none);
    }
    .Io4VUz .dy3w_9[data-divider-layer="1"] {
        display: var(--divider-bottom-layer-1-display, block);
    }
    .Io4VUz .dy3w_9[data-divider-layer="2"] {
        display: var(--divider-bottom-layer-2-display, block);
    }
    .Io4VUz .dy3w_9[data-divider-layer="3"] {
        display: var(--divider-bottom-layer-3-display, block);
    }
</style>
<style
        data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[AppWidget_Classic].4049eab0.min.css"
>
    @-moz-document url-prefix() {
        :invalid {
            box-shadow: none;
        }
        :-moz-submit-invalid,
        :-moz-ui-invalid {
            box-shadow: none;
        }
    }
    @keyframes kYZz2Z {
        0% {
            animation-timing-function: ease-out;
            transform: rotate(180deg);
        }
        45% {
            transform: rotate(198deg);
        }
        55% {
            transform: rotate(234deg);
        }
        to {
            transform: rotate(540deg);
        }
    }
    @keyframes wlf4P4 {
        to {
            opacity: 1;
            transform: rotate(115deg);
        }
    }
    .bkIuWA.xXaCpo {
        --display: flex;
        align-items: center;
        display: var(--display);
        justify-content: center;
    }
    .d1WWt1 {
        animation: kYZz2Z 1s linear infinite;
        height: 72px;
        margin-left: -18px;
        overflow: hidden;
        position: absolute;
        transform-origin: 100% 50%;
        width: 36px;
    }
    .d1WWt1:after,
    .d1WWt1:before {
        animation: wlf4P4 0.5s linear infinite alternate;
        border: 3px solid currentColor;
        border-color: currentColor transparent transparent currentColor;
        border-radius: 50%;
        bottom: 0;
        content: "";
        left: 0;
        position: absolute;
        right: -100%;
        top: 0;
        transform: rotate(-45deg);
    }
    .d1WWt1:before {
        color: #7fccf7;
    }
    .d1WWt1:after {
        color: #3899ec;
        opacity: 0;
    }
</style>
<style
        data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[FormContainer_FormContainerSkin].bbc5b359.min.css"
>
    .JVi7i2,
    .hrbzfT {
        background-color: var(
                --corvid-background-color,
                rgba(var(--bg, 0, 0, 0), var(--alpha-bg, 0))
        );
        border: solid
        var(
                --corvid-border-color,
                rgba(var(--brd, 227, 227, 227), var(--alpha-brd, 1))
        )
        var(--corvid-border-width, var(--brw, 0));
        border-radius: var(--corvid-border-radius, var(--rd, 0));
        box-shadow: var(--shd, 0 0 0 transparent);
    }
    .d3n4V3 {
        height: 100%;
        left: -var(--corvid-border-width, var(--brw, 0));
        position: absolute;
        top: -var(--corvid-border-width, var(--brw, 0));
        width: 100%;
    }
</style>
<style
        data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[SkipToContentButton].39deac6a.min.css"
>
    .LHrbPP {
        background: #fff;
        border-radius: 24px;
        color: #116dff;
        cursor: pointer;
        font-family: Helvetica, Arial, メイリオ, meiryo, ヒラギノ角ゴ pro w3,
        hiragino kaku gothic pro, sans-serif;
        font-size: 14px;
        height: 0;
        left: 50%;
        margin-left: -94px;
        opacity: 0;
        padding: 0 24px 0 24px;
        pointer-events: none;
        position: absolute;
        top: 60px;
        width: 0;
        z-index: 9999;
    }
    .LHrbPP:focus {
        border: 2px solid;
        height: 40px;
        opacity: 1;
        pointer-events: auto;
        width: auto;
    }
</style>
<style
        data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[FiveGridLine_SolidLine].23b2f23d.min.css"
>
    .aVng1S {
        border-top: var(--lnw, 2px) solid
        rgba(var(--brd, var(--color_15, color_15)), var(--alpha-brd, 1));
        box-sizing: border-box;
        height: 0;
    }
</style>
<style
        data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[ProGallery_Default].7d5f2aef.min.css"
>
    div.pro-gallery
    .gallery-item-container.main-color-on-hover:not(.hide-hover)
    .gallery-item-content
    .gallery-item {
        transition: opacity 0.4s ease !important;
    }
    div.pro-gallery
    .gallery-item-container.main-color-on-hover:not(
				.hide-hover
			).simulate-hover
    .gallery-item-content
    .gallery-item,
    div.pro-gallery
    .gallery-item-container.main-color-on-hover:not(.hide-hover):hover
    .gallery-item-content
    .gallery-item {
        opacity: 0;
    }
    div.pro-gallery
    .gallery-item-container.zoom-in-on-hover:not(.hide-hover)
    .gallery-item-content,
    div.pro-gallery
    .gallery-item-container.zoom-in-on-hover:not(.hide-hover)
    .gallery-item-hover:not(.hide-hover),
    div.pro-gallery
    .gallery-item-container.zoom-in-on-hover:not(.hide-hover)
    .hover-info-element {
        transition: transform 2.2s cubic-bezier(0.14, 0.4, 0.09, 0.99) !important;
    }
    div.pro-gallery
    .gallery-item-container.zoom-in-on-hover:not(.hide-hover).simulate-hover
    .gallery-item-content,
    div.pro-gallery
    .gallery-item-container.zoom-in-on-hover:not(.hide-hover):hover
    .gallery-item-content {
        transform: scale(1.1);
    }
    div.pro-gallery
    .gallery-item-container.zoom-in-on-hover:not(.hide-hover).simulate-hover
    .gallery-item-hover:not(.hide-hover),
    div.pro-gallery
    .gallery-item-container.zoom-in-on-hover:not(.hide-hover):hover
    .gallery-item-hover:not(.hide-hover) {
        transform: scale(1.11);
    }
    div.pro-gallery
    .gallery-item-container.zoom-in-on-hover:not(.hide-hover).simulate-hover
    .gallery-item-hover:not(.hide-hover)
    .hover-info-element,
    div.pro-gallery
    .gallery-item-container.zoom-in-on-hover:not(.hide-hover):hover
    .gallery-item-hover:not(.hide-hover)
    .hover-info-element {
        transform: scale(0.9009009009);
    }
    div.pro-gallery
    .gallery-item-container.tilt-on-hover:not(.hide-hover)
    .gallery-item-content,
    div.pro-gallery
    .gallery-item-container.tilt-on-hover:not(.hide-hover)
    .gallery-item-hover:not(.hide-hover),
    div.pro-gallery
    .gallery-item-container.tilt-on-hover:not(.hide-hover)
    .hover-info-element {
        transition: transform 1.2s cubic-bezier(0.14, 0.4, 0.09, 0.99) !important;
    }
    div.pro-gallery
    .gallery-item-container.tilt-on-hover:not(.hide-hover).simulate-hover
    .gallery-item-content,
    div.pro-gallery
    .gallery-item-container.tilt-on-hover:not(.hide-hover):hover
    .gallery-item-content {
        transform: scale(0.845) rotate(calc(var(--tiltAngleValue) * 1deg));
    }
    div.pro-gallery
    .gallery-item-container.blur-on-hover:not(.hide-hover)
    .gallery-item-content {
        transition: filter 0.4s linear !important;
    }
    div.pro-gallery
    .gallery-item-container.blur-on-hover:not(.hide-hover).simulate-hover
    .gallery-item-content
    .gallery-item,
    div.pro-gallery
    .gallery-item-container.blur-on-hover:not(.hide-hover):hover
    .gallery-item-content
    .gallery-item {
        filter: blur(6px);
    }
    div.pro-gallery
    .gallery-item-container.grayscale-on-hover:not(.hide-hover)
    .gallery-item-content {
        transition: filter 0.6s ease !important;
    }
    div.pro-gallery
    .gallery-item-container.grayscale-on-hover:not(.hide-hover).simulate-hover
    .gallery-item-content,
    div.pro-gallery
    .gallery-item-container.grayscale-on-hover:not(.hide-hover):hover
    .gallery-item-content {
        filter: grayscale(1);
    }
    div.pro-gallery .gallery-item-container.shrink-on-hover:not(.hide-hover) {
        transition: background-color 0.4s ease !important;
        transition: transform 0.4s ease !important;
    }
    div.pro-gallery
    .gallery-item-container.shrink-on-hover:not(.hide-hover).simulate-hover,
    div.pro-gallery
    .gallery-item-container.shrink-on-hover:not(.hide-hover):hover {
        transform: scale(0.985);
    }
    div.pro-gallery
    .gallery-item-container.shrink-on-hover:not(.hide-hover).simulate-hover
    div,
    div.pro-gallery
    .gallery-item-container.shrink-on-hover:not(.hide-hover):hover
    div {
        transform: none !important;
    }
    div.pro-gallery
    .gallery-item-container.invert-on-hover:not(.hide-hover)
    .gallery-item-content {
        transition: filter 0.6s ease !important;
    }
    div.pro-gallery
    .gallery-item-container.invert-on-hover:not(.hide-hover).simulate-hover
    .gallery-item-content,
    div.pro-gallery
    .gallery-item-container.invert-on-hover:not(.hide-hover):hover
    .gallery-item-content {
        filter: invert(1);
    }
    div.pro-gallery
    .gallery-item-container.color-in-on-hover
    .gallery-item-content {
        filter: grayscale(1);
        transition: filter 0.6s ease !important;
    }
    div.pro-gallery
    .gallery-item-container.color-in-on-hover.simulate-hover:not(.hide-hover)
    .gallery-item-content,
    div.pro-gallery
    .gallery-item-container.color-in-on-hover:hover:not(.hide-hover)
    .gallery-item-content {
        filter: grayscale(0);
    }
    div.pro-gallery
    .gallery-item-container.darkened-on-hover
    .gallery-item-content {
        filter: brightness(1);
        transition: filter 0.6s ease !important;
    }
    div.pro-gallery
    .gallery-item-container.darkened-on-hover.simulate-hover:not(.hide-hover)
    .gallery-item-content,
    div.pro-gallery
    .gallery-item-container.darkened-on-hover:hover:not(.hide-hover)
    .gallery-item-content {
        filter: brightness(0.7);
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover)
    .gallery-item-hover {
        transition: none;
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover)
    .gallery-item-hover
    .gallery-item-hover-inner,
    div.pro-gallery
    .gallery-item-container:not(.invert-hover)
    .gallery-item-hover:before {
        opacity: 0;
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover)
    .gallery-item-hover.force-hover,
    div.pro-gallery
    .gallery-item-container:not(.invert-hover):hover
    .gallery-item-hover:not(.hide-hover) {
        transition: none;
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover)
    .gallery-item-hover.force-hover:before,
    div.pro-gallery
    .gallery-item-container:not(.invert-hover):hover
    .gallery-item-hover:not(.hide-hover):before {
        background: rgba(8, 8, 8, 0.75);
        opacity: 1;
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover)
    .gallery-item-hover.force-hover
    .gallery-item-hover-inner,
    div.pro-gallery
    .gallery-item-container:not(.invert-hover)
    .gallery-item-hover.force-hover
    .info-member:not(.hidden),
    div.pro-gallery
    .gallery-item-container:not(.invert-hover):hover
    .gallery-item-hover:not(.hide-hover)
    .gallery-item-hover-inner,
    div.pro-gallery
    .gallery-item-container:not(.invert-hover):hover
    .gallery-item-hover:not(.hide-hover)
    .info-member:not(.hidden) {
        opacity: 1 !important;
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-fade-in
    .gallery-item-hover {
        transition: filter 0.4s ease, opacity 0.4s ease !important;
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-fade-in
    .gallery-item-hover:before {
        filter: opacity(0);
        transition: filter 0.4s ease, opacity 0.4s ease !important;
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-fade-in
    .gallery-item-hover
    .gallery-item-hover-inner,
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-fade-in
    .gallery-item-hover
    .info-member:not(.hidden) {
        transition: opacity 0.4s ease;
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-fade-in
    .gallery-item-hover.force-hover:before,
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-fade-in:hover
    .gallery-item-hover:not(.hide-hover):before {
        filter: opacity(1);
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-expand
    .gallery-item-hover {
        transition: transform 0.4s ease, filter 0.2s ease, opacity 0.2s ease !important;
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-expand
    .gallery-item-hover:before {
        filter: opacity(0);
        transform: scale(0.9);
        transition: transform 0.4s ease, filter 0.2s ease, opacity 0.2s ease !important;
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-expand
    .gallery-item-hover
    .gallery-item-hover-inner,
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-expand
    .gallery-item-hover
    .info-member:not(.hidden) {
        transition: opacity 0.2s ease;
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-expand
    .gallery-item-hover.force-hover:before,
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-expand:hover
    .gallery-item-hover:not(.hide-hover):before {
        filter: opacity(1);
        transform: scale(1);
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-slide-up
    .gallery-item-hover {
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
        filter 0.5s ease, opacity 0.5s ease !important;
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-slide-up
    .gallery-item-hover:before {
        filter: opacity(0);
        transform: translateY(100%);
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
        filter 0.5s ease, opacity 0.5s ease !important;
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-slide-up
    .gallery-item-hover
    .gallery-item-hover-inner,
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-slide-up
    .gallery-item-hover
    .info-member:not(.hidden) {
        transition: opacity 0.4s ease;
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-slide-up
    .gallery-item-hover.force-hover:before,
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-slide-up:hover
    .gallery-item-hover:not(.hide-hover):before {
        filter: opacity(1);
        transform: translateY(0);
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-slide-right
    .gallery-item-hover {
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
        filter 0.5s ease, opacity 0.5s ease !important;
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-slide-right
    .gallery-item-hover:before {
        filter: opacity(0);
        transform: translateX(-100%);
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
        filter 0.5s ease, opacity 0.5s ease !important;
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-slide-right
    .gallery-item-hover
    .gallery-item-hover-inner,
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-slide-right
    .gallery-item-hover
    .info-member:not(.hidden) {
        transition: opacity 0.4s ease;
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-slide-right
    .gallery-item-hover.force-hover:before,
    div.pro-gallery
    .gallery-item-container:not(
				.invert-hover
			).hover-animation-slide-right:hover
    .gallery-item-hover:not(.hide-hover):before {
        filter: opacity(1);
        transform: translateX(0);
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-slide-left
    .gallery-item-hover {
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
        filter 0.5s ease, opacity 0.5s ease !important;
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-slide-left
    .gallery-item-hover:before {
        filter: opacity(0);
        transform: translateX(100%);
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
        filter 0.5s ease, opacity 0.5s ease !important;
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-slide-left
    .gallery-item-hover
    .gallery-item-hover-inner,
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-slide-left
    .gallery-item-hover
    .info-member:not(.hidden) {
        transition: opacity 0.4s ease;
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-slide-left
    .gallery-item-hover.force-hover:before,
    div.pro-gallery
    .gallery-item-container:not(
				.invert-hover
			).hover-animation-slide-left:hover
    .gallery-item-hover:not(.hide-hover):before {
        filter: opacity(1);
        transform: translateX(0);
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-slide-down
    .gallery-item-hover {
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
        filter 0.5s ease, opacity 0.5s ease !important;
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-slide-down
    .gallery-item-hover:before {
        filter: opacity(0);
        transform: translateY(-100%);
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
        filter 0.5s ease, opacity 0.5s ease !important;
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-slide-down
    .gallery-item-hover
    .gallery-item-hover-inner,
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-slide-down
    .gallery-item-hover
    .info-member:not(.hidden) {
        transition: opacity 0.4s ease;
    }
    div.pro-gallery
    .gallery-item-container:not(.invert-hover).hover-animation-slide-down
    .gallery-item-hover.force-hover:before,
    div.pro-gallery
    .gallery-item-container:not(
				.invert-hover
			).hover-animation-slide-down:hover
    .gallery-item-hover:not(.hide-hover):before {
        filter: opacity(1);
        transform: translateY(0);
    }
    div.pro-gallery .gallery-item-container.invert-hover .gallery-item-hover {
        transition: none;
    }
    div.pro-gallery
    .gallery-item-container.invert-hover
    .gallery-item-hover:before {
        background: rgba(8, 8, 8, 0.75);
        opacity: 1;
    }
    div.pro-gallery
    .gallery-item-container.invert-hover
    .gallery-item-hover
    .gallery-item-hover-inner {
        opacity: 1;
    }
    div.pro-gallery
    .gallery-item-container.invert-hover
    .gallery-item-hover
    .gallery-item-hover-inner,
    div.pro-gallery
    .gallery-item-container.invert-hover
    .gallery-item-hover
    .info-member:not(.hidden) {
        opacity: 1 !important;
    }
    div.pro-gallery
    .gallery-item-container.invert-hover
    .gallery-item-hover.force-hover,
    div.pro-gallery
    .gallery-item-container.invert-hover:hover
    .gallery-item-hover:not(.hide-hover) {
        transition: none;
    }
    div.pro-gallery
    .gallery-item-container.invert-hover
    .gallery-item-hover.force-hover:before,
    div.pro-gallery
    .gallery-item-container.invert-hover:hover
    .gallery-item-hover:not(.hide-hover):before {
        opacity: 0;
    }
    div.pro-gallery
    .gallery-item-container.invert-hover
    .gallery-item-hover.force-hover
    .gallery-item-hover-inner,
    div.pro-gallery
    .gallery-item-container.invert-hover
    .gallery-item-hover.force-hover
    .info-member:not(.hidden),
    div.pro-gallery
    .gallery-item-container.invert-hover:hover
    .gallery-item-hover:not(.hide-hover)
    .gallery-item-hover-inner,
    div.pro-gallery
    .gallery-item-container.invert-hover:hover
    .gallery-item-hover:not(.hide-hover)
    .info-member:not(.hidden) {
        opacity: 0 !important;
    }
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-fade-in
    .gallery-item-hover {
        transition: filter 0.4s ease, opacity 0.4s ease !important;
    }
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-fade-in
    .gallery-item-hover:before {
        filter: opacity(1);
        transition: filter 0.4s ease, opacity 0.4s ease !important;
    }
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-fade-in
    .gallery-item-hover
    .gallery-item-hover-inner,
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-fade-in
    .gallery-item-hover
    .info-member:not(.hidden) {
        transition: opacity 0.4s ease;
    }
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-fade-in
    .gallery-item-hover.force-hover:before,
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-fade-in:hover
    .gallery-item-hover:not(.hide-hover):before {
        filter: opacity(0);
    }
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-expand
    .gallery-item-hover {
        transition: transform 0.4s ease, filter 0.2s ease, opacity 0.2s ease !important;
    }
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-expand
    .gallery-item-hover:before {
        filter: opacity(1);
        transform: scale(1);
        transition: transform 0.4s ease, filter 0.2s ease, opacity 0.2s ease !important;
    }
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-expand
    .gallery-item-hover
    .gallery-item-hover-inner,
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-expand
    .gallery-item-hover
    .info-member:not(.hidden) {
        transition: opacity 0.2s ease;
    }
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-expand
    .gallery-item-hover.force-hover:before,
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-expand:hover
    .gallery-item-hover:not(.hide-hover):before {
        filter: opacity(0);
        transform: scale(0.9);
    }
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-slide-up
    .gallery-item-hover {
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
        filter 0.5s ease, opacity 0.5s ease !important;
    }
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-slide-up
    .gallery-item-hover:before {
        filter: opacity(1);
        transform: translateY(0);
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
        filter 0.5s ease, opacity 0.5s ease !important;
    }
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-slide-up
    .gallery-item-hover
    .gallery-item-hover-inner,
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-slide-up
    .gallery-item-hover
    .info-member:not(.hidden) {
        transition: opacity 0.4s ease;
    }
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-slide-up
    .gallery-item-hover.force-hover:before,
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-slide-up:hover
    .gallery-item-hover:not(.hide-hover):before {
        filter: opacity(0);
        transform: translateY(100%);
    }
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-slide-right
    .gallery-item-hover {
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
        filter 0.5s ease, opacity 0.5s ease !important;
    }
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-slide-right
    .gallery-item-hover:before {
        filter: opacity(1);
        transform: translateX(0);
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
        filter 0.5s ease, opacity 0.5s ease !important;
    }
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-slide-right
    .gallery-item-hover
    .gallery-item-hover-inner,
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-slide-right
    .gallery-item-hover
    .info-member:not(.hidden) {
        transition: opacity 0.4s ease;
    }
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-slide-right
    .gallery-item-hover.force-hover:before,
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-slide-right:hover
    .gallery-item-hover:not(.hide-hover):before {
        filter: opacity(0);
        transform: translateX(-100%);
    }
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-slide-left
    .gallery-item-hover {
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
        filter 0.5s ease, opacity 0.5s ease !important;
    }
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-slide-left
    .gallery-item-hover:before {
        filter: opacity(1);
        transform: translateX(100%);
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
        filter 0.5s ease, opacity 0.5s ease !important;
    }
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-slide-left
    .gallery-item-hover
    .gallery-item-hover-inner,
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-slide-left
    .gallery-item-hover
    .info-member:not(.hidden) {
        transition: opacity 0.4s ease;
    }
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-slide-left
    .gallery-item-hover.force-hover:before,
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-slide-left:hover
    .gallery-item-hover:not(.hide-hover):before {
        filter: opacity(0);
        transform: translateX(0);
    }
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-slide-down
    .gallery-item-hover {
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
        filter 0.5s ease, opacity 0.5s ease !important;
    }
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-slide-down
    .gallery-item-hover:before {
        filter: opacity(1);
        transform: translateY(-100%);
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
        filter 0.5s ease, opacity 0.5s ease !important;
    }
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-slide-down
    .gallery-item-hover
    .gallery-item-hover-inner,
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-slide-down
    .gallery-item-hover
    .info-member:not(.hidden) {
        transition: opacity 0.4s ease;
    }
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-slide-down
    .gallery-item-hover.force-hover:before,
    div.pro-gallery
    .gallery-item-container.invert-hover.hover-animation-slide-down:hover
    .gallery-item-hover:not(.hide-hover):before {
        filter: opacity(0);
        transform: translateY(0);
    }
    .animation-slide {
        transition: width 0.4s ease, height 0.4s ease, top 0.4s ease,
        left 0.4s ease;
    }
    .item-with-secondary-media-container .secondary-media-item.hide {
        opacity: 0;
    }
    .item-with-secondary-media-container .secondary-media-item.show {
        opacity: 1;
    }
    [data-collapsed="true"] .pro-gallery-parent-container .gallery-item,
    [data-hidden="true"] .pro-gallery-parent-container .gallery-item {
        background-image: none !important;
    }
    html.pro-gallery {
        height: auto;
        width: 100%;
    }
    body.pro-gallery {
        transition: opacity 2s ease;
    }
    #gallery-loader {
        position: fixed;
        top: 50%;
    }
    .show-more-container {
        line-height: 138px;
        text-align: center;
    }
    .show-more-container i.show-more {
        color: #5d5d61;
        cursor: pointer;
        font-size: 40px;
        margin-top: -3px;
    }
    .show-more-container button.show-more {
        background: transparent;
        border: 2px solid #5d5d61;
        border-radius: 0;
        color: #5d5d61;
        cursor: pointer;
        display: inline-block;
        font-family: HelveticaNeueW01-45Ligh, HelveticaNeueW02-45Ligh,
        HelveticaNeueW10-45Ligh, sans-serif;
        font-size: 12px;
        padding: 11px 29px;
    }
    .show-more-container button.show-more:hover {
        background: rgba(0, 0, 0, 0.1);
    }
    .more-items-loader {
        color: #116dff;
        display: block;
        font-size: 30px;
        line-height: 50px;
        text-align: center;
        width: 100%;
    }
    .version-header {
        background: hsla(0, 0%, 100%, 0.8);
        color: #e03939;
        font-family: Consolas, monospace;
        font-size: 13px;
        height: 100px;
        left: 0;
        line-height: 30px;
        position: absolute;
        text-align: left;
        top: 0;
        width: 320px;
        z-index: 100;
    }
    .auto-slideshow-button {
        cursor: pointer;
        height: 28px;
        margin-top: 19px;
        padding: 5px;
        width: 20px;
    }
    .auto-slideshow-button,
    .auto-slideshow-counter {
        display: flex;
        left: auto;
        opacity: 0.9;
        position: absolute;
        text-align: center;
        z-index: 1;
    }
    .auto-slideshow-counter {
        font-size: 15px;
        line-height: normal;
        margin-top: 24px;
    }
    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    .mouse-cursor {
        display: flex;
        position: absolute;
        width: 100%;
    }
    .follow-mouse-cursor {
        position: absolute;
        transition: all 0.2s ease;
    }
    .follow-mouse-cursor > div {
        pointer-events: none;
    }
    .follow-mouse-cursor > div,
    .nav-arrows-container {
        align-items: center;
        display: flex;
        justify-content: center;
    }
    .nav-arrows-container {
        background: transparent;
        border: none;
        cursor: pointer;
        left: auto;
        opacity: 0.9;
        position: absolute;
        text-align: center;
    }
    .nav-arrows-container:hover {
        opacity: 1;
    }
    .nav-arrows-container.shadow svg {
        filter: drop-shadow(0 1px 0.15px #b2b2b2);
    }
    .nav-arrows-container .slideshow-arrow {
        flex-shrink: 0;
    }
    .nav-arrows-container:focus {
        box-shadow: inset 0 0 0 1px #fff, inset 0 0 1px 4px #116dff !important;
    }
    .arrow-portal-container span {
        align-items: center;
        animation: fadeIn 0.1s ease-in-out;
        display: flex;
        justify-content: center;
        position: fixed;
        transition: top 50ms, left 50ms;
    }
    div.gallery-slideshow .gallery-column,
    div.gallery-slideshow div.pro-gallery {
        box-sizing: content-box !important;
    }
    div.gallery-slideshow .gallery-group,
    div.gallery-slideshow .gallery-item-container,
    div.gallery-slideshow .gallery-item-wrapper {
        overflow: visible !important;
    }
    div.gallery-slideshow.streched .gallery-slideshow-info {
        padding-left: 50px !important;
        padding-right: 50px !important;
    }
    @media (max-width: 500px) {
        div.gallery-slideshow div.pro-gallery .gallery-slideshow-info {
            padding-left: 20px;
            padding-right: 20px;
        }
    }
    div.gallery-slideshow
    div.pro-gallery
    .gallery-item-container
    .gallery-slideshow-info {
        bottom: -220px;
        box-sizing: border-box;
        display: flex;
        height: 220px;
        padding-top: 0;
        position: absolute;
        width: 100%;
        z-index: 15;
    }
    .gallery-thumbnails
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover {
        padding: 30px 60px;
    }
    .gallery-slider
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover {
        padding: 30px 10px 50px;
    }
    .gallery-columns
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover {
        padding: 30px;
    }
    div.pro-gallery {
        height: 100%;
        width: 100%;
    }
    div.pro-gallery,
    div.pro-gallery .gallery-column {
        backface-visibility: hidden;
        overflow: hidden;
        position: relative;
    }
    div.pro-gallery .gallery-column {
        float: left;
        transform-style: preserve-3d;
    }
    div.pro-gallery .gallery-column .gallery-left-padding {
        display: inline-block;
        height: 100%;
    }
    div.pro-gallery .gallery-column .gallery-top-padding {
        display: block;
        width: 100%;
    }
    div.pro-gallery .gallery-group {
        backface-visibility: hidden;
        box-sizing: border-box;
        float: left;
        font-family: HelveticaNeueW01-45Ligh, HelveticaNeueW02-45Ligh,
        HelveticaNeueW10-45Ligh, sans-serif;
        font-size: 11px;
        overflow: hidden;
        padding: 0;
        position: relative;
        transform-style: preserve-3d;
    }
    div.pro-gallery .gallery-group.debug.gallery-group-gone {
        background: #cdcdd0;
    }
    div.pro-gallery .gallery-group.debug.gallery-group-visible {
        background: #c1f0c1;
    }
    div.pro-gallery .gallery-group.debug.gallery-group-hidden {
        background: #f99;
    }
    div.pro-gallery .gallery-item-container {
        backface-visibility: hidden;
        border: none;
        border-radius: 0;
        box-sizing: border-box;
        color: inherit;
        cursor: default;
        display: inline-block;
        font-family: HelveticaNeueW01-45Ligh, HelveticaNeueW02-45Ligh,
        HelveticaNeueW10-45Ligh, sans-serif;
        font-size: 11px;
        outline: none;
        overflow: hidden;
        padding: 0;
        position: absolute;
        scroll-snap-align: center;
        text-decoration: none;
        transform-style: preserve-3d;
        vertical-align: top;
        will-change: top, left, width, height;
    }
    div.pro-gallery .gallery-item-container .item-action {
        height: 1px;
        overflow: hidden;
        pointer-events: none;
        position: absolute;
        width: 1px;
        z-index: -1;
    }
    div.pro-gallery .gallery-item-container .item-action:focus {
        --focus-ring-box-shadow: none !important;
        box-shadow: none !important;
        outline: none !important;
    }
    div.pro-gallery .gallery-item-container:hover .gallery-item-common-info {
        cursor: pointer;
    }
    div.pro-gallery
    .gallery-item-container:hover
    .gallery-item-common-info
    button {
        cursor: pointer;
        text-decoration: underline;
    }
    div.pro-gallery .gallery-item-container.visible {
        transform: translateZ(0);
    }
    div.pro-gallery .gallery-item-container.clickable {
        cursor: pointer;
    }
    div.pro-gallery .gallery-item-container .gallery-item-wrapper {
        height: 100%;
        overflow: hidden;
        position: relative;
        width: 100%;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .item-with-secondary-media-container
    .secondary-media-item {
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 1;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .item-with-secondary-media-container
    .secondary-media-item
    .gallery-item {
        -o-object-fit: cover;
        object-fit: cover;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .item-with-secondary-media-container
    .secondary-media-item
    .text-item
    > div {
        height: 100% !important;
        width: 100% !important;
    }
    div.pro-gallery .gallery-item-container .gallery-item-wrapper.cube-type-fit,
    div.pro-gallery .gallery-item-container .gallery-item-wrapper.transparent {
        background: transparent;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-preload {
        display: none;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper.cube-type-fit
    .gallery-item {
        background: transparent;
        -o-object-fit: contain;
        object-fit: contain;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item {
        border-radius: 0;
        height: 100%;
        left: 0;
        margin: 0;
        -o-object-fit: cover;
        object-fit: cover;
        overflow: hidden;
        position: absolute;
        top: 0;
        width: 100%;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.text-item {
        -webkit-font-smoothing: antialiased;
        box-sizing: border-box; /*! autoprefixer: ignore next */
        white-space: normal;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.text-item
    .te-pro-gallery-text-item {
        letter-spacing: normal !important;
        line-height: normal !important;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.text-item
    > div {
        background: initial !important;
        box-sizing: border-box;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.text-item
    div,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.text-item
    h1,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.text-item
    h2,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.text-item
    h3,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.text-item
    h4,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.text-item
    h5,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.text-item
    h6,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.text-item
    i,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.text-item
    p,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.text-item
    span {
        margin: 0;
        padding: 0;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item
    .pro-circle-preloader {
        height: 30px;
        left: 50%;
        opacity: 0.4;
        top: 50%;
        width: 15px;
        z-index: -1;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item
    img.gallery--placeholder-item {
        height: 100% !important;
        -o-object-fit: cover;
        object-fit: cover;
        -o-object-position: center;
        object-position: center;
        width: 100% !important;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-loaded {
        animation: none !important;
        background-color: transparent;
        opacity: 1 !important;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-loaded.image-item:after {
        display: none !important;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-loaded
    ~ .pro-circle-preloader {
        display: none;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.error {
        opacity: 0 !important;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-preloaded {
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: cover;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-preloaded.grid-fit {
        background-size: contain;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-3d-placeholder.three-d-loaded
    img {
        opacity: 0;
        pointer-events: none;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-3d-placeholder.three-d-loading
    img {
        opacity: 1;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-3d-placeholder
    img {
        transition: opacity 0.2s ease;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-video {
        overflow: hidden;
        text-align: center;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-video
    iframe {
        left: 0;
        top: 0;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-video.playedOnce
    ~ .image-item {
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.2s ease;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-3d-placeholder.playing
    button,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-3d-placeholder.playing
    i,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-video.playing
    button,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-video.playing
    i,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.thumbnailItem.playing
    button,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.thumbnailItem.playing
    i {
        display: none;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-3d-placeholder
    button,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-3d-placeholder
    i,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-video
    button,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-video
    i,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.thumbnailItem
    button,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.thumbnailItem
    i {
        -webkit-font-smoothing: antialiased;
        background: #080808;
        border-radius: 50px;
        color: #fff;
        display: inline-block;
        height: 60px;
        left: 50%;
        margin: -30px 0 0 -30px;
        opacity: 0.7;
        position: absolute;
        text-align: center;
        text-rendering: auto; /*! autoprefixer: ignore next */
        top: 50%;
        z-index: 11;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-3d-placeholder
    button.play-triangle,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-3d-placeholder
    i.play-triangle,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-video
    button.play-triangle,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-video
    i.play-triangle,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.thumbnailItem
    button.play-triangle,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.thumbnailItem
    i.play-triangle {
        opacity: 1;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-3d-placeholder
    button.play-background,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-3d-placeholder
    button.play-triangle,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-3d-placeholder
    i.play-background,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-3d-placeholder
    i.play-triangle,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-video
    button.play-background,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-video
    button.play-triangle,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-video
    i.play-background,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-video
    i.play-triangle,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.thumbnailItem
    button.play-background,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.thumbnailItem
    button.play-triangle,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.thumbnailItem
    i.play-background,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.thumbnailItem
    i.play-triangle {
        font-size: 26px;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-3d-placeholder
    button:hover,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-3d-placeholder
    i:hover,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-video
    button:hover,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-video
    i:hover,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.thumbnailItem
    button:hover,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.thumbnailItem
    i:hover {
        opacity: 0.9;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-3d-placeholder
    button:before,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-3d-placeholder
    i:before,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-video
    button:before,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.gallery-item-video
    i:before,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.thumbnailItem
    button:before,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item.thumbnailItem
    i:before {
        font-size: 2.3em;
        opacity: 1;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-info {
        bottom: -220px;
        box-sizing: border-box;
        display: flex;
        height: 220px;
        position: absolute;
        width: 100%;
        z-index: 15;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-info
    > div {
        height: 100%;
        width: 100%;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover {
        border-radius: 0;
        box-sizing: border-box;
        height: 100%;
        left: 0;
        margin: 0;
        overflow: hidden;
        position: absolute;
        top: 0;
        white-space: normal;
        width: 100%;
        z-index: 15;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .gallery-item-hover-inner {
        height: 100%;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover.no-hover-bg:before {
        opacity: 0 !important;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover:before {
        box-sizing: border-box;
        content: " ";
        height: 100%;
        left: 0;
        margin: 0;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: -1;
    }
    div.pro-gallery .gallery-item-container .gallery-item-common-info {
        box-sizing: border-box;
        cursor: pointer;
    }
    div.pro-gallery .thumbnailItem.playing button,
    div.pro-gallery .thumbnailItem.playing i {
        display: none;
    }
    div.pro-gallery .thumbnailItem button,
    div.pro-gallery .thumbnailItem i {
        -webkit-font-smoothing: antialiased;
        background: #080808;
        border-radius: 100%;
        color: #fff;
        display: inline-block;
        height: 28px;
        left: 50%;
        margin: -16px -1px 0 -16px;
        opacity: 0.7;
        position: absolute;
        text-align: center;
        text-rendering: auto; /*! autoprefixer: ignore next */
        top: 50%;
        width: 28px;
        z-index: 11;
    }
    div.pro-gallery .thumbnailItem button.play-triangle,
    div.pro-gallery .thumbnailItem i.play-triangle {
        opacity: 1;
    }
    div.pro-gallery .thumbnailItem button:before,
    div.pro-gallery .thumbnailItem i:before {
        font-size: 2.3em;
        opacity: 1;
    }
    div.pro-gallery.one-row {
        float: left;
        white-space: nowrap;
    }
    div.pro-gallery.one-row .gallery-column {
        float: none;
        white-space: nowrap;
        width: 100%;
    }
    div.pro-gallery.one-row .gallery-column .gallery-group {
        display: inline-block;
        float: none;
    }
    div.pro-gallery.one-row.slider .gallery-column {
        overflow-x: scroll;
    }
    div.pro-gallery.one-row.slider .gallery-column.scroll-snap {
        -ms-scroll-snap-type: x mandatory;
        scroll-snap-type: x mandatory;
    }
    div.pro-gallery.one-row .gallery-horizontal-scroll-inner {
        position: relative;
        will-change: transform;
    }
    div.pro-gallery.thumbnails-gallery {
        float: left;
        overflow: hidden;
    }
    div.pro-gallery.thumbnails-gallery .galleryColumn {
        overflow: visible;
        position: relative;
    }
    div.pro-gallery.thumbnails-gallery .thumbnailItem {
        background-color: #fff;
        background-position: 50%;
        background-size: cover;
        border-radius: 0;
        cursor: pointer;
        overflow-y: inherit;
        position: absolute;
    }
    div.pro-gallery.thumbnails-gallery
    .thumbnailItem.pro-gallery-highlight:after {
        background-color: hsla(0, 0%, 100%, 0.6);
        content: "";
        display: block;
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
    }
    @media (max-width: 500px) {
        div.pro-gallery.thumbnails-gallery {
            overflow: visible;
        }
    }
    div.pro-gallery :focus {
        box-shadow: none;
    }
    div.pro-gallery.accessible
    button:not(.nav-arrows-container, .has-custom-focus):focus,
    div.pro-gallery.accessible i:focus {
        box-shadow: 0 0 0 1px #fff, 0 0 1px 2px #116dff;
    }
    div.pro-gallery.accessible .has-custom-focus:focus {
        box-shadow: inset 0 0 0 1px #fff, inset 0 0 1px 4px #116dff;
    }
    div.pro-gallery.accessible .gallery-item-hover button:focus,
    div.pro-gallery.accessible .gallery-item-hover i:focus {
        box-shadow: none;
    }
    div.pro-gallery.accessible .thumbnailItem.pro-gallery-highlight:after {
        box-shadow: inset 0 0 1px 2px #116dff, inset 0 0 7px 0 #fff,
        0 0 10px -5px #116dff;
    }
    div.pro-gallery.accessible
    .gallery-item-container:has(.item-action:focus):after {
        border-radius: inherit;
        box-shadow: inset 0 0 1px 2px #116dff, inset 0 0 7px 0 #fff,
        inset 0 0 10px -5px #116dff;
        content: " ";
        height: 100%;
        left: 0;
        pointer-events: none;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 15;
    }
    div.pro-gallery.accessible .pro-gallery-thumbnails-highlighted:before {
        box-shadow: inset 0 0 1px 2px #116dff, inset 0 0 7px 0 #fff,
        inset 0 0 10px -5px #116dff;
    }
    div.pro-gallery.accessible .pro-gallery-thumbnails-highlighted:after {
        border-radius: inherit;
        box-shadow: inset 0 0 1px 2px #116dff, inset 0 0 7px 0 #fff,
        0 0 10px -5px #116dff;
        content: " ";
        height: 100%;
        left: 0;
        pointer-events: none;
        position: absolute;
        top: 0;
        width: 100%;
    }
    div.pro-gallery .hide-scrollbars {
        -ms-overflow-style: none;
        overflow: -moz-scrollbars-none;
        scrollbar-width: none;
    }
    div.pro-gallery .hide-scrollbars ::-webkit-scrollbar,
    div.pro-gallery .hide-scrollbars::-webkit-scrollbar {
        height: 0 !important;
        width: 0 !important;
    }
    div.pro-gallery .rtl {
        direction: rtl;
    }
    div.pro-gallery .ltr {
        direction: ltr;
    }
    .sr-only.out-of-view-component {
        border: 0;
        clip-path: circle(0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
    }
    .screen-logs {
        word-wrap: break-word;
        background: #fff;
        font-size: 10px;
        width: 280px;
    }
    .fade {
        display: block;
        transition: opacity 0.6s ease;
    }
    .fade-visible {
        opacity: 1;
    }
    .fade-hidden {
        opacity: 0;
    }
    .deck-before {
        transform: translateX(-100%);
    }
    .deck-before,
    .deck-before-rtl {
        display: block;
        transition: transform 0.6s ease;
        z-index: 1;
    }
    .deck-before-rtl {
        transform: translateX(100%);
    }
    .deck-current {
        display: block;
        transform: translateX(0);
        transition: transform 0.6s ease;
        z-index: 0;
    }
    .deck-current .override {
        transition: transform 0.6s ease, opacity 0.1s ease 0.2s !important;
    }
    .deck-after {
        display: block;
        opacity: 0;
        transition: opacity 0.2s ease 0.6s;
        z-index: -1;
    }
    .deck-after .override {
        transition: opacity 0.1s ease 0s !important;
    }
    .disabled-transition {
        transition: none !important;
    }
    @keyframes changing_background {
        0% {
            background-color: hsla(0, 0%, 95%, 0.2);
        }
        50% {
            background-color: hsla(0, 0%, 95%, 0.8);
        }
        to {
            background-color: hsla(0, 0%, 95%, 0.2);
        }
    }
    .pro-gallery-parent-container.gallery-slideshow
    [data-hook="group-view"]:before,
    .pro-gallery-parent-container:not(.gallery-slideshow)
    [data-hook="group-view"]
    .item-link-wrapper:before {
        content: "";
        height: 1px;
        left: var(--group-left);
        pointer-events: none;
        position: absolute;
        right: var(--group-right);
        scroll-snap-align: center;
        top: var(--group-top);
        width: var(--group-width);
    }
    .gallery-item-container {
        scroll-snap-align: none !important;
    }
    .gallery-slideshow .gallery-item-container:not(.clickable) a {
        cursor: default;
    }
    /*!*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** css ../../../node_modules/@wix/yoshi-style-dependencies/css-loader.js??ruleSet[1].rules[2].rules[1].oneOf[1]!../../../node_modules/@wix/yoshi-style-dependencies/postcss-loader.js??ruleSet[1].rules[2].rules[2]!../../../node_modules/@wix/yoshi-style-dependencies/resolve-url-loader.js!../../../node_modules/@wix/yoshi-style-dependencies/sass-loader.js??ruleSet[1].rules[2].rules[4]!./styles/infoElement.scss ***!
  \*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
    .pro-gallery-wix-wrapper .slideshow-info-element-inner {
        box-sizing: border-box;
        height: 100%;
        padding-top: 24px;
        width: 100%;
    }
    .pro-gallery-wix-wrapper .slideshow-info-element-inner .info-element-text {
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        margin-bottom: 25px;
        padding: 0;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-text
    > div {
        width: 100%;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-text
    .info-element-title {
        font-size: 21px; /*! autoprefixer: ignore next */
        line-height: 32px;
        white-space: normal;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-text
    .info-element-description,
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-text
    .info-element-title {
        -webkit-box-orient: vertical;
        color: #2b5672;
        display: block;
        font-family: HelveticaNeueW01-Thin, HelveticaNeueW02-Thin,
        HelveticaNeueW10-35Thin, sans-serif;
        height: auto;
        text-overflow: ellipsis;
        transition: opacity 0.4s ease;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-text
    .info-element-description {
        font-size: 15px;
        line-height: 25px;
        overflow: hidden; /*! autoprefixer: ignore next */
        white-space: nowrap;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-text
    .info-element-description
    > span {
        white-space: normal;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-text
    .info-member.hide {
        display: none;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-text
    .info-element-custom-button-wrapper {
        color: #fff;
        display: flex;
        justify-content: center;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-text
    .info-element-custom-button-wrapper
    button {
        border-style: solid;
        border-width: 1px;
        cursor: pointer;
        display: block;
        font-size: 16px;
        line-height: 0px;
        outline: none;
        overflow: hidden;
        padding: 16px;
        position: relative;
        text-decoration: none;
        text-overflow: ellipsis;
        white-space: nowrap;
        z-index: 10;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-text
    .info-element-custom-button-wrapper
    button
    .overlay {
        display: none;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-text
    .info-element-custom-button-wrapper
    button:hover {
        opacity: 1 !important;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-text
    .info-element-custom-button-wrapper
    button:hover
    .overlay {
        background: hsla(0, 0%, 100%, 0.1);
        display: block;
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social {
        display: flex;
        flex-direction: row;
        height: auto;
        margin: 0;
        overflow: visible;
        position: static;
        transition: opacity 0.4s ease;
        z-index: 16;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social:hover
    .info-element-social-share-box {
        width: 0 !important;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social.info-align-right,
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social.info-align-right
    .info-element-social-share {
        flex-direction: row-reverse;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social.info-align-right
    .info-element-social-share:hover
    .info-element-social-share-box {
        margin-right: 40px !important;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-button {
        color: #2b5672;
        cursor: pointer;
        display: inline-flex;
        font-size: 19px;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-button
    svg {
        fill: inherit;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-button
    * {
        height: inherit;
        width: inherit;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-button:hover:not(.info-element-loved) {
        opacity: 0.7;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-button.info-element-social-comments {
        align-items: center;
        background: transparent;
        border: none;
        -moz-column-gap: 7px;
        column-gap: 7px;
        display: flex;
        font-size: 15px;
        margin: -5px;
        padding: 0;
        padding: 5px;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-button.info-element-social-comments
    .info-element-social-comments-icon {
        fill: #2b5672;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-button.info-element-social-comments
    .info-element-social-comments-count {
        color: #2b5672;
        font-family: HelveticaNeueW01-UltLt, HelveticaNeueW02-UltLt,
        HelveticaNeueW10-25UltL, sans-serif;
        font-size: 15px;
        font-style: normal;
        letter-spacing: 1px;
        line-height: 15px;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-button.info-element-social-love {
        background: transparent;
        border: none;
        font-size: 15px;
        padding: 0;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-button.info-element-social-love
    button,
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-button.info-element-social-love
    i {
        background: transparent;
        border: none;
        cursor: pointer;
        display: inline-block;
        float: left;
        text-decoration: none;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-button.info-element-social-love
    .info-element-social-love-count {
        color: #2b5672;
        display: inline-block;
        float: left;
        font-family: HelveticaNeueW01-UltLt, HelveticaNeueW02-UltLt,
        HelveticaNeueW10-25UltL, sans-serif;
        font-style: normal;
        letter-spacing: 1px;
        margin-top: 2px;
        padding-left: 9px;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-share {
        flex-direction: row;
        outline: none;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-share:hover
    .info-element-social-share-box {
        outline: none;
        width: 210px !important;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box {
        display: inline-block;
        font-size: 12px;
        height: 30px;
        margin-left: 25px !important;
        margin-right: 25px !important;
        max-width: 300px;
        overflow: hidden;
        transform: none !important;
        transition: width 0.3s;
        width: 0;
        z-index: 16;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box.hovered,
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box.opened {
        outline: none;
        width: 210px !important;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box
    button,
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box
    i {
        background: transparent;
        border: none;
        color: #2b5672;
        cursor: pointer;
        display: inline-block;
        float: left;
        font-size: 15px;
        height: 30px;
        line-height: 14px;
        margin: 0 6px;
        text-align: center;
        text-decoration: none;
        width: 30px;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box
    button:hover,
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box
    i:hover {
        opacity: 0.7;
    }
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box
    button.email-share,
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box
    button.twitter-share,
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box
    i.email-share,
    .pro-gallery-wix-wrapper
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box
    i.twitter-share {
        font-size: 13px;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info {
        box-sizing: border-box;
        height: 100%;
        padding-top: 24px;
        padding-top: 0;
        width: 100%;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-text {
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        margin-bottom: 25px;
        padding: 0;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-text
    > div {
        width: 100%;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-text
    .info-element-title {
        -webkit-box-orient: vertical;
        color: #2b5672;
        display: block; /*! autoprefixer: ignore next */
        font-family: HelveticaNeueW01-Thin, HelveticaNeueW02-Thin,
        HelveticaNeueW10-35Thin, sans-serif;
        font-size: 21px;
        height: auto;
        line-height: 32px;
        text-overflow: ellipsis;
        transition: opacity 0.4s ease;
        white-space: normal;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-text
    .info-element-description {
        -webkit-box-orient: vertical;
        color: #2b5672;
        display: block; /*! autoprefixer: ignore next */
        font-family: HelveticaNeueW01-Thin, HelveticaNeueW02-Thin,
        HelveticaNeueW10-35Thin, sans-serif;
        font-size: 15px;
        height: auto;
        line-height: 25px;
        overflow: hidden;
        text-overflow: ellipsis;
        transition: opacity 0.4s ease;
        white-space: nowrap;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-text
    .info-element-description
    > span {
        white-space: normal;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-text
    .info-member.hide {
        display: none;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-text
    .info-element-custom-button-wrapper {
        color: #fff;
        display: flex;
        justify-content: center;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-text
    .info-element-custom-button-wrapper
    button {
        border-style: solid;
        border-width: 1px;
        cursor: pointer;
        display: block;
        font-size: 16px;
        line-height: 0px;
        outline: none;
        overflow: hidden;
        padding: 16px;
        position: relative;
        text-decoration: none;
        text-overflow: ellipsis;
        white-space: nowrap;
        z-index: 10;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-text
    .info-element-custom-button-wrapper
    button
    .overlay {
        display: none;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-text
    .info-element-custom-button-wrapper
    button:hover {
        opacity: 1 !important;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-text
    .info-element-custom-button-wrapper
    button:hover
    .overlay {
        background: hsla(0, 0%, 100%, 0.1);
        display: block;
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social {
        display: flex;
        flex-direction: row;
        height: auto;
        margin: 0;
        overflow: visible;
        position: static;
        transition: opacity 0.4s ease;
        z-index: 16;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social:hover
    .info-element-social-share-box {
        width: 0 !important;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social.info-align-right,
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social.info-align-right
    .info-element-social-share {
        flex-direction: row-reverse;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social.info-align-right
    .info-element-social-share:hover
    .info-element-social-share-box {
        margin-right: 40px !important;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social
    .info-element-social-button {
        color: #2b5672;
        cursor: pointer;
        display: inline-flex;
        font-size: 19px;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social
    .info-element-social-button
    svg {
        fill: inherit;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social
    .info-element-social-button
    * {
        height: inherit;
        width: inherit;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social
    .info-element-social-button:hover:not(.info-element-loved) {
        opacity: 0.7;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social
    .info-element-social-button.info-element-social-comments {
        align-items: center;
        background: transparent;
        border: none;
        -moz-column-gap: 7px;
        column-gap: 7px;
        display: flex;
        font-size: 15px;
        margin: -5px;
        padding: 0;
        padding: 5px;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social
    .info-element-social-button.info-element-social-comments
    .info-element-social-comments-icon {
        fill: #2b5672;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social
    .info-element-social-button.info-element-social-comments
    .info-element-social-comments-count {
        color: #2b5672;
        font-family: HelveticaNeueW01-UltLt, HelveticaNeueW02-UltLt,
        HelveticaNeueW10-25UltL, sans-serif;
        font-size: 15px;
        font-style: normal;
        letter-spacing: 1px;
        line-height: 15px;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social
    .info-element-social-button.info-element-social-love {
        background: transparent;
        border: none;
        font-size: 15px;
        padding: 0;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social
    .info-element-social-button.info-element-social-love
    button,
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social
    .info-element-social-button.info-element-social-love
    i {
        background: transparent;
        border: none;
        cursor: pointer;
        display: inline-block;
        float: left;
        text-decoration: none;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social
    .info-element-social-button.info-element-social-love
    .info-element-social-love-count {
        color: #2b5672;
        display: inline-block;
        float: left;
        font-family: HelveticaNeueW01-UltLt, HelveticaNeueW02-UltLt,
        HelveticaNeueW10-25UltL, sans-serif;
        font-style: normal;
        letter-spacing: 1px;
        margin-top: 2px;
        padding-left: 9px;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social
    .info-element-social-share {
        flex-direction: row;
        outline: none;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social
    .info-element-social-share:hover
    .info-element-social-share-box {
        outline: none;
        width: 210px !important;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box {
        display: inline-block;
        font-size: 12px;
        height: 30px;
        margin-left: 25px !important;
        margin-right: 25px !important;
        max-width: 300px;
        overflow: hidden;
        transform: none !important;
        transition: width 0.3s;
        width: 0;
        z-index: 16;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box.hovered,
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box.opened {
        outline: none;
        width: 210px !important;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box
    button,
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box
    i {
        background: transparent;
        border: none;
        color: #2b5672;
        cursor: pointer;
        display: inline-block;
        float: left;
        font-size: 15px;
        height: 30px;
        line-height: 14px;
        margin: 0 6px;
        text-align: center;
        text-decoration: none;
        width: 30px;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box
    button:hover,
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box
    i:hover {
        opacity: 0.7;
    }
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box
    button.email-share,
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box
    button.twitter-share,
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box
    i.email-share,
    .pro-gallery-wix-wrapper
    .gallery-item-common-info.gallery-item-bottom-info
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box
    i.twitter-share {
        font-size: 13px;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner {
        box-sizing: border-box;
        height: 100%;
        padding-top: 24px;
        width: 100%;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-text {
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        margin-bottom: 25px;
        padding: 0;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-text
    > div {
        width: 100%;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-text
    .info-element-title {
        -webkit-box-orient: vertical;
        color: #2b5672;
        display: block; /*! autoprefixer: ignore next */
        font-family: HelveticaNeueW01-Thin, HelveticaNeueW02-Thin,
        HelveticaNeueW10-35Thin, sans-serif;
        font-size: 21px;
        height: auto;
        line-height: 32px;
        text-overflow: ellipsis;
        transition: opacity 0.4s ease;
        white-space: normal;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-text
    .info-element-description {
        -webkit-box-orient: vertical;
        color: #2b5672;
        display: block; /*! autoprefixer: ignore next */
        font-family: HelveticaNeueW01-Thin, HelveticaNeueW02-Thin,
        HelveticaNeueW10-35Thin, sans-serif;
        font-size: 15px;
        height: auto;
        line-height: 25px;
        overflow: hidden;
        text-overflow: ellipsis;
        transition: opacity 0.4s ease;
        white-space: nowrap;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-text
    .info-element-description
    > span {
        white-space: normal;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-text
    .info-member.hide {
        display: none;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-text
    .info-element-custom-button-wrapper {
        color: #fff;
        display: flex;
        justify-content: center;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-text
    .info-element-custom-button-wrapper
    button {
        border-style: solid;
        border-width: 1px;
        cursor: pointer;
        display: block;
        font-size: 16px;
        line-height: 0px;
        outline: none;
        overflow: hidden;
        padding: 16px;
        position: relative;
        text-decoration: none;
        text-overflow: ellipsis;
        white-space: nowrap;
        z-index: 10;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-text
    .info-element-custom-button-wrapper
    button
    .overlay {
        display: none;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-text
    .info-element-custom-button-wrapper
    button:hover {
        opacity: 1 !important;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-text
    .info-element-custom-button-wrapper
    button:hover
    .overlay {
        background: hsla(0, 0%, 100%, 0.1);
        display: block;
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social {
        display: flex;
        flex-direction: row;
        height: auto;
        margin: 0;
        overflow: visible;
        position: static;
        transition: opacity 0.4s ease;
        z-index: 16;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social:hover
    .info-element-social-share-box {
        width: 0 !important;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social.info-align-right,
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social.info-align-right
    .info-element-social-share {
        flex-direction: row-reverse;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social.info-align-right
    .info-element-social-share:hover
    .info-element-social-share-box {
        margin-right: 40px !important;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-button {
        color: #2b5672;
        cursor: pointer;
        display: inline-flex;
        font-size: 19px;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-button
    svg {
        fill: inherit;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-button
    * {
        height: inherit;
        width: inherit;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-button:hover:not(.info-element-loved) {
        opacity: 0.7;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-button.info-element-social-comments {
        align-items: center;
        background: transparent;
        border: none;
        -moz-column-gap: 7px;
        column-gap: 7px;
        display: flex;
        font-size: 15px;
        margin: -5px;
        padding: 0;
        padding: 5px;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-button.info-element-social-comments
    .info-element-social-comments-icon {
        fill: #2b5672;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-button.info-element-social-comments
    .info-element-social-comments-count {
        color: #2b5672;
        font-family: HelveticaNeueW01-UltLt, HelveticaNeueW02-UltLt,
        HelveticaNeueW10-25UltL, sans-serif;
        font-size: 15px;
        font-style: normal;
        letter-spacing: 1px;
        line-height: 15px;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-button.info-element-social-love {
        background: transparent;
        border: none;
        font-size: 15px;
        padding: 0;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-button.info-element-social-love
    button,
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-button.info-element-social-love
    i {
        background: transparent;
        border: none;
        cursor: pointer;
        display: inline-block;
        float: left;
        text-decoration: none;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-button.info-element-social-love
    .info-element-social-love-count {
        color: #2b5672;
        display: inline-block;
        float: left;
        font-family: HelveticaNeueW01-UltLt, HelveticaNeueW02-UltLt,
        HelveticaNeueW10-25UltL, sans-serif;
        font-style: normal;
        letter-spacing: 1px;
        margin-top: 2px;
        padding-left: 9px;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-share {
        flex-direction: row;
        outline: none;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-share:hover
    .info-element-social-share-box {
        outline: none;
        width: 210px !important;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box {
        display: inline-block;
        font-size: 12px;
        height: 30px;
        margin-left: 25px !important;
        margin-right: 25px !important;
        max-width: 300px;
        overflow: hidden;
        transform: none !important;
        transition: width 0.3s;
        width: 0;
        z-index: 16;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box.hovered,
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box.opened {
        outline: none;
        width: 210px !important;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box
    button,
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box
    i {
        background: transparent;
        border: none;
        color: #2b5672;
        cursor: pointer;
        display: inline-block;
        float: left;
        font-size: 15px;
        height: 30px;
        line-height: 14px;
        margin: 0 6px;
        text-align: center;
        text-decoration: none;
        width: 30px;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box
    button:hover,
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box
    i:hover {
        opacity: 0.7;
    }
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box
    button.email-share,
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box
    button.twitter-share,
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box
    i.email-share,
    .pro-gallery-wix-wrapper
    .gallery-slideshow
    div.pro-gallery
    .slideshow-info-element-inner
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box
    i.twitter-share {
        font-size: 13px;
    }
    .pro-gallery-wix-wrapper
    .gallery-slider
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-text,
    .pro-gallery-wix-wrapper
    .gallery-thumbnails
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-text {
        padding: 0 20px 20px;
    }
    .pro-gallery-wix-wrapper
    .gallery-slider
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element,
    .pro-gallery-wix-wrapper
    .gallery-thumbnails
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .pro-gallery-wix-wrapper
    .gallery-slider
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element
    .info-element-social,
    .pro-gallery-wix-wrapper
    .gallery-thumbnails
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element
    .info-element-social {
        display: flex;
        flex-direction: row;
        height: auto;
        margin: 0;
        position: static;
    }
    .pro-gallery-wix-wrapper
    .gallery-slider
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element
    .info-element-social.with-arrows,
    .pro-gallery-wix-wrapper
    .gallery-thumbnails
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element
    .info-element-social.with-arrows {
        margin: 0 -10px 0;
        width: auto;
    }
    .pro-gallery-wix-wrapper
    .gallery-slider
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element
    .info-element-social.gradient-top,
    .pro-gallery-wix-wrapper
    .gallery-thumbnails
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element
    .info-element-social.gradient-top {
        background: linear-gradient(rgba(0, 0, 0, 0.2), transparent 140px);
    }
    .pro-gallery-wix-wrapper
    .gallery-slider
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element
    .info-element-social:hover
    .info-element-social-share-box,
    .pro-gallery-wix-wrapper
    .gallery-thumbnails
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element
    .info-element-social:hover
    .info-element-social-share-box {
        width: 0 !important;
    }
    .pro-gallery-wix-wrapper
    .gallery-slider
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element
    .info-element-social.info-align-right,
    .pro-gallery-wix-wrapper
    .gallery-slider
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element
    .info-element-social.info-align-right
    .info-element-social-share,
    .pro-gallery-wix-wrapper
    .gallery-thumbnails
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element
    .info-element-social.info-align-right,
    .pro-gallery-wix-wrapper
    .gallery-thumbnails
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element
    .info-element-social.info-align-right
    .info-element-social-share {
        flex-direction: row-reverse;
    }
    .pro-gallery-wix-wrapper
    .gallery-slider
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element
    .info-element-social.info-align-right
    .info-element-social-share:hover
    .info-element-social-share-box,
    .pro-gallery-wix-wrapper
    .gallery-thumbnails
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element
    .info-element-social.info-align-right
    .info-element-social-share:hover
    .info-element-social-share-box {
        margin-right: 40px !important;
    }
    .pro-gallery-wix-wrapper
    .gallery-slider
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element
    .info-element-social
    .info-element-social-button,
    .pro-gallery-wix-wrapper
    .gallery-thumbnails
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element
    .info-element-social
    .info-element-social-button {
        font-size: 19px;
        margin: 0;
        position: static !important;
    }
    .pro-gallery-wix-wrapper
    .gallery-slider
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element
    .info-element-social
    .info-element-social-button.info-element-social-share,
    .pro-gallery-wix-wrapper
    .gallery-thumbnails
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element
    .info-element-social
    .info-element-social-button.info-element-social-share {
        margin-top: -3px;
    }
    .pro-gallery-wix-wrapper
    .gallery-slider
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element
    .info-element-social
    .info-element-social-share,
    .pro-gallery-wix-wrapper
    .gallery-thumbnails
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element
    .info-element-social
    .info-element-social-share {
        flex-direction: row;
        outline: none;
    }
    .pro-gallery-wix-wrapper
    .gallery-slider
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element
    .info-element-social
    .info-element-social-share:hover
    .info-element-social-share-box,
    .pro-gallery-wix-wrapper
    .gallery-thumbnails
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element
    .info-element-social
    .info-element-social-share:hover
    .info-element-social-share-box {
        outline: none;
        width: 210px !important;
    }
    .pro-gallery-wix-wrapper
    .gallery-slider
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box,
    .pro-gallery-wix-wrapper
    .gallery-thumbnails
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box {
        margin-left: 25px !important;
        margin-right: 25px !important;
        overflow: hidden;
        transition: width 0.3s;
        width: 0;
    }
    .pro-gallery-wix-wrapper
    .gallery-slider
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box.hovered,
    .pro-gallery-wix-wrapper
    .gallery-thumbnails
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .hover-info-element
    .info-element-social
    .info-element-social-share
    .info-element-social-share-box.hovered {
        outline: none;
        width: 210px !important;
    }
    .pro-gallery-wix-wrapper
    .gallery-slider
    div.pro-gallery
    .gallery-item-container
    .gallery-item-common-info
    .info-element-title {
        white-space: normal;
    }
    .pro-gallery-wix-wrapper
    .gallery-columns
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover {
        padding: 30px;
    }
    .pro-gallery-wix-wrapper
    .gallery-columns
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-text {
        padding: 30px 0 0;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-custom-button-wrapper {
        -webkit-box-pack: center;
        color: #fff;
        display: flex;
        justify-content: center; /*! autoprefixer: ignore next */
        transition: opacity 0.4s ease;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-custom-button-wrapper
    .buy-icon {
        margin-right: 7px;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-custom-button-wrapper
    button {
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        border-style: solid;
        border-width: 1px;
        color: #fff;
        cursor: pointer;
        display: block; /*! autoprefixer: ignore next */
        font-size: 16px;
        line-height: 0px;
        opacity: 1;
        outline: none;
        overflow: hidden;
        padding: 16px;
        position: relative;
        text-overflow: ellipsis;
        white-space: nowrap;
        z-index: 10;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-custom-button-wrapper
    button
    .overlay {
        display: none;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-custom-button-wrapper
    button:hover
    .overlay {
        background: hsla(0, 0%, 100%, 0.1);
        display: block;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-text {
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        height: 100%;
        margin: 0;
        padding: 30px;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-text.short-item {
        padding-top: 5px;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-text.narrow-item {
        padding-left: 5px;
        padding-right: 5px;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-text.hidden {
        opacity: 0 !important;
        pointer-events: none;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-text
    > div {
        width: 100%;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-text.push-down {
        box-sizing: border-box;
        padding-top: 60px;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-title {
        -webkit-box-orient: vertical;
        color: #fff;
        display: -webkit-box; /*! autoprefixer: ignore next */
        font-size: 21px;
        line-height: 32px;
        opacity: 0;
        overflow: hidden;
        padding: 0;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-description {
        -webkit-box-orient: vertical;
        color: #fff;
        display: -webkit-box; /*! autoprefixer: ignore next */
        font-size: 15px;
        line-height: 25px;
        opacity: 0;
        overflow: hidden;
        white-space: normal;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-member.hide {
        display: none;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social-new-info-elements {
        display: flex;
        flex-direction: row;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social-absolute {
        left: 0;
        position: absolute;
        top: 0;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social {
        box-sizing: border-box;
        outline: none;
        overflow: visible;
        transition: opacity 0.4s ease;
        z-index: 16;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social.narrow-item,
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social.short-item {
        align-items: flex-end;
        display: flex;
        height: 90%;
        justify-content: space-around;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social.narrow-item
    .info-element-social-button,
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social.short-item
    .info-element-social-button {
        position: static;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social.with-arrows {
        margin: 0 7%;
        width: 86%;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social.hidden {
        opacity: 0 !important;
        pointer-events: none;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social
    .info-element-social-button {
        fill: #fff;
        color: #fff;
        cursor: pointer;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social
    .info-element-social-button
    svg {
        fill: inherit;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social
    .info-element-social-button
    * {
        height: inherit;
        width: inherit;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social
    .info-element-social-button:hover:not(.info-element-loved) {
        opacity: 0.7;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social
    .info-element-social-button.visible {
        opacity: 1 !important;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social
    .info-element-social-button.info-element-social-comments {
        align-items: center;
        background: #2b5672;
        border: none;
        bottom: auto;
        -moz-column-gap: 7px;
        column-gap: 7px;
        display: flex;
        font-size: 15px;
        left: 26px;
        margin: -5px;
        padding: 5px;
        top: 26px;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social
    .info-element-social-button.info-element-social-comments
    .info-element-social-comments-count {
        font-family: HelveticaNeueW01-UltLt, HelveticaNeueW02-UltLt,
        HelveticaNeueW10-25UltL, sans-serif;
        font-size: 15px;
        font-style: normal;
        letter-spacing: 1px;
        line-height: 15px;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social
    .info-element-social-button.info-element-social-love {
        background: transparent;
        border: none;
        bottom: 30px;
        font-size: 15px;
        left: 30px;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social
    .info-element-social-button.info-element-social-love
    button,
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social
    .info-element-social-button.info-element-social-love
    i {
        background: transparent;
        border: none;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        float: left;
        font-size: 18px;
        line-height: 14px;
        outline: none;
        text-decoration: none;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social
    .info-element-social-button.info-element-social-love
    .info-element-social-love-count {
        display: inline-block;
        float: left;
        font-family: HelveticaNeueW01-UltLt, HelveticaNeueW02-UltLt,
        HelveticaNeueW10-25UltL, sans-serif;
        font-size: 15px;
        font-style: normal;
        letter-spacing: 1px;
        line-height: 15px;
        margin-top: 2px;
        padding-left: 9px;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social
    .info-element-social-button.info-element-social-share {
        bottom: 26px;
        left: auto;
        right: 30px;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social
    .info-element-social-button.info-element-social-dots {
        display: flex;
        height: 30px;
        justify-content: center;
        left: auto;
        right: 22px;
        top: 26px;
        width: 20px;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social
    .info-element-social-button.info-element-social-download {
        bottom: 25px;
        left: auto;
        right: 68px;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social
    .info-element-social-button.info-element-social-download.pull-right {
        right: 30px;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social.small-item
    .info-element-social-button {
        bottom: calc(50% - 10px);
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social.small-item
    .info-element-social-button.info-element-social-comments,
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social.small-item
    .info-element-social-button.info-element-social-love {
        left: calc(25% - 8px);
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social.small-item
    .info-element-social-button.info-element-social-comments
    span,
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social.small-item
    .info-element-social-button.info-element-social-love
    span {
        display: none;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social.small-item
    .info-element-social-button.info-element-social-share {
        right: calc(25% - 8px);
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social.small-item
    .info-element-social-button.info-element-social-dots,
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social.small-item
    .info-element-social-button.info-element-social-download {
        left: calc(50% - 8px);
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social.small-item.vertical-item
    .info-element-social-button {
        bottom: auto;
        left: calc(50% - 8px);
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social.small-item.vertical-item
    .info-element-social-button.info-element-social-comments,
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social.small-item.vertical-item
    .info-element-social-button.info-element-social-love {
        top: calc(25% - 10px);
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social.small-item.vertical-item
    .info-element-social-button.info-element-social-share {
        bottom: calc(25% - 10px);
        right: auto;
        top: auto;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social.small-item.vertical-item
    .info-element-social-button.info-element-social-download {
        top: calc(50% - 10px);
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social.small-item.vertical-item
    .info-element-social-button.info-element-social-dots {
        bottom: calc(50% - 10px);
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social-share-box {
        font-size: 12px;
        height: 100%;
        left: 50%;
        margin-left: -3px;
        margin-top: 1px;
        max-width: 300px;
        min-width: 200px;
        opacity: 0;
        outline: none;
        overflow: visible;
        position: absolute;
        top: 0;
        transform: translateX(-50%);
        transition: opacity 0.4s ease;
        width: 100%;
        z-index: 16;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social-share-box.hidden {
        opacity: 0 !important;
        pointer-events: none;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social-share-box
    button,
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social-share-box
    i {
        background: transparent;
        border: none;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        font-size: 15px;
        position: absolute;
        text-align: center;
        top: 50%;
        transform: translateY(-50%);
        width: 22px;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social-share-box
    button:hover,
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social-share-box
    i:hover {
        opacity: 0.7;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social-share-box
    button.network-1,
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social-share-box
    i.network-1 {
        margin-left: 5px;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social-share-box
    button.network-2,
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social-share-box
    i.network-2 {
        font-size: 13px;
        margin-top: 1px;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social-share-box
    button.network-4,
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social-share-box
    i.network-4 {
        margin-left: -1px;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social-share-box
    button.network-5,
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social-share-box
    i.network-5 {
        font-size: 13px;
        margin-left: -3px;
        margin-top: 1px;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social-share-box.vertical-item {
        left: 0;
        max-height: 300px;
        max-width: none;
        min-width: 0;
        top: 50%;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social-share-box.vertical-item
    button,
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social-share-box.vertical-item
    i {
        left: 50%;
        margin-left: -10px;
        margin-top: 8px;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social-share-box.vertical-item
    button.network-2,
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social-share-box.vertical-item
    button.network-5,
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social-share-box.vertical-item
    i.network-2,
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .gallery-item-hover
    .info-element-social-share-box.vertical-item
    i.network-5 {
        font-size: 13px;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-common-info {
        box-sizing: border-box;
        cursor: pointer;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-common-info
    .info-element-description,
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-common-info
    .info-element-title {
        -webkit-box-orient: vertical;
        display: -webkit-box; /*! autoprefixer: ignore next */
        overflow: hidden; /*! autoprefixer: ignore next */
        text-overflow: ellipsis;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-common-info
    .info-element-description
    > span {
        white-space: normal;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-common-info
    .info-member.hide {
        display: none;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-common-info
    .info-element-custom-button-wrapper {
        color: #fff;
        display: flex;
        justify-content: center;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-common-info
    .info-element-custom-button-wrapper
    button {
        border-style: solid;
        border-width: 1px;
        cursor: pointer;
        display: block;
        font-size: 16px;
        line-height: 0px;
        outline: none;
        overflow: hidden;
        padding: 16px;
        position: relative;
        text-decoration: none;
        text-overflow: ellipsis;
        white-space: nowrap;
        z-index: 10;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-common-info
    .info-element-custom-button-wrapper
    button
    .overlay {
        display: none;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery
    .gallery-item-container
    .gallery-item-common-info
    .info-element-custom-button-wrapper
    button:hover
    .overlay {
        background: hsla(0, 0%, 100%, 0.1);
        display: block;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
    }
    .pro-gallery-wix-wrapper
    div.pro-gallery.thumbnails-gallery
    .gallery-item-container
    .info-element-custom-button-wrapper {
        display: none !important;
    }
    .pro-gallery-overlay-animation-wrapper .gallery-item-hover:before {
        transition: all 0.3s cubic-bezier(0.3, 0.13, 0.12, 1);
    }
    .pro-gallery-overlay-animation-wrapper.expand.animation-appears
    .gallery-item-hover:before {
        opacity: 0 !important;
        transform: scale(0.8);
    }
    .pro-gallery-overlay-animation-wrapper.expand.animation-appears
    .gallery-item-container:hover
    .gallery-item-hover:before,
    .pro-gallery-overlay-animation-wrapper.expand.animation-disappears
    .gallery-item-hover:before {
        opacity: 1 !important;
        transform: scale(1);
    }
    .pro-gallery-overlay-animation-wrapper.expand.animation-disappears
    .gallery-item-container:hover
    .gallery-item-hover:before {
        opacity: 0 !important;
        transform: scale(0.8);
    }
    .pro-gallery-overlay-animation-wrapper.fade-in.animation-appears
    .gallery-item-hover:before {
        filter: opacity(0) !important;
        opacity: 0 !important;
    }
    .pro-gallery-overlay-animation-wrapper.fade-in.animation-appears
    .gallery-item-container:hover
    .gallery-item-hover:before,
    .pro-gallery-overlay-animation-wrapper.fade-in.animation-disappears
    .gallery-item-hover:before {
        filter: opacity(1) !important;
        opacity: 1 !important;
    }
    .pro-gallery-overlay-animation-wrapper.fade-in.animation-disappears
    .gallery-item-container:hover
    .gallery-item-hover:before {
        filter: opacity(0) !important;
        opacity: 0 !important;
    }
    .pro-gallery-overlay-animation-wrapper.slide-up.animation-appears
    .gallery-item-hover:before {
        transform: translateY(100%) !important;
    }
    .pro-gallery-overlay-animation-wrapper.slide-up.animation-appears
    .gallery-item-container:hover
    .gallery-item-hover:before,
    .pro-gallery-overlay-animation-wrapper.slide-up.animation-disappears
    .gallery-item-hover:before {
        transform: translateY(0) !important;
    }
    .pro-gallery-overlay-animation-wrapper.slide-up.animation-disappears
    .gallery-item-container:hover
    .gallery-item-hover:before {
        transform: translateY(-100%) !important;
    }
    .pro-gallery-overlay-animation-wrapper.slide-right.animation-appears
    .gallery-item-hover:before {
        opacity: 0 !important;
        transform: translateX(-100%) !important;
    }
    .pro-gallery-overlay-animation-wrapper.slide-right.animation-appears
    .gallery-item-container:hover
    .gallery-item-hover:before,
    .pro-gallery-overlay-animation-wrapper.slide-right.animation-disappears
    .gallery-item-hover:before {
        opacity: 1 !important;
        transform: translateX(0) !important;
    }
    .pro-gallery-overlay-animation-wrapper.slide-right.animation-disappears
    .gallery-item-container:hover
    .gallery-item-hover:before {
        opacity: 0 !important;
        transform: translateX(100%) !important;
    }
    .pro-gallery-overlay-animation-wrapper.slide-down.animation-appears
    .gallery-item-hover:before {
        opacity: 0 !important;
        transform: translateY(-100%) !important;
    }
    .pro-gallery-overlay-animation-wrapper.slide-down.animation-appears
    .gallery-item-container:hover
    .gallery-item-hover:before,
    .pro-gallery-overlay-animation-wrapper.slide-down.animation-disappears
    .gallery-item-hover:before {
        opacity: 1 !important;
        transform: translateY(0) !important;
    }
    .pro-gallery-overlay-animation-wrapper.slide-down.animation-disappears
    .gallery-item-container:hover
    .gallery-item-hover:before {
        opacity: 0 !important;
        transform: translateY(100%) !important;
    }
    .pro-gallery-overlay-animation-wrapper.slide-left.animation-appears
    .gallery-item-hover:before {
        opacity: 0 !important;
        transform: translateX(100%) !important;
    }
    .pro-gallery-overlay-animation-wrapper.slide-left.animation-appears
    .gallery-item-container:hover
    .gallery-item-hover:before,
    .pro-gallery-overlay-animation-wrapper.slide-left.animation-disappears
    .gallery-item-hover:before {
        opacity: 1 !important;
        transform: translateX(0) !important;
    }
    .pro-gallery-overlay-animation-wrapper.slide-left.animation-disappears
    .gallery-item-container:hover
    .gallery-item-hover:before {
        opacity: 0 !important;
        transform: translateX(-100%) !important;
    }
    .manual-height-gallery-wrapper {
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
    }
    .fullscreen-focus-lock {
        height: 100%;
    }
    #variant-resize-watcher {
        left: 0;
        pointer-events: none;
        position: absolute;
        top: 0;
        visibility: hidden;
        width: calc(var(--variant-count) * 0.1px);
    }
    :root {
        --ProGallery669818973-overFreemiumBanner: 1000000;
        --ProGallery669818973-overFullscreen: 1000001;
    }
    .ProGallery669818973__container {
        overflow: auto;
        overflow-x: hidden;
    }
    .ProGallery669818973__container-prerender {
        height: 100%;
        min-height: -moz-max-content;
        min-height: max-content;
    }
    .ProGallery669818973__root {
        -archetype: paintBox;
        box-sizing: border-box;
        height: 100%;
        max-height: 100%;
        width: 100%;
    }
    .pro-gallery-parent-container {
        -archetype: paintBox;
    }
    .gallery-item-container,
    .gallery-item-container .gallery-item-content,
    .gallery-item-container .gallery-item-hover:before {
        transition: all 0.3s, width 0s, height 0s;
    }
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .item-hover-flex-container
    .gallery-item-hover.force-hover:before,
    div.pro-gallery
    .gallery-item-container
    .gallery-item-wrapper
    .item-hover-flex-container
    .gallery-item-hover:before {
        background: transparent;
    }
    .nav-arrows-container {
        opacity: 1 !important;
    }
    .nav-arrows-container.only-arrows {
        background: unset !important;
        border: unset !important;
        box-shadow: unset !important;
    }
    .ProGallery669818973__info {
        -archetype: text;
        box-sizing: border-box;
    }
    .gallery-item-common-info .info-element-title {
        color: rgb(var(--color_15));
        font: var(--font_6);
    }
    .gallery-item-common-info .info-element-description {
        color: rgb(var(--color_15));
        font: var(--font_8);
    }
    .hover-info-element .info-element-title {
        color: rgb(var(--color_11));
        font: var(--font_6);
    }
    .hover-info-element .info-element-description {
        color: rgb(var(--color_11));
        font: var(--font_8);
    }
    .ProGallery669818973__fullscreen {
        -archetype: paintBox;
        background: #fff;
        height: 100vh;
        left: 0;
        position: fixed;
        top: 0;
        width: 100vw;
        z-index: var(--ProGallery669818973-overFreemiumBanner);
    }
    .show-more {
        -archetype: box;
    }
    .ProGallery669818973__fullscreen .ProGallery669818973__x {
        -archetype: icon;
        cursor: pointer;
        position: fixed;
        right: 25px;
        top: 25px;
        z-index: var(--ProGallery669818973-overFullscreen);
    }
    #fullscreen-view {
        -archetype: paintBox;
        background-color: rgb(var(--color_11));
    }
    #fullscreen-view .fullscreen-side-bar-title h1 {
        -archetype: text;
        color: rgb(var(--color_15));
        font: var(--font_4);
    }
    #fullscreen-view .fullscreen-side-bar-description,
    #fullscreen-view .fullscreen-side-bar-link {
        -archetype: text;
        color: rgb(var(--color_15));
        font: var(--font_8);
    }
    #fullscreen-view .fullscreen-close,
    #fullscreen-view .fullscreen-icon {
        -archetype: icon;
        color: rgb(var(--color_15));
    }
    #fullscreen-view.pro-fullscreen-expanded .icon-background {
        -archetype: paintBox;
        background: rgba(var(--color_11), 0.4);
        opacity: 1;
    }
    #fullscreen-view .pro-gallery-slider-arrow svg {
        -archetype: icon;
        color: rgb(var(--color_15));
    }
    #fullscreen-view.pro-fullscreen-expanded .pro-gallery-slider-arrow {
        -archetype: paintBox;
        background: rgba(var(--color_11), 0.4);
    }
    .gallery-item-common-info .info-element-custom-button-button,
    .hover-info-element .info-element-custom-button-button {
        border-style: solid;
        border-width: 1px;
        font-size: 16px;
        line-height: 0px;
        padding: 16px;
    }
</style>
<style
        data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[StylableButton_Default].e469137d.min.css"
>
    .StylableButton2545352419__root {
        -archetype: box;
        border: none;
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        height: 100%;
        min-height: 10px;
        min-width: 10px;
        padding: 0;
        touch-action: manipulation;
        width: 100%;
    }
    .StylableButton2545352419__root[disabled] {
        pointer-events: none;
    }
    .StylableButton2545352419__root:not(:hover):not(
				[disabled]
			).StylableButton2545352419--hasBackgroundColor {
        background-color: var(--corvid-background-color) !important;
    }
    .StylableButton2545352419__root:hover:not(
				[disabled]
			).StylableButton2545352419--hasHoverBackgroundColor {
        background-color: var(--corvid-hover-background-color) !important;
    }
    .StylableButton2545352419__root:not(
				:hover
			)[disabled].StylableButton2545352419--hasDisabledBackgroundColor {
        background-color: var(--corvid-disabled-background-color) !important;
    }
    .StylableButton2545352419__root:not(:hover):not(
				[disabled]
			).StylableButton2545352419--hasBorderColor {
        border-color: var(--corvid-border-color) !important;
    }
    .StylableButton2545352419__root:hover:not(
				[disabled]
			).StylableButton2545352419--hasHoverBorderColor {
        border-color: var(--corvid-hover-border-color) !important;
    }
    .StylableButton2545352419__root:not(
				:hover
			)[disabled].StylableButton2545352419--hasDisabledBorderColor {
        border-color: var(--corvid-disabled-border-color) !important;
    }
    .StylableButton2545352419__root.StylableButton2545352419--hasBorderRadius {
        border-radius: var(--corvid-border-radius) !important;
    }
    .StylableButton2545352419__root.StylableButton2545352419--hasBorderWidth {
        border-width: var(--corvid-border-width) !important;
    }
    .StylableButton2545352419__root:not(:hover):not(
				[disabled]
			).StylableButton2545352419--hasColor,
    .StylableButton2545352419__root:not(:hover):not(
				[disabled]
			).StylableButton2545352419--hasColor
    .StylableButton2545352419__label {
        color: var(--corvid-color) !important;
    }
    .StylableButton2545352419__root:hover:not(
				[disabled]
			).StylableButton2545352419--hasHoverColor,
    .StylableButton2545352419__root:hover:not(
				[disabled]
			).StylableButton2545352419--hasHoverColor
    .StylableButton2545352419__label {
        color: var(--corvid-hover-color) !important;
    }
    .StylableButton2545352419__root:not(
				:hover
			)[disabled].StylableButton2545352419--hasDisabledColor,
    .StylableButton2545352419__root:not(
				:hover
			)[disabled].StylableButton2545352419--hasDisabledColor
    .StylableButton2545352419__label {
        color: var(--corvid-disabled-color) !important;
    }
    .StylableButton2545352419__link {
        -archetype: box;
        box-sizing: border-box;
        color: #000;
        text-decoration: none;
    }
    .StylableButton2545352419__container {
        align-items: center;
        display: flex;
        flex-basis: auto;
        flex-direction: row;
        flex-grow: 1;
        height: 100%;
        justify-content: center;
        overflow: hidden;
        transition: all 0.2s ease, visibility 0s;
        width: 100%;
    }
    .StylableButton2545352419__label {
        -archetype: text;
        -controller-part-type: LayoutChildDisplayDropdown,
        LayoutFlexChildSpacing(first);
        max-width: 100%;
        min-width: 1.8em;
        overflow: hidden;
        text-align: center;
        text-overflow: ellipsis;
        transition: inherit;
        white-space: nowrap;
    }
    .StylableButton2545352419__root.StylableButton2545352419--isMaxContent
    .StylableButton2545352419__label {
        text-overflow: unset;
    }
    .StylableButton2545352419__root.StylableButton2545352419--isWrapText
    .StylableButton2545352419__label {
        min-width: 10px;
        overflow-wrap: break-word;
        white-space: break-spaces;
        word-break: break-word;
    }
    .StylableButton2545352419__icon {
        -archetype: icon;
        -controller-part-type: LayoutChildDisplayDropdown,
        LayoutFlexChildSpacing(last);
        flex-shrink: 0;
        height: 50px;
        min-width: 1px;
        transition: inherit;
    }
    .StylableButton2545352419__icon.StylableButton2545352419--override {
        display: block !important;
    }
    .StylableButton2545352419__icon svg,
    .StylableButton2545352419__icon > span {
        display: flex;
        height: inherit;
        width: inherit;
    }
    .StylableButton2545352419__root:not(:hover):not(
				[disalbed]
			).StylableButton2545352419--hasIconColor
    .StylableButton2545352419__icon
    svg {
        fill: var(--corvid-icon-color) !important;
        stroke: var(--corvid-icon-color) !important;
    }
    .StylableButton2545352419__root:hover:not(
				[disabled]
			).StylableButton2545352419--hasHoverIconColor
    .StylableButton2545352419__icon
    svg {
        fill: var(--corvid-hover-icon-color) !important;
        stroke: var(--corvid-hover-icon-color) !important;
    }
    .StylableButton2545352419__root:not(
				:hover
			)[disabled].StylableButton2545352419--hasDisabledIconColor
    .StylableButton2545352419__icon
    svg {
        fill: var(--corvid-disabled-icon-color) !important;
        stroke: var(--corvid-disabled-icon-color) !important;
    }
</style>
<style
        data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[ClassicSection].6435d050.min.css"
>
    .MW5IWV {
        height: 100%;
        left: 0;
        -webkit-mask-image: var(--mask-image, none);
        mask-image: var(--mask-image, none);
        -webkit-mask-position: var(--mask-position, 0);
        mask-position: var(--mask-position, 0);
        -webkit-mask-repeat: var(--mask-repeat, no-repeat);
        mask-repeat: var(--mask-repeat, no-repeat);
        -webkit-mask-size: var(--mask-size, 100%);
        mask-size: var(--mask-size, 100%);
        overflow: hidden;
        pointer-events: var(--fill-layer-background-media-pointer-events);
        position: absolute;
        top: 0;
        width: 100%;
    }
    .MW5IWV.N3eg0s {
        clip: rect(0, auto, auto, 0);
    }
    .MW5IWV .Kv1aVt {
        height: 100%;
        position: absolute;
        top: 0;
        width: 100%;
    }
    .MW5IWV .dLPlxY {
        height: var(--fill-layer-image-height, 100%);
        opacity: var(--fill-layer-image-opacity);
    }
    .MW5IWV .dLPlxY img {
        height: 100%;
        width: 100%;
    }
    @supports (-webkit-hyphens: none) {
        .MW5IWV.N3eg0s {
            clip: auto;
            -webkit-clip-path: inset(0);
        }
    }
    .VgO9Yg {
        height: 100%;
    }
    .LWbAav {
        background-color: var(--bg-overlay-color);
        background-image: var(--bg-gradient);
        transition: var(--inherit-transition);
    }
    .K_YxMd,
    .yK6aSC {
        opacity: var(--fill-layer-video-opacity);
    }
    .NGjcJN {
        bottom: var(--media-padding-bottom);
        height: var(--media-padding-height);
        position: absolute;
        top: var(--media-padding-top);
        width: 100%;
    }
    .mNGsUM {
        transform: scale(var(--scale, 1));
        transition: var(--transform-duration, transform 0s);
    }
    .K_YxMd {
        height: 100%;
        position: relative;
        width: 100%;
    }
    wix-media-canvas {
        display: block;
        height: 100%;
    }
    .I8xA4L {
        opacity: var(
                --fill-layer-video-opacity,
                var(--fill-layer-image-opacity, 1)
        );
    }
    .I8xA4L .K_YxMd,
    .I8xA4L .dLPlxY,
    .I8xA4L .yK6aSC {
        opacity: 1;
    }
    .Oqnisf {
        overflow: visible;
    }
    .Oqnisf > .MW5IWV .LWbAav {
        background-color: var(
                --section-corvid-background-color,
                var(--bg-overlay-color)
        );
    }
    .cM88eO {
        backface-visibility: hidden;
    }
    .YtfWHd {
        left: 0;
        top: 0;
    }
    .YtfWHd,
    .mj3xJ8 {
        position: absolute;
    }
    .mj3xJ8 {
        clip: rect(0 0 0 0);
        background-color: #fff;
        border-radius: 50%;
        bottom: 3px;
        color: #000;
        display: grid;
        height: 24px;
        outline: 1px solid #000;
        place-items: center;
        pointer-events: none;
        right: 3px;
        width: 24px;
        z-index: 9999;
    }
    .mj3xJ8:active,
    .mj3xJ8:focus {
        clip: auto;
        pointer-events: auto;
    }
    .Tj01hh,
    .jhxvbR {
        display: block;
        height: 100%;
        width: 100%;
    }
    .jhxvbR img {
        max-width: var(--wix-img-max-width, 100%);
    }
    .jhxvbR[data-animate-blur] img {
        filter: blur(9px);
        transition: filter 0.8s ease-in;
    }
    .jhxvbR[data-animate-blur] img[data-load-done] {
        filter: none;
    }
    .bX9O_S {
        clip-path: var(--fill-layer-clip);
    }
    .Z_wCwr,
    .bX9O_S {
        position: absolute;
        top: 0;
    }
    .Jxk_UL img,
    .Z_wCwr,
    .bX9O_S {
        height: 100%;
        width: 100%;
    }
    .K8MSra {
        opacity: 0;
    }
    .K8MSra,
    .YTb3b4 {
        position: absolute;
        top: 0;
    }
    .YTb3b4 {
        height: 0;
        left: 0;
        overflow: hidden;
        width: 0;
    }
    .SUz0WK {
        left: 0;
        pointer-events: var(--fill-layer-background-media-pointer-events);
        position: var(--fill-layer-background-media-position);
    }
    .FNxOn5,
    .SUz0WK,
    .m4khSP {
        height: 100%;
        top: 0;
        width: 100%;
    }
    .FNxOn5 {
        position: absolute;
    }
    .m4khSP {
        background-color: var(--fill-layer-background-overlay-color);
        opacity: var(--fill-layer-background-overlay-blend-opacity-fallback, 1);
        position: var(--fill-layer-background-overlay-position);
        transform: var(--fill-layer-background-overlay-transform);
    }
    @supports (mix-blend-mode: overlay) {
        .m4khSP {
            mix-blend-mode: var(--fill-layer-background-overlay-blend-mode);
            opacity: var(--fill-layer-background-overlay-blend-opacity, 1);
        }
    }
    .dkukWC {
        --divider-pin-height__: min(
                1,
                calc(var(--divider-layers-pin-factor__) + 1)
        );
        --divider-pin-layer-height__: var(--divider-layers-pin-factor__);
        --divider-pin-border__: min(
                1,
                calc(var(--divider-layers-pin-factor__) / -1 + 1)
        );
        height: calc(
                var(--divider-height__) + var(--divider-pin-height__) *
                var(--divider-layers-size__) * var(--divider-layers-y__)
        );
    }
    .dkukWC,
    .dkukWC .FRCqDF {
        left: 0;
        position: absolute;
        width: 100%;
    }
    .dkukWC .FRCqDF {
        --divider-layer-i__: var(--divider-layer-i, 0);
        background-position: left
        calc(
                50% + var(--divider-offset-x__) + var(--divider-layers-x__) *
                var(--divider-layer-i__)
        )
        bottom;
        background-repeat: repeat-x;
        border-bottom-style: solid;
        border-bottom-width: calc(
                var(--divider-pin-border__) * var(--divider-layer-i__) *
                var(--divider-layers-y__)
        );
        height: calc(
                var(--divider-height__) + var(--divider-pin-layer-height__) *
                var(--divider-layer-i__) * var(--divider-layers-y__)
        );
        opacity: calc(
                1 - var(--divider-layer-i__) / (var(--divider-layer-i__) + 1)
        );
    }
    .xnZvZH {
        --divider-height__: var(--divider-top-height, auto);
        --divider-offset-x__: var(--divider-top-offset-x, 0px);
        --divider-layers-size__: var(--divider-top-layers-size, 0);
        --divider-layers-y__: var(--divider-top-layers-y, 0px);
        --divider-layers-x__: var(--divider-top-layers-x, 0px);
        --divider-layers-pin-factor__: var(--divider-top-layers-pin-factor, 0);
        border-top: var(--divider-top-padding, 0) solid
        var(--divider-top-color, currentColor);
        opacity: var(--divider-top-opacity, 1);
        top: 0;
        transform: var(--divider-top-flip, scaleY(-1));
    }
    .xnZvZH .FRCqDF {
        background-image: var(--divider-top-image, none);
        background-size: var(--divider-top-size, contain);
        border-color: var(--divider-top-color, currentColor);
        bottom: 0;
        filter: var(--divider-top-filter, none);
    }
    .xnZvZH .FRCqDF[data-divider-layer="1"] {
        display: var(--divider-top-layer-1-display, block);
    }
    .xnZvZH .FRCqDF[data-divider-layer="2"] {
        display: var(--divider-top-layer-2-display, block);
    }
    .xnZvZH .FRCqDF[data-divider-layer="3"] {
        display: var(--divider-top-layer-3-display, block);
    }
    .MBOSCN {
        --divider-height__: var(--divider-bottom-height, auto);
        --divider-offset-x__: var(--divider-bottom-offset-x, 0px);
        --divider-layers-size__: var(--divider-bottom-layers-size, 0);
        --divider-layers-y__: var(--divider-bottom-layers-y, 0px);
        --divider-layers-x__: var(--divider-bottom-layers-x, 0px);
        --divider-layers-pin-factor__: var(--divider-bottom-layers-pin-factor, 0);
        border-bottom: var(--divider-bottom-padding, 0) solid
        var(--divider-bottom-color, currentColor);
        bottom: 0;
        opacity: var(--divider-bottom-opacity, 1);
        transform: var(--divider-bottom-flip, none);
    }
    .MBOSCN .FRCqDF {
        background-image: var(--divider-bottom-image, none);
        background-size: var(--divider-bottom-size, contain);
        border-color: var(--divider-bottom-color, currentColor);
        bottom: 0;
        filter: var(--divider-bottom-filter, none);
    }
    .MBOSCN .FRCqDF[data-divider-layer="1"] {
        display: var(--divider-bottom-layer-1-display, block);
    }
    .MBOSCN .FRCqDF[data-divider-layer="2"] {
        display: var(--divider-bottom-layer-2-display, block);
    }
    .MBOSCN .FRCqDF[data-divider-layer="3"] {
        display: var(--divider-bottom-layer-3-display, block);
    }
</style>
<style
        data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[RefComponent].d977fc56.min.css"
>
    .S6Dcte {
        pointer-events: var(--ref-container-pointer-events) !important;
    }
    .S6Dcte > * {
        pointer-events: auto;
    }
</style>
<style
        data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[AppWidget_Responsive].4475aedb.min.css"
>
    .xpmKd_ {
        border-radius: var(--overflow-wrapper-border-radius);
    }
</style>
<style
        data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[Container_ResponsiveBox].c2481a3a.min.css"
>
    .cwL6XW {
        cursor: pointer;
    }
    .PiVxGu {
        --container-corvid-border-color: rgba(
                var(--brd, var(--color_15, color_15)),
                var(--alpha-brd, 1)
        );
        --container-corvid-border-size: var(--brw, 1px);
        --container-corvid-background-color: var(
                --background,
                rgba(var(--bg, var(--color_11, color_11)), var(--alpha-bg, 1))
        );
        --overflow-wrapper-border-radius: var(--rd);
        --backdrop-filter: $backdrop-filter;
    }
    .MDrwHQ {
        background: none !important;
        border: none !important;
        box-shadow: none !important;
    }
    .YqUfCX {
        -webkit-backdrop-filter: var(--backdrop-filter, none);
        backdrop-filter: var(--backdrop-filter, none);
        background-color: var(
                --container-corvid-background-color,
                var(
                        --background,
                        rgba(var(--bg, var(--color_11, color_11)), var(--alpha-bg, 1))
                )
        );
        background-image: var(--bg-gradient, none);
        border: var(--container-corvid-border-width, var(--brw, 1px)) solid
        var(
                --container-corvid-border-color,
                rgba(var(--brd, var(--color_15, color_15)), var(--alpha-brd, 1))
        );
        border-radius: var(--rd, 5px);
        bottom: 0;
        box-shadow: var(--shd, 0 1px 4px rgba(0, 0, 0, 0.6));
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
    }
    .yPXgy9 {
        bottom: 0 !important;
        height: unset !important;
        left: 0 !important;
        margin: 0 !important;
        max-height: unset !important;
        max-width: unset !important;
        min-height: unset !important;
        min-width: unset !important;
        padding: 0 !important;
        position: absolute !important;
        right: 0 !important;
        top: 0 !important;
        width: unset !important;
        z-index: unset !important;
    }
</style>
<style
        data-href="https://static.parastorage.com/services/wix-thunderbolt/dist/TPABaseComponent.27e1e284.chunk.min.css"
>
    .OQ8Tzd,
    .nKphmK {
        overflow: hidden;
    }
    .nKphmK {
        height: 100%;
        position: relative;
        width: 100%;
    }
    .nKphmK:-ms-fullscreen {
        min-height: auto !important;
    }
    .nKphmK:fullscreen {
        min-height: auto !important;
    }
    .pvlz2w {
        visibility: hidden;
    }
</style>
<style
        data-href="https://static.parastorage.com/services/wix-thunderbolt/dist/group_7.bae0ce0c.chunk.min.css"
>
    .TWFxr5 {
        height: auto !important;
    }
    .May50y {
        overflow: hidden !important;
    }
</style>
<title>Inicio | 2514 Accessories Sto</title>
<link
        rel="canonical"
        href="https://www.wix.com/templateses/2514-accessories-sto"
/>
<meta name="robots" content="noindex" />
<meta property="og:title" content="Inicio | 2514 Accessories Sto" />
<meta
        property="og:url"
        content="https://www.wix.com/templateses/2514-accessories-sto"
/>
<meta property="og:site_name" content="2514 Accessories Sto" />
<meta property="og:type" content="website" />
<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "WebSite",
        "url": "https://www.wix.com/templateses/2514-accessories-sto/",
        "potentialAction": {
            "@type": "SearchAction",
            "target": {
                "@type": "EntryPoint",
                "urlTemplate": "https://www.wix.com/templateses/2514-accessories-sto/popup-ap1v6?q={search_term}"
            },
            "query-input": "required name=search_term"
        }
    }
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "LocalBusiness",
        "name": "almudena.",
        "url": "https://www.wix.com/templateses/2514-accessories-sto",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "MX",
            "addressLocality": "Guadalajara",
            "postalCode": "44100 ",
            "streetAddress": "10 Av. Fray Antonio Alcalde 10"
        },
        "telephone": "+52-1-33-12345678"
    }
</script>
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Inicio | 2514 Accessories Sto" />
<style id="page-transitions">
    @view-transition {
        navigation: auto;
        types: OutIn;
    }
</style>
<style
        rel="stylesheet"
        data-href="https://static.parastorage.com/services/ecom-platform-cart-icon/1.1945.0/CartIconViewerWidget.min.css"
>
    .sELt_Df.obpcRtb--madefor,
    .sfqgB34.oKGDZcc--madefor {
        --wbu-font-stack: var(--wix-font-stack);
        --wbu-font-weight-regular: var(--wix-font-weight-regular);
        --wbu-font-weight-medium: var(--wix-font-weight-medium);
        --wbu-font-weight-bold: var(--wix-font-weight-bold);
    }
    .Q8TtId {
        padding: 0;
        position: relative;
    }
    .Q8TtId > svg {
        bottom: 0;
        left: 0;
        position: absolute !important;
        right: 0;
        top: 0;
    }
    .aZhaoZ {
        opacity: 0;
    }
    .s1dvzA {
        display: block;
        outline: none;
        text-decoration: none;
        width: 100%;
    }
    .s1dvzA,
    .s1dvzA svg {
        overflow: visible;
    }
    .js-focus-visible .s1dvzA:focus {
        box-shadow: none;
        position: relative;
    }
    .js-focus-visible .s1dvzA:focus:after {
        box-shadow: inset 0 0 1px 1px #3899ec,
        inset 0 0 0 2px hsla(0, 0%, 100%, 0.9);
        content: "";
        height: 100%;
        left: 0;
        outline: none;
        position: absolute;
        top: 0;
        width: 100%;
    }
    .tx4Jvn text.uxskpx {
        font-size: 50px !important;
    }
    .tx4Jvn.qZfbbY .uxskpx {
        font-size: 45px !important;
    }
    .tx4Jvn.fzGViX .uxskpx {
        font-size: 37px !important;
    }
    .DRb0Pe.qZfbbY .uxskpx {
        font-size: 80px !important;
    }
    .DRb0Pe.fzGViX .uxskpx {
        font-size: 58px !important;
    }
    .WWgVyT.qZfbbY .uxskpx {
        font-size: 60px !important;
    }
    .WWgVyT.fzGViX .uxskpx {
        font-size: 45px !important;
    }
    .XPTyZQ.qZfbbY .uxskpx {
        font-size: 60px !important;
    }
    .XPTyZQ.fzGViX .uxskpx {
        font-size: 40px !important;
    }
    .KpNISr.qZfbbY .uxskpx {
        font-size: 70px !important;
    }
    .KpNISr.fzGViX .uxskpx {
        font-size: 60px !important;
    }
    .l3royO.qZfbbY .uxskpx {
        font-size: 80px !important;
    }
    .l3royO.fzGViX .uxskpx {
        font-size: 60px !important;
    }
    .hAeODa.qZfbbY .uxskpx {
        font-size: 75px !important;
    }
    .hAeODa.fzGViX .uxskpx {
        font-size: 55px !important;
    }
    .spQjTI.qZfbbY .uxskpx {
        font-size: 75px !important;
    }
    .spQjTI.fzGViX .uxskpx {
        font-size: 59px !important;
    }
    .yA1DNe.qZfbbY .uxskpx {
        font-size: 80px !important;
    }
    .yA1DNe.fzGViX .uxskpx {
        font-size: 65px !important;
    }
    .Rl4inp.qZfbbY .uxskpx {
        font-size: 75px !important;
    }
    .Rl4inp.fzGViX .uxskpx {
        font-size: 60px !important;
    }
    .of9Ja5.qZfbbY .uxskpx {
        font-size: 80px !important;
    }
    .of9Ja5.fzGViX .uxskpx {
        font-size: 60px !important;
    }
    .eEK14c {
        display: block;
        outline: none;
        text-decoration: none;
        width: 100%;
    }
    .eEK14c,
    .eEK14c svg {
        overflow: visible;
    }
    .js-focus-visible .eEK14c:focus {
        box-shadow: none;
        position: relative;
    }
    .js-focus-visible .eEK14c:focus:after {
        box-shadow: inset 0 0 1px 1px #3899ec,
        inset 0 0 0 2px hsla(0, 0%, 100%, 0.9);
        content: "";
        height: 100%;
        left: 0;
        outline: none;
        position: absolute;
        top: 0;
        width: 100%;
    }
    .eEK14c circle,
    .eEK14c path,
    .eEK14c polygon,
    .eEK14c polyline,
    .eEK14c rect {
        fill: rgb(var(--cartWidget_cartIcon, var(--wix-color-8)));
    }
    .eEK14c text {
        fill: rgb(var(--cartWidget_cartIconText, var(--wix-color-8)));
        font: var(--cartWidget_cartIconTextFont, var(--wix-font-Body-M));
        font-size: 90px;
    }
    .eEK14c .puciUO {
        fill: rgba(var(--cartWidget_cartIconNumber, var(--wix-color-1)));
        font: var(--cartWidget_cartIconNumberFont, var(--wix-font-Body-M));
        font-size: 90px;
    }
    .eEK14c .puciUO.f6TePH {
        fill: rgba(var(--cartWidget_cartIconNumber, var(--wix-color-8)));
    }
    .eEK14c .FVlU_P {
        fill: rgba(var(--cartWidget_cartIconBubble, var(--wix-color-8)));
    }
    .UtO133 text.puciUO {
        font-size: 11px;
    }
    .UtO133.xgXOpM .puciUO {
        font-size: 10px;
    }
    .UtO133.tV42BG .puciUO {
        font-size: 8px;
    }
    .VbCsjW text.puciUO {
        font-size: 50px !important;
    }
    .VbCsjW.xgXOpM .puciUO {
        font-size: 45px !important;
    }
    .VbCsjW.tV42BG .puciUO {
        font-size: 37px !important;
    }
    .OE22el text.puciUO {
        font-size: 10px;
    }
    .OE22el.xgXOpM .puciUO {
        font-size: 8px;
    }
    .OE22el.tV42BG .puciUO {
        font-size: 6px;
    }
    .OE22el path {
        fill: none;
        stroke: rgb(var(--cartWidget_cartIcon, var(--wix-color-8)));
        stroke-linejoin: round;
    }
    .oNPwj8.xgXOpM .puciUO {
        font-size: 80px !important;
    }
    .oNPwj8.tV42BG .puciUO {
        font-size: 58px !important;
    }
    .a_BhjW.xgXOpM .puciUO {
        font-size: 60px;
    }
    .a_BhjW.tV42BG .puciUO {
        font-size: 45px;
    }
    .QtZH5q.xgXOpM .puciUO {
        font-size: 60px !important;
    }
    .QtZH5q.tV42BG .puciUO {
        font-size: 45px !important;
    }
    .ASBWh_.xgXOpM .puciUO {
        font-size: 60px;
    }
    .ASBWh_.tV42BG .puciUO {
        font-size: 40px;
    }
    .VhQQfA.xgXOpM .puciUO {
        font-size: 60px !important;
    }
    .VhQQfA.tV42BG .puciUO {
        font-size: 40px !important;
    }
    .XwUx1w.xgXOpM .puciUO {
        font-size: 70px;
    }
    .XwUx1w.tV42BG .puciUO {
        font-size: 60px;
    }
    .XwUx1w path {
        fill: none;
        stroke: rgb(var(--cartWidget_cartIcon, var(--wix-color-8)));
        stroke-linejoin: round;
    }
    .SbJOTz.xgXOpM .puciUO {
        font-size: 70px !important;
    }
    .SbJOTz.tV42BG .puciUO {
        font-size: 60px !important;
    }
    .x61qQI text.puciUO {
        font-size: 16px;
    }
    .x61qQI.xgXOpM .puciUO {
        font-size: 14px;
    }
    .x61qQI.tV42BG .puciUO {
        font-size: 12px;
    }
    .x61qQI path {
        stroke: rgb(var(--cartWidget_cartIcon, var(--wix-color-8)));
        stroke-linejoin: round;
        fill: none;
    }
    .r_02yZ.xgXOpM .puciUO {
        font-size: 80px !important;
    }
    .r_02yZ.tV42BG .puciUO {
        font-size: 60px !important;
    }
    .wPfzsT.xgXOpM .puciUO {
        font-size: 75px;
    }
    .wPfzsT.tV42BG .puciUO {
        font-size: 55px;
    }
    .H6bxoB.xgXOpM .puciUO {
        font-size: 75px !important;
    }
    .H6bxoB.tV42BG .puciUO {
        font-size: 55px !important;
    }
    .NKCcP7 text.puciUO {
        font-size: 14px;
    }
    .NKCcP7.xgXOpM .puciUO {
        font-size: 12px;
    }
    .NKCcP7.tV42BG .puciUO {
        font-size: 10px;
    }
    .bPU06A.xgXOpM .puciUO {
        font-size: 75px !important;
    }
    .bPU06A.tV42BG .puciUO {
        font-size: 59px !important;
    }
    .wSTvma text.puciUO {
        font-size: 11px;
    }
    .wSTvma.xgXOpM .puciUO {
        font-size: 10px;
    }
    .wSTvma.tV42BG .puciUO {
        font-size: 8px;
    }
    .wSTvma path {
        stroke: rgb(var(--cartWidget_cartIcon, var(--wix-color-8)));
        stroke-width: 0.95;
        stroke-linejoin: round;
        fill: none;
    }
    .Ilw0Ec.xgXOpM .puciUO {
        font-size: 80px !important;
    }
    .Ilw0Ec.tV42BG .puciUO {
        font-size: 65px !important;
    }
    .gIMUNC text.puciUO {
        font-size: 14px;
    }
    .gIMUNC.xgXOpM .puciUO {
        font-size: 12px;
    }
    .gIMUNC.tV42BG .puciUO {
        font-size: 10px;
    }
    .IYE8zB.xgXOpM .puciUO {
        font-size: 75px !important;
    }
    .IYE8zB.tV42BG .puciUO {
        font-size: 60px !important;
    }
    .MmI68k.xgXOpM .puciUO {
        font-size: 80px !important;
    }
    .MmI68k.tV42BG .puciUO {
        font-size: 60px !important;
    }
    .N1o4SY.xgXOpM .puciUO {
        font-size: 80px !important;
    }
    .N1o4SY.tV42BG .puciUO {
        font-size: 60px !important;
    }
</style>
<style
        rel="stylesheet"
        data-href="https://static.parastorage.com/services/wixstores-client-gallery/1.5486.0/SliderGalleryViewerWidget.min.css"
>
    .sVPVtjw.oQHE0PB--madefor,
    .snMKDpY.olsQAXE--madefor {
        --wbu-font-stack: var(--wix-font-stack);
        --wbu-font-weight-regular: var(--wix-font-weight-regular);
        --wbu-font-weight-medium: var(--wix-font-weight-medium);
        --wbu-font-weight-bold: var(--wix-font-weight-bold);
    }
    .s__65YAB3 {
        --wix-ui-tpa-wow-image-border-radius: calc(
                var(--gallery_imageCornerRadius, 0) * 1px
        );
    }
    .sEB4lwX {
        align-items: center;
        display: inline-flex;
        position: relative;
    }
    .sEB4lwX,
    .sdCNDuf,
    .smXRi52 {
        outline: 0;
    }
    .srt_PWI {
        display: inline-block;
        position: relative;
    }
    .srt_PWI.okeCvsb--fluid {
        display: block;
        width: 100%;
    }
    .sjt3w5R {
        background-color: #fff;
        border-color: #000;
        border-radius: initial;
        border-style: solid;
        border-width: 1px;
        padding: initial;
    }
    .seahKd5 {
        border-style: solid;
        height: 0;
        margin: 5px;
        position: absolute;
        width: 0;
    }
    .sBTWY05[data-placement*="right"].sbpwzeH {
        padding-left: 5px;
    }
    .sBTWY05[data-placement*="right"].sbpwzeH .seahKd5 {
        border-color: transparent #000 transparent transparent;
        border-width: 5px 5px 5px 0;
        left: -5px;
        margin-left: 5px;
        margin-right: 0;
    }
    .sBTWY05[data-placement*="left"].sbpwzeH {
        padding-right: 5px;
    }
    .sBTWY05[data-placement*="left"].sbpwzeH .seahKd5 {
        border-color: transparent transparent transparent #000;
        border-width: 5px 0 5px 5px;
        margin-left: 0;
        margin-right: 5px;
        right: -5px;
    }
    .sBTWY05[data-placement*="bottom"].sbpwzeH {
        padding-top: 5px;
    }
    .sBTWY05[data-placement*="bottom"].sbpwzeH .seahKd5 {
        border-color: transparent transparent #000 transparent;
        border-width: 0 5px 5px 5px;
        margin-bottom: 0;
        margin-top: 5px;
        top: -5px;
    }
    .sBTWY05[data-placement*="top"].sbpwzeH {
        padding-bottom: 5px;
    }
    .sBTWY05[data-placement*="top"].sbpwzeH .seahKd5 {
        border-color: #000 transparent transparent transparent;
        border-width: 5px 5px 0 5px;
        bottom: -5px;
        margin-bottom: 5px;
        margin-top: 0;
    }
    .sZp6yUD {
        position: relative;
    }
    .sx21G_s {
        display: inline-block;
    }
    .sx21G_s.o__8S36nL--hasInnerWrapper {
        display: block;
    }
    .sGwwZbC {
        display: flex;
        flex: 1;
        justify-content: center;
    }
    .snyUH_T {
        cursor: pointer;
        height: auto;
    }
    .sKHJSJr {
        clip: rect(1px 1px 1px 1px);
        clip: rect(1px, 1px, 1px, 1px);
        border: 0 !important;
        height: 1px !important;
        overflow: hidden;
        padding: 0 !important;
        position: absolute;
        width: 1px !important;
    }
    .sOOf9Dj {
        margin-inline-start: 4px;
    }
    .sC_iCmh {
        --Fieldset798064802-min-error-message-height: var(
                --wix-ui-tpa-fieldset-min-message-height,
                0px
        );
        --Fieldset798064802-error-min-height: 20px;
        --Fieldset798064802-error-margin-top: 8px;
        border: 0;
        margin: 0;
        padding: 0;
    }
    .sC_iCmh:not(.od0oiXT--error) {
        margin-bottom: var(--Fieldset798064802-min-error-message-height);
    }
    .sC_iCmh.od0oiXT--error {
        margin-bottom: calc(
                var(--wix-ui-tpa-fieldset-min-message-height, 28px) -
                var(--Fieldset798064802-error-min-height) -
                var(--Fieldset798064802-error-margin-top)
        );
    }
    .saoTDYR {
        align-items: center;
        color: rgb(var(--wix-ui-tpa-fieldset-error-color, 223, 49, 49));
        display: flex;
        font-family: Madefor, Helvetica Neue, Helvetica, Arial, メイリオ, meiryo,
        ヒラギノ角ゴ pro w3, hiragino kaku gothic pro, sans-serif;
        font-size: 14px;
        line-height: 1.4;
        margin-top: var(--Fieldset798064802-error-margin-top);
        min-height: var(--Fieldset798064802-error-min-height);
    }
    .sl2QEWe {
        margin-right: 2px;
    }
    .svfWoSt {
        color: rgb(
                var(--wix-ui-tpa-fieldset-main-label-text-color, var(--wix-color-5))
        );
        font-family: var(
                --wix-ui-tpa-fieldset-main-label-font-family,
                var(--wix-font-Body-M-family)
        );
        font-size: var(--wix-ui-tpa-fieldset-main-label-font-size, 14px);
        font-style: var(
                --wix-ui-tpa-fieldset-main-label-font-style,
                var(--wix-font-Body-M-style)
        );
        font-variant: var(
                --wix-ui-tpa-fieldset-main-label-font-variant,
                var(--wix-font-Body-M-variant)
        );
        font-weight: var(
                --wix-ui-tpa-fieldset-main-label-font-weight,
                var(--wix-font-Body-M-weight)
        );
        line-height: var(--wix-ui-tpa-fieldset-main-label-font-line-height, 1.4);
        padding-bottom: var(--wix-ui-tpa-fieldset-label-bottom-spacing, 8px);
        padding-inline-end: 0;
        padding-inline-start: 0;
        text-decoration: var(
                --wix-ui-tpa-fieldset-main-label-font-text-decoration,
                var(--wix-font-Body-M-text-decoration)
        );
    }
    .seYP_E8 .sjt3w5R {
        word-wrap: break-word;
        overflow-wrap: break-word;
        word-break: break-word;
    }
    .sjXJcUn {
        cursor: pointer;
        display: inline-block;
        position: relative;
    }
    .sKxXOpz,
    .sjXJcUn.oAnwXLs--disabled {
        pointer-events: none;
    }
    .sKxXOpz {
        clip: rect(1px, 1px, 1px, 1px) !important;
        border: 0 !important;
        -webkit-clip-path: inset(50%) !important;
        clip-path: inset(50%) !important;
        cursor: inherit;
        height: 1px !important;
        margin: -1px !important;
        overflow: hidden !important;
        padding: 0 !important;
        position: absolute !important;
        white-space: nowrap !important;
        width: 1px !important;
    }
    .sE7IDB5 {
        display: inline;
    }
    .sQSPO7N {
        align-items: center;
        cursor: pointer;
        display: inline-flex;
    }
    .sJoMPsN,
    .skyEndq {
        flex-shrink: 0;
    }
    .sQSPO7N.oOQrUAe--disabled {
        cursor: default;
    }
    .sQSPO7N[disabled] {
        pointer-events: none;
    }
    .sPk6pG4 {
        --wut-error-color: rgb(
                var(--wix-ui-tpa-error-message-wrapper-error-color, 223, 49, 49)
        );
        --ErrorMessageWrapper71203871-transparent: 0, 0, 0, 0;
    }
    .sPk6pG4:not(.oWKxru2--visible) {
        margin-bottom: var(--wix-ui-tpa-error-message-wrapper-min-message-height);
    }
    .sPk6pG4.oWKxru2--visible {
        margin-bottom: calc(
                var(--wix-ui-tpa-error-message-wrapper-min-message-height, 28px) - 20px -
                8px
        );
    }
    .sdb7bk6 {
        align-items: flex-start;
        background-color: rgb(
                var(
                        --wix-ui-tpa-error-message-wrapper-background-color,
                        var(--ErrorMessageWrapper71203871-transparent)
                )
        );
        border-color: rgb(
                var(
                        --wix-ui-tpa-error-message-wrapper-border-color,
                        var(--ErrorMessageWrapper71203871-transparent)
                )
        );
        border-radius: var(--wix-ui-tpa-error-message-wrapper-border-radius, 4px);
        border-style: solid;
        border-width: var(--wix-ui-tpa-error-message-wrapper-border-width, 0);
        color: var(--wut-error-color);
        display: flex;
        font-family: Madefor, Helvetica Neue, Helvetica, Arial, メイリオ, meiryo,
        ヒラギノ角ゴ pro w3, hiragino kaku gothic pro, sans-serif;
        font-size: 14px;
        line-height: 1.4;
        margin-top: 8px;
        min-height: 20px;
    }
    .sDi0LMd {
        flex-shrink: 0;
        margin-inline-end: 2px;
    }
    .sPk6pG4.oWKxru2---errorAppearance-19-BackgroundAndBorder .sdb7bk6 {
        --ErrorMessageWrapper71203871-border-color: 223, 49, 49, 0.2;
        --ErrorMessageWrapper71203871-background-color: 253, 243, 243;
        background-color: rgb(
                var(
                        --wix-ui-tpa-error-message-wrapper-background-color,
                        var(--ErrorMessageWrapper71203871-background-color)
                )
        );
        border-color: rgb(
                var(
                        --wix-ui-tpa-error-message-wrapper-border-color,
                        var(--ErrorMessageWrapper71203871-border-color)
                )
        );
        border-width: var(--wix-ui-tpa-error-message-wrapper-border-width, 1px);
        padding: 8px;
    }
    .sPk6pG4.oWKxru2---errorAppearance-19-BackgroundAndBorder .sDi0LMd {
        margin-inline-end: 4px;
    }
    .spd8Oh_ {
        display: flex;
        justify-content: space-between;
        margin-top: 8px;
    }
    .spd8Oh_ .sdb7bk6 {
        margin-top: 0;
        margin-inline-end: 12px;
    }
    .s__9xViF5 {
        height: calc(2px + 6px);
        position: relative;
        width: calc(6px * 3 + 4px * 2 + 2px);
    }
    .sVZE6mG,
    .sVZE6mG:after,
    .sVZE6mG:before {
        animation-fill-mode: both;
        animation: ThreeDotsLoader3464438126__pulse 2s ease-in-out infinite;
        background-color: transparent;
        border-radius: 50%;
        height: 6px;
        top: calc(0px - 1px - 6px);
        width: 6px;
    }
    .s__9xViF5.okAgZXN--static .sVZE6mG,
    .s__9xViF5.okAgZXN--static .sVZE6mG:after,
    .s__9xViF5.okAgZXN--static .sVZE6mG:before {
        animation: none;
        box-shadow: 0 calc(2px + 6px) 0 0;
    }
    .sVZE6mG {
        animation-delay: -0.16s;
        color: rgb(var(--wix-ui-tpa-three-dots-loader-color, var(--wix-color-5)));
        margin: 0 auto;
        position: relative;
    }
    .sVZE6mG:after,
    .sVZE6mG:before {
        content: "";
        position: absolute;
        top: 0;
    }
    .sVZE6mG:before {
        animation-delay: -0.32s;
        left: calc(0px - 6px - 4px);
    }
    .sVZE6mG:after {
        left: calc(6px + 4px);
    }
    @keyframes ThreeDotsLoader3464438126__pulse {
        0%,
        80%,
        to {
            box-shadow: 0 calc(2px + 6px) 0 -15px;
        }
        40% {
            box-shadow: 0 calc(2px + 6px) 0 0;
        }
    }
    .sWZowBh {
        --Text3548994356-primary-color: rgb(
                var(--wix-ui-tpa-text-main-text-color, var(--wix-color-5))
        );
        --Text3548994356-secondary-color: rgb(
                var(--wix-ui-tpa-text-main-text-color, var(--wix-color-4))
        );
    }
    .sWZowBh.oxy3XUk---priority-7-primary {
        color: var(--wut-text-color, var(--Text3548994356-primary-color));
    }
    .sWZowBh.oxy3XUk---priority-9-secondary {
        color: var(
                --wut-placeholder-color,
                var(--Text3548994356-secondary-color)
        );
    }
    .sWZowBh.oxy3XUk---typography-10-smallTitle {
        font-family: var(
                --wix-ui-tpa-text-main-text-font-family,
                var(--wix-font-Page-title-family)
        );
        font-size: var(--wix-ui-tpa-text-main-text-font-size, 24px);
        font-style: var(
                --wix-ui-tpa-text-main-text-font-style,
                var(--wix-font-Page-title-style)
        );
        font-variant: var(
                --wix-ui-tpa-text-main-text-font-variant,
                var(--wix-font-Page-title-variant)
        );
        font-weight: var(
                --wix-ui-tpa-text-main-text-font-weight,
                var(--wix-font-Page-title-weight)
        );
        line-height: var(--wix-ui-tpa-text-main-text-font-line-height, 1.33em);
        text-decoration: var(
                --wix-ui-tpa-text-main-text-font-text-decoration,
                var(--wix-font-Page-title-text-decoration)
        );
    }
    .sWZowBh.oxy3XUk---typography-11-runningText {
        line-height: var(--wix-ui-tpa-text-main-text-font-line-height, 1.5em);
    }
    .sWZowBh.oxy3XUk---typography-11-runningText,
    .sWZowBh.oxy3XUk---typography-8-listText {
        font-family: var(
                --wix-ui-tpa-text-main-text-font-family,
                var(--wix-font-Body-M-family)
        );
        font-size: var(--wix-ui-tpa-text-main-text-font-size, 16px);
        font-style: var(
                --wix-ui-tpa-text-main-text-font-style,
                var(--wix-font-Body-M-style)
        );
        font-variant: var(
                --wix-ui-tpa-text-main-text-font-variant,
                var(--wix-font-Body-M-variant)
        );
        font-weight: var(
                --wix-ui-tpa-text-main-text-font-weight,
                var(--wix-font-Body-M-weight)
        );
        text-decoration: var(
                --wix-ui-tpa-text-main-text-font-text-decoration,
                var(--wix-font-Body-M-text-decoration)
        );
    }
    .sWZowBh.oxy3XUk---typography-8-listText {
        line-height: var(--wix-ui-tpa-text-main-text-font-line-height, 2em);
    }
    .sWZowBh.oxy3XUk---typography-10-largeTitle {
        font-family: var(
                --wix-ui-tpa-text-main-text-font-family,
                var(--wix-font-Heading-M-family)
        );
        font-size: var(--wix-ui-tpa-text-main-text-font-size, 32px);
        font-style: var(
                --wix-ui-tpa-text-main-text-font-style,
                var(--wix-font-Heading-M-style)
        );
        font-variant: var(
                --wix-ui-tpa-text-main-text-font-variant,
                var(--wix-font-Heading-M-variant)
        );
        font-weight: var(
                --wix-ui-tpa-text-main-text-font-weight,
                var(--wix-font-Heading-M-weight)
        );
        line-height: var(--wix-ui-tpa-text-main-text-font-line-height, 1.25em);
        text-decoration: var(
                --wix-ui-tpa-text-main-text-font-text-decoration,
                var(--wix-font-Heading-M-text-decoration)
        );
    }
    .sWZowBh.oxy3XUk--mobile.oxy3XUk---typography-10-smallTitle {
        font-family: var(
                --wix-ui-tpa-text-main-text-font-family,
                var(--wix-font-Page-title-family)
        );
        font-size: var(--wix-ui-tpa-text-main-text-font-size, 20px);
        font-style: var(
                --wix-ui-tpa-text-main-text-font-style,
                var(--wix-font-Page-title-style)
        );
        font-variant: var(
                --wix-ui-tpa-text-main-text-font-variant,
                var(--wix-font-Page-title-variant)
        );
        font-weight: var(
                --wix-ui-tpa-text-main-text-font-weight,
                var(--wix-font-Page-title-weight)
        );
        line-height: var(--wix-ui-tpa-text-main-text-font-line-height, 1.4em);
        text-decoration: var(
                --wix-ui-tpa-text-main-text-font-text-decoration,
                var(--wix-font-Page-title-text-decoration)
        );
    }
    .sWZowBh.oxy3XUk--mobile.oxy3XUk---typography-11-runningText {
        line-height: var(--wix-ui-tpa-text-main-text-font-line-height, 1.42em);
    }
    .sWZowBh.oxy3XUk--mobile.oxy3XUk---typography-11-runningText,
    .sWZowBh.oxy3XUk--mobile.oxy3XUk---typography-8-listText {
        font-family: var(
                --wix-ui-tpa-text-main-text-font-family,
                var(--wix-font-Body-M-family)
        );
        font-size: var(--wix-ui-tpa-text-main-text-font-size, 14px);
        font-style: var(
                --wix-ui-tpa-text-main-text-font-style,
                var(--wix-font-Body-M-style)
        );
        font-variant: var(
                --wix-ui-tpa-text-main-text-font-variant,
                var(--wix-font-Body-M-variant)
        );
        font-weight: var(
                --wix-ui-tpa-text-main-text-font-weight,
                var(--wix-font-Body-M-weight)
        );
        text-decoration: var(
                --wix-ui-tpa-text-main-text-font-text-decoration,
                var(--wix-font-Body-M-text-decoration)
        );
    }
    .sWZowBh.oxy3XUk--mobile.oxy3XUk---typography-8-listText {
        line-height: var(--wix-ui-tpa-text-main-text-font-line-height, 1.72em);
    }
    .sWZowBh.oxy3XUk--mobile.oxy3XUk---typography-10-largeTitle {
        font-family: var(
                --wix-ui-tpa-text-main-text-font-family,
                var(--wix-font-Heading-M-family)
        );
        font-size: var(--wix-ui-tpa-text-main-text-font-size, 24px);
        font-style: var(
                --wix-ui-tpa-text-main-text-font-style,
                var(--wix-font-Heading-M-style)
        );
        font-variant: var(
                --wix-ui-tpa-text-main-text-font-variant,
                var(--wix-font-Heading-M-variant)
        );
        font-weight: var(
                --wix-ui-tpa-text-main-text-font-weight,
                var(--wix-font-Heading-M-weight)
        );
        line-height: var(--wix-ui-tpa-text-main-text-font-line-height, 1.33em);
        text-decoration: var(
                --wix-ui-tpa-text-main-text-font-text-decoration,
                var(--wix-font-Heading-M-text-decoration)
        );
    }
    .sQu_xaa {
        clip: rect(1px, 1px, 1px, 1px) !important;
        border: 0 !important;
        -webkit-clip-path: inset(50%) !important;
        clip-path: inset(50%) !important;
        height: 1px !important;
        margin: -1px !important;
        overflow: hidden !important;
        padding: 0 !important;
        position: absolute !important;
        white-space: nowrap !important;
        width: 1px !important;
    }
    .sHBP6B6 {
        --Spinner3921610675-diameter: var(--wix-ui-tpa-spinner-diameter, 50px);
        animation: Spinner3921610675__rotate 2s linear infinite;
        height: var(--Spinner3921610675-diameter);
        left: auto;
        top: auto;
        width: var(--Spinner3921610675-diameter);
    }
    .s__90Ujf9 {
        stroke: rgb(var(--wix-ui-tpa-spinner-path-color, var(--wix-color-5)));
        animation: Spinner3921610675__dash 1.5s ease-in-out infinite;
    }
    .sHBP6B6.oWX3DY6--centered {
        left: calc(50% - var(--Spinner3921610675-diameter) / 2);
        position: absolute;
        top: calc(50% - var(--Spinner3921610675-diameter) / 2);
    }
    .sHBP6B6.oWX3DY6--static,
    .sHBP6B6.oWX3DY6--static .s__90Ujf9 {
        animation: none;
    }
    @keyframes Spinner3921610675__rotate {
        to {
            transform: rotate(1turn);
        }
    }
    @keyframes Spinner3921610675__dash {
        0% {
            stroke-dasharray: 1, 150;
            stroke-dashoffset: 0;
        }
        50% {
            stroke-dasharray: 90, 150;
            stroke-dashoffset: -35;
        }
        to {
            stroke-dasharray: 90, 150;
            stroke-dashoffset: -124;
        }
    }
    @keyframes DotNavigation2917703371__move-back {
        0% {
            left: calc(-2 * calc(4 * 4px));
        }
        to {
            left: calc(-1 * calc(4 * 4px));
        }
    }
    @keyframes DotNavigation2917703371__move-back-next {
        0% {
            left: calc(-2 * calc(4 * 4px));
        }
        to {
            left: calc(-1 * calc(4 * 4px));
        }
    }
    @keyframes DotNavigation2917703371__move-forward {
        0% {
            left: 0;
        }
        to {
            left: calc(-1 * calc(4 * 4px));
        }
    }
    @keyframes DotNavigation2917703371__move-forward-next {
        0% {
            left: 0;
        }
        to {
            left: calc(-1 * calc(4 * 4px));
        }
    }
    @keyframes DotNavigation2917703371__change-dot-opacity {
        to {
            opacity: 1;
        }
    }
    .s__07NrHa {
        display: flex;
        overflow: hidden;
        position: relative;
        width: calc(5 * calc(4 * 4px));
    }
    .s__07NrHa.oHAxdED--short {
        justify-content: center;
        width: max-content;
    }
    .s_zf20Q {
        align-items: center;
        display: flex;
        left: calc(-1 * calc(4 * 4px));
        position: relative;
    }
    .sWxeoEx {
        animation-name: DotNavigation2917703371__move-back;
    }
    .sWxeoEx,
    .sYlAXE2 {
        animation-duration: 0.2s;
    }
    .sYlAXE2 {
        animation-name: DotNavigation2917703371__move-back-next;
    }
    .sKnlS49 {
        animation-name: DotNavigation2917703371__move-forward;
    }
    .sKnlS49,
    .seoHkv_ {
        animation-duration: 0.2s;
    }
    .seoHkv_ {
        animation-name: DotNavigation2917703371__move-forward-next;
    }
    .sxvGSOk {
        align-items: center;
        display: flex;
        height: calc(4 * 4px);
        justify-content: center;
        width: calc(4 * 4px);
    }
    .sgwlHRT {
        background-color: rgb(
                var(
                        --wix-ui-tpa-dot-navigation-selected-dot-color,
                        var(--wst-paragraph-2-color-rgb, var(--wix-color-5))
                )
        );
        border-radius: 100%;
        height: calc(2 * 4px);
        opacity: 0.45;
        transition: opacity 0.2s ease;
        width: calc(2 * 4px);
    }
    .sblWHi_ {
        transition: none;
    }
    .sgwlHRT:hover {
        opacity: 1;
    }
    .s__0hjns_ {
        height: calc(calc(2 * 4px) - 2px);
        width: calc(calc(2 * 4px) - 2px);
    }
    .sffxJHb {
        height: calc(calc(calc(2 * 4px) - 2px) - 2px);
        width: calc(calc(calc(2 * 4px) - 2px) - 2px);
    }
    .sWiO1GO {
        box-shadow: 0 0 0 1px
        rgb(
                var(
                        --wix-ui-tpa-dot-navigation-selected-border-color,
                        var(--wst-paragraph-2-color-rgb, var(--wix-color-1))
                )
        );
    }
    .snz98qV {
        background-color: rgb(
                var(
                        --wix-ui-tpa-dot-navigation-selected-dot-color,
                        var(--wst-primary-background-color-rgb, var(--wix-color-1))
                )
        );
        opacity: 0.4;
    }
    .sWiO1GO.snz98qV {
        box-shadow: 0 0 0 1px
        rgb(
                var(
                        --wix-ui-tpa-dot-navigation-selected-border-color,
                        var(--wst-paragraph-2-color-rgb, var(--wix-color-5))
                )
        );
    }
    .s_J0J_p {
        animation-duration: 0.2s;
        animation-name: DotNavigation2917703371__change-dot-opacity;
        opacity: 1;
    }
    .s__8R3FvU {
        display: flex;
        flex: 1;
    }
    .sjcHJTR {
        display: none;
    }
    .sCDO2H7 {
        border-radius: var(--wix-ui-tpa-option-box-border-radius, 0);
    }
    #SITE_CONTAINER.focus-ring-active .sCDO2H7 {
        box-shadow: 0 0 0 1px #fff, 0 0 0 3px #116dff !important;
        z-index: 999;
    }
    .s__8R3FvU.oH8Zr8j---size-6-xsmall .sqtv0Le {
        min-height: 24px;
        min-width: 24px;
        padding: var(--wix-ui-tpa-option-box-padding, 0 8px);
    }
    .s__8R3FvU.oH8Zr8j---size-5-small .sqtv0Le {
        padding: var(--wix-ui-tpa-option-box-padding, 8px);
    }
    .s__8R3FvU.oH8Zr8j---size-5-large .sqtv0Le {
        padding: var(--wix-ui-tpa-option-box-padding, 16px);
    }
    .sqtv0Le {
        align-items: center;
        background-color: rgb(
                var(--wix-ui-tpa-option-box-fill-color, var(--wix-color-1))
        );
        border-color: rgb(
                var(--wix-ui-tpa-option-box-border-color-rgb, var(--wix-color-5)),
                calc(var(--wix-ui-tpa-option-box-border-color-opacity, 1) * 0.6)
        );
        border-radius: var(--wix-ui-tpa-option-box-border-radius, 0);
        border-style: solid;
        border-width: var(--wix-ui-tpa-option-box-border-width, 1px);
        box-sizing: border-box;
        cursor: pointer;
        display: flex;
        flex: 1;
        justify-content: center;
        margin: -1px;
        text-align: center;
    }
    .s__8R3FvU.stxe5YD .sqtv0Le {
        border-color: rgb(
                var(--wix-ui-tpa-option-error-color, 223, 49, 49)
        ) !important;
    }
    .s__8R3FvU.oH8Zr8j--checked {
        background-color: rgb(
                var(--wix-ui-tpa-option-box-fill-color, var(--wix-color-1))
        );
        border-radius: var(--wix-ui-tpa-option-box-border-radius, 0);
    }
    .s__8R3FvU.oH8Zr8j--checked .sqtv0Le {
        background-color: rgb(
                var(
                        --wix-ui-tpa-option-selected-box-background-color,
                        var(--wix-color-8)
                )
        );
        border-color: rgb(
                var(--wix-ui-tpa-option-selected-box-color, var(--wix-color-8))
        );
        color: rgb(var(--wix-ui-tpa-option-selected-color, var(--wix-color-1)));
    }
    .s__8R3FvU.oH8Zr8j--disabled {
        background-color: rgb(
                var(
                        --wix-ui-tpa-option-disabled-background-color,
                        var(--wix-ui-tpa-option-box-fill-color, rgba(255, 255, 255, 0.3))
                )
        );
        border-color: rgb(
                var(
                        --wix-ui-tpa-option-disabled-border-color,
                        var(--wix-ui-tpa-option-disabled-color, var(--wix-color-29))
                )
        );
        border-radius: var(--wix-ui-tpa-option-box-border-radius, 0);
    }
    .s__8R3FvU.oH8Zr8j--disabled:not(.oH8Zr8j--checked) .sqtv0Le {
        border-color: rgb(
                var(
                        --wix-ui-tpa-option-disabled-border-color,
                        var(--wix-ui-tpa-option-disabled-color, var(--wix-color-29))
                )
        );
        cursor: default;
        filter: none;
        opacity: 1;
        pointer-events: none;
    }
    .s__8R3FvU.oH8Zr8j--disabled.oH8Zr8j--checked,
    .s__8R3FvU.oH8Zr8j--disabled:not(.oH8Zr8j--checked) .sqtv0Le {
        background-color: rgb(
                var(
                        --wix-ui-tpa-option-disabled-background-color,
                        var(--wix-ui-tpa-option-box-fill-color, var(--wix-color-1))
                )
        );
        color: rgb(var(--wix-ui-tpa-option-disabled-color, var(--wix-color-29)));
    }
    .s__8R3FvU.oH8Zr8j--disabled.oH8Zr8j--checked {
        border-color: rgb(
                var(
                        --wix-ui-tpa-option-disabled-border-color,
                        var(--wix-ui-tpa-option-disabled-color, rgb(var(--wix-color-29)))
                )
        );
    }
    .s__8R3FvU.oH8Zr8j--disabled.oH8Zr8j--checked .sqtv0Le {
        background-color: hsla(0, 0%, 100%, 0.3);
        border-color: rgb(
                var(
                        --wix-ui-tpa-option-disabled-border-color,
                        var(--wix-ui-tpa-option-disabled-color, var(--wix-color-29))
                )
        );
        cursor: default;
        filter: none;
        opacity: 1;
    }
    .s__8R3FvU.oH8Zr8j--checked.stxe5YD .sqtv0Le {
        background-color: rgb(
                var(
                        --wix-ui-tpa-option-box-fill-color-rgb,
                        var(
                                --wix-ui-tpa-option-selected-box-background-color-rgb,
                                var(--wix-color-8),
                                0.1
                        )
                )
        );
        border-color: rgb(
                var(--wix-ui-tpa-option-error-color, 223, 49, 49)
        ) !important;
    }
    .s__8R3FvU.oH8Zr8j--disabled.stxe5YD .sqtv0Le,
    .s__8R3FvU.oH8Zr8j--unavailable.stxe5YD .sqtv0Le {
        background-color: rgb(
                var(--wix-ui-tpa-option-box-fill-color, var(--wix-color-1))
        );
        border-color: rgb(
                var(--wix-ui-tpa-option-error-color, 223, 49, 49)
        ) !important;
    }
    .s__8R3FvU:not(.oH8Zr8j--disabled):not(.oH8Zr8j--checked):not(
				.oH8Zr8j--unavailable
			):focus-within
    .sqtv0Le,
    .s__8R3FvU:not(.oH8Zr8j--disabled):not(.oH8Zr8j--checked):not(
				.oH8Zr8j--unavailable
			):hover
    .sqtv0Le {
        border-color: rgb(
                var(
                        --wix-ui-tpa-option-hover-border-color,
                        var(--wix-ui-tpa-option-box-border-color, var(--wix-color-5))
                )
        );
    }
    .s__8R3FvU:not(.oH8Zr8j--disabled):not(.oH8Zr8j--checked):not(
				.oH8Zr8j--unavailable
			):focus-within.stxe5YD
    .sqtv0Le,
    .s__8R3FvU:not(.oH8Zr8j--disabled):not(.oH8Zr8j--checked):not(
				.oH8Zr8j--unavailable
			):hover.stxe5YD
    .sqtv0Le {
        border-color: rgb(
                var(--wix-ui-tpa-option-error-color, 223, 49, 49)
        ) !important;
    }
    .s__8R3FvU:not(.oH8Zr8j--disabled):not(.oH8Zr8j--checked):not(
				.oH8Zr8j--unavailable
			):hover
    .sqtv0Le {
        background-color: rgb(
                var(--wix-ui-tpa-option-hover-box-background-color, var(--wix-color-1))
        );
        border-color: rgb(
                var(--wix-ui-tpa-option-hover-border-color, var(--wix-color-5))
        );
    }
    .s__8R3FvU.oH8Zr8j--unavailable {
        background-color: hsla(0, 0%, 100%, 0.3);
        border-radius: var(--wix-ui-tpa-option-box-border-radius, 0);
        cursor: default;
        pointer-events: none;
        position: relative;
    }
    .s__8R3FvU.oH8Zr8j--unavailable .sg80U9S {
        border-radius: var(--wix-ui-tpa-option-box-border-radius, 0);
        height: 100%;
        position: absolute;
        width: 100%;
    }
    .s__8R3FvU.oH8Zr8j--unavailable .sg80U9S line {
        stroke: rgb(var(--wix-ui-tpa-option-disabled-color, var(--wix-color-29)));
        stroke-width: var(--wix-ui-tpa-option-box-border-width, 1px);
    }
    .s__8R3FvU.oH8Zr8j--unavailable .sqtv0Le {
        background-color: rgb(
                var(--wix-ui-tpa-option-box-fill-color, var(--wix-color-1))
        );
        border-color: rgb(
                var(
                        --wix-ui-tpa-option-disabled-border-color,
                        var(--wix-ui-tpa-option-disabled-color, var(--wix-color-29))
                )
        );
        color: rgb(var(--wix-ui-tpa-option-disabled-color, var(--wix-color-29)));
        cursor: default;
        pointer-events: none;
    }
    .s__8R3FvU.sj8e1nt {
        flex-basis: auto;
        flex-grow: 0;
        flex-shrink: 0;
    }
    .sYhnhAv {
        --wix-ui-tpa-dot-navigation-selected-dot-color: var(
                --mobile-gallery_imageCarouselDotsColor,
                var(--wix-color-1)
        );
        --wix-ui-tpa-dot-navigation-selected-dot-color-rgb: var(
                --mobile-gallery_imageCarouselDotsColor-rgb,
                var(--wix-color-1)
        );
        --wix-ui-tpa-dot-navigation-selected-dot-color-opacity: var(
                --mobile-gallery_imageCarouselDotsColor-opacity
        );
    }
    .spkvBt3 {
        --WowImage2609594178-transparent: 0, 0, 0, 0;
        --WowImage2609594178-errorTextColor: 255, 255, 255;
        display: flex;
        height: 100%;
        position: relative;
    }
    .spkvBt3.oHIv_nL--forceImageContain.oHIv_nL---resize-7-contain {
        width: 100%;
    }
    .spkvBt3.oHIv_nL--forceImageContain.oHIv_nL---resize-7-contain > * {
        align-items: center;
        border: inherit;
        border-radius: inherit;
        display: flex;
        justify-content: center;
    }
    .spkvBt3.oHIv_nL--forceImageContain.oHIv_nL---resize-7-contain img {
        border: inherit;
        border-radius: inherit;
        height: unset !important;
        max-height: 100%;
        max-width: 100%;
        width: unset !important;
    }
    .spkvBt3.oHIv_nL--forceImageContain.oHIv_nL---resize-7-contain.oHIv_nL--verticalContainer
    img {
        width: min(var(--wut-source-width, 100%), 100%) !important;
    }
    .spkvBt3.oHIv_nL--forceImageContain.oHIv_nL---resize-7-contain.oHIv_nL--horizontalContainer
    img {
        height: min(var(--wut-source-height, 100%), 100%) !important;
    }
    .spkvBt3.oHIv_nL--noImage {
        background-color: rgb(var(--wix-color-5), 0.2);
    }
    .spkvBt3 img {
        vertical-align: middle;
    }
    .spkvBt3.oHIv_nL--focalPoint img {
        object-position: var(--WowImage2609594178-focalPointX, 0)
        var(--WowImage2609594178-focalPointY, 0);
    }
    .spkvBt3.oHIv_nL---resize-7-contain .sHukU59 {
        object-fit: contain;
    }
    .spkvBt3.oHIv_nL---resize-5-cover .sHukU59 {
        object-fit: cover;
    }
    .spkvBt3.oHIv_nL--fluid .sHukU59 {
        height: 100%;
        overflow: hidden;
        width: 100%;
    }
    .spkvBt3:not(.oHIv_nL--stretchImage) {
        align-items: center;
    }
    .spkvBt3.oHIv_nL--fluid:not(.oHIv_nL--stretchImage) .sHukU59,
    .spkvBt3:not(.oHIv_nL--stretchImage) .sHukU59 {
        height: min(var(--wut-source-height, 100%), 100%);
        margin: 0 auto;
        width: min(var(--wut-source-width, 100%), 100%);
    }
    .spkvBt3.oHIv_nL---hoverEffect-4-zoom {
        overflow: hidden;
    }
    .spkvBt3.oHIv_nL---hoverEffect-4-zoom .sHukU59 {
        overflow: initial;
        transform: scale(calc(100 / 107)) translate(-3.5%, -3.5%);
        transition: all 0.5s cubic-bezier(0.18, 0.73, 0.63, 1);
    }
    .spkvBt3.oHIv_nL---hoverEffect-4-zoom:hover .sHukU59 {
        transform: scale(1) translate(-3.5%, -3.5%);
    }
    .spkvBt3.oHIv_nL---hoverEffect-6-darken:hover .sHukU59 {
        filter: brightness(85%) contrast(115%);
    }
    .spkvBt3:not(.oHIv_nL--isError) {
        background-color: rgb(
                var(
                        --wix-ui-tpa-wow-image-background-color,
                        var(--WowImage2609594178-transparent)
                )
        );
        border: var(--wix-ui-tpa-wow-image-border-width, 0) solid
        rgb(
                var(
                        --wix-ui-tpa-wow-image-border-color,
                        var(--WowImage2609594178-transparent)
                )
        );
        border-radius: var(--wix-ui-tpa-wow-image-border-radius, 0);
        overflow: hidden;
    }
    .spkvBt3:not(.oHIv_nL--isError).oHIv_nL--noImage {
        background-color: rgb(
                var(--wix-ui-tpa-wow-image-background-color, var(--wix-color-5), 0.2)
        );
    }
    .spkvBt3 .sHukU59 {
        opacity: var(--wix-ui-tpa-wow-image-image-opacity, 1);
    }
    .spkvBt3.oHIv_nL--isError {
        background-color: rgb(var(--wix-color-2));
        position: relative;
    }
    .spkvBt3.oHIv_nL--isError img {
        display: none;
    }
    .spkvBt3 .svBlKgz {
        align-items: center;
        background: rgb(0, 0, 0, 0.6);
        display: flex;
        flex-direction: column;
        height: 100%;
        justify-content: center;
        position: absolute;
        width: 100%;
        z-index: 1;
    }
    .shbrwwe {
        --wix-ui-tpa-text-main-text-color: var(
                --WowImage2609594178-errorTextColor
        ),
        1;
        --wix-ui-tpa-text-main-text-color-rgb: var(
                --WowImage2609594178-errorTextColor
        );
        --wix-ui-tpa-text-main-text-color-opacity: 1;
        --wix-ui-tpa-text-main-text-font-text-decoration: var(
                --wix-ui-tpa-picker-font-style-text-decoration,
                var(--wix-font-Body-M-text-decoration)
        );
        --wix-ui-tpa-text-main-text-font-line-height: var(
                --wix-ui-tpa-picker-font-style-line-height,
                1.5em
        );
        --wix-ui-tpa-text-main-text-font-family: var(
                --wix-ui-tpa-picker-font-style-family,
                var(--wix-font-Body-M-family)
        );
        --wix-ui-tpa-text-main-text-font-size: var(
                --wix-ui-tpa-picker-font-style-size,
                14px
        );
        --wix-ui-tpa-text-main-text-font-style: var(
                --wix-ui-tpa-picker-font-style-style,
                var(--wix-font-Body-M-style)
        );
        --wix-ui-tpa-text-main-text-font-variant: var(
                --wix-ui-tpa-picker-font-style-variant,
                var(--wix-font-Body-M-variant)
        );
        --wix-ui-tpa-text-main-text-font-weight: var(
                --wix-ui-tpa-picker-font-style-weight,
                var(--wix-font-Body-M-weight)
        );
    }
    .sFJ0XKs {
        clip: rect(1px, 1px, 1px, 1px) !important;
        border: 0 !important;
        -webkit-clip-path: inset(50%) !important;
        clip-path: inset(50%) !important;
        height: 1px !important;
        margin: -1px !important;
        overflow: hidden !important;
        padding: 0 !important;
        position: absolute !important;
        white-space: nowrap !important;
        width: 1px !important;
    }
    .s__3B0oAT {
        color: rgb(var(--WowImage2609594178-errorTextColor));
    }
    .sWrCARh {
        background-color: rgb(0, 0, 0, 0.6);
        display: none;
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
    }
    .spkvBt3.oHIv_nL--loadSpinner:not(.oHIv_nL--loaded) .sWrCARh {
        display: block;
    }
    .sDZyhEJ .s__90Ujf9 {
        stroke: #fff;
    }
    .sQG71WG[data-hook="popover-portal"] {
        display: initial;
    }
    .sQG71WG .sjt3w5R {
        -webkit-font-smoothing: auto;
        background-color: #212121;
        border: 1px solid #757575;
        border-radius: 3px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.12), 0 0 4px 0 rgba(0, 0, 0, 0.1);
        color: #fff;
        font-family: Madefor, Helvetica Neue, Helvetica, Arial, メイリオ, meiryo,
        ヒラギノ角ゴ pro w3, hiragino kaku gothic pro, sans-serif;
        font-size: 14px;
        line-height: 20px;
        padding: 4px 12px;
    }
    .smHfeIr {
        margin: 0;
        position: absolute;
    }
    .smHfeIr,
    .smHfeIr svg {
        display: block;
    }
    .sQG71WG .sBTWY05[data-placement*="top"].sSErpz3 {
        padding-bottom: 6px;
    }
    .sQG71WG .sBTWY05[data-placement*="bottom"].sSErpz3 {
        padding-top: 6px;
    }
    .sQG71WG .sBTWY05[data-placement*="left"].sSErpz3 {
        padding-right: 6px;
    }
    .sQG71WG .sBTWY05[data-placement*="right"].sSErpz3 {
        padding-left: 6px;
    }
    .sQG71WG .sBTWY05[data-placement*="top"] .smHfeIr {
        bottom: -1px;
        height: 7px;
        width: 12px;
    }
    .sQG71WG .sBTWY05[data-placement*="bottom"] .smHfeIr {
        height: 7px;
        top: -1px;
        width: 12px;
    }
    .sQG71WG .sBTWY05[data-placement*="left"] .smHfeIr {
        height: 12px;
        right: -1px;
        width: 7px;
    }
    .sQG71WG .sBTWY05[data-placement*="right"] .smHfeIr {
        height: 12px;
        left: -1px;
        width: 7px;
    }
    .sQG71WG .sBTWY05[data-placement*="top"].svLdw_N {
        opacity: 0;
        transform: scale(0.9) translateY(3px);
    }
    .sQG71WG .sBTWY05[data-placement*="bottom"].svLdw_N {
        opacity: 0;
        transform: scale(0.9) translateY(-3px);
    }
    .sQG71WG .sBTWY05[data-placement*="left"].svLdw_N {
        opacity: 0;
        transform: scale(0.9) translateX(10px);
    }
    .sQG71WG .sBTWY05[data-placement*="right"].svLdw_N {
        opacity: 0;
        transform: scale(0.9) translateX(-10px);
    }
    .sQG71WG .sBTWY05[data-placement].svLdw_N.sEc3qA4 {
        transition: transform 0.12s cubic-bezier(0.25, 0.46, 0.45, 0.94),
        applyOpacity 0.12s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }
    .sQG71WG .sBTWY05[data-placement].sVrGgc8,
    .sQG71WG .sBTWY05[data-placement].svLdw_N.sEc3qA4 {
        opacity: 1;
        transform: scale(1) translateY(0) translateX(0);
    }
    .sQG71WG .sBTWY05[data-placement].sVrGgc8.sJf_Crg {
        opacity: 0;
        transition: transform 80ms linear, applyOpacity 80ms linear;
    }
    .sQG71WG.ocf8vL2---skin-5-error .sjt3w5R {
        background-color: #df3131;
        border: 1px solid hsla(0, 0%, 100%, 0.25);
    }
    .sQG71WG.ocf8vL2---skin-5-wired .sjt3w5R {
        background-color: rgb(
                var(--wix-ui-tpa-tooltip-background-color, var(--wix-color-5))
        );
        border-color: rgb(
                var(
                        --wix-ui-tpa-tooltip-border-color-rgb,
                        var(--wix-ui-tpa-tooltip-background-color)
                ),
                calc(
                        var(--wix-ui-tpa-tooltip-border-color-opacity, 1) * var(--wix-color-1)
                )
        );
        color: rgb(var(--wix-ui-tpa-tooltip-text-color, var(--wix-color-1)));
    }
    .sQG71WG.ocf8vL2---skin-5-wired .smHfeIr path {
        fill: rgb(var(--wix-ui-tpa-tooltip-background-color, var(--wix-color-5)));
        stroke: rgb(
                var(
                        --wix-ui-tpa-tooltip-border-color-rgb,
                        var(--wix-ui-tpa-tooltip-background-color)
                ),
                calc(
                        var(--wix-ui-tpa-tooltip-border-color-opacity, 1) * var(--wix-color-5)
                )
        );
    }
    .sQG71WG.ocf8vL2---skin-5-wired .smHfeIr path:first-child {
        stroke: none;
    }
    .sQG71WG.ocf8vL2---skin-5-wired .smHfeIr path:last-child {
        stroke-dasharray: 0 17 17;
    }
    .sQG71WG.ocf8vL2---skin-5-error .smHfeIr path {
        fill: #df3131;
    }
    .sED9NUJ {
        align-items: center;
        display: flex;
        justify-content: center;
    }
    .snkiSx8 {
        background-color: transparent;
        border: 0;
        padding: 0;
    }
    .sED9NUJ,
    .snkiSx8 {
        line-height: 0;
    }
    .sED9NUJ,
    .sVNjloX svg {
        height: 24px;
        width: 24px;
    }
    .sqDTNER {
        clip: rect(1px, 1px, 1px, 1px) !important;
        border: 0 !important;
        -webkit-clip-path: inset(50%) !important;
        clip-path: inset(50%) !important;
        height: 1px !important;
        margin: -1px !important;
        overflow: hidden !important;
        padding: 0 !important;
        position: absolute !important;
        white-space: nowrap !important;
        width: 1px !important;
    }
    .syOLiq3 {
        border: 0;
        display: inline-block;
        line-height: 0;
        margin: 0;
        padding: 0;
        text-decoration: none;
    }
    .syOLiq3.owvXwjd--focus,
    .syOLiq3:hover {
        opacity: 0.7;
    }
    .syOLiq3.obsqvYf--disabled {
        cursor: default;
    }
    .syOLiq3.obsqvYf--disabled:hover {
        opacity: 1;
    }
    .sFZdbbH svg {
        display: block;
    }
    .syOLiq3.obsqvYf--disabled.sNKgekw
    .sFZdbbH
    svg:not([fill="currentColor"])
    path {
        stroke: rgb(var(--wix-color-29));
        fill: none;
    }
    .syOLiq3.obsqvYf--disabled.snp2dwl
    .sFZdbbH
    svg:not([fill="currentColor"])
    path {
        fill: rgb(var(--wix-color-29));
        stroke: rgb(var(--wix-color-29));
    }
    .sNKgekw .sFZdbbH svg:not([fill="currentColor"]) path,
    .syOLiq3.obsqvYf---skin-4-line
    .sFZdbbH
    svg:not([fill="currentColor"])
    path {
        stroke: rgb(var(--wix-ui-tpa-icon-button-icon-color, var(--wix-color-5)));
        fill: none;
    }
    .snp2dwl .sFZdbbH svg:not([fill="currentColor"]) path,
    .syOLiq3.obsqvYf---skin-4-full
    .sFZdbbH
    svg:not([fill="currentColor"])
    path {
        fill: rgb(var(--wix-ui-tpa-icon-button-icon-color, var(--wix-color-5)));
        stroke: rgb(var(--wix-ui-tpa-icon-button-icon-color, var(--wix-color-5)));
    }
    .syOLiq3 .sFZdbbH svg[fill="currentColor"] {
        color: rgb(var(--wix-ui-tpa-icon-button-icon-color, var(--wix-color-5)));
    }
    .syOLiq3.obsqvYf--disabled .sFZdbbH svg[fill="currentColor"] {
        color: rgb(var(--wix-color-29));
    }
    .syOLiq3.obsqvYf---theme-4-none {
        background-color: transparent;
    }
    .syOLiq3.obsqvYf---theme-3-box {
        align-items: center;
        background-color: rgb(
                var(--wix-ui-tpa-icon-button-background-color, var(--wix-color-1))
        );
        border-radius: 50%;
        display: inline-flex;
        height: 32px;
        justify-content: center;
        width: 32px;
    }
    .syLvqLA {
        border-color: rgb(
                var(--wix-ui-tpa-button-main-border-color, var(--wix-color-39))
        );
        border-radius: var(--wix-ui-tpa-button-main-border-radius, 0);
        border-style: solid;
        box-sizing: content-box;
        font-family: var(
                --wix-ui-tpa-button-main-text-font-family,
                var(--wix-font-Body-M-family)
        );
        font-size: var(
                --wix-ui-tpa-button-main-text-font-size,
                var(--wix-ui-tpa-button-font-size-default)
        );
        font-style: var(
                --wix-ui-tpa-button-main-text-font-style,
                var(--wix-font-Body-M-style)
        );
        font-variant: var(
                --wix-ui-tpa-button-main-text-font-variant,
                var(--wix-font-Body-M-variant)
        );
        font-weight: var(
                --wix-ui-tpa-button-main-text-font-weight,
                var(--wix-font-Body-M-weight)
        );
        line-height: var(
                --wix-ui-tpa-button-main-text-font-line-height,
                var(--wix-ui-tpa-button-line-height-default)
        );
        min-width: var(--wix-ui-tpa-button-min-width, 100px);
        text-decoration: var(
                --wix-ui-tpa-button-main-text-font-text-decoration,
                var(--wix-font-Body-M-text-decoration)
        );
        transition: background-color 0.2s ease-in-out,
        border-color 0.2s ease-in-out, color 0.2s ease-in-out,
        border-width 0.2s ease-in-out;
    }
    .syLvqLA:active.ochjeup---hoverStyle-9-underline,
    .syLvqLA:hover.ochjeup---hoverStyle-9-underline {
        font-family: var(
                --wix-ui-tpa-button-hover-text-font-family,
                var(
                        --wix-ui-tpa-button-main-text-font-family,
                        var(--wix-font-Body-M-family)
                )
        );
        font-size: var(
                --wix-ui-tpa-button-hover-text-font-size,
                var(
                        --wix-ui-tpa-button-main-text-font-size,
                        var(--wix-ui-tpa-button-font-size-default)
                )
        );
        font-style: var(
                --wix-ui-tpa-button-hover-text-font-style,
                var(
                        --wix-ui-tpa-button-main-text-font-style,
                        var(--wix-font-Body-M-style)
                )
        );
        font-variant: var(
                --wix-ui-tpa-button-hover-text-font-variant,
                var(
                        --wix-ui-tpa-button-main-text-font-variant,
                        var(--wix-font-Body-M-variant)
                )
        );
        font-weight: var(
                --wix-ui-tpa-button-hover-text-font-weight,
                var(
                        --wix-ui-tpa-button-main-text-font-weight,
                        var(--wix-font-Body-M-weight)
                )
        );
        line-height: var(
                --wix-ui-tpa-button-hover-text-font-line-height,
                var(
                        --wix-ui-tpa-button-main-text-font-line-height,
                        var(--wix-ui-tpa-button-line-height-default)
                )
        );
        text-decoration: var(
                --wix-ui-tpa-button-hover-text-font-text-decoration,
                var(
                        --wix-ui-tpa-button-main-text-font-text-decoration,
                        var(--wix-font-Body-M-text-decoration)
                )
        );
        text-decoration: var(
                --wix-ui-tpa-button-hover-text-font-text-decoration,
                underline
        );
    }
    .syLvqLA .sSp5kvL {
        margin: 0 auto;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    .syLvqLA.ochjeup--fullWidth {
        box-sizing: border-box;
        width: 100%;
    }
    .syLvqLA,
    .syLvqLA.ochjeup---priority-5-basic {
        background-color: rgb(
                var(--wix-ui-tpa-button-main-background-color, var(--wix-color-5))
        );
        border-color: rgb(
                var(--wix-ui-tpa-button-main-border-color, var(--wix-color-5))
        );
        border-width: var(--wix-ui-tpa-button-main-border-width, 0);
        color: rgb(var(--wix-ui-tpa-button-main-text-color, var(--wix-color-1)));
    }
    .syLvqLA.ochjeup---priority-5-basic:active.ochjeup---hoverStyle-9-underline,
    .syLvqLA.ochjeup---priority-5-basic:hover.ochjeup---hoverStyle-9-underline,
    .syLvqLA:active.ochjeup---hoverStyle-9-underline,
    .syLvqLA:hover.ochjeup---hoverStyle-9-underline {
        background-color: rgb(
                var(
                        --wix-ui-tpa-button-hover-background-color,
                        var(--wix-ui-tpa-button-main-background-color, var(--wix-color-5))
                )
        );
        border-color: rgb(
                var(
                        --wix-ui-tpa-button-hover-border-color,
                        var(--wix-ui-tpa-button-main-border-color, var(--wix-color-5))
                )
        );
        color: rgb(
                var(
                        --wix-ui-tpa-button-hover-text-color,
                        var(--wix-ui-tpa-button-main-text-color, var(--wix-color-1))
                )
        );
    }
    .syLvqLA.ochjeup---priority-5-basic:active:not(
				.ochjeup---hoverStyle-9-underline
			),
    .syLvqLA.ochjeup---priority-5-basic:hover:not(
				.ochjeup---hoverStyle-9-underline
			),
    .syLvqLA:active:not(.ochjeup---hoverStyle-9-underline),
    .syLvqLA:hover:not(.ochjeup---hoverStyle-9-underline) {
        background-color: rgb(
                var(
                        --wix-ui-tpa-button-hover-background-color,
                        var(
                                --wix-ui-tpa-button-main-background-color-rgb,
                                var(--wix-color-5)
                        ),
                        calc(var(--wix-ui-tpa-button-main-background-color-opacity, 1) * 0.7)
                )
        );
        border-color: rgb(
                var(
                        --wix-ui-tpa-button-hover-border-color,
                        var(--wix-ui-tpa-button-main-border-color, var(--wix-color-5))
                )
        );
        color: rgb(
                var(
                        --wix-ui-tpa-button-hover-text-color,
                        var(--wix-ui-tpa-button-main-text-color-rgb, var(--wix-color-1)),
                        calc(var(--wix-ui-tpa-button-main-text-color-opacity, 1) * 0.7)
                )
        );
    }
    .syLvqLA.ochjeup---priority-14-basicSecondary {
        background-color: rgb(
                var(--wix-ui-tpa-button-main-background-color, var(--wix-color-1), 0)
        );
        border-color: rgb(
                var(--wix-ui-tpa-button-main-border-color, var(--wix-color-5))
        );
        border-width: var(--wix-ui-tpa-button-main-border-width, 1px);
        color: rgb(var(--wix-ui-tpa-button-main-text-color, var(--wix-color-5)));
    }
    .syLvqLA.ochjeup---priority-14-basicSecondary:active.ochjeup---hoverStyle-9-underline,
    .syLvqLA.ochjeup---priority-14-basicSecondary:hover.ochjeup---hoverStyle-9-underline {
        background-color: rgb(
                var(
                        --wix-ui-tpa-button-hover-background-color,
                        var(--wix-ui-tpa-button-main-background-color, var(--wix-color-1))
                )
        );
        border-color: rgb(
                var(
                        --wix-ui-tpa-button-hover-border-color,
                        var(--wix-ui-tpa-button-main-border-color, var(--wix-color-5))
                )
        );
        color: rgb(
                var(
                        --wix-ui-tpa-button-hover-text-color,
                        var(--wix-ui-tpa-button-main-text-color, var(--wix-color-5))
                )
        );
    }
    .syLvqLA.ochjeup---priority-14-basicSecondary:active:not(
				.ochjeup---hoverStyle-9-underline
			),
    .syLvqLA.ochjeup---priority-14-basicSecondary:hover:not(
				.ochjeup---hoverStyle-9-underline
			) {
        background-color: rgb(
                var(--wix-ui-tpa-button-hover-background-color, var(--wix-color-1), 0)
        );
        border-color: rgb(
                var(
                        --wix-ui-tpa-button-hover-border-color,
                        var(--wix-ui-tpa-button-main-border-color-rgb, var(--wix-color-5)),
                        calc(var(--wix-ui-tpa-button-main-border-color-opacity, 1) * 0.7)
                )
        );
        color: rgb(
                var(
                        --wix-ui-tpa-button-hover-text-color,
                        var(--wix-ui-tpa-button-main-text-color-rgb, var(--wix-color-5)),
                        calc(var(--wix-ui-tpa-button-main-text-color-opacity, 1) * 0.7)
                )
        );
    }
    .syLvqLA.ochjeup---priority-7-primary {
        background-color: rgb(
                var(--wix-ui-tpa-button-main-background-color, var(--wix-color-38))
        );
        border-block-end-width: var(
                --wix-ui-tpa-button-main-border-block-end-width,
                var(
                        --wix-ui-tpa-button-main-border-width,
                        var(--wst-button-primary-border-bottom-width, 0)
                )
        );
        border-block-start-width: var(
                --wix-ui-tpa-button-main-border-block-start-width,
                var(
                        --wix-ui-tpa-button-main-border-width,
                        var(--wst-button-primary-border-top-width, 0)
                )
        );
        border-color: rgb(
                var(--wix-ui-tpa-button-main-border-color, var(--wix-color-39))
        );
        border-inline-end-width: var(
                --wix-ui-tpa-button-main-border-inline-end-width,
                var(
                        --wix-ui-tpa-button-main-border-width,
                        var(--wst-button-primary-border-right-width, 0)
                )
        );
        border-inline-start-width: var(
                --wix-ui-tpa-button-main-border-inline-start-width,
                var(
                        --wix-ui-tpa-button-main-border-width,
                        var(--wst-button-primary-border-left-width, 0)
                )
        );
        color: rgb(var(--wix-ui-tpa-button-main-text-color, var(--wix-color-40)));
    }
    .syLvqLA.ochjeup---priority-7-primary:active.ochjeup---hoverStyle-9-underline,
    .syLvqLA.ochjeup---priority-7-primary:hover.ochjeup---hoverStyle-9-underline {
        background-color: rgb(
                var(
                        --wix-ui-tpa-button-hover-background-color,
                        var(--wix-ui-tpa-button-main-background-color, var(--wix-color-38))
                )
        );
        border-color: rgb(
                var(
                        --wix-ui-tpa-button-hover-border-color,
                        var(--wix-ui-tpa-button-main-border-color, var(--wix-color-39))
                )
        );
        color: rgb(
                var(
                        --wix-ui-tpa-button-hover-text-color,
                        var(--wix-ui-tpa-button-main-text-color, var(--wix-color-40))
                )
        );
    }
    .syLvqLA.ochjeup---priority-7-primary:active:not(
				.ochjeup---hoverStyle-9-underline
			),
    .syLvqLA.ochjeup---priority-7-primary:hover:not(
				.ochjeup---hoverStyle-9-underline
			) {
        background-color: rgb(
                var(
                        --wix-ui-tpa-button-hover-background-color,
                        var(
                                --wix-ui-tpa-button-main-background-color-rgb,
                                var(--wix-color-41)
                        ),
                        calc(var(--wix-ui-tpa-button-main-background-color-opacity, 1) * 0.7)
                )
        );
        border-color: rgb(
                var(
                        --wix-ui-tpa-button-hover-border-color,
                        var(--wix-ui-tpa-button-main-border-color, var(--wix-color-42))
                )
        );
        color: rgb(
                var(
                        --wix-ui-tpa-button-hover-text-color,
                        var(--wix-ui-tpa-button-main-text-color-rgb, var(--wix-color-43)),
                        calc(var(--wix-ui-tpa-button-main-text-color-opacity, 1) * 0.7)
                )
        );
    }
    .syLvqLA.ochjeup---priority-9-secondary {
        background-color: rgb(
                var(--wix-ui-tpa-button-main-background-color, var(--wix-color-47), 0)
        );
        border-block-end-width: var(
                --wix-ui-tpa-button-main-border-block-end-width,
                var(
                        --wix-ui-tpa-button-main-border-width,
                        var(--wst-button-secondary-border-bottom-width, 1px)
                )
        );
        border-block-start-width: var(
                --wix-ui-tpa-button-main-border-block-start-width,
                var(
                        --wix-ui-tpa-button-main-border-width,
                        var(--wst-button-secondary-border-top-width, 1px)
                )
        );
        border-color: rgb(
                var(--wix-ui-tpa-button-main-border-color, var(--wix-color-48))
        );
        border-inline-end-width: var(
                --wix-ui-tpa-button-main-border-inline-end-width,
                var(
                        --wix-ui-tpa-button-main-border-width,
                        var(--wst-button-secondary-border-right-width, 1px)
                )
        );
        border-inline-start-width: var(
                --wix-ui-tpa-button-main-border-inline-start-width,
                var(
                        --wix-ui-tpa-button-main-border-width,
                        var(--wst-button-secondary-border-left-width, 1px)
                )
        );
        color: rgb(var(--wix-ui-tpa-button-main-text-color, var(--wix-color-49)));
    }
    .syLvqLA.ochjeup---priority-9-secondary:active.ochjeup---hoverStyle-9-underline,
    .syLvqLA.ochjeup---priority-9-secondary:hover.ochjeup---hoverStyle-9-underline {
        background-color: rgb(
                var(
                        --wix-ui-tpa-button-hover-background-color,
                        var(--wix-ui-tpa-button-main-background-color, var(--wix-color-47), 0)
                )
        );
        border-color: rgb(
                var(
                        --wix-ui-tpa-button-hover-border-color,
                        var(--wix-ui-tpa-button-main-border-color, var(--wix-color-48))
                )
        );
        color: rgb(
                var(
                        --wix-ui-tpa-button-hover-text-color,
                        var(--wix-ui-tpa-button-main-text-color, var(--wix-color-49))
                )
        );
    }
    .syLvqLA.ochjeup---priority-9-secondary:active:not(
				.ochjeup---hoverStyle-9-underline
			),
    .syLvqLA.ochjeup---priority-9-secondary:hover:not(
				.ochjeup---hoverStyle-9-underline
			) {
        background-color: rgb(
                var(--wix-ui-tpa-button-hover-background-color, var(--wix-color-50), 0)
        );
        border-color: rgb(
                var(
                        --wix-ui-tpa-button-hover-border-color,
                        var(--wix-ui-tpa-button-main-border-color-rgb, var(--wix-color-51)),
                        calc(var(--wix-ui-tpa-button-main-border-color-opacity, 1) * 0.7)
                )
        );
        color: rgb(
                var(
                        --wix-ui-tpa-button-hover-text-color,
                        var(--wix-ui-tpa-button-main-text-color-rgb, var(--wix-color-52)),
                        calc(var(--wix-ui-tpa-button-main-text-color-opacity, 1) * 0.7)
                )
        );
    }
    .syLvqLA.oOQrUAe--disabled,
    .syLvqLA.ochjeup---priority-5-basic.oOQrUAe--disabled {
        background-color: rgb(
                var(--wix-ui-tpa-button-disabled-background-color, var(--wix-color-29))
        );
        border-color: rgb(
                var(
                        --wix-ui-tpa-button-disabled-border-color,
                        var(--wix-ui-tpa-button-main-border-color, var(--wix-color-29))
                )
        );
        color: rgb(
                var(
                        --wix-ui-tpa-button-disabled-text-color,
                        var(--wix-ui-tpa-button-main-text-color, var(--wix-color-1))
                )
        );
    }
    .syLvqLA.ochjeup---priority-7-primary.oOQrUAe--disabled {
        background-color: rgb(
                var(--wix-ui-tpa-button-disabled-background-color, var(--wix-color-44))
        );
        border-color: rgb(
                var(
                        --wix-ui-tpa-button-disabled-border-color,
                        var(--wix-ui-tpa-button-main-border-color, var(--wix-color-45))
                )
        );
        color: rgb(
                var(
                        --wix-ui-tpa-button-disabled-text-color,
                        var(--wix-ui-tpa-button-main-text-color, var(--wix-color-46))
                )
        );
    }
    .syLvqLA.ochjeup---priority-14-basicSecondary.oOQrUAe--disabled {
        background-color: rgb(
                var(
                        --wix-ui-tpa-button-disabled-background-color,
                        var(--wix-color-1),
                        0
                )
        );
        border-color: rgb(
                var(--wix-ui-tpa-button-disabled-border-color, var(--wix-color-29))
        );
        color: rgb(
                var(--wix-ui-tpa-button-disabled-text-color, var(--wix-color-29))
        );
    }
    .syLvqLA.ochjeup---priority-9-secondary.oOQrUAe--disabled {
        background-color: rgb(
                var(
                        --wix-ui-tpa-button-disabled-background-color,
                        var(--wix-color-53),
                        0
                )
        );
        border-color: rgb(
                var(--wix-ui-tpa-button-disabled-border-color, var(--wix-color-54))
        );
        color: rgb(
                var(--wix-ui-tpa-button-disabled-text-color, var(--wix-color-55))
        );
    }
    .syLvqLA.ochjeup---size-4-tiny {
        padding: 6px 16px;
    }
    .syLvqLA.ochjeup---size-4-tiny.sWOLFco {
        padding: 5.5px 16px;
    }
    .syLvqLA.ochjeup---size-5-small {
        padding: 7px 16px;
    }
    .syLvqLA,
    .syLvqLA.ochjeup---size-6-medium {
        padding: 8px 16px;
    }
    .syLvqLA.ochjeup---size-5-large,
    .syLvqLA.ochjeup--mobile,
    .syLvqLA.ochjeup--mobile.ochjeup---size-6-medium {
        padding: 10px 16px;
    }
    .sv53Or2 svg {
        height: 1.5em;
        margin: calc(-1 * (1.5em / 4)) 0;
        width: 1.5em;
    }
    .sCmM18m:before,
    .seDf4Tg:after {
        content: "";
        display: inline-block;
        height: 1px;
        width: var(--wix-ui-tpa-button-column-gap, 4px);
    }
    .syLvqLA .sv53Or2 svg[fill="currentColor"] {
        color: rgb(var(--wix-ui-tpa-button-main-text-color, var(--wix-color-1)));
        transition: color 0.2s ease-in-out;
    }
    .syLvqLA:hover:not(.ochjeup---hoverStyle-9-underline)
    .sv53Or2
    svg[fill="currentColor"] {
        color: rgb(
                var(
                        --wix-ui-tpa-button-hover-text-color,
                        var(--wix-ui-tpa-button-main-text-color-rgb, var(--wix-color-1)),
                        calc(var(--wix-ui-tpa-button-main-text-color-opacity, 1) * 0.7)
                )
        );
    }
    .syLvqLA.ochjeup---priority-9-secondary .sv53Or2 svg[fill="currentColor"] {
        color: rgb(var(--wix-ui-tpa-button-main-text-color, var(--wix-color-49)));
    }
    .syLvqLA.ochjeup---priority-9-secondary:hover:not(
				.ochjeup---hoverStyle-9-underline
			)
    .sv53Or2
    svg[fill="currentColor"] {
        color: rgb(
                var(
                        --wix-ui-tpa-button-hover-text-color,
                        var(--wix-ui-tpa-button-main-text-color-rgb, var(--wix-color-52)),
                        calc(var(--wix-ui-tpa-button-main-text-color-opacity, 1) * 0.7)
                )
        );
    }
    .syLvqLA.ochjeup---priority-14-basicSecondary
    .sv53Or2
    svg[fill="currentColor"] {
        color: rgb(var(--wix-ui-tpa-button-main-text-color, var(--wix-color-5)));
    }
    .syLvqLA.ochjeup---priority-14-basicSecondary:hover:not(
				.ochjeup---hoverStyle-9-underline
			)
    .sv53Or2
    svg[fill="currentColor"] {
        color: rgb(
                var(
                        --wix-ui-tpa-button-hover-text-color,
                        var(--wix-ui-tpa-button-main-text-color-rgb, var(--wix-color-5)),
                        calc(var(--wix-ui-tpa-button-main-text-color-opacity, 1) * 0.7)
                )
        );
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings,
    .syLvqLA.ochjeup---paddingMode-16-explicitPaddings {
        box-sizing: border-box;
        display: inline-flex;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings .sSp5kvL,
    .syLvqLA.ochjeup---paddingMode-16-explicitPaddings .sSp5kvL {
        overflow: visible;
        text-overflow: unset;
        white-space: unset;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup--wrapContent,
    .syLvqLA.ochjeup---paddingMode-16-explicitPaddings.ochjeup--wrapContent {
        line-height: 1.3 !important;
        white-space: normal;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-large:not(
				.ochjeup--mobile
			),
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-small:not(
				.ochjeup--mobile
			) {
        line-height: 1;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---priority-14-basicSecondary.ochjeup---size-4-tiny,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---priority-9-secondary.ochjeup---size-4-tiny {
        padding: calc(9px - var(--wix-ui-tpa-button-main-border-width, 1px)) 16px;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-4-tiny,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-4-tiny.ochjeup---priority-5-basic,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-4-tiny.ochjeup---priority-7-primary {
        padding: calc(9px - var(--wix-ui-tpa-button-main-border-width, 0px)) 16px;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-4-tiny.ochjeup---priority-14-basicSecondary.ochjeup--wrapContent,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-4-tiny.ochjeup---priority-9-secondary.ochjeup--wrapContent {
        padding: calc(6.9px - var(--wix-ui-tpa-button-main-border-width, 1px))
        16px;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-4-tiny.ochjeup---priority-5-basic.ochjeup--wrapContent,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-4-tiny.ochjeup---priority-7-primary.ochjeup--wrapContent,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-4-tiny.ochjeup--wrapContent {
        padding: calc(6.9px - var(--wix-ui-tpa-button-main-border-width, 0px))
        16px;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-small.ochjeup---priority-14-basicSecondary,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-small.ochjeup---priority-9-secondary {
        padding: calc(10px - var(--wix-ui-tpa-button-main-border-width, 1px)) 16px;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-small,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-small.ochjeup---priority-5-basic,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-small.ochjeup---priority-7-primary {
        padding: calc(10px - var(--wix-ui-tpa-button-main-border-width, 0px)) 16px;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-small.ochjeup--wrapContent.ochjeup---priority-14-basicSecondary,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-small.ochjeup--wrapContent.ochjeup---priority-9-secondary {
        padding: calc(7.6px - var(--wix-ui-tpa-button-main-border-width, 1px))
        16px;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-small.ochjeup---priority-5-basic.ochjeup--wrapContent,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-small.ochjeup---priority-7-primary.ochjeup--wrapContent,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-small.ochjeup--wrapContent {
        padding: calc(7.6px - var(--wix-ui-tpa-button-main-border-width, 0px))
        16px;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-small.ochjeup---priority-14-basicSecondary.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-small.ochjeup---priority-9-secondary.ochjeup--mobile {
        padding: calc(11px - var(--wix-ui-tpa-button-main-border-width, 1px)) 16px;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-small.ochjeup---priority-5-basic.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-small.ochjeup---priority-7-primary.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-small.ochjeup--mobile {
        padding: calc(11px - var(--wix-ui-tpa-button-main-border-width, 0px)) 16px;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-small.ochjeup--wrapContent.ochjeup---priority-14-basicSecondary.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-small.ochjeup--wrapContent.ochjeup---priority-9-secondary.ochjeup--mobile {
        padding: calc(8.9px - var(--wix-ui-tpa-button-main-border-width, 1px))
        16px;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-small.ochjeup---priority-5-basic.ochjeup--wrapContent.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-small.ochjeup---priority-7-primary.ochjeup--wrapContent.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-small.ochjeup--wrapContent.ochjeup--mobile {
        padding: calc(8.9px - var(--wix-ui-tpa-button-main-border-width, 0px))
        16px;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---priority-14-basicSecondary,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---priority-9-secondary,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-6-medium.ochjeup---priority-14-basicSecondary,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-6-medium.ochjeup---priority-9-secondary {
        padding: calc(12px - var(--wix-ui-tpa-button-main-border-width, 1px)) 16px;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---priority-5-basic,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---priority-7-primary,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-6-medium,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-6-medium.ochjeup---priority-5-basic,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-6-medium.ochjeup---priority-7-primary {
        padding: calc(12px - var(--wix-ui-tpa-button-main-border-width, 0px)) 16px;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-6-medium.ochjeup--wrapContent.ochjeup---priority-14-basicSecondary,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-6-medium.ochjeup--wrapContent.ochjeup---priority-9-secondary,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup--wrapContent.ochjeup---priority-14-basicSecondary,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup--wrapContent.ochjeup---priority-9-secondary {
        padding: calc(9.6px - var(--wix-ui-tpa-button-main-border-width, 1px))
        16px;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---priority-5-basic.ochjeup--wrapContent,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---priority-7-primary.ochjeup--wrapContent,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-6-medium.ochjeup---priority-5-basic.ochjeup--wrapContent,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-6-medium.ochjeup---priority-7-primary.ochjeup--wrapContent,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-6-medium.ochjeup--wrapContent,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup--wrapContent {
        padding: calc(9.6px - var(--wix-ui-tpa-button-main-border-width, 0px))
        16px;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---priority-14-basicSecondary.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---priority-9-secondary.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-6-medium.ochjeup---priority-14-basicSecondary.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-6-medium.ochjeup---priority-9-secondary.ochjeup--mobile {
        padding: calc(13px - var(--wix-ui-tpa-button-main-border-width, 1px)) 16px;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---priority-5-basic.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---priority-7-primary.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-6-medium.ochjeup---priority-5-basic.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-6-medium.ochjeup---priority-7-primary.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-6-medium.ochjeup--mobile {
        padding: calc(13px - var(--wix-ui-tpa-button-main-border-width, 0px)) 16px;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-6-medium.ochjeup--wrapContent.ochjeup---priority-14-basicSecondary.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-6-medium.ochjeup--wrapContent.ochjeup---priority-9-secondary.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup--wrapContent.ochjeup---priority-14-basicSecondary.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup--wrapContent.ochjeup---priority-9-secondary.ochjeup--mobile {
        padding: calc(10.9px - var(--wix-ui-tpa-button-main-border-width, 1px))
        16px;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---priority-5-basic.ochjeup--wrapContent.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---priority-7-primary.ochjeup--wrapContent.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-6-medium.ochjeup---priority-5-basic.ochjeup--wrapContent.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-6-medium.ochjeup---priority-7-primary.ochjeup--wrapContent.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-6-medium.ochjeup--wrapContent.ochjeup--mobile {
        padding: calc(10.9px - var(--wix-ui-tpa-button-main-border-width, 0px))
        16px;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-large.ochjeup---priority-14-basicSecondary,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-large.ochjeup---priority-9-secondary {
        padding: calc(16px - var(--wix-ui-tpa-button-main-border-width, 1px)) 16px;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-large,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-large.ochjeup---priority-5-basic,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-large.ochjeup---priority-7-primary {
        padding: calc(16px - var(--wix-ui-tpa-button-main-border-width, 0px)) 16px;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-large.ochjeup---priority-14-basicSecondary.ochjeup--wrapContent,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-large.ochjeup---priority-9-secondary.ochjeup--wrapContent {
        padding: calc(13.6px - var(--wix-ui-tpa-button-main-border-width, 1px))
        16px;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-large.ochjeup---priority-5-basic.ochjeup--wrapContent,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-large.ochjeup---priority-7-primary.ochjeup--wrapContent,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-large.ochjeup--wrapContent {
        padding: calc(13.6px - var(--wix-ui-tpa-button-main-border-width, 0px))
        16px;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-large.ochjeup---priority-14-basicSecondary.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-large.ochjeup---priority-5-basic.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-large.ochjeup---priority-7-primary.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-large.ochjeup---priority-9-secondary.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-large.ochjeup--mobile {
        padding: calc(17px - var(--wix-ui-tpa-button-main-border-width, 1px)) 16px;
    }
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-large.ochjeup---priority-14-basicSecondary.ochjeup--wrapContent.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-large.ochjeup---priority-5-basic.ochjeup--wrapContent.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-large.ochjeup---priority-7-primary.ochjeup--wrapContent.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-large.ochjeup---priority-9-secondary.ochjeup--wrapContent.ochjeup--mobile,
    .syLvqLA.ochjeup---paddingMode-15-dynamicPaddings.ochjeup---size-5-large.ochjeup--wrapContent.ochjeup--mobile {
        padding: calc(14.9px - var(--wix-ui-tpa-button-main-border-width, 1px))
        16px;
    }
    .syLvqLA.ochjeup---paddingMode-16-explicitPaddings,
    .syLvqLA.ochjeup---paddingMode-16-explicitPaddings.ochjeup---size-6-medium {
        border-width: var(--wix-ui-tpa-button-main-border-width, 1px);
        padding-inline-end: var(--wix-ui-tpa-button-padding-inline-end, 15px);
        padding-inline-start: var(--wix-ui-tpa-button-padding-inline-start, 15px);
    }
    .syLvqLA.ochjeup---paddingMode-16-explicitPaddings.ochjeup---size-4-tiny,
    .syLvqLA.ochjeup---paddingMode-16-explicitPaddings.ochjeup---size-5-small {
        padding-block-end: var(--wix-ui-tpa-button-padding-block-end, 5px);
        padding-block-start: var(--wix-ui-tpa-button-padding-block-start, 5px);
    }
    .syLvqLA.ochjeup---paddingMode-16-explicitPaddings,
    .syLvqLA.ochjeup---paddingMode-16-explicitPaddings.ochjeup---size-6-medium {
        padding-block-end: var(--wix-ui-tpa-button-padding-block-end, 7px);
        padding-block-start: var(--wix-ui-tpa-button-padding-block-start, 7px);
    }
    .syLvqLA.ochjeup---paddingMode-16-explicitPaddings.ochjeup---size-5-large {
        padding-block-end: var(--wix-ui-tpa-button-padding-block-end, 11px);
        padding-block-start: var(--wix-ui-tpa-button-padding-block-start, 11px);
    }
    .sM9inwf {
        --wix-ui-tpa-fieldset-main-label-font-text-decoration: var(
                --wix-ui-tpa-box-selection-label-font-text-decoration
        );
        --wix-ui-tpa-fieldset-main-label-font-line-height: var(
                --wix-ui-tpa-box-selection-label-font-line-height
        );
        --wix-ui-tpa-fieldset-main-label-font-family: var(
                --wix-ui-tpa-box-selection-label-font-family
        );
        --wix-ui-tpa-fieldset-main-label-font-size: var(
                --wix-ui-tpa-box-selection-label-font-size
        );
        --wix-ui-tpa-fieldset-main-label-font-style: var(
                --wix-ui-tpa-box-selection-label-font-style
        );
        --wix-ui-tpa-fieldset-main-label-font-variant: var(
                --wix-ui-tpa-box-selection-label-font-variant
        );
        --wix-ui-tpa-fieldset-main-label-font-weight: var(
                --wix-ui-tpa-box-selection-label-font-weight
        );
        --wix-ui-tpa-fieldset-main-label-text-color: var(
                --wix-ui-tpa-box-selection-label-color
        );
        --wix-ui-tpa-fieldset-main-label-text-color-rgb: var(
                --wix-ui-tpa-box-selection-label-color-rgb
        );
        --wix-ui-tpa-fieldset-main-label-text-color-opacity: var(
                --wix-ui-tpa-box-selection-label-color-opacity
        );
        --wix-ui-tpa-fieldset-error-color: var(
                --wix-ui-tpa-box-selection-error-color,
                223,
                49,
                49
        );
        --wix-ui-tpa-fieldset-error-color-rgb: var(
                --wix-ui-tpa-box-selection-error-color-rgb,
                223,
                49,
                49
        );
        --wix-ui-tpa-fieldset-error-color-opacity: var(
                --wix-ui-tpa-box-selection-error-color-opacity
        );
        --wix-ui-tpa-fieldset-min-message-height: var(
                --wix-ui-tpa-box-selection-error-message-min-height
        );
        height: 100%;
    }
    .sqgEz3g {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        gap: var(--wix-ui-tpa-box-selection-item-gap, 12px);
        max-height: 100%;
        max-width: 100%;
    }
    .sqgEz3g.sT5EziI {
        flex-direction: column;
        flex-wrap: wrap;
    }
    .sqgEz3g.sdBkt_M {
        display: inline-flex;
    }
    .shFDGWZ {
        --wix-ui-tpa-option-selected-box-color: var(
                --wix-ui-tpa-box-selection-selected-box-color
        );
        --wix-ui-tpa-option-selected-box-color-rgb: var(
                --wix-ui-tpa-box-selection-selected-box-color-rgb
        );
        --wix-ui-tpa-option-selected-box-color-opacity: var(
                --wix-ui-tpa-box-selection-selected-box-color-opacity
        );
        --wix-ui-tpa-option-selected-box-background-color: var(
                --wix-ui-tpa-box-selection-selected-box-background-color
        );
        --wix-ui-tpa-option-selected-box-background-color-rgb: var(
                --wix-ui-tpa-box-selection-selected-box-background-color-rgb
        );
        --wix-ui-tpa-option-selected-box-background-color-opacity: var(
                --wix-ui-tpa-box-selection-selected-box-background-color-opacity
        );
        --wix-ui-tpa-option-box-fill-color: var(
                --wix-ui-tpa-box-selection-box-fill-color
        );
        --wix-ui-tpa-option-box-fill-color-rgb: var(
                --wix-ui-tpa-box-selection-box-fill-color-rgb
        );
        --wix-ui-tpa-option-box-fill-color-opacity: var(
                --wix-ui-tpa-box-selection-box-fill-color-opacity
        );
        --wix-ui-tpa-option-box-border-radius: var(
                --wix-ui-tpa-box-selection-box-border-radius
        );
        --wix-ui-tpa-option-hover-border-color: var(
                --wix-ui-tpa-box-selection-hover-border-color
        );
        --wix-ui-tpa-option-hover-border-color-rgb: var(
                --wix-ui-tpa-box-selection-hover-border-color-rgb
        );
        --wix-ui-tpa-option-hover-border-color-opacity: var(
                --wix-ui-tpa-box-selection-hover-border-color-opacity
        );
        --wix-ui-tpa-option-hover-box-background-color: var(
                --wix-ui-tpa-box-selection-hover-box-background-color
        );
        --wix-ui-tpa-option-hover-box-background-color-rgb: var(
                --wix-ui-tpa-box-selection-hover-box-background-color-rgb
        );
        --wix-ui-tpa-option-hover-box-background-color-opacity: var(
                --wix-ui-tpa-box-selection-hover-box-background-color-opacity
        );
        --wix-ui-tpa-option-box-border-width: var(
                --wix-ui-tpa-box-selection-box-border-width
        );
        --wix-ui-tpa-option-box-border-color: var(
                --wix-ui-tpa-box-selection-box-border-color
        );
        --wix-ui-tpa-option-box-border-color-rgb: var(
                --wix-ui-tpa-box-selection-box-border-color-rgb
        );
        --wix-ui-tpa-option-box-border-color-opacity: var(
                --wix-ui-tpa-box-selection-box-border-color-opacity
        );
        --wix-ui-tpa-option-disabled-color: var(
                --wix-ui-tpa-box-selection-disabled-color
        );
        --wix-ui-tpa-option-disabled-color-rgb: var(
                --wix-ui-tpa-box-selection-disabled-color-rgb
        );
        --wix-ui-tpa-option-disabled-color-opacity: var(
                --wix-ui-tpa-box-selection-disabled-color-opacity
        );
        --wix-ui-tpa-option-disabled-background-color: var(
                --wix-ui-tpa-box-selection-disabled-background-color
        );
        --wix-ui-tpa-option-disabled-background-color-rgb: var(
                --wix-ui-tpa-box-selection-disabled-background-color-rgb
        );
        --wix-ui-tpa-option-disabled-background-color-opacity: var(
                --wix-ui-tpa-box-selection-disabled-background-color-opacity
        );
        --wix-ui-tpa-option-disabled-border-color: var(
                --wix-ui-tpa-box-selection-disabled-border-color
        );
        --wix-ui-tpa-option-disabled-border-color-rgb: var(
                --wix-ui-tpa-box-selection-disabled-border-color-rgb
        );
        --wix-ui-tpa-option-disabled-border-color-opacity: var(
                --wix-ui-tpa-box-selection-disabled-border-color-opacity
        );
        --wix-ui-tpa-option-error-color: var(
                --wix-ui-tpa-box-selection-error-color
        );
        --wix-ui-tpa-option-error-color-rgb: var(
                --wix-ui-tpa-box-selection-error-color-rgb
        );
        --wix-ui-tpa-option-error-color-opacity: var(
                --wix-ui-tpa-box-selection-error-color-opacity
        );
        --wix-ui-tpa-option-box-padding: var(
                --wix-ui-tpa-box-selection-box-padding
        );
    }
    .sgJ7r_1 {
        align-self: center;
        display: flex;
        flex-grow: 1;
    }
    .swrMGSK * {
        box-sizing: border-box;
    }
    .sMyqkgU {
        align-items: stretch;
        border-radius: 12px;
        display: flex;
        height: 24px;
        justify-content: center;
        margin: 4px;
        padding: 2px;
        width: 24px;
    }
    .ss003e0 {
        border: 1px solid #c9c9c9;
        border-radius: inherit;
        flex: 1;
        overflow: hidden;
        position: relative;
    }
    .swrMGSK.ovM9JZb--unavailable .ss003e0:before {
        border-top: 1px solid #c9c9c9;
        content: "";
        left: -25%;
        position: absolute;
        top: 50%;
        transform: rotate(-45deg);
        transform-origin: center;
        width: 150%;
    }
    .swrMGSK.ovM9JZb--checked .sMyqkgU {
        box-shadow: 0 0 0 1px #000;
    }
    .swrMGSK:disabled {
        filter: none;
        opacity: 1;
    }
    .s__4dyIBV {
        border-style: solid;
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        overflow: hidden;
        position: relative;
        text-align: center;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    .s__4dyIBV .sSp5kvL {
        display: block;
        line-height: 1.5;
    }
    .s__4dyIBV.oXYatsC--upgrade .sSp5kvL {
        display: inline-block;
        line-height: 1;
    }
    .s__4x7MXR {
        animation: StatesButton212357734__bounce-in 0.5s ease 0s 1 normal;
        height: 1.5em;
        top: 0.15em;
    }
    .sjd32ph {
        height: 1.5em;
        width: 1.5em;
    }
    @keyframes StatesButton212357734__bounce-in {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }
        32% {
            opacity: 1;
            transform: translateY(-5px);
        }
        68% {
            opacity: 1;
            transform: translateY(2px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .sH_dn89 {
        --wix-ui-tpa-fieldset-main-label-font-text-decoration: var(
                --wix-ui-tpa-counter-label-font-text-decoration,
                var(--wst-paragraph-2-font-text-decoration)
        );
        --wix-ui-tpa-fieldset-main-label-font-line-height: var(
                --wix-ui-tpa-counter-label-font-line-height,
                var(--wst-paragraph-2-font-line-height)
        );
        --wix-ui-tpa-fieldset-main-label-font-family: var(
                --wix-ui-tpa-counter-label-font-family,
                var(--wst-paragraph-2-font-family)
        );
        --wix-ui-tpa-fieldset-main-label-font-size: var(
                --wix-ui-tpa-counter-label-font-size,
                var(--wst-paragraph-2-font-size)
        );
        --wix-ui-tpa-fieldset-main-label-font-style: var(
                --wix-ui-tpa-counter-label-font-style,
                var(--wst-paragraph-2-font-style)
        );
        --wix-ui-tpa-fieldset-main-label-font-variant: var(
                --wix-ui-tpa-counter-label-font-variant,
                var(--wst-paragraph-2-font-variant)
        );
        --wix-ui-tpa-fieldset-main-label-font-weight: var(
                --wix-ui-tpa-counter-label-font-weight,
                var(--wst-paragraph-2-font-weight)
        );
        --wix-ui-tpa-fieldset-main-label-text-color: var(
                --wix-ui-tpa-counter-label-color,
                var(--wst-paragraph-2-color-rgb, var(--wix-color-5))
        );
        --wix-ui-tpa-fieldset-main-label-text-color-rgb: var(
                --wix-ui-tpa-counter-label-color-rgb,
                var(--wst-paragraph-2-color-rgb, var(--wix-color-5))
        );
        --wix-ui-tpa-fieldset-main-label-text-color-opacity: var(
                --wix-ui-tpa-counter-label-color-opacity
        );
        --wix-ui-tpa-fieldset-error-color: var(--wix-ui-tpa-counter-error-color);
        --wix-ui-tpa-fieldset-error-color-rgb: var(
                --wix-ui-tpa-counter-error-color-rgb
        );
        --wix-ui-tpa-fieldset-error-color-opacity: var(
                --wix-ui-tpa-counter-error-color-opacity
        );
        --wix-ui-tpa-fieldset-min-message-height: var(
                --wix-ui-tpa-counter-error-message-min-height
        );
    }
    .sxHLGFE {
        align-items: center;
        background: rgb(
                var(
                        --wix-ui-tpa-counter-main-background-color,
                        var(--wst-primary-background-color-rgb, var(--wix-color-1))
                )
        );
        border-color: rgb(
                var(
                        --wix-ui-tpa-counter-border-color-rgb,
                        var(--wst-paragraph-2-color-rgb, var(--wix-color-5))
                ),
                calc(var(--wix-ui-tpa-counter-border-color-opacity, 1) * 0.6)
        );
        border-radius: var(--wix-ui-tpa-counter-main-border-radius, 0);
        border-style: solid;
        border-width: var(--wix-ui-tpa-counter-main-border-width, 1px);
        box-sizing: content-box;
        display: inline-flex;
        justify-content: space-between;
    }
    #SITE_CONTAINER.focus-ring-active .sH_dn89 .sxHLGFE:focus-within {
        box-shadow: 0 0 0 1px #fff, 0 0 0 3px #116dff !important;
        z-index: 999;
    }
    .sxHLGFE:focus-within,
    .sxHLGFE:hover {
        border-color: rgb(
                var(
                        --wix-ui-tpa-counter-hover-border-color,
                        var(
                                --wix-ui-tpa-counter-border-color,
                                var(--Counter1452397585-wst-color-paragraph-2, var(--wix-color-5))
                        )
                )
        );
    }
    .sH_dn89.oXDt_ej---size-6-medium .sxHLGFE {
        font-family: var(
                --wix-ui-tpa-counter-main-font-family,
                var(--wst-paragraph-2-font-family, var(--wix-font-Body-M-family))
        );
        font-size: var(
                --wix-ui-tpa-counter-main-font-size,
                var(--wst-paragraph-2-font-size, 16px)
        );
        font-style: var(
                --wix-ui-tpa-counter-main-font-style,
                var(--wst-paragraph-2-font-style, var(--wix-font-Body-M-style))
        );
        font-variant: var(
                --wix-ui-tpa-counter-main-font-variant,
                var(--wst-paragraph-2-font-variant, var(--wix-font-Body-M-variant))
        );
        font-weight: var(
                --wix-ui-tpa-counter-main-font-weight,
                var(--wst-paragraph-2-font-weight, var(--wix-font-Body-M-weight))
        );
        line-height: var(
                --wix-ui-tpa-counter-main-font-line-height,
                var(--wst-paragraph-2-font-line-height, 1.5)
        );
        padding: 0 2px;
        text-decoration: var(
                --wix-ui-tpa-counter-main-font-text-decoration,
                var(
                        --wst-paragraph-2-font-text-decoration,
                        var(--wix-font-Body-M-text-decoration)
                )
        );
        width: calc(var(--wix-ui-tpa-counter-main-width, 104px) - 6px);
    }
    .sH_dn89.oXDt_ej---size-6-xSmall .sxHLGFE {
        padding: 0 0;
        width: calc(var(--wix-ui-tpa-counter-main-width, 80px) - 2px);
    }
    .sH_dn89.oXDt_ej---size-6-xSmall .sxHLGFE,
    .sH_dn89.oXDt_ej---size-6-xSmall:not(
				.oXDt_ej--newErrorMessage
			).oXDt_ej--error
    .sxHLGFE {
        font-family: var(
                --wix-ui-tpa-counter-main-font-family,
                var(--wst-paragraph-2-font-family, var(--wix-font-Body-M-family))
        );
        font-size: var(
                --wix-ui-tpa-counter-main-font-size,
                var(--wst-paragraph-2-font-size, 12px)
        );
        font-style: var(
                --wix-ui-tpa-counter-main-font-style,
                var(--wst-paragraph-2-font-style, var(--wix-font-Body-M-style))
        );
        font-variant: var(
                --wix-ui-tpa-counter-main-font-variant,
                var(--wst-paragraph-2-font-variant, var(--wix-font-Body-M-variant))
        );
        font-weight: var(
                --wix-ui-tpa-counter-main-font-weight,
                var(--wst-paragraph-2-font-weight, var(--wix-font-Body-M-weight))
        );
        line-height: var(
                --wix-ui-tpa-counter-main-font-line-height,
                var(--wst-paragraph-2-font-line-height, 1)
        );
        text-decoration: var(
                --wix-ui-tpa-counter-main-font-text-decoration,
                var(
                        --wst-paragraph-2-font-text-decoration,
                        var(--wix-font-Body-M-text-decoration)
                )
        );
    }
    .sH_dn89.oXDt_ej---size-6-xSmall:not(
				.oXDt_ej--newErrorMessage
			).oXDt_ej--error
    .sxHLGFE {
        padding: 0 4px;
        width: calc(var(--wix-ui-tpa-counter-main-width, 80px) - 10px);
    }
    .sH_dn89.oXDt_ej--error:not(.oXDt_ej--newErrorMessage) .sxHLGFE {
        border-color: #df3131 !important;
    }
    .sH_dn89.oXDt_ej--error.oXDt_ej--newErrorMessage .sxHLGFE {
        border-color: rgb(
                var(--wix-ui-tpa-counter-error-color, 223, 49, 49)
        ) !important;
    }
    .sH_dn89.oXDt_ej--disabled .sxHLGFE {
        border-color: rgb(
                var(
                        --wix-ui-tpa-counter-disabled-border-color,
                        var(--wst-system-disabled-color-rgb, var(--wix-color-29))
                )
        );
    }
    .sFPXkxl {
        align-items: center;
        display: inline-flex;
        justify-content: center;
    }
    .sjydssy {
        align-self: stretch;
        background: 0 0;
        border: 0;
        color: rgb(
                var(
                        --wix-ui-tpa-counter-text-color,
                        var(--wst-paragraph-2-color-rgb, var(--wix-color-5))
                )
        );
        cursor: pointer;
        font: inherit;
        padding: 7px 0;
    }
    .sH_dn89.oXDt_ej---size-6-xSmall .sjydssy {
        padding: 5px 4px;
    }
    .sH_dn89.oXDt_ej---size-6-xSmall:not(
				.oXDt_ej--newErrorMessage
			).oXDt_ej--error
    .sjydssy {
        padding: 5px 0;
    }
    .sH_dn89.oXDt_ej---size-6-medium .sjydssy.ssztpGu {
        padding-inline-start: 4px;
    }
    .sH_dn89.oXDt_ej---size-6-medium .sjydssy.sukjXC8 {
        padding-inline-end: 4px;
    }
    .sjydssy[disabled] {
        color: rgb(var(--wix-ui-tpa-counter-disabled-color, var(--wix-color-29)));
        cursor: default;
    }
    .s__40MNob {
        font: inherit;
        height: calc((24 / 16) * 1em);
        width: calc((24 / 16) * 1em);
    }
    .sH_dn89.oXDt_ej---size-6-xSmall .s__40MNob {
        height: calc((16 / 12) * 1em);
        width: calc((16 / 12) * 1em);
    }
    .s_z5V2O {
        display: block;
        font: inherit;
        height: calc((20.5 / 16) * 1em);
        width: calc((20.5 / 16) * 1em);
    }
    .sH_dn89:not(.oXDt_ej--newErrorMessage) .s_z5V2O {
        color: #df3131 !important;
    }
    .sH_dn89.oXDt_ej---size-6-medium .s_z5V2O {
        height: calc((18.45 / 12) * 1em);
        width: calc((18.45 / 12) * 1em);
    }
    .sH_dn89.oXDt_ej---size-6-xSmall .s_z5V2O {
        height: calc((13.74 / 12) * 1em);
        width: calc((13.74 / 12) * 1em);
    }
    .sH_dn89.oXDt_ej--disabled .sjydssy {
        color: rgb(
                var(
                        --wix-ui-tpa-counter-disabled-color,
                        var(--wst-system-disabled-color-rgb, var(--wix-color-29))
                )
        );
    }
    .sH_dn89 .sO2f5oA {
        align-self: stretch;
        flex: 1;
    }
    .sH_dn89 .sJWGrRw {
        display: flex;
        height: 100%;
    }
    .sH_dn89 input {
        background: 0 0;
        border: 0;
        color: rgb(
                var(
                        --wix-ui-tpa-counter-text-color,
                        var(--wst-shade-3-color-rgb, var(--wix-color-5))
                )
        );
        font: inherit;
        padding: 0;
        text-align: center;
        width: 100%;
    }
    .sH_dn89.oXDt_ej--disabled input {
        color: rgb(
                var(
                        --wix-ui-tpa-counter-disabled-color,
                        var(--wst-system-disabled-color-rgb, var(--wix-color-29))
                )
        );
    }
    .sH_dn89 input::-webkit-inner-spin-button,
    .sH_dn89 input::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    .sH_dn89 input[type="number"] {
        -moz-appearance: textfield;
    }
    .sH_dn89 input::-ms-clear {
        display: none;
    }
    .sQH4JmR {
        border: 0;
        display: inline-block;
        margin: -4px 0;
        min-width: 0;
        padding: 0.01em 0 0 0;
        user-select: none;
    }
    .smFikl_ {
        display: inline-flex;
        flex-wrap: wrap;
    }
    .svVJ1Tm {
        display: block;
        margin-bottom: 2px;
        padding: 0;
    }
    .sxSiInI {
        display: flex;
    }
    .sArj5_y {
        margin-inline: -4px;
    }
    .sOS1etb .sq616wS .sMyqkgU,
    .skdRAzt {
        height: var(--wix-ui-tpa-color-picker-item-size, 24px);
        width: var(--wix-ui-tpa-color-picker-item-size, 24px);
    }
    .sOS1etb .sq616wS .sMyqkgU {
        border-radius: var(--wix-ui-tpa-color-picker-border-radius, 12px);
        transition: box-shadow 0.1s linear;
    }
    .sOS1etb .sq616wS.ovM9JZb--focusedByKeyboard .sMyqkgU {
        box-shadow: 0 0 0 1px #fff, 0 0 0 3px #116dff !important;
        z-index: 999;
    }
    .sOS1etb .sq616wS.ovM9JZb--checked .sMyqkgU,
    .sOS1etb .sq616wS.ovM9JZb--focused .sMyqkgU {
        box-shadow: 0 0 0 1px
        rgb(
                var(
                        --wix-ui-tpa-color-picker-selection-border-color,
                        var(--wix-color-5),
                        0.6
                )
        );
    }
    .sOS1etb.osrPxSb--error .sq616wS .ss003e0 {
        border-color: var(--wut-error-color, #df3131) !important;
    }
    .sOS1etb.osrPxSb--error {
        --wix-ui-tpa-error-message-wrapper-error-color: var(
                --wix-ui-tpa-color-picker-error-color
        );
        --wix-ui-tpa-error-message-wrapper-error-color-rgb: var(
                --wix-ui-tpa-color-picker-error-color-rgb
        );
        --wix-ui-tpa-error-message-wrapper-error-color-opacity: var(
                --wix-ui-tpa-color-picker-error-color-opacity
        );
        --wix-ui-tpa-error-message-wrapper-min-message-height: var(
                --wix-ui-tpa-color-picker-error-message-min-height
        );
    }
    .sOS1etb.osrPxSb--error .sq616wS .sMyqkgU {
        margin-bottom: 0;
    }
    .sOS1etb.osrPxSb--error .sQH4JmR {
        vertical-align: bottom;
    }
    .sOS1etb .svVJ1Tm {
        color: rgb(
                var(--wix-ui-tpa-color-picker-main-label-text-color, var(--wix-color-5))
        );
        font-family: var(
                --wix-ui-tpa-color-picker-main-label-font-family,
                var(--wix-font-Body-M-family)
        );
        font-size: var(--wix-ui-tpa-color-picker-main-label-font-size, 14px);
        font-style: var(
                --wix-ui-tpa-color-picker-main-label-font-style,
                var(--wix-font-Body-M-style)
        );
        font-variant: var(
                --wix-ui-tpa-color-picker-main-label-font-variant,
                var(--wix-font-Body-M-variant)
        );
        font-weight: var(
                --wix-ui-tpa-color-picker-main-label-font-weight,
                var(--wix-font-Body-M-weight)
        );
        line-height: var(
                --wix-ui-tpa-color-picker-main-label-font-line-height,
                1.4
        );
        text-decoration: var(
                --wix-ui-tpa-color-picker-main-label-font-text-decoration,
                var(--wix-font-Body-M-text-decoration)
        );
    }
    .sMmWAgP {
        --PaginationDots2846793413-transparent: 0, 0, 0, 0;
        --wix-ui-tpa-dot-navigation-selected-dot-color: var(
                --gallery_paginationDotsOpacityAndColor,
                var(--wix-color-5)
        );
        --wix-ui-tpa-dot-navigation-selected-dot-color-rgb: var(
                --gallery_paginationDotsOpacityAndColor-rgb,
                var(--wix-color-5)
        );
        --wix-ui-tpa-dot-navigation-selected-dot-color-opacity: var(
                --gallery_paginationDotsOpacityAndColor-opacity
        );
        --wix-ui-tpa-dot-navigation-selected-border-color: var(
                --gallery_paginationDotsBorderColor,
                --gallery_paginationDotsOpacityAndColor,
                var(--PaginationDots2846793413-transparent)
        );
        --wix-ui-tpa-dot-navigation-selected-border-color-rgb: var(
                --gallery_paginationDotsBorderColor-rgb,
                --gallery_paginationDotsOpacityAndColor
        );
        --wix-ui-tpa-dot-navigation-selected-border-color-opacity: var(
                --gallery_paginationDotsBorderColor-opacity,
                var(--PaginationDots2846793413-transparent)
        );
    }
    .sSmyof3 {
        --wix-ui-tpa-text-main-text-color: var(
                --gallery_headerTextColor,
                var(--wix-color-5)
        );
        --wix-ui-tpa-text-main-text-color-rgb: var(
                --gallery_headerTextColor-rgb,
                var(--wix-color-5)
        );
        --wix-ui-tpa-text-main-text-color-opacity: var(
                --gallery_headerTextColor-opacity
        );
        --wix-ui-tpa-text-main-text-font-text-decoration: var(
                --gallery_headerTextFont-text-decoration
        );
        --wix-ui-tpa-text-main-text-font-line-height: var(
                --gallery_headerTextFont-line-height
        );
        --wix-ui-tpa-text-main-text-font-family: var(
                --gallery_headerTextFont-family
        );
        --wix-ui-tpa-text-main-text-font-size: var(--gallery_headerTextFont-size);
        --wix-ui-tpa-text-main-text-font-style: var(
                --gallery_headerTextFont-style
        );
        --wix-ui-tpa-text-main-text-font-variant: var(
                --gallery_headerTextFont-variant
        );
        --wix-ui-tpa-text-main-text-font-weight: var(
                --gallery_headerTextFont-weight
        );
    }
    .sSmyof3.oOJkwo8--useMobileFont {
        --wix-ui-tpa-text-main-text-font-size: calc(
                var(--mobile-gallery_headerTextFontSize) * 1px
        );
    }
    .s__8cjGkd {
        --wix-ui-tpa-icon-button-icon-color: var(
                --gallery_sliderArrowsOpacityAndColor,
                var(--wix-color-5)
        );
        --wix-ui-tpa-icon-button-icon-color-rgb: var(
                --gallery_sliderArrowsOpacityAndColor-rgb,
                var(--wix-color-5)
        );
        --wix-ui-tpa-icon-button-icon-color-opacity: var(
                --gallery_sliderArrowsOpacityAndColor-opacity
        );
    }
    .sGypGYW {
        --wix-ui-tpa-option-box-padding: var(--buttonOptionsPadding, 4px 8px);
    }
    .sb_SYEh {
        --wix-ui-tpa-color-picker-item-size: calc(
                var(--gallery_quantityAndOptionsColorOptionsSize, 24) * 1px
        );
        --wix-ui-tpa-color-picker-selection-border-color: var(
                --gallery_titleTextColor,
                var(--wix-color-5),
                0.6
        );
        --wix-ui-tpa-color-picker-selection-border-color-rgb: var(
                --gallery_titleTextColor-rgb,
                var(--wix-color-5)
        );
        --wix-ui-tpa-color-picker-selection-border-color-opacity: var(
                --gallery_titleTextColor-opacity,
                0.6
        );
        --wix-ui-tpa-color-picker-border-radius: calc(
                var(--gallery_quantityAndOptionsColorCornerRadius, 12) * 1px
        );
        width: 100%;
    }
    .skyA_Ws {
        --wix-ui-tpa-color-picker-item-size: calc(
                var(--gallery_quantityAndOptionsColorOptionsSize, 20) * 1px
        );
        --wix-ui-tpa-color-picker-selection-border-color: var(
                --gallery_titleTextColor,
                var(--wix-color-5),
                0.6
        );
        --wix-ui-tpa-color-picker-selection-border-color-rgb: var(
                --gallery_titleTextColor-rgb,
                var(--wix-color-5)
        );
        --wix-ui-tpa-color-picker-selection-border-color-opacity: var(
                --gallery_titleTextColor-opacity,
                0.6
        );
        --wix-ui-tpa-color-picker-border-radius: calc(
                var(--gallery_quantityAndOptionsColorCornerRadius, 12) * 1px
        );
        width: 100%;
    }
    .sFDXqR1 {
        --wix-ui-tpa-dropdown-main-text-font-text-decoration: var(
                --gallery_quantityAndOptionsTextFont-text-decoration
        );
        --wix-ui-tpa-dropdown-main-text-font-line-height: var(
                --gallery_quantityAndOptionsTextFont-line-height
        );
        --wix-ui-tpa-dropdown-main-text-font-family: var(
                --gallery_quantityAndOptionsTextFont-family
        );
        --wix-ui-tpa-dropdown-main-text-font-size: var(
                --gallery_quantityAndOptionsTextFont-size
        );
        --wix-ui-tpa-dropdown-main-text-font-style: var(
                --gallery_quantityAndOptionsTextFont-style
        );
        --wix-ui-tpa-dropdown-main-text-font-variant: var(
                --gallery_quantityAndOptionsTextFont-variant
        );
        --wix-ui-tpa-dropdown-main-text-font-weight: var(
                --gallery_quantityAndOptionsTextFont-weight
        );
        --wix-ui-tpa-dropdown-readonly-button-text-font-text-decoration: var(
                --gallery_quantityAndOptionsTextFont-text-decoration
        );
        --wix-ui-tpa-dropdown-readonly-button-text-font-line-height: var(
                --gallery_quantityAndOptionsTextFont-line-height
        );
        --wix-ui-tpa-dropdown-readonly-button-text-font-family: var(
                --gallery_quantityAndOptionsTextFont-family
        );
        --wix-ui-tpa-dropdown-readonly-button-text-font-size: var(
                --gallery_quantityAndOptionsTextFont-size
        );
        --wix-ui-tpa-dropdown-readonly-button-text-font-style: var(
                --gallery_quantityAndOptionsTextFont-style
        );
        --wix-ui-tpa-dropdown-readonly-button-text-font-variant: var(
                --gallery_quantityAndOptionsTextFont-variant
        );
        --wix-ui-tpa-dropdown-readonly-button-text-font-weight: var(
                --gallery_quantityAndOptionsTextFont-weight
        );
        --wix-ui-tpa-dropdown-main-button-text-color: var(
                --gallery_quantityAndOptionsTextColor,
                var(--wix-color-5)
        );
        --wix-ui-tpa-dropdown-main-button-text-color-rgb: var(
                --gallery_quantityAndOptionsTextColor-rgb,
                var(--wix-color-5)
        );
        --wix-ui-tpa-dropdown-main-button-text-color-opacity: var(
                --gallery_quantityAndOptionsTextColor-opacity
        );
        --wix-ui-tpa-dropdown-main-placeholder-color: var(
                --gallery_quantityAndOptionsTextColor,
                var(--wix-color-4),
                0.8
        );
        --wix-ui-tpa-dropdown-main-placeholder-color-rgb: var(
                --gallery_quantityAndOptionsTextColor-rgb,
                var(--wix-color-4)
        );
        --wix-ui-tpa-dropdown-main-placeholder-color-opacity: var(
                --gallery_quantityAndOptionsTextColor-opacity,
                0.8
        );
        --wix-ui-tpa-dropdown-main-background-color: var(
                --gallery_quantityAndOptionsBackgroundColor
        );
        --wix-ui-tpa-dropdown-main-background-color-rgb: var(
                --gallery_quantityAndOptionsBackgroundColor-rgb
        );
        --wix-ui-tpa-dropdown-main-background-color-opacity: var(
                --gallery_quantityAndOptionsBackgroundColor-opacity
        );
        --wix-ui-tpa-dropdown-main-border-width: var(
                --gallery_quantityAndOptionsBorderWidth,
                1px
        );
        --wix-ui-tpa-dropdown-hover-border-width: var(
                --gallery_quantityAndOptionsBorderWidth,
                1px
        );
        --wix-ui-tpa-dropdown-main-button-border-color: var(
                --gallery_quantityAndOptionsBorderColor,
                var(--wix-color-5)
        );
        --wix-ui-tpa-dropdown-main-button-border-color-rgb: var(
                --gallery_quantityAndOptionsBorderColor-rgb,
                var(--wix-color-5)
        );
        --wix-ui-tpa-dropdown-main-button-border-color-opacity: var(
                --gallery_quantityAndOptionsBorderColor-opacity
        );
        --wix-ui-tpa-dropdown-main-item-text-color: var(
                --gallery_quantityAndOptionsTextColor,
                var(--wix-color-5)
        );
        --wix-ui-tpa-dropdown-main-item-text-color-rgb: var(
                --gallery_quantityAndOptionsTextColor-rgb,
                var(--wix-color-5)
        );
        --wix-ui-tpa-dropdown-main-item-text-color-opacity: var(
                --gallery_quantityAndOptionsTextColor-opacity
        );
        --wix-ui-tpa-dropdown-main-dropdown-background-color: var(
                --gallery_quantityAndOptionsBackgroundColor
        );
        --wix-ui-tpa-dropdown-main-dropdown-background-color-rgb: var(
                --gallery_quantityAndOptionsBackgroundColor-rgb
        );
        --wix-ui-tpa-dropdown-main-dropdown-background-color-opacity: var(
                --gallery_quantityAndOptionsBackgroundColor-opacity
        );
        --wix-ui-tpa-dropdown-main-item-text-disabled-color: var(
                --gallery_quantityAndOptionsTextColor,
                var(--DropdownOption978924491-wix-color-3)
        ),
        var(--disabledOptionsOpacity);
        --wix-ui-tpa-dropdown-main-item-text-disabled-color-rgb: var(
                --gallery_quantityAndOptionsTextColor,
                var(--DropdownOption978924491-wix-color-3)
        );
        --wix-ui-tpa-dropdown-main-item-text-disabled-color-opacity: var(
                --disabledOptionsOpacity
        );
        --wix-ui-tpa-dropdown-main-dropdown-height: auto;
        --wix-ui-tpa-dropdown-main-border-radius: calc(
                var(--gallery_productOptionsListCornerRadius, 0) * 1px
        );
    }
    .sbJw_mT {
        --wix-ui-tpa-spinner-diameter: calc(
                var(--gallery_addToCartButtonIconSize) * 1px
        );
        --wix-ui-tpa-spinner-path-color: var(
                --gallery_addToCartButtonTextColor,
                var(--wix-color-1)
        );
        --wix-ui-tpa-spinner-path-color-rgb: var(
                --gallery_addToCartButtonTextColor-rgb,
                var(--wix-color-1)
        );
        --wix-ui-tpa-spinner-path-color-opacity: var(
                --gallery_addToCartButtonTextColor-opacity
        );
    }
    .sEz29BN {
        --wix-ui-tpa-text-main-text-font-text-decoration: var(
                --gallery_discountNameFont-text-decoration,
                var(--wix-font-Body-M-text-decoration)
        );
        --wix-ui-tpa-text-main-text-font-line-height: var(
                --gallery_discountNameFont-line-height,
                var(--wix-font-Body-M-line-height)
        );
        --wix-ui-tpa-text-main-text-font-family: var(
                --gallery_discountNameFont-family,
                var(--wix-font-Body-M-family)
        );
        --wix-ui-tpa-text-main-text-font-size: var(
                --gallery_discountNameFont-size,
                14px
        );
        --wix-ui-tpa-text-main-text-font-style: var(
                --gallery_discountNameFont-style,
                var(--wix-font-Body-M-style)
        );
        --wix-ui-tpa-text-main-text-font-variant: var(
                --gallery_discountNameFont-variant,
                var(--wix-font-Body-M-variant)
        );
        --wix-ui-tpa-text-main-text-font-weight: var(
                --gallery_discountNameFont-weight,
                var(--wix-font-Body-M-weight)
        );
        --wix-ui-tpa-text-main-text-color: var(
                --gallery_discountNameColor,
                var(--wix-color-8)
        );
        --wix-ui-tpa-text-main-text-color-rgb: var(
                --gallery_discountNameColor-rgb,
                var(--wix-color-8)
        );
        --wix-ui-tpa-text-main-text-color-opacity: var(
                --gallery_discountNameColor-opacity
        );
    }
    .sEz29BN.oxy3XUk--mobile.oTYB4y0--useMobileFont {
        font-size: calc(
                var(--mobile-gallery_discountNameFontSize) * 1px
        ) !important;
    }
    .sVbpA__ {
        --wix-ui-tpa-button-main-border-width: var(
                --gallery_addToCartButtonBorderSize,
                0px
        );
        --wix-ui-tpa-button-main-border-radius: var(
                --gallery_addToCartButtonCornersRadius,
                0px
        );
        --wix-ui-tpa-button-hover-background-color: var(
                --gallery_addToCartButtonBackgroundColorHover
        );
        --wix-ui-tpa-button-hover-background-color-rgb: var(
                --gallery_addToCartButtonBackgroundColorHover-rgb
        );
        --wix-ui-tpa-button-hover-background-color-opacity: var(
                --gallery_addToCartButtonBackgroundColorHover-opacity
        );
        --wix-ui-tpa-button-hover-text-font-text-decoration: var(
                --gallery_addToCartButtonFontHover-text-decoration
        );
        --wix-ui-tpa-button-hover-text-font-line-height: var(
                --gallery_addToCartButtonFontHover-line-height
        );
        --wix-ui-tpa-button-hover-text-font-family: var(
                --gallery_addToCartButtonFontHover-family
        );
        --wix-ui-tpa-button-hover-text-font-size: var(
                --gallery_addToCartButtonFontHover-size
        );
        --wix-ui-tpa-button-hover-text-font-style: var(
                --gallery_addToCartButtonFontHover-style
        );
        --wix-ui-tpa-button-hover-text-font-variant: var(
                --gallery_addToCartButtonFontHover-variant
        );
        --wix-ui-tpa-button-hover-text-font-weight: var(
                --gallery_addToCartButtonFontHover-weight
        );
        --wix-ui-tpa-button-hover-text-font-line-height: var(
                --AddToCartButton2539309398-gallery_addToCartButtonTextFont-line-height,
                1.4em
        );
        --wix-ui-tpa-button-hover-text-color: var(
                --gallery_addToCartButtonTextColorHover
        );
        --wix-ui-tpa-button-hover-text-color-rgb: var(
                --gallery_addToCartButtonTextColorHover-rgb
        );
        --wix-ui-tpa-button-hover-text-color-opacity: var(
                --gallery_addToCartButtonTextColorHover-opacity
        );
        --wix-ui-tpa-button-hover-border-color: var(
                --gallery_addToCartButtonBorderColorHover
        );
        --wix-ui-tpa-button-hover-border-color-rgb: var(
                --gallery_addToCartButtonBorderColorHover-rgb
        );
        --wix-ui-tpa-button-hover-border-color-opacity: var(
                --gallery_addToCartButtonBorderColorHover-opacity
        );
        --wix-ui-tpa-button-padding-block-start: calc(8 * 1px);
        --wix-ui-tpa-button-padding-block-end: calc(8 * 1px);
        min-width: auto;
    }
    .sOay_LN {
        --wix-ui-tpa-button-main-text-font-text-decoration: var(
                --gallery_addToCartButtonTextFont-text-decoration,
                var(--wix-font-Body-M-text-decoration)
        );
        --wix-ui-tpa-button-main-text-font-line-height: var(
                --AddToCartButton2539309398-gallery_addToCartButtonTextFont-line-height,
                var(--wix-font-Body-M-line-height)
        );
        --wix-ui-tpa-button-main-text-font-family: var(
                --gallery_addToCartButtonTextFont-family,
                var(--wix-font-Body-M-family)
        );
        --wix-ui-tpa-button-main-text-font-size: var(
                --AddToCartButton2539309398-gallery_addToCartButtonTextFont-size,
                15px
        );
        --wix-ui-tpa-button-main-text-font-style: var(
                --gallery_addToCartButtonTextFont-style,
                var(--wix-font-Body-M-style)
        );
        --wix-ui-tpa-button-main-text-font-variant: var(
                --gallery_addToCartButtonTextFont-variant,
                var(--wix-font-Body-M-variant)
        );
        --wix-ui-tpa-button-main-text-font-weight: var(
                --gallery_addToCartButtonTextFont-weight,
                var(--wix-font-Body-M-weight)
        );
        --wix-ui-tpa-button-hover-text-font-size: var(
                --AddToCartButton2539309398-gallery_addToCartButtonTextFont-size,
                15px
        );
        --wix-ui-tpa-button-main-background-color: var(
                --gallery_addToCartButtonBackgroundColor
        );
        --wix-ui-tpa-button-main-background-color-rgb: var(
                --gallery_addToCartButtonBackgroundColor-rgb
        );
        --wix-ui-tpa-button-main-background-color-opacity: var(
                --gallery_addToCartButtonBackgroundColor-opacity
        );
        --wix-ui-tpa-button-main-border-color: var(
                --gallery_addToCartButtonBorderColor,
                var(--wix-color-5)
        );
        --wix-ui-tpa-button-main-border-color-rgb: var(
                --gallery_addToCartButtonBorderColor-rgb,
                var(--wix-color-5)
        );
        --wix-ui-tpa-button-main-border-color-opacity: var(
                --gallery_addToCartButtonBorderColor-opacity
        );
    }
    .sb2L_vB {
        --wix-ui-tpa-button-main-text-font-text-decoration: var(
                --gallery_addToCartButtonTextFont-text-decoration,
                var(--wix-font-Body-M-text-decoration)
        );
        --wix-ui-tpa-button-main-text-font-line-height: var(
                --AddToCartButton2539309398-gallery_addToCartButtonTextFont-line-height,
                var(--wix-font-Body-M-line-height)
        );
        --wix-ui-tpa-button-main-text-font-family: var(
                --gallery_addToCartButtonTextFont-family,
                var(--wix-font-Body-M-family)
        );
        --wix-ui-tpa-button-main-text-font-size: var(
                --AddToCartButton2539309398-gallery_addToCartButtonTextFont-size,
                16px
        );
        --wix-ui-tpa-button-main-text-font-style: var(
                --gallery_addToCartButtonTextFont-style,
                var(--wix-font-Body-M-style)
        );
        --wix-ui-tpa-button-main-text-font-variant: var(
                --gallery_addToCartButtonTextFont-variant,
                var(--wix-font-Body-M-variant)
        );
        --wix-ui-tpa-button-main-text-font-weight: var(
                --gallery_addToCartButtonTextFont-weight,
                var(--wix-font-Body-M-weight)
        );
        --wix-ui-tpa-button-hover-text-font-size: var(
                --AddToCartButton2539309398-gallery_addToCartButtonTextFont-size,
                16px
        );
        --wix-ui-tpa-button-main-background-color: var(
                --gallery_addToCartButtonBackgroundColor,
                var(--wix-color-8)
        );
        --wix-ui-tpa-button-main-background-color-rgb: var(
                --gallery_addToCartButtonBackgroundColor-rgb,
                var(--wix-color-8)
        );
        --wix-ui-tpa-button-main-background-color-opacity: var(
                --gallery_addToCartButtonBackgroundColor-opacity
        );
        --wix-ui-tpa-button-main-border-color: var(
                --gallery_addToCartButtonBorderColor,
                var(--wix-color-8)
        );
        --wix-ui-tpa-button-main-border-color-rgb: var(
                --gallery_addToCartButtonBorderColor-rgb,
                var(--wix-color-8)
        );
        --wix-ui-tpa-button-main-border-color-opacity: var(
                --gallery_addToCartButtonBorderColor-opacity
        );
        display: block !important;
    }
    .sVbpA__.ochjeup--mobile.obg5oX6--useMobileFont {
        font-size: calc(
                var(--mobile-gallery_buttonTextFontSize) * 1px
        ) !important;
    }
    .sVbpA__.obg5oX6--isInStock {
        --wix-ui-tpa-button-main-text-color: var(
                --gallery_addToCartButtonTextColor,
                var(--wix-color-1)
        );
        --wix-ui-tpa-button-main-text-color-rgb: var(
                --gallery_addToCartButtonTextColor-rgb,
                var(--wix-color-1)
        );
        --wix-ui-tpa-button-main-text-color-opacity: var(
                --gallery_addToCartButtonTextColor-opacity
        );
    }
    .sVbpA__.obg5oX6--isDisabled {
        --wix-ui-tpa-button-disabled-background-color: var(
                --gallery_addToCartButtonBackgroundColorDisabled
        );
        --wix-ui-tpa-button-disabled-background-color-rgb: var(
                --gallery_addToCartButtonBackgroundColorDisabled-rgb
        );
        --wix-ui-tpa-button-disabled-background-color-opacity: var(
                --gallery_addToCartButtonBackgroundColorDisabled-opacity
        );
        --wix-ui-tpa-button-main-text-color: var(
                --gallery_addToCartButtonTextColorDisabled
        );
        --wix-ui-tpa-button-main-text-color-rgb: var(
                --gallery_addToCartButtonTextColorDisabled-rgb
        );
        --wix-ui-tpa-button-main-text-color-opacity: var(
                --gallery_addToCartButtonTextColorDisabled-opacity
        );
        --wix-ui-tpa-button-hover-background-color: var(
                --gallery_addToCartButtonBackgroundColorDisabled
        );
        --wix-ui-tpa-button-hover-background-color-rgb: var(
                --gallery_addToCartButtonBackgroundColorDisabled-rgb
        );
        --wix-ui-tpa-button-hover-background-color-opacity: var(
                --gallery_addToCartButtonBackgroundColorDisabled-opacity
        );
        --wix-ui-tpa-button-hover-text-color: var(
                --gallery_addToCartButtonTextColorDisabled
        );
        --wix-ui-tpa-button-hover-text-color-rgb: var(
                --gallery_addToCartButtonTextColorDisabled-rgb
        );
        --wix-ui-tpa-button-hover-text-color-opacity: var(
                --gallery_addToCartButtonTextColorDisabled-opacity
        );
    }
    .s__6tQsE3 {
        --wix-ui-tpa-three-dots-loader-color: var(
                --gallery_addToCartButtonTextColor,
                var(--wix-color-1)
        );
        --wix-ui-tpa-three-dots-loader-color-rgb: var(
                --gallery_addToCartButtonTextColor-rgb,
                var(--wix-color-1)
        );
        --wix-ui-tpa-three-dots-loader-color-opacity: var(
                --gallery_addToCartButtonTextColor-opacity
        );
        position: absolute;
    }
    .s__8TYetY {
        align-items: center;
        display: flex;
        justify-content: center;
    }
    .syHtuvM {
        --wix-ui-tpa-text-main-text-font-text-decoration: var(
                --gallery_titleFontStyle-text-decoration,
                var(--wix-font-Body-M-text-decoration)
        );
        --wix-ui-tpa-text-main-text-font-line-height: var(
                --gallery_titleFontStyle-line-height,
                var(--wix-font-Body-M-line-height)
        );
        --wix-ui-tpa-text-main-text-font-family: var(
                --gallery_titleFontStyle-family,
                var(--wix-font-Body-M-family)
        );
        --wix-ui-tpa-text-main-text-font-size: var(
                --gallery_titleFontStyle-size,
                16px
        );
        --wix-ui-tpa-text-main-text-font-style: var(
                --gallery_titleFontStyle-style,
                var(--wix-font-Body-M-style)
        );
        --wix-ui-tpa-text-main-text-font-variant: var(
                --gallery_titleFontStyle-variant,
                var(--wix-font-Body-M-variant)
        );
        --wix-ui-tpa-text-main-text-font-weight: var(
                --gallery_titleFontStyle-weight,
                var(--wix-font-Body-M-weight)
        );
        --wix-ui-tpa-text-main-text-color: var(
                --gallery_titleTextColor,
                var(--wix-color-5)
        );
        --wix-ui-tpa-text-main-text-color-rgb: var(
                --gallery_titleTextColor-rgb,
                var(--wix-color-5)
        );
        --wix-ui-tpa-text-main-text-color-opacity: var(
                --gallery_titleTextColor-opacity
        );
    }
    .syHtuvM.oxy3XUk--mobile.oAvC8y3--useMobileFont {
        font-size: calc(
                var(--mobile-gallery_productNameFontSize) * 1px
        ) !important;
        line-height: 1.55em !important;
    }
    .sfbAtk0 {
        --wix-ui-tpa-text-main-text-font-text-decoration: var(
                --gallery_discountNameFont-text-decoration,
                var(--wix-font-Body-M-text-decoration)
        );
        --wix-ui-tpa-text-main-text-font-line-height: var(
                --gallery_discountNameFont-line-height,
                var(--wix-font-Body-M-line-height)
        );
        --wix-ui-tpa-text-main-text-font-family: var(
                --gallery_discountNameFont-family,
                var(--wix-font-Body-M-family)
        );
        --wix-ui-tpa-text-main-text-font-size: var(
                --gallery_discountNameFont-size,
                14px
        );
        --wix-ui-tpa-text-main-text-font-style: var(
                --gallery_discountNameFont-style,
                var(--wix-font-Body-M-style)
        );
        --wix-ui-tpa-text-main-text-font-variant: var(
                --gallery_discountNameFont-variant,
                var(--wix-font-Body-M-variant)
        );
        --wix-ui-tpa-text-main-text-font-weight: var(
                --gallery_discountNameFont-weight,
                var(--wix-font-Body-M-weight)
        );
        --wix-ui-tpa-text-main-text-color: var(
                --gallery_discountNameColor,
                var(--wix-color-8)
        );
        --wix-ui-tpa-text-main-text-color-rgb: var(
                --gallery_discountNameColor-rgb,
                var(--wix-color-8)
        );
        --wix-ui-tpa-text-main-text-color-opacity: var(
                --gallery_discountNameColor-opacity
        );
    }
    .sfbAtk0.oxy3XUk--mobile.oAvC8y3--useMobileFont {
        font-size: calc(
                var(--mobile-gallery_discountNameFontSize) * 1px
        ) !important;
    }
    .sh1sv9H {
        --wix-ui-tpa-counter-main-width: calc(100 * 1%);
    }
    .sh1sv9H.oLb4KKM--customized {
        --wix-ui-tpa-counter-main-width: calc(
                100% - var(--gallery_quantityAndOptionsBorderWidth, 1px)
        );
        --wix-ui-tpa-counter-main-border-width: var(
                --gallery_quantityAndOptionsBorderWidth,
                1px
        );
        --wix-ui-tpa-counter-main-font-text-decoration: var(
                --gallery_quantityAndOptionsTextFont-text-decoration
        );
        --wix-ui-tpa-counter-main-font-line-height: var(
                --gallery_quantityAndOptionsTextFont-line-height
        );
        --wix-ui-tpa-counter-main-font-family: var(
                --gallery_quantityAndOptionsTextFont-family
        );
        --wix-ui-tpa-counter-main-font-size: var(
                --gallery_quantityAndOptionsTextFont-size
        );
        --wix-ui-tpa-counter-main-font-style: var(
                --gallery_quantityAndOptionsTextFont-style
        );
        --wix-ui-tpa-counter-main-font-variant: var(
                --gallery_quantityAndOptionsTextFont-variant
        );
        --wix-ui-tpa-counter-main-font-weight: var(
                --gallery_quantityAndOptionsTextFont-weight
        );
        --wix-ui-tpa-counter-text-color: var(
                --gallery_quantityAndOptionsTextColor,
                var(--wix-color-5)
        );
        --wix-ui-tpa-counter-text-color-rgb: var(
                --gallery_quantityAndOptionsTextColor-rgb,
                var(--wix-color-5)
        );
        --wix-ui-tpa-counter-text-color-opacity: var(
                --gallery_quantityAndOptionsTextColor-opacity
        );
        --wix-ui-tpa-counter-border-color: var(
                --gallery_quantityAndOptionsBorderColor,
                var(--wix-color-5)
        );
        --wix-ui-tpa-counter-border-color-rgb: var(
                --gallery_quantityAndOptionsBorderColor-rgb,
                var(--wix-color-5)
        );
        --wix-ui-tpa-counter-border-color-opacity: var(
                --gallery_quantityAndOptionsBorderColor-opacity
        );
        --wix-ui-tpa-counter-main-background-color: var(
                --gallery_quantityAndOptionsBackgroundColor
        );
        --wix-ui-tpa-counter-main-background-color-rgb: var(
                --gallery_quantityAndOptionsBackgroundColor-rgb
        );
        --wix-ui-tpa-counter-main-background-color-opacity: var(
                --gallery_quantityAndOptionsBackgroundColor-opacity
        );
        --wix-ui-tpa-counter-disabled-color: var(
                --gallery_quantityAndOptionsTextColor,
                var(--wix-color-3),
                0.5
        );
        --wix-ui-tpa-counter-disabled-color-rgb: var(
                --gallery_quantityAndOptionsTextColor-rgb,
                var(--wix-color-3)
        );
        --wix-ui-tpa-counter-disabled-color-opacity: var(
                --gallery_quantityAndOptionsTextColor-opacity,
                0.5
        );
        --wix-ui-tpa-counter-main-border-radius: calc(
                var(--gallery_productQuantityCornerRadius, 0) * 1px
        );
    }
    .sh1sv9H.oLb4KKM--customized:focus-within,
    .sh1sv9H.oLb4KKM--customized:hover {
        border-color: rgba(
                var(--gallery_quantityAndOptionsBorderColor, var(--wix-color-5))
        ) !important;
    }
    @font-face {
        font-family: swiper-icons;
        font-style: normal;
        font-weight: 400;
        src: url("data:application/font-woff;charset=utf-8;base64, d09GRgABAAAAAAZgABAAAAAADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABGRlRNAAAGRAAAABoAAAAci6qHkUdERUYAAAWgAAAAIwAAACQAYABXR1BPUwAABhQAAAAuAAAANuAY7+xHU1VCAAAFxAAAAFAAAABm2fPczU9TLzIAAAHcAAAASgAAAGBP9V5RY21hcAAAAkQAAACIAAABYt6F0cBjdnQgAAACzAAAAAQAAAAEABEBRGdhc3AAAAWYAAAACAAAAAj//wADZ2x5ZgAAAywAAADMAAAD2MHtryVoZWFkAAABbAAAADAAAAA2E2+eoWhoZWEAAAGcAAAAHwAAACQC9gDzaG10eAAAAigAAAAZAAAArgJkABFsb2NhAAAC0AAAAFoAAABaFQAUGG1heHAAAAG8AAAAHwAAACAAcABAbmFtZQAAA/gAAAE5AAACXvFdBwlwb3N0AAAFNAAAAGIAAACE5s74hXjaY2BkYGAAYpf5Hu/j+W2+MnAzMYDAzaX6QjD6/4//Bxj5GA8AuRwMYGkAPywL13jaY2BkYGA88P8Agx4j+/8fQDYfA1AEBWgDAIB2BOoAeNpjYGRgYNBh4GdgYgABEMnIABJzYNADCQAACWgAsQB42mNgYfzCOIGBlYGB0YcxjYGBwR1Kf2WQZGhhYGBiYGVmgAFGBiQQkOaawtDAoMBQxXjg/wEGPcYDDA4wNUA2CCgwsAAAO4EL6gAAeNpj2M0gyAACqxgGNWBkZ2D4/wMA+xkDdgAAAHjaY2BgYGaAYBkGRgYQiAHyGMF8FgYHIM3DwMHABGQrMOgyWDLEM1T9/w8UBfEMgLzE////P/5//f/V/xv+r4eaAAeMbAxwIUYmIMHEgKYAYjUcsDAwsLKxc3BycfPw8jEQA/gZBASFhEVExcQlJKWkZWTl5BUUlZRVVNXUNTQZBgMAAMR+E+gAEQFEAAAAKgAqACoANAA+AEgAUgBcAGYAcAB6AIQAjgCYAKIArAC2AMAAygDUAN4A6ADyAPwBBgEQARoBJAEuATgBQgFMAVYBYAFqAXQBfgGIAZIBnAGmAbIBzgHsAAB42u2NMQ6CUAyGW568x9AneYYgm4MJbhKFaExIOAVX8ApewSt4Bic4AfeAid3VOBixDxfPYEza5O+Xfi04YADggiUIULCuEJK8VhO4bSvpdnktHI5QCYtdi2sl8ZnXaHlqUrNKzdKcT8cjlq+rwZSvIVczNiezsfnP/uznmfPFBNODM2K7MTQ45YEAZqGP81AmGGcF3iPqOop0r1SPTaTbVkfUe4HXj97wYE+yNwWYxwWu4v1ugWHgo3S1XdZEVqWM7ET0cfnLGxWfkgR42o2PvWrDMBSFj/IHLaF0zKjRgdiVMwScNRAoWUoH78Y2icB/yIY09An6AH2Bdu/UB+yxopYshQiEvnvu0dURgDt8QeC8PDw7Fpji3fEA4z/PEJ6YOB5hKh4dj3EvXhxPqH/SKUY3rJ7srZ4FZnh1PMAtPhwP6fl2PMJMPDgeQ4rY8YT6Gzao0eAEA409DuggmTnFnOcSCiEiLMgxCiTI6Cq5DZUd3Qmp10vO0LaLTd2cjN4fOumlc7lUYbSQcZFkutRG7g6JKZKy0RmdLY680CDnEJ+UMkpFFe1RN7nxdVpXrC4aTtnaurOnYercZg2YVmLN/d/gczfEimrE/fs/bOuq29Zmn8tloORaXgZgGa78yO9/cnXm2BpaGvq25Dv9S4E9+5SIc9PqupJKhYFSSl47+Qcr1mYNAAAAeNptw0cKwkAAAMDZJA8Q7OUJvkLsPfZ6zFVERPy8qHh2YER+3i/BP83vIBLLySsoKimrqKqpa2hp6+jq6RsYGhmbmJqZSy0sraxtbO3sHRydnEMU4uR6yx7JJXveP7WrDycAAAAAAAH//wACeNpjYGRgYOABYhkgZgJCZgZNBkYGLQZtIJsFLMYAAAw3ALgAeNolizEKgDAQBCchRbC2sFER0YD6qVQiBCv/H9ezGI6Z5XBAw8CBK/m5iQQVauVbXLnOrMZv2oLdKFa8Pjuru2hJzGabmOSLzNMzvutpB3N42mNgZGBg4GKQYzBhYMxJLMlj4GBgAYow/P/PAJJhLM6sSoWKfWCAAwDAjgbRAAB42mNgYGBkAIIbCZo5IPrmUn0hGA0AO8EFTQAA")
        format("woff");
    }
    :root {
        --swiper-theme-color: #007aff;
    }
    :host {
        display: block;
        margin-left: auto;
        margin-right: auto;
        position: relative;
        z-index: 1;
    }
    .swiper {
        display: block;
        list-style: none;
        margin-left: auto;
        margin-right: auto;
        overflow: hidden;
        padding: 0;
        position: relative;
        z-index: 1;
    }
    .swiper-vertical > .swiper-wrapper {
        flex-direction: column;
    }
    .swiper-wrapper {
        box-sizing: content-box;
        display: flex;
        height: 100%;
        position: relative;
        transition-property: transform;
        transition-timing-function: var(
                --swiper-wrapper-transition-timing-function,
                initial
        );
        width: 100%;
        z-index: 1;
    }
    .swiper-android .swiper-slide,
    .swiper-ios .swiper-slide,
    .swiper-wrapper {
        transform: translateZ(0);
    }
    .swiper-horizontal {
        touch-action: pan-y;
    }
    .swiper-vertical {
        touch-action: pan-x;
    }
    .swiper-slide {
        display: block;
        flex-shrink: 0;
        height: 100%;
        position: relative;
        transition-property: transform;
        width: 100%;
    }
    .swiper-slide-invisible-blank {
        visibility: hidden;
    }
    .swiper-autoheight,
    .swiper-autoheight .swiper-slide {
        height: auto;
    }
    .swiper-autoheight .swiper-wrapper {
        align-items: flex-start;
        transition-property: transform, height;
    }
    .swiper-backface-hidden .swiper-slide {
        backface-visibility: hidden;
        transform: translateZ(0);
    }
    .swiper-3d.swiper-css-mode .swiper-wrapper {
        perspective: 1200px;
    }
    .swiper-3d .swiper-wrapper {
        transform-style: preserve-3d;
    }
    .swiper-3d {
        perspective: 1200px;
    }
    .swiper-3d .swiper-cube-shadow,
    .swiper-3d .swiper-slide {
        transform-style: preserve-3d;
    }
    .swiper-css-mode > .swiper-wrapper {
        -ms-overflow-style: none;
        overflow: auto;
        scrollbar-width: none;
    }
    .swiper-css-mode > .swiper-wrapper::-webkit-scrollbar {
        display: none;
    }
    .swiper-css-mode > .swiper-wrapper > .swiper-slide {
        scroll-snap-align: start start;
    }
    .swiper-css-mode.swiper-horizontal > .swiper-wrapper {
        -ms-scroll-snap-type: x mandatory;
        scroll-snap-type: x mandatory;
    }
    .swiper-css-mode.swiper-vertical > .swiper-wrapper {
        -ms-scroll-snap-type: y mandatory;
        scroll-snap-type: y mandatory;
    }
    .swiper-css-mode.swiper-free-mode > .swiper-wrapper {
        -ms-scroll-snap-type: none;
        scroll-snap-type: none;
    }
    .swiper-css-mode.swiper-free-mode > .swiper-wrapper > .swiper-slide {
        scroll-snap-align: none;
    }
    .swiper-css-mode.swiper-centered > .swiper-wrapper:before {
        content: "";
        flex-shrink: 0;
        order: 9999;
    }
    .swiper-css-mode.swiper-centered > .swiper-wrapper > .swiper-slide {
        scroll-snap-align: center center;
        scroll-snap-stop: always;
    }
    .swiper-css-mode.swiper-centered.swiper-horizontal
    > .swiper-wrapper
    > .swiper-slide:first-child {
        margin-inline-start: var(--swiper-centered-offset-before);
    }
    .swiper-css-mode.swiper-centered.swiper-horizontal
    > .swiper-wrapper:before {
        height: 100%;
        min-height: 1px;
        width: var(--swiper-centered-offset-after);
    }
    .swiper-css-mode.swiper-centered.swiper-vertical
    > .swiper-wrapper
    > .swiper-slide:first-child {
        margin-block-start: var(--swiper-centered-offset-before);
    }
    .swiper-css-mode.swiper-centered.swiper-vertical > .swiper-wrapper:before {
        height: var(--swiper-centered-offset-after);
        min-width: 1px;
        width: 100%;
    }
    .swiper-3d .swiper-slide-shadow,
    .swiper-3d .swiper-slide-shadow-bottom,
    .swiper-3d .swiper-slide-shadow-left,
    .swiper-3d .swiper-slide-shadow-right,
    .swiper-3d .swiper-slide-shadow-top {
        height: 100%;
        left: 0;
        pointer-events: none;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 10;
    }
    .swiper-3d .swiper-slide-shadow {
        background: rgba(0, 0, 0, 0.15);
    }
    .swiper-3d .swiper-slide-shadow-left {
        background-image: linear-gradient(
                270deg,
                rgba(0, 0, 0, 0.5),
                transparent
        );
    }
    .swiper-3d .swiper-slide-shadow-right {
        background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.5), transparent);
    }
    .swiper-3d .swiper-slide-shadow-top {
        background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5), transparent);
    }
    .swiper-3d .swiper-slide-shadow-bottom {
        background-image: linear-gradient(
                180deg,
                rgba(0, 0, 0, 0.5),
                transparent
        );
    }
    .swiper-lazy-preloader {
        border: 4px solid var(--swiper-preloader-color, var(--swiper-theme-color));
        border-radius: 50%;
        border-top-color: transparent;
        box-sizing: border-box;
        height: 42px;
        left: 50%;
        margin-left: -21px;
        margin-top: -21px;
        position: absolute;
        top: 50%;
        transform-origin: 50%;
        width: 42px;
        z-index: 10;
    }
    .swiper-watch-progress .swiper-slide-visible .swiper-lazy-preloader,
    .swiper:not(.swiper-watch-progress) .swiper-lazy-preloader {
        animation: swiper-preloader-spin 1s linear infinite;
    }
    .swiper-lazy-preloader-white {
        --swiper-preloader-color: #fff;
    }
    .swiper-lazy-preloader-black {
        --swiper-preloader-color: #000;
    }
    @keyframes V58EsK {
        0% {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(1turn);
        }
    }
    .lo0oex {
        --transparent: 0, 0, 0, 0;
        background-color: rgba(var(--gallery_background, var(--transparent)));
        direction: var(--wix-direction);
    }
    .lo0oex.Lm1oUy {
        padding: 16px 0;
    }
    .lo0oex.AYEgRG {
        padding: 0;
    }
    .lo0oex .swiper-wrapper {
        transition-timing-function: cubic-bezier(0.32, 0, 0.32, 1.01);
    }
    .JagG9_ {
        padding: calc(var(--gallery_layoutVerticalPadding) * 1px)
        calc(var(--gallery_layoutHorizontalPadding) * 1px);
    }
    .s1IgMQ {
        max-width: inherit;
    }
    .x4t_Ih {
        width: 100%;
    }
    .x4t_Ih .aG5eBy {
        height: 100%;
        width: 100%;
    }
    .x4t_Ih:not(.x4t_Ih.yqx97_) .FQirFG {
        height: auto;
    }
    .x4t_Ih:not(.x4t_Ih.yqx97_).bE53qy {
        --numOfColumns: calc((var(--galleryColumns) + var(--teaserSpace)));
    }
    .x4t_Ih:not(.x4t_Ih.yqx97_).bE53qy .FQirFG {
        --paddingPlaceholder: calc(
                (var(--numOfColumns) - 1) * var(--spaceBetweenSlides) * 1px
        );
        width: calc((100% - var(--paddingPlaceholder)) / var(--numOfColumns));
    }
    .x4t_Ih:not(.x4t_Ih.yqx97_).bE53qy .FQirFG:not(:last-child) {
        margin-inline-end: calc(var(--spaceBetweenSlides) * 1px);
    }
    .x4t_Ih:not(.x4t_Ih.yqx97_).bE53qy:not(.MqnXPA) .swiper-wrapper {
        transform: translate3d(calc(var(--teaserOffsetOld) * 1px), 0, 0);
    }
    .x4t_Ih:not(.x4t_Ih.yqx97_).bE53qy.MqnXPA .swiper-wrapper {
        transform: translate3d(calc(var(--teaserOffset) * 1px), 0, 0);
    }
    .x4t_Ih.yqx97_ .FQirFG {
        height: auto;
    }
    .x4t_Ih.yqx97_.bE53qy {
        --min-item-width: calc(var(--gallery_productSize) * 1px);
        --gap-size-column: calc(var(--spaceBetweenSlides) * 1px);
        --item-width: min(100%, calc(var(--min-item-width)));
        --grid-template-columns: repeat(auto-fit, minmax(var(--item-width), 1fr));
        --minWidthForTeaserToAppear: calc(
                var(--min-item-width) + var(--gap-size-column) + var(--min-item-width) *
                0.3
        );
        --maxWidthForTeaserToAppear: calc(
                var(--totalNumberOfProducts) *
                (var(--min-item-width) + var(--gap-size-column)) -
                var(--gap-size-column)
        );
        --expectedTeaserSize: calc(var(--min-item-width) * var(--teaserSpace));
        --actualTeaserSize: clamp(
                0px,
                (100% - var(--minWidthForTeaserToAppear)) * 10000,
                var(--expectedTeaserSize)
        );
        width: clamp(
                100%,
                var(--maxWidthForTeaserToAppear),
                100% + var(--actualTeaserSize)
        );
    }
    .x4t_Ih.yqx97_.bE53qy .FQirFG {
        margin-inline-end: 0;
        margin-right: 0 !important;
        width: 100% !important;
    }
    .x4t_Ih.yqx97_.bE53qy.MqnXPA .swiper-wrapper {
        transform: translate3d(calc(var(--teaserOffset) * 1px), 0, 0);
    }
    .x4t_Ih.yqx97_.bE53qy:not(.MqnXPA) .swiper-wrapper {
        transform: translate3d(calc(var(--teaserOffsetOld) * 1px), 0, 0);
    }
    .x4t_Ih.yqx97_.bE53qy .swiper-wrapper {
        -moz-column-gap: var(--gap-size-column);
        column-gap: var(--gap-size-column);
        display: grid;
        grid-auto-columns: 0;
        grid-auto-rows: 0;
        grid-template-columns: var(--grid-template-columns);
        grid-template-rows: 1fr;
    }
    .NTr57S {
        --offset: calc(var(--sliderSidePadding) + var(--teaserOffset) * 1px);
        color: rgba(var(--gallery_headerTextColor, var(--wix-color-5)));
        font: var(--gallery_headerTextFont);
        padding: 0 var(--offset) 36px;
        text-align: var(--gallery_headerTextAlignment);
        -webkit-text-decoration: var(--gallery_headerTextFont-text-decoration);
        text-decoration: var(--gallery_headerTextFont-text-decoration);
    }
    .JMHZvW {
        direction: ltr;
        display: flex;
        gap: calc(var(--gallery_sliderNavigationArrowsSpacing) * 1px);
        justify-content: center;
        position: relative;
        width: 100%;
        z-index: 0;
    }
    .JMHZvW .QxZH_L {
        --arrowSpace: 24px;
        direction: var(--wix-direction);
        display: grid;
        overflow: hidden;
        width: 100%;
    }
    .JMHZvW .eGz2j5 {
        align-items: center;
        align-self: var(--arrowContainerAlignSelf);
        display: flex;
        height: var(--arrowsReferenceHeight, var(--arrowsContainerHeight, 100%));
        opacity: 0;
        pointer-events: none;
        position: var(--arrowContainerPosition);
        transition: opacity 0.2s;
        z-index: 10;
    }
    .JMHZvW .eGz2j5.yTxYuD {
        opacity: 1;
        pointer-events: unset;
    }
    .JMHZvW .eGz2j5 .YrOpKv {
        --transparent: 0, 0, 0, 0;
        background-color: rgba(
                var(--gallery_sliderArrowsContainerOpacityAndColor, var(--transparent))
        );
        border-color: rgba(
                var(--gallery_sliderArrowsContainerBorderColor, --wix-color-5)
        );
        border-radius: calc(var(--gallery_sliderArrowsCornerRadius) * 1px);
        border-style: solid;
        border-width: calc(var(--gallery_sliderArrowsContainerBorderWidth) * 1px);
    }
    .JMHZvW .eGz2j5 .YrOpKv .rN6xZT {
        height: calc(var(--gallery_sliderArrowsSize) * 1px);
        width: calc(var(--gallery_sliderArrowsSize) * 1px);
    }
    .JMHZvW .eGz2j5.kzGd1Z {
        left: var(--arrowsOffset);
    }
    .JMHZvW .eGz2j5.Xqp1OC {
        right: var(--arrowsOffset);
    }
    .OGjrHa {
        background: #fff;
        color: #ddd;
        padding: 30px 0;
        text-align: center;
    }
    .nEoFgW {
        font-size: 15px;
        font-weight: 400;
        margin-bottom: 0;
        margin-top: 15px;
        padding: 0 15px;
    }
    .p_m9YY .q4uTL8 {
        height: 100%;
    }
    .iI5avH {
        clip: rect(0, 0, 0, 0);
        border: 0;
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
    }
    .oQUvqL {
        text-decoration: none;
        width: var(--productItemImageWidth);
    }
    .oQUvqL.x5qIv3 {
        padding-block: calc(
                var(--gallery_itemLinkVerticalCustomizePadding) * 1px
        );
        padding-inline: calc(
                var(--gallery_itemLinkHorizontalCustomizePadding) * 1px
        );
    }
    .device-mobile-optimized .notCssPerBreakpoint .oQUvqL.x5qIv3 {
        padding-block: calc(
                var(--mobile-gallery_itemLinkVerticalCustomizePadding) * 1px
        );
        padding-inline: calc(
                var(--mobile-gallery_itemLinkHorizontalCustomizePadding) * 1px
        );
    }
    @media (max-width: 749px) {
        .notCssPerBreakpoint .oQUvqL.x5qIv3 {
            padding-block: calc(
                    var(--mobile-gallery_itemLinkVerticalCustomizePadding) * 1px
            );
            padding-inline: calc(
                    var(--mobile-gallery_itemLinkHorizontalCustomizePadding) * 1px
            );
        }
    }
    .ETPbIy {
        --transparent: 0, 0, 0, 0;
        --hrefCursor: pointer;
        --hrefPointerEvents: none;
        background-color: rgba(
                var(--gallery_productBackground, var(--transparent))
        );
        box-sizing: border-box;
        direction: var(--wix-direction);
        display: flex;
        flex-direction: var(--productItemFlexDirection);
        gap: var(--productItemImageAndInfoSpacing);
        width: 100%;
    }
    .ETPbIy.XVNMeH {
        border-color: rgba(var(--gallery_borderColor, var(--wix-color-5)));
        border-style: solid;
        border-width: calc(var(--gallery_borderWidth, 0) * 0.5px);
        outline-color: rgba(var(--gallery_borderColor, var(--wix-color-5)));
        outline-style: solid;
        outline-width: calc(var(--gallery_borderWidth, 0) * 0.5px);
    }
    .ETPbIy.KJlsir {
        border-color: rgba(var(--gallery_borderColor, var(--wix-color-5)));
        border-style: solid;
        border-width: calc(var(--gallery_borderWidth, 0) * 1px);
    }
    .ETPbIy.n_dqkS {
        cursor: var(--hrefCursor);
    }
    .ETPbIy.n_dqkS a {
        pointer-events: var(--hrefPointerEvents);
    }
    .ETPbIy.NREJOa {
        border-radius: calc(var(--gallery_cardCornerRadius, 0) * 1px);
        overflow: hidden;
    }
    .ETPbIy.vL5YxX {
        flex-direction: var(--productItemOddIndexFlexDirection);
    }
    .ETPbIy .CZ0KIs {
        display: flex;
        flex-direction: column;
        height: 100%;
        justify-content: var(--productItemVerticalAlignment);
        padding: var(--productItemNotImageContainerPaddingTop)
        calc(var(--gallery_productMargin) * 1px)
        calc(var(--gallery_productMargin) * 1px);
        width: var(--productItemNotImageContainerWidth);
    }
    .device-mobile-optimized .notCssPerBreakpoint .ETPbIy .CZ0KIs {
        padding: var(--productItemNotImageContainerPaddingTop)
        calc(var(--mobile-gallery_productMargin) * 1px)
        calc(var(--mobile-gallery_productMargin) * 1px);
    }
    @media (max-width: 749px) {
        .notCssPerBreakpoint .ETPbIy .CZ0KIs {
            padding: var(--productItemNotImageContainerPaddingTop)
            calc(var(--mobile-gallery_productMargin) * 1px)
            calc(var(--mobile-gallery_productMargin) * 1px);
        }
    }
    .ETPbIy .CZ0KIs .A4k3VP,
    .ETPbIy .CZ0KIs .Jzh04F {
        display: flex;
        flex-direction: column;
    }
    .ETPbIy .CZ0KIs .JPDEZd,
    .ETPbIy .CZ0KIs .Jzh04F {
        flex-grow: var(--productItemDetailsLinkFlexGrow);
    }
    .ETPbIy .KSFKAN {
        justify-content: var(--gallery_alignment);
        width: 100%;
    }
    .ETPbIy .t2u_rw {
        align-items: var(--productItemHorizontalAlignment);
        flex-direction: column;
    }
    .ETPbIy .EiRAO9,
    .ETPbIy .t2u_rw {
        word-wrap: break-word;
        display: flex;
        text-align: var(--gallery_alignment);
        text-decoration: none;
    }
    .ETPbIy .EiRAO9 {
        align-items: var(--namePriceLayoutAlignItems);
        flex-direction: var(--namePriceLayoutFlexDirection);
        gap: calc(var(--namePriceLayoutFlexGap) * 1%);
        justify-content: var(--namePriceLayoutJustifyContent);
        width: 100%;
    }
    .ETPbIy .EiRAO9 .FzO_a9 {
        line-height: var(
                --nameLineHeight,
                var(--wix-ui-tpa-text-main-text-font-line-height)
        );
        margin: 0;
        text-align: var(--nameTextAlign);
    }
    .ETPbIy .EiRAO9 .ZMQj6C {
        max-width: 100%;
    }
    .ETPbIy .EiRAO9 .MInUcJ {
        border: 0 solid rgba(var(--gallery_dividerColor, var(--wix-color-5)));
        border-bottom-width: calc(var(--gallery_dividerWidth, 1) * 1px);
        display: inline-block;
        margin: 0.5em 0;
        vertical-align: middle;
        width: calc(var(--gallery_dividerLength, 20) * 1px);
    }
    .ETPbIy .TUWFt6 {
        --black: 0, 0, 0, 1;
        --gallery-quickview-color-local: 255, 255, 255, 0.75;
        background-color: transparent;
        background-color: rgba(
                var(--gallery_quickViewBackground, var(--gallery-quickview-color-local))
        );
        border: none;
        color: inherit;
        color: rgba(var(--gallery_quickViewTextColor, var(--black)));
        cursor: pointer;
        font: inherit;
        font: var(--gallery_quickViewTextFontStyle);
        height: 50px;
        line-height: 50px !important;
        padding: 0;
        position: absolute;
        text-align: center;
        -webkit-text-decoration: var(
                --gallery_quickViewTextFontStyle-text-decoration
        );
        text-decoration: var(--gallery_quickViewTextFontStyle-text-decoration);
        top: 100%;
        transform: translateY(0);
        transition-duration: 399ms;
        transition-property: transform;
        width: 100%;
    }
    .ETPbIy .TUWFt6:focus {
        transform: translateY(-100%);
        transition-duration: 0.3s;
    }
    .ETPbIy .sGu98t {
        opacity: var(--addToCartButtonShowOnHoverOpacity);
        transition: 0.2s linear;
    }
    .ETPbIy:hover .TUWFt6 {
        transform: translateY(-100%);
        transition-duration: 0.3s;
    }
    .ETPbIy:hover .sGu98t {
        opacity: var(--addToCartButtonShowOnHoverOpacityOnHover);
        transition: 0.2s linear;
    }
    .ETPbIy .CPS1Hn {
        width: 100%;
    }
    .ETPbIy .zcHq0l {
        margin-top: 12px;
    }
    .ETPbIy .zcHq0l .tBqx1q {
        text-align: var(--gallery_addToCartButtonTextAlignment, center);
    }
    .ETPbIy .zcHq0l .WkoreL {
        width: -moz-fit-content;
        width: fit-content;
    }
    .ETPbIy .zcHq0l .O6hVef {
        width: 100%;
    }
    .ETPbIy .X96_B7 {
        margin-top: 8px;
    }
    .ETPbIy .X96_B7 * {
        box-sizing: content-box;
    }
    .ETPbIy .qePMjn {
        margin-top: 12px;
    }
    .ETPbIy .qePMjn * {
        box-sizing: content-box;
    }
    .ETPbIy .vYdFnn {
        width: calc(var(--gallery_quantityBoxWidth) * 1%);
    }
    .ETPbIy .vn2zm2 {
        display: flex;
        justify-content: var(--gallery_alignment);
    }
    .ETPbIy .e3HCs3 {
        text-align: var(--gallery_alignment);
    }
    .ETPbIy .bl0_pE,
    .ETPbIy .e3HCs3 {
        display: flex;
        flex-direction: column;
    }
    .ETPbIy .bl0_pE {
        justify-content: flex-end;
    }
    .ETPbIy .jjoUFr {
        margin: 0;
        max-height: 0;
        opacity: 0;
    }
    .ETPbIy .EdR_aU,
    .ETPbIy .jjoUFr {
        transition: opacity 0.17s linear 0.1s,
        max-height 0.3s cubic-bezier(0.25, 0.1, 0.25, 0.1),
        margin 0.3s cubic-bezier(0.25, 0.1, 0.25, 0.1);
    }
    .ETPbIy .EdR_aU {
        max-height: 100%;
        opacity: 1;
    }
    .ETPbIy .PgHPAM {
        display: flex;
        justify-content: var(--gallery_alignment);
    }
    .ETPbIy .PgHPAM > * > * {
        margin-top: 4px;
    }
    .ETPbIy .ntj2AV {
        flex-direction: inherit;
    }
    .ETPbIy .DSIJ2F .Nqov9o {
        flex-grow: 1;
    }
    .ETPbIy ._50FHk {
        color: rgba(var(--gallery_priceBreakdownColor));
        font: var(--gallery_priceBreakdownFont);
        margin-top: 8px;
        -webkit-text-decoration: var(
                --gallery_priceBreakdownFont-text-decoration
        );
        text-decoration: var(--gallery_priceBreakdownFont-text-decoration);
    }
    .ETPbIy ._yRiWr {
        font: var(
                --gallery_outOfStockTextFontStyle,
                var(--gallery_outOfStockFontStyle)
        );
        line-height: 1.5em;
        -webkit-text-decoration: var(
                --gallery_outOfStockTextFontStyle-text-decoration,
                var(--gallery_outOfStockFontStyle-text-decoration)
        );
        text-decoration: var(
                --gallery_outOfStockTextFontStyle-text-decoration,
                var(--gallery_outOfStockFontStyle-text-decoration)
        );
    }
    .ETPbIy ._yRiWr.D_BTLm,
    .deviceMobile .ETPbIy ._yRiWr {
        color: rgba(var(--gallery_outOfStockTextColor));
    }
    .ETPbIy ._yRiWr {
        margin-top: 4px;
    }
    .deviceMobile .ETPbIy ._yRiWr {
        margin-top: 3px;
    }
    .ETPbIy .t1rBjg {
        flex-direction: inherit;
    }
    .ETPbIy .kzWTCn {
        margin: auto;
    }
    .bR7wFS {
        flex-direction: inherit;
    }
    .tDSJBT {
        margin: auto;
    }
    .z3Ybtk {
        align-items: var(--priceAndDiscountVerticalAlignment);
        -moz-column-gap: 4px;
        column-gap: 4px;
        display: flex;
        flex-direction: var(--priceAndDiscountLayoutFlexDirection);
        flex-wrap: var(--priceAndDiscountWrapBehavior);
        justify-content: var(--priceAndDiscountHorizontalAlignment);
    }
    .UqnnNN {
        color: rgba(var(--gallery_priceColor, var(--wix-color-4)));
        font: var(--gallery_priceFontStyle);
        line-height: 1.5em;
        -webkit-text-decoration: var(--gallery_priceFontStyle-text-decoration);
        text-decoration: var(--gallery_priceFontStyle-text-decoration);
        white-space: nowrap;
    }
    .device-mobile-optimized .UqnnNN {
        font-size: calc(var(--mobile-gallery_productPriceFontSize) * 1px);
    }
    @media (max-width: 749px) {
        .UqnnNN {
            font-size: calc(var(--mobile-gallery_productPriceFontSize) * 1px);
        }
    }
    .UqnnNN .DlHYV3 {
        line-height: 1.5em !important;
    }
    .UqnnNN .DlHYV3,
    .UqnnNN .o0Jgs5 {
        color: rgba(
                var(
                        --gallery_strikethroughPriceColor,
                        var(--gallery_priceColor, var(--wix-color-4))
                )
        );
        font: var(--gallery_strikethroughPriceFont);
        text-decoration: line-through;
    }
    .UqnnNN .o0Jgs5 {
        display: inline-flex;
        margin-inline-end: 4px;
    }
    .UqnnNN .e6onIk {
        color: rgba(
                var(
                        --gallery_salePriceColor,
                        var(--gallery_priceColor, var(--wix-color-4))
                )
        );
        font: var(--gallery_salePriceFont);
        line-height: 1.5em !important;
    }
    .UqnnNN .WuSRvG,
    .UqnnNN .cfpn1d {
        display: inline-flex;
    }
    .briESr {
        margin-top: var(--pricesMarginTop);
    }
    .deviceMobile .briESr {
        margin-top: var(--pricesMarginTopMobile);
    }
    .H4AzZc {
        margin-top: 4px;
    }
    .deviceMobile .H4AzZc {
        margin-top: 3px;
    }
    .T2QOcV {
        flex-direction: inherit;
    }
    .GplHFn {
        margin: 8px 0 0;
    }
    .x_HXFF {
        margin: 12px 0 0;
        padding: 8px 0;
    }
    .EHZqPm {
        margin: 8px 0 0;
    }
    .sX06Sd {
        margin: 12px 0 0;
    }
    ._5KUbZ {
        margin: 0;
        opacity: 0;
    }
    .Ek38Qk,
    ._5KUbZ {
        transition: opacity 0.17s linear 0.1s,
        max-height 0.3s cubic-bezier(0.25, 0.1, 0.25, 0.1),
        margin 0.3s cubic-bezier(0.25, 0.1, 0.25, 0.1);
    }
    .Ek38Qk {
        opacity: 1;
    }
    .C1jcae > * {
        margin: 0;
        transition: margin 1s;
    }
    .ntuavi {
        align-self: center;
    }
    .P5TFmm {
        display: var(--colorPickerItemRemainingDisplay) !important;
    }
    .KpWcbw {
        align-self: center;
        color: rgba(var(--gallery_quantityAndOptionsAdditionalSwatchesTextColor));
        font: var(--gallery_quantityAndOptionsAdditionalSwatchesTextFont);
        margin: 4px;
        -webkit-text-decoration: var(
                --gallery_quantityAndOptionsAdditionalSwatchesTextFont-text-decoration
        );
        text-decoration: var(
                --gallery_quantityAndOptionsAdditionalSwatchesTextFont-text-decoration
        );
    }
    .G7Tqmw {
        min-width: 100px;
        width: calc(var(--gallery_productDropdownListWidth) * 1%);
    }
    .G7Tqmw.BdDSw9 {
        min-width: 80px;
    }
    .Ga5V6f {
        display: flex;
        justify-content: var(--gallery_alignment);
    }
    .tyPziK {
        margin: 0 0 12px;
    }
    .Jcaujp {
        color: var(--wst-color-disabled-disabled-100, #969696);
        text-decoration: line-through;
    }
    .Rp5v73 {
        display: inline-flex;
    }
    .cLugmj {
        flex-grow: 0;
    }
    .INg0tB {
        -webkit-font-smoothing: subpixel-antialiased;
        background-color: var(--ribbonBackground);
        border: var(--ribbonBorder);
        border-radius: calc(var(--gallery_ribbonCornerRadius) * 1px);
        color: rgba(var(--gallery_ribbonTextColor, var(--wix-color-1)));
        direction: var(--wix-direction);
        font: var(--gallery_ribbonTextFont);
        inset-inline-start: 0;
        max-width: 80%;
        overflow: hidden;
        padding: var(--ribbonPadding);
        text-align: center;
        -webkit-text-decoration: var(--gallery_ribbonTextFont-text-decoration);
        text-decoration: var(--gallery_ribbonTextFont-text-decoration);
        text-overflow: ellipsis;
        text-rendering: optimizeSpeed;
        white-space: nowrap;
    }
    .device-mobile-optimized .INg0tB {
        font-size: calc(var(--mobile-gallery_ribbonTextFontSize) * 1px);
        line-height: 1.4em;
    }
    @media (max-width: 749px) {
        .INg0tB {
            font-size: calc(var(--mobile-gallery_ribbonTextFontSize) * 1px);
            line-height: 1.4em;
        }
    }
    .INg0tB.FbHYze {
        margin-inline-start: calc(var(--gallery_ribbonSidePadding) * 1%);
        margin-top: calc(var(--gallery_ribbonTopPadding) * 1%);
        position: absolute;
        top: 0;
    }
    .INg0tB.IPqs5F {
        margin-bottom: 8px;
        width: -moz-fit-content;
        width: fit-content;
    }
    .VbPqrS {
        margin-top: 12px;
        width: 100%;
    }
    .VbPqrS,
    .VbPqrS ._AVr5l {
        display: flex;
        justify-content: var(--gallery_addToCartButtonAlignment, center);
    }
    .VbPqrS .AlpQKX {
        text-align: var(--gallery_addToCartButtonTextAlignment, center);
        width: var(--addToCartButtonWidth);
    }
    .VbPqrS .AlpQKX.DiQZiJ {
        padding: 8px;
    }
    .VbPqrS .RYPDxA {
        visibility: hidden;
    }
    .mx4XGH {
        align-items: center;
        display: flex;
        justify-content: center;
    }
    @keyframes t5OpEh {
        0% {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    .mx4XGH.gdSP7A {
        animation: t5OpEh 0.5s;
    }
    @keyframes wWMmv7 {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }
        32% {
            opacity: 1;
            transform: translateY(-5px);
        }
        68% {
            opacity: 1;
            transform: translateY(2px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .mx4XGH.Rzpi7d {
        animation: wWMmv7 0.5s ease 0s 1 normal;
    }
    .eSTrrg {
        height: calc(var(--gallery_addToCartButtonIconSize) * 1px);
        width: calc(var(--gallery_addToCartButtonIconSize) * 1px);
    }
    .AJctir {
        text-decoration: none;
        width: var(--productItemImageWidth);
    }
    .AJctir.bGFTjD {
        padding-block: calc(
                var(--gallery_itemLinkVerticalCustomizePadding) * 1px
        );
        padding-inline: calc(
                var(--gallery_itemLinkHorizontalCustomizePadding) * 1px
        );
    }
    .device-mobile-optimized .notCssPerBreakpoint .AJctir.bGFTjD {
        padding-block: calc(
                var(--mobile-gallery_itemLinkVerticalCustomizePadding) * 1px
        );
        padding-inline: calc(
                var(--mobile-gallery_itemLinkHorizontalCustomizePadding) * 1px
        );
    }
    @media (max-width: 749px) {
        .notCssPerBreakpoint .AJctir.bGFTjD {
            padding-block: calc(
                    var(--mobile-gallery_itemLinkVerticalCustomizePadding) * 1px
            );
            padding-inline: calc(
                    var(--mobile-gallery_itemLinkHorizontalCustomizePadding) * 1px
            );
        }
    }
    .AJctir.qc8uk6 .Wo6AuW:not(:only-of-type):first-of-type .fNMon8 {
        opacity: 1;
    }
    .AJctir.qc8uk6 .Wo6AuW:not(:only-of-type):nth-of-type(2) .fNMon8 {
        opacity: 0;
    }
    .AJctir.SlYjm7 .Wo6AuW .fNMon8 {
        transition: transform 0.4s;
    }
    .AJctir.qc8uk6 .fNMon8 {
        transition: all 0.2s;
    }
    .AJctir.S5WCS4.ykM7jQ,
    .AJctir:focus-within.ykM7jQ,
    .AJctir:hover.ykM7jQ {
        outline: 1px solid #000;
    }
    .AJctir.S5WCS4.qc8uk6 .Wo6AuW:not(:only-of-type):first-of-type .fNMon8,
    .AJctir:focus-within.qc8uk6
    .Wo6AuW:not(:only-of-type):first-of-type
    .fNMon8,
    .AJctir:hover.qc8uk6 .Wo6AuW:not(:only-of-type):first-of-type .fNMon8 {
        opacity: 0;
    }
    .AJctir.S5WCS4.qc8uk6 .Wo6AuW:not(:only-of-type):nth-of-type(2) .fNMon8,
    .AJctir:focus-within.qc8uk6
    .Wo6AuW:not(:only-of-type):nth-of-type(2)
    .fNMon8,
    .AJctir:hover.qc8uk6 .Wo6AuW:not(:only-of-type):nth-of-type(2) .fNMon8 {
        opacity: 1;
    }
    .AJctir.S5WCS4.SlYjm7 .fNMon8,
    .AJctir:focus-within.SlYjm7 .fNMon8,
    .AJctir:hover.SlYjm7 .fNMon8 {
        transform: scale(1.1);
    }
    .AJctir .X9LBpm {
        justify-content: var(--gallery_alignment);
        width: 100%;
    }
    .AJctir .DYlx7s {
        bottom: 0;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: calc(var(--gallery_addToCartButtonOnImageBottomPadding) * 1%)
        calc(var(--gallery_addToCartButtonOnImageSidePadding) * 1%);
        position: absolute;
        width: 100%;
    }
    .AJctir .TNRewc {
        width: 100%;
    }
    .rfc02v {
        background-color: rgba(var(--wix-color-5));
        color: rgba(var(--wix-color-1));
    }
    .Qt9dcH,
    .rfc02v {
        align-items: center;
        display: inline-flex;
        height: 100%;
        justify-content: center;
        position: absolute;
        width: 100%;
    }
    .Qt9dcH {
        border-radius: calc(var(--gallery_imageCornerRadius) * 1px);
    }
    .vALCqq {
        height: 100%;
        position: absolute;
        width: 100%;
    }
    .we1j_p {
        background-color: rgba(var(--wix-color-2, 255, 255, 255, 1));
        color: rgba(var(--wix-color-4, 0, 0, 0, 1));
    }
    .QHl0ZB {
        display: block;
        height: 100%;
        width: 100%;
    }
    .QHl0ZB img {
        max-width: var(--wix-img-max-width, 100%);
    }
    .QHl0ZB[data-animate-blur] img {
        filter: blur(9px);
        transition: filter 0.8s ease-in;
    }
    .QHl0ZB[data-animate-blur] img[data-load-done] {
        filter: none;
    }
    .pLiK7U {
        height: 100%;
        position: relative;
        width: 100%;
    }
    .pLiK7U .C0cH_M {
        border-radius: calc(var(--gallery_imageCornerRadius) * 1px);
    }
    .mS0yET {
        align-items: center;
        background-position: 50%;
        background-repeat: no-repeat;
        display: flex;
        flex-direction: column;
        justify-content: center;
        overflow: hidden;
        position: relative;
    }
    .mS0yET .ASDFqi {
        background: hsla(0, 0%, 100%, 0.75);
        border-radius: 50%;
        color: #000;
        display: inline-block;
        height: 30px;
        inset-inline-end: 10px;
        pointer-events: none;
        position: absolute;
        top: 10px;
        width: 30px;
    }
    @media (min-width: 750px) {
        .mS0yET .ASDFqi {
            height: 40px;
            width: 40px;
        }
    }
    .gjEMkj,
    .mS0yET .ASDFqi svg {
        height: 100%;
        width: 100%;
    }
    .gjEMkj {
        position: absolute;
    }
    .gjEMkj .rXuzrx {
        flex: 1;
        flex-direction: row;
        height: 100%;
    }
    .gjEMkj .rXuzrx,
    .gjEMkj .rXuzrx .Ysedrh {
        display: flex;
        width: 100%;
    }
    .gjEMkj .rXuzrx .Ysedrh .Qu153V {
        display: flex;
        flex-grow: 1;
        height: 100%;
    }
    .gjEMkj .rXuzrx .Ysedrh .Qu153V .ZcLLWS {
        flex: 0 0 auto;
        height: 100%;
        position: relative;
        width: 100%;
    }
    .gjEMkj.l3UA1A .DIFPWv {
        opacity: 0;
        transition: visibility 0.3s linear, opacity 0.3s linear;
    }
    .gjEMkj.l3UA1A:hover .DIFPWv {
        opacity: 1;
    }
    .d2Z0ec {
        bottom: 5px;
        left: 50%;
        transform: translateX(-50%);
    }
    .SO6Hte,
    .d2Z0ec {
        position: absolute;
    }
    .SO6Hte {
        align-items: center;
        background: rgba(
                var(--gallery_imageCarouselArrowContainerColor, --wix-color-1)
        );
        border-color: rgba(
                var(--gallery_imageCarouselArrowContainerBorder, --wix-color-5)
        );
        border-radius: var(--gallery_imageCarouselCornersRadius, 50px);
        border-style: solid;
        border-width: 1px;
        color: rgba(var(--gallery_imageCarouselArrowColor, --wix-color-5));
        cursor: default;
        display: flex;
        height: var(--imageCarouselButtonSize);
        justify-content: center;
        top: 50%;
        transform: translateY(-50%);
        width: var(--imageCarouselButtonSize);
        z-index: 100;
    }
    .SO6Hte.qQmugS {
        left: var(--gallery_imageCarouselSidePadding, 8px);
        transform: translateY(-50%) scaleX(-1);
    }
    .SO6Hte.VM7Je0 {
        right: var(--gallery_imageCarouselSidePadding, 8px);
    }
    .SO6Hte .W8YhG2 {
        height: var(--imageCarouselChevronSize);
        width: var(--imageCarouselChevronSize);
    }
    .C1nqQN {
        cursor: inherit;
    }
    .SqOfBn {
        cursor: pointer;
        text-decoration: underline;
    }
    .C1nqQN,
    .SqOfBn {
        background: none;
        border: none;
        color: inherit;
        font: inherit;
        outline: inherit;
        padding: 0;
    }
    .m5YiNL {
        color: rgba(var(--gallery_priceBreakdownColor));
        font: var(--gallery_priceBreakdownFont);
        margin-top: 4px;
        -webkit-text-decoration: var(
                --gallery_priceBreakdownFont-text-decoration
        );
        text-decoration: var(--gallery_priceBreakdownFont-text-decoration);
    }
    .SKDkWT {
        clip: rect(1px 1px 1px 1px);
        clip: rect(1px, 1px, 1px, 1px);
        border: 0 !important;
        height: 1px !important;
        overflow: hidden;
        padding: 0 !important;
        position: absolute !important;
        width: 1px !important;
    }
    .kvywDN {
        background-color: rgba(211, 237, 255, 0.25);
        min-height: 20px;
        outline: 1px solid #116dff;
    }
    .TXD9gK {
        align-items: center;
        display: flex;
        justify-content: center;
        justify-content: var(--gallery_paginationDotsAlignment);
        margin-top: 20px;
        margin-top: calc(var(--gallery_paginationDotsMarginTop) * 1px);
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.2s;
    }
    .TXD9gK.RjEM7Q {
        padding: 0 var(--sliderSidePadding);
    }
    .TXD9gK.kh1bhV {
        opacity: 1;
    }
    .TXD9gK.rjWSDF {
        opacity: 0;
    }
    .PSTpAV {
        margin: 0 auto;
        margin-bottom: 24px;
        margin-top: 90px;
        max-width: 960px;
        text-align: center;
        white-space: pre-line;
    }
    .PSTpAV .JFlCG_ {
        font: var(--wix-font-Body-M);
        font-size: 24px;
    }
    .PSTpAV .JFlCG_,
    .PSTpAV .a2TBx3 {
        color: rgba(var(--wix-color-5));
        line-height: normal;
        -webkit-text-decoration: var(--wix-font-Body-M-text-decoration);
        text-decoration: var(--wix-font-Body-M-text-decoration);
    }
    .PSTpAV .a2TBx3 {
        font-size: 16px;
        font: var(--wix-font-Body-M);
        padding-top: 12px;
    }
    .PSTpAV.FWCc9x .JFlCG_ {
        color: rgba(var(--gallery_sortingFiltersTextColor));
        font-size: 24px !important;
        font-weight: 400;
        font: var(--gallery_sortingFiltersTextFont);
        padding: 18px 60px 0;
        -webkit-text-decoration: var(
                --gallery_sortingFiltersTextFont-text-decoration
        );
        text-decoration: var(--gallery_sortingFiltersTextFont-text-decoration);
    }
    .deviceMobile .PSTpAV.FWCc9x .JFlCG_ {
        font-size: 20px !important;
        padding: 32px 44px 44px;
    }
</style>
<style
        rel="stylesheet"
        data-href="https://static.parastorage.com/services/wixstores-client-product-widget/1.2020.0/productWidget.min.css"
>
    .s3AoZtO,
    .s3AoZtO * {
        box-sizing: border-box;
    }
    .s3AoZtO.o11i7Qx--forceBWTheme {
        --wut-bg-color: #fff;
        --wut-text-color: #000;
        --wut-disabled-color: #969696;
        --wut-placeholder-color: #646464;
        --wut-secondary-cta-color: #000;
        --wut-input-border-color: rgba(0, 0, 0, 0.6);
        --wut-input-hover-and-focus-border-color: #000;
        --wut-selection-text-bg-color: rgba(0, 0, 0, 0.2);
        --wut-meta-data-color: #646464;
        --wut-clear-button-bg-color: rgba(0, 0, 0, 0.12);
    }
    .s3AoZtO.o11i7Qx--isOpen {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        z-index: 1999;
    }
    .s1FWYPg {
        z-index: 2000;
        opacity: 0;
        -webkit-transition: opacity 0.3s, -webkit-transform 0.4s;
        transition: opacity 0.2s, transform 0.4s;
        transition-timing-function: ease;
    }
    .s3AoZtO.o11i7Qx--isOpen .s1FWYPg {
        opacity: 1;
    }
    .s1tys7e {
        width: 100%;
        height: 100%;
        background: #000;
        opacity: 0.6;
    }
    .s1jesf_,
    .s32e9uf {
        outline: 0;
    }
    .s3lHmnV {
        display: inline-flex;
        align-items: center;
        cursor: pointer;
    }
    .s1KUX9G,
    .s2qvRrd {
        flex-shrink: 0;
    }
    .s3lHmnV.okhokll--disabled {
        cursor: default;
    }
    .s3lHmnV[disabled] {
        pointer-events: none;
    }
    .s3zMy0d.ovInIEc---priority-7-primary {
        color: var(--wut-text-color, var(--Text3763176629-primary-color));
    }
    .s3zMy0d.ovInIEc---priority-9-secondary {
        color: var(
                --wut-placeholder-color,
                var(--Text3763176629-secondary-color)
        );
    }
    .s34QD85 {
        border: 0 !important;
        clip: rect(1px, 1px, 1px, 1px) !important;
        -webkit-clip-path: inset(50%) !important;
        clip-path: inset(50%) !important;
        height: 1px !important;
        margin: -1px !important;
        overflow: hidden !important;
        padding: 0 !important;
        position: absolute !important;
        width: 1px !important;
        white-space: nowrap !important;
    }
    .-M081 {
        height: 100%;
        box-sizing: border-box;
        border-style: solid;
    }
    ._1-Q7E {
        background: #e6f5ff;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-family: Open Sans, sans-serif;
        font-size: 24px;
        color: #234460;
    }
    ._1-Q7E,
    .s3vyM4t {
        padding: 0;
        margin: 0;
    }
    .s3vyM4t {
        text-decoration: none;
        border: 0;
        display: inline-block;
        line-height: 0;
    }
    .s3vyM4t.o3ZnY6r--focus,
    .s3vyM4t:hover {
        opacity: 0.7;
    }
    .s3vyM4t.o368P-v--disabled {
        cursor: default;
    }
    .s3vyM4t.o368P-v--disabled:hover {
        opacity: 1;
    }
    .s3FfuoS svg {
        display: block;
    }
    .s3vyM4t.o368P-v---skin-4-line .s3FfuoS svg:not([fill="currentColor"]) path,
    .s3vyM4t.o368P-v--disabled.s38mrmY
    .s3FfuoS
    svg:not([fill="currentColor"])
    path,
    .s38mrmY .s3FfuoS svg:not([fill="currentColor"]) path {
        fill: none;
    }
    .s3vyM4t.o368P-v---theme-4-none {
        background-color: transparent;
    }
    .s3vyM4t.o368P-v---theme-3-box {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 32px;
        height: 32px;
        border-radius: 50%;
    }
    .s3H0l6- {
        min-width: 100px;
        border-style: solid;
        box-sizing: content-box;
        transition: background-color 0.2s ease-in-out,
        border-color 0.2s ease-in-out, color 0.2s ease-in-out;
    }
    .s3H0l6- .s37jLad {
        margin: 0 auto;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }
    .s3H0l6-.oqw7-AE--fullWidth {
        width: 100%;
        box-sizing: border-box;
    }
    .s3H0l6-.oqw7-AE---size-4-tiny {
        padding: 6px 16px;
    }
    .s3H0l6-.oqw7-AE---size-4-tiny.s2m0LT- {
        padding: 5.5px 16px;
    }
    .s3H0l6-.oqw7-AE---size-5-small {
        padding: 7px 16px;
    }
    .s3H0l6-,
    .s3H0l6-.oqw7-AE---size-6-medium {
        padding: 8px 16px;
    }
    .s3H0l6-.oqw7-AE---size-5-large,
    .s3H0l6-.oqw7-AE--mobile,
    .s3H0l6-.oqw7-AE--mobile.oqw7-AE---size-6-medium {
        padding: 10px 16px;
    }
    .s3H0l6-.oqw7-AE--upgrade .s37jLad {
        overflow: visible;
        text-overflow: unset;
        white-space: unset;
    }
    .s3H0l6-.oqw7-AE--upgrade {
        box-sizing: border-box;
        line-height: 1;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
        display: inline-flex;
    }
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent {
        white-space: normal;
        line-height: 1.3 !important;
    }
    .s3H0l6-.oqw7-AE---size-4-tiny.oqw7-AE--upgrade:not(.oqw7-AE--mobile),
    .s3H0l6-.oqw7-AE---size-5-large.oqw7-AE--upgrade:not(.oqw7-AE--mobile),
    .s3H0l6-.oqw7-AE---size-5-small.oqw7-AE--upgrade:not(.oqw7-AE--mobile),
    .s3H0l6-.oqw7-AE---size-6-medium.oqw7-AE--upgrade:not(.oqw7-AE--mobile),
    .s3H0l6-.oqw7-AE--mobile.oqw7-AE--upgrade,
    .s3H0l6-.oqw7-AE--upgrade:not(.oqw7-AE--mobile) {
        line-height: 1;
    }
    .s3H0l6- .s3XkdGq svg:not([fill="currentColor"]) path {
        fill: none;
        transition: stroke 0.2s ease-in-out;
    }
    .s3XkdGq svg {
        height: 1.5em;
        width: 1.5em;
        margin: calc(-1 * (1.5em / 4)) 0;
    }
    .s2nkQkZ:before,
    .sSTigvk:after {
        content: "";
        width: 4px;
        height: 1px;
        display: inline-block;
    }
    .s3H0l6- .s3XkdGq svg[fill="currentColor"] {
        transition: color 0.2s ease-in-out;
    }
    .s2k7X5R {
        position: relative;
        cursor: pointer;
        display: block;
        border-style: solid;
        text-align: center;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        box-sizing: border-box;
    }
    .s2k7X5R .s37jLad {
        line-height: 1.5;
        display: block;
    }
    .s2k7X5R.o2siR8d--upgrade .s37jLad {
        line-height: 1;
        display: inline-block;
    }
    .s20oUU_ {
        height: 1.5em;
        top: 0.15em;
        animation: StatesButton3430269179__bounce-in 0.5s ease 0s 1 normal;
    }
    .s1iHBIw {
        width: 1.5em;
        height: 1.5em;
    }
    @keyframes StatesButton3430269179__bounce-in {
        0% {
            transform: translateY(30px);
            opacity: 0;
        }
        32% {
            transform: translateY(-5px);
            opacity: 1;
        }
        68% {
            transform: translateY(2px);
            opacity: 1;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
    .s2je5Mz {
        box-sizing: border-box;
        min-width: 280px;
        max-width: 980px;
        min-height: 240px;
        max-height: 620px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .sIbHmdD {
        position: absolute;
        top: 20px;
        right: 20px;
    }
    .s2JDE6S {
        padding: 80px 32px;
    }
    .s3WR7z9.o1u-apJ--mobile .s2je5Mz {
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transform: none;
    }
    .s13Uxj-.o1u-apJ--appendToBody :focus {
        box-shadow: 0 0 0 1px #fff, 0 0 0 3px #116dff !important;
        z-index: 999;
    }
    .s3WR7z9.o1u-apJ--mobile.o1u-apJ--notFullscreenMobile .s13Uxj- {
        display: flex;
        align-items: center;
        position: absolute;
        overflow: hidden;
        top: 20px;
        left: 20px;
        width: calc(100% - 2 * 20px);
        height: calc(100% - 2 * 20px);
    }
    .s3WR7z9.o1u-apJ--mobile.o1u-apJ--notFullscreenMobile .s2je5Mz {
        position: relative;
        height: auto;
        max-height: 440px;
        min-width: auto;
    }
    .s3WR7z9.o1u-apJ--rtl .sIbHmdD {
        right: auto;
        left: 20px;
    }
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi .s8aWKTI {
        text-decoration: none;
        border: 0;
        display: inline-block;
        padding: 0;
        margin: 0;
        line-height: 0;
    }
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi .s8aWKTI.o3ZnY6r--focus,
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi .s8aWKTI:hover {
        opacity: 0.7;
    }
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi .s8aWKTI.o368P-v--disabled {
        cursor: default;
    }
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi .s8aWKTI.o368P-v--disabled:hover {
        opacity: 1;
    }
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi .s8aWKTI .s3FfuoS svg {
        display: block;
    }
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi
    .s8aWKTI.o368P-v---skin-4-line
    .s3FfuoS
    svg:not([fill="currentColor"])
    path,
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi
    .s8aWKTI.o368P-v--disabled.s38mrmY
    .s3FfuoS
    svg:not([fill="currentColor"])
    path,
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi
    .s8aWKTI
    .s38mrmY
    .s3FfuoS
    svg:not([fill="currentColor"])
    path {
        fill: none;
    }
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi .s8aWKTI.o368P-v---theme-4-none {
        background-color: transparent;
    }
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi .s8aWKTI.o368P-v---theme-3-box {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 32px;
        height: 32px;
        border-radius: 50%;
    }
    .s3WR7z9.o1u-apJ--wired.sQubKFT .s8aWKTI {
        text-decoration: none;
        border: 0;
        display: inline-block;
        padding: 0;
        margin: 0;
        line-height: 0;
    }
    .s3WR7z9.o1u-apJ--wired.sQubKFT .s8aWKTI.o3ZnY6r--focus,
    .s3WR7z9.o1u-apJ--wired.sQubKFT .s8aWKTI:hover {
        opacity: 0.7;
    }
    .s3WR7z9.o1u-apJ--wired.sQubKFT .s8aWKTI.o368P-v--disabled {
        cursor: default;
    }
    .s3WR7z9.o1u-apJ--wired.sQubKFT .s8aWKTI.o368P-v--disabled:hover {
        opacity: 1;
    }
    .s3WR7z9.o1u-apJ--wired.sQubKFT .s8aWKTI .s3FfuoS svg {
        display: block;
    }
    .s3WR7z9.o1u-apJ--wired.sQubKFT
    .s8aWKTI.o368P-v---skin-4-line
    .s3FfuoS
    svg:not([fill="currentColor"])
    path,
    .s3WR7z9.o1u-apJ--wired.sQubKFT
    .s8aWKTI.o368P-v--disabled.s38mrmY
    .s3FfuoS
    svg:not([fill="currentColor"])
    path,
    .s3WR7z9.o1u-apJ--wired.sQubKFT
    .s8aWKTI
    .s38mrmY
    .s3FfuoS
    svg:not([fill="currentColor"])
    path {
        fill: none;
    }
    .s3WR7z9.o1u-apJ--wired.sQubKFT .s8aWKTI.o368P-v---theme-4-none {
        background-color: transparent;
    }
    .s3WR7z9.o1u-apJ--wired.sQubKFT .s8aWKTI.o368P-v---theme-3-box {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 32px;
        height: 32px;
        border-radius: 50%;
    }
    .FGmSV {
        display: flex;
        width: 100%;
        height: 100%;
        cursor: pointer;
    }
    @media only screen and (min-width: 769px) {
        .FGmSV:hover .Btrwx:before {
            opacity: 0.8;
        }
    }
    .FGmSV:hover .FiGxu {
        transform: scale(1.07);
    }
    .FGmSV:hover .MISxK {
        transition-delay: 0s;
        opacity: 0;
    }
    .FGmSV:hover .pYuLq {
        transition-delay: 0.25s;
        opacity: 1;
    }
    .xedmF:hover,
    .Xxql9 {
        border-style: solid;
    }
    .xedmF:hover {
        box-sizing: border-box;
    }
    .t\+aKN {
        flex: 1;
        position: relative;
        overflow: hidden;
    }
    .t\+aKN:before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        box-sizing: border-box;
        pointer-events: none;
        opacity: 0;
        transition: opacity calc(0.25s * 3) ease,
        background-color calc(0.25s * 3) ease;
    }
    .fAF3C {
        flex: unset;
    }
    .edsBl {
        height: 100%;
        width: 100%;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .BtapJ {
        align-items: flex-start;
    }
    .k4Kb4 {
        align-items: center;
    }
    .syFBU {
        align-items: flex-end;
    }
    .zFUN1 {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        border-style: solid;
        padding: 13px 0;
        cursor: pointer;
    }
    button.DZSco {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        transition: opacity 0.25s ease;
        opacity: 0;
    }
    .XcnNp {
        align-self: center;
    }
    ._2d1gz {
        border-width: 0;
        pointer-events: none;
        cursor: not-allowed;
    }
    .s2-r02J.ovInIEc---priority-7-primary {
        color: var(--wut-text-color, var(--Text3763176629-primary-color));
    }
    .s2-r02J.ovInIEc---priority-9-secondary {
        color: var(
                --wut-placeholder-color,
                var(--Text3763176629-secondary-color)
        );
    }
    .s2-r02J .s34QD85 {
        border: 0 !important;
        clip: rect(1px, 1px, 1px, 1px) !important;
        -webkit-clip-path: inset(50%) !important;
        clip-path: inset(50%) !important;
        height: 1px !important;
        margin: -1px !important;
        overflow: hidden !important;
        padding: 0 !important;
        position: absolute !important;
        width: 1px !important;
        white-space: nowrap !important;
    }
    .s1G5A6w {
        min-width: 100px;
        border-style: solid;
        box-sizing: content-box;
        transition: background-color 0.2s ease-in-out,
        border-color 0.2s ease-in-out, color 0.2s ease-in-out;
        box-sizing: border-box;
    }
    .s1G5A6w .s37jLad {
        margin: 0 auto;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }
    .s1G5A6w.oqw7-AE--fullWidth {
        width: 100%;
        box-sizing: border-box;
    }
    .s1G5A6w.oqw7-AE---size-4-tiny {
        padding: 6px 16px;
    }
    .s1G5A6w.oqw7-AE---size-4-tiny.s2m0LT- {
        padding: 5.5px 16px;
    }
    .s1G5A6w.oqw7-AE---size-5-small {
        padding: 7px 16px;
    }
    .s1G5A6w,
    .s1G5A6w.oqw7-AE---size-6-medium {
        padding: 8px 16px;
    }
    .s1G5A6w.oqw7-AE---size-5-large,
    .s1G5A6w.oqw7-AE--mobile,
    .s1G5A6w.oqw7-AE--mobile.oqw7-AE---size-6-medium {
        padding: 10px 16px;
    }
    .s1G5A6w.oqw7-AE--upgrade .s37jLad {
        overflow: visible;
        text-overflow: unset;
        white-space: unset;
    }
    .s1G5A6w.oqw7-AE--upgrade {
        box-sizing: border-box;
        line-height: 1;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
        display: inline-flex;
    }
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent {
        white-space: normal;
        line-height: 1.3 !important;
    }
    .s1G5A6w.oqw7-AE---size-4-tiny.oqw7-AE--upgrade:not(.oqw7-AE--mobile),
    .s1G5A6w.oqw7-AE---size-5-large.oqw7-AE--upgrade:not(.oqw7-AE--mobile),
    .s1G5A6w.oqw7-AE---size-5-small.oqw7-AE--upgrade:not(.oqw7-AE--mobile),
    .s1G5A6w.oqw7-AE---size-6-medium.oqw7-AE--upgrade:not(.oqw7-AE--mobile),
    .s1G5A6w.oqw7-AE--mobile.oqw7-AE--upgrade,
    .s1G5A6w.oqw7-AE--upgrade:not(.oqw7-AE--mobile) {
        line-height: 1;
    }
    .s1G5A6w .s3XkdGq svg:not([fill="currentColor"]) path {
        fill: none;
        transition: stroke 0.2s ease-in-out;
    }
    .s1G5A6w .s3XkdGq svg {
        height: 1.5em;
        width: 1.5em;
        margin: calc(-1 * (1.5em / 4)) 0;
    }
    .s1G5A6w .s2nkQkZ:before,
    .s1G5A6w .sSTigvk:after {
        content: "";
        width: 4px;
        height: 1px;
        display: inline-block;
    }
    .s1G5A6w .s3XkdGq svg[fill="currentColor"] {
        transition: color 0.2s ease-in-out;
    }
    .XZcR6 {
        display: block;
        margin-top: 0;
        line-height: 1.4 !important;
    }
    ._9292T {
        border: 0;
        margin-top: 0;
        margin-bottom: 0;
    }
    .cwk5i {
        margin-right: 16px;
    }
    ._3sDAb {
        text-decoration: line-through;
    }
    ._0o3Qi {
        margin-top: 4px;
    }
    .\+j2N0 {
        margin-top: 8px;
    }
    ._4mKMF {
        border: 0 !important;
        clip: rect(1px 1px 1px 1px);
        clip: rect(1px, 1px, 1px, 1px);
        height: 1px !important;
        overflow: hidden;
        padding: 0 !important;
        position: absolute !important;
        width: 1px !important;
    }
    .T94su {
        cursor: inherit;
    }
    .Scsxu {
        cursor: pointer;
        text-decoration: underline;
    }
    .Scsxu,
    .T94su {
        background: none;
        color: inherit;
        border: none;
        padding: 0;
        font: inherit;
        outline: inherit;
    }
    .Dp3Gm {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .qICCE {
        transition: opacity 0.25s ease 0.25s;
        opacity: 1;
    }
    .SCvC- {
        align-items: flex-start;
    }
    .QoISl {
        align-items: center;
    }
    .Z6lV7 {
        align-items: flex-end;
    }
    .azksB {
        position: relative;
        flex-shrink: 0;
    }
    .yMQQV {
        position: absolute;
    }
    .VjOf1 {
        flex: 1;
        display: flex;
        max-width: 100%;
        max-height: 100%;
    }
    .doqoa,
    .VBsKx {
        display: flex;
        flex-shrink: 0;
    }
    .FZKjt {
        opacity: 0.5;
    }
    .K0u5Z {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    ._4l76- {
        overflow: hidden;
    }
    .Efoo0 {
        transition: transform calc(0.25s * 3) ease;
    }
    .jMeVp {
        position: absolute;
        padding: 13px 22px;
        max-width: 85%;
        display: inline-block;
        overflow: hidden;
        text-decoration: none;
        text-overflow: ellipsis;
        white-space: nowrap;
        text-align: left;
        z-index: 1;
        font-size: 15px !important;
        line-height: 1;
    }
    .wNMvo {
        width: 100%;
        height: 100%;
    }
    .wudaI {
        max-height: 100%;
        max-width: 100%;
        width: auto;
    }
    .kk3oj {
        visibility: hidden;
    }
    .RJ319 {
        width: 100%;
        display: flex;
        justify-content: center;
    }
    .RJ319,
    figure {
        height: 100%;
        align-items: center;
    }
    figure {
        display: flex !important;
        min-width: 100%;
        min-height: 100%;
    }
    figure img {
        width: unset;
        max-height: 100% !important;
        max-width: 100% !important;
    }
    .cJlQ7 {
        background-repeat: no-repeat;
        background-position: 50%;
        background-size: contain;
    }
    .cJlQ7 figure img {
        -o-object-fit: contain;
        object-fit: contain;
    }
    ._6klwF {
        background-repeat: no-repeat;
        background-position: 50%;
        background-size: cover;
    }
    ._6klwF figure img {
        -o-object-fit: cover;
        object-fit: cover;
    }
    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        border: 0;
    }
</style>
<!-- Loadable Component comp-k00x9iml -->

<!-- Loadable Component comp-k00x9iml -->
<script
        id="comp-k00x9iml__LOADABLE_REQUIRED_CHUNKS__"
        type="application/json"
>
    []
</script>
<script
        id="comp-k00x9iml__LOADABLE_REQUIRED_CHUNKS___ext"
        type="application/json"
>
    { "namedChunks": [] }
</script>
<style id="css_masterPage">
    @font-face {
        font-family: "poppins-semibold";
        font-style: normal;
        font-weight: 700;
        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/poppins/v5/aDjpMND83pDErGXlVEr-Sfk_vArhqVIZ0nv9q090hN8.woff2")
        format("woff2");
        font-display: swap;
    }
    @font-face {
        font-family: "poppins-semibold";
        font-style: italic;
        font-weight: 700;
        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/poppins/v5/c4FPK8_hIFKoX59qcGwdChUOjZSKWg4xBWp_C_qQx0o.woff2")
        format("woff2");
        font-display: swap;
    }
    @font-face {
        font-family: "poppins-semibold";
        font-style: italic;
        font-weight: 400;
        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/poppins/v5/RbebACOccNN-5ixkDIVLjRUOjZSKWg4xBWp_C_qQx0o.woff2")
        format("woff2");
        font-display: swap;
    }
    @font-face {
        font-family: "poppins-semibold";
        font-style: normal;
        font-weight: 400;
        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/poppins/v5/9VWMTeb5jtXkNoTv949Npfk_vArhqVIZ0nv9q090hN8.woff2")
        format("woff2");
        font-display: swap;
    }
    @font-face {
        font-family: "poppins";
        font-style: italic;
        font-weight: 700;
        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/poppins/v21/pxiDyp8kv8JHgFVrJJLmy15VGdeOYktMqlap.woff2")
        format("woff2");
        unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
        U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
        U+A720-A7FF;
        font-display: swap;
    }
    @font-face {
        font-family: "poppins";
        font-style: italic;
        font-weight: 400;
        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/poppins/v21/pxiGyp8kv8JHgFVrJJLufntAOvWDSHFF.woff2")
        format("woff2");
        unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
        U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
        U+A720-A7FF;
        font-display: swap;
    }
    @font-face {
        font-family: "poppins";
        font-style: normal;
        font-weight: 400;
        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/poppins/v21/pxiEyp8kv8JHgFVrJJnecnFHGPezSQ.woff2")
        format("woff2");
        unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
        U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
        U+A720-A7FF;
        font-display: swap;
    }
    @font-face {
        font-family: "poppins";
        font-style: normal;
        font-weight: 700;
        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/poppins/v21/pxiByp8kv8JHgFVrLCz7Z1JlFd2JQEl8qw.woff2")
        format("woff2");
        unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
        U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
        U+A720-A7FF;
        font-display: swap;
    }
    @font-face {
        font-family: "poppins";
        font-style: italic;
        font-weight: 700;
        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/poppins/v21/pxiDyp8kv8JHgFVrJJLmy15VF9eOYktMqg.woff2")
        format("woff2");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
        U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
        U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        font-display: swap;
    }
    @font-face {
        font-family: "poppins";
        font-style: italic;
        font-weight: 400;
        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/poppins/v21/pxiGyp8kv8JHgFVrJJLucHtAOvWDSA.woff2")
        format("woff2");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
        U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
        U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        font-display: swap;
    }
    @font-face {
        font-family: "poppins";
        font-style: normal;
        font-weight: 400;
        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/poppins/v21/pxiEyp8kv8JHgFVrJJfecnFHGPc.woff2")
        format("woff2");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
        U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
        U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        font-display: swap;
    }
    @font-face {
        font-family: "poppins";
        font-style: normal;
        font-weight: 700;
        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/poppins/v21/pxiByp8kv8JHgFVrLCz7Z1xlFd2JQEk.woff2")
        format("woff2");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
        U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
        U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        font-display: swap;
    }
    @font-face {
        font-family: "din-next-w01-light";
        font-style: normal;
        font-weight: 400;
        src: url("//static.parastorage.com/fonts/v2/eca8b0cd-45d8-43cf-aee7-ca462bc5497c/v1/din-next-w10-light.woff2")
        format("woff2");
        unicode-range: U+0401-040C, U+040E-044F, U+0451-045C, U+045E-045F,
        U+0490-0491, U+2116;
        font-display: swap;
    }
    @font-face {
        font-family: "din-next-w01-light";
        font-style: normal;
        font-weight: 400;
        src: url("//static.parastorage.com/fonts/v2/eca8b0cd-45d8-43cf-aee7-ca462bc5497c/v1/din-next-w02-light.woff2")
        format("woff2");
        unicode-range: U+000D, U+0100-010F, U+0111-0130, U+0132-0151, U+0154-015F,
        U+0162-0177, U+0179-017C, U+01FA-01FF, U+0218-021B, U+0237, U+02C9,
        U+02D8-02D9, U+02DB, U+02DD, U+0394, U+03A9, U+03C0, U+1E80-1E85,
        U+1EF2-1EF3, U+2070, U+2074-2079, U+2080-2089, U+2113, U+2126, U+212E,
        U+2153-2154, U+215B-215E, U+2202, U+2206, U+220F, U+2211-2212, U+2215,
        U+2219-221A, U+221E, U+222B, U+2248, U+2260, U+2264-2265, U+25CA, U+F8FF,
        U+FB00-FB04;
        font-display: swap;
    }
    @font-face {
        font-family: "din-next-w01-light";
        font-style: normal;
        font-weight: 400;
        src: url("//static.parastorage.com/fonts/v2/eca8b0cd-45d8-43cf-aee7-ca462bc5497c/v1/din-next-w01-light.woff2")
        format("woff2");
        unicode-range: U+0020-007E, U+00A0-00FF, U+0110, U+0131, U+0152-0153,
        U+0160-0161, U+0178, U+017D-017E, U+0192, U+02C6-02C7, U+02DA, U+02DC,
        U+03BC, U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022, U+2026,
        U+2030, U+2039-203A, U+2044, U+20AC, U+2122;
        font-display: swap;
    }
    @font-face {
        font-family: "avenir-lt-w01_35-light1475496";
        font-style: normal;
        font-weight: 400;
        src: url("//static.parastorage.com/fonts/v2/af36905f-3c92-4ef9-b0c1-f91432f16ac1/v1/avenir-lt-w05_35-light.woff2")
        format("woff2");
        unicode-range: U+0100-012B, U+012E-0130, U+0132-0137, U+0139-0149,
        U+014C-0151, U+0154-015F, U+0162-0177, U+0179-017C, U+0218-021B, U+02C9,
        U+02D8-02D9, U+02DB, U+02DD, U+0394, U+03A9, U+03BC, U+03C0, U+1E9E,
        U+20B9-20BA, U+20BC-20BD, U+2113, U+2126, U+212E, U+2202, U+2206, U+220F,
        U+2211-2212, U+2215, U+2219-221A, U+221E, U+222B, U+2248, U+2260,
        U+2264-2265, U+25CA, U+F8FF, U+FB01-FB02;
        font-display: swap;
    }
    @font-face {
        font-family: "avenir-lt-w01_35-light1475496";
        font-style: normal;
        font-weight: 400;
        src: url("//static.parastorage.com/fonts/v2/af36905f-3c92-4ef9-b0c1-f91432f16ac1/v1/avenir-lt-w01_35-light1475496.woff2")
        format("woff2");
        unicode-range: U+0000, U+000D, U+0020-007E, U+00A0-00FF, U+0131,
        U+0152-0153, U+0160-0161, U+0178, U+017D-017E, U+0192, U+0237,
        U+02C6-02C7, U+02DA, U+02DC, U+2013-2014, U+2018-201A, U+201C-201E,
        U+2020-2022, U+2026, U+2030, U+2039-203A, U+2044, U+20AC, U+2122;
        font-display: swap;
    }
    @font-face {
        font-family: "didot-w01-italic";
        font-style: normal;
        font-weight: 400;
        src: url("//static.parastorage.com/fonts/v2/6a8685bf-8255-4762-98b8-54a1192acc7c/v1/didot-w05-italic.woff2")
        format("woff2");
        unicode-range: U+0000, U+0100-0130, U+0132-0151, U+0154-015F, U+0162-0177,
        U+0179-017C, U+01FA-01FF, U+0218-021B, U+0237, U+02C9, U+02D8-02D9,
        U+02DB, U+02DD, U+0394, U+03A9, U+03BC, U+03C0, U+1E80-1E85, U+1EF2-1EF3,
        U+2044, U+2113, U+2126, U+212E, U+2153-2154, U+215B-215E, U+2202, U+2206,
        U+220F, U+2211-2212, U+2215, U+2219-221A, U+221E, U+222B, U+2248, U+2260,
        U+2264-2265, U+25CA, U+F8FF, U+FB00-FB04;
        font-display: swap;
    }
    @font-face {
        font-family: "didot-w01-italic";
        font-style: normal;
        font-weight: 400;
        src: url("//static.parastorage.com/fonts/v2/6a8685bf-8255-4762-98b8-54a1192acc7c/v1/didot-w01-italic.woff2")
        format("woff2");
        unicode-range: U+000D, U+0020-007E, U+00A0-00FF, U+0131, U+0152-0153,
        U+0160-0161, U+0178, U+017D-017E, U+0192, U+02C6-02C7, U+02DA, U+02DC,
        U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030,
        U+2039-203A, U+20AC, U+2122, U+E000, U+E002, U+E004, U+E006, U+E009,
        U+E00B, U+E011;
        font-display: swap;
    }
    @font-face {
        font-family: "proxima-n-w01-reg";
        font-style: normal;
        font-weight: 400;
        src: url("//static.parastorage.com/fonts/v2/c24fcada-6239-48bc-8b88-9288338191c9/v1/proxima-n-w05-reg.woff2")
        format("woff2");
        unicode-range: U+0000, U+0100-010F, U+0111-0130, U+0132-0151, U+0154-015F,
        U+0162-0177, U+0179-017C, U+017F, U+018F, U+019D, U+01A0-01A1,
        U+01AF-01B0, U+01E6-01E7, U+01EA-01EB, U+01FA-01FF, U+0218-021B,
        U+0232-0233, U+0237, U+0259, U+0272, U+02B0, U+02BB-02BC, U+02C9, U+02CB,
        U+02D8-02D9, U+02DB, U+02DD, U+0374-0375, U+037E, U+0384-038A, U+038C,
        U+038E-03A1, U+03A3-03CE, U+03D7, U+0400-045F, U+0472-0475, U+048A-04FF,
        U+0510-0513, U+051C-051D, U+0524-0527, U+052E-052F, U+1E02-1E03,
        U+1E0A-1E0B, U+1E1E-1E1F, U+1E22-1E23, U+1E56-1E57, U+1E60-1E61,
        U+1E6A-1E6B, U+1E80-1E85, U+1E9E, U+1EA0-1EF9, U+2000-200A, U+2015,
        U+201B, U+2032-2033, U+203D-203E, U+2070, U+2074-2079, U+207D-2089,
        U+208D-208E, U+20A1, U+20A3-20A4, U+20A6-20AB, U+20B4, U+20B8-20BA,
        U+20BC-20BD, U+2113, U+2116-2117, U+2120, U+2126, U+212E, U+2153-2154,
        U+215B-215E, U+2190-2193, U+2202, U+2206, U+220F, U+2211-2212, U+2215,
        U+2219-221A, U+221E, U+222B, U+2248, U+2260, U+2264-2265, U+22B2-22B3,
        U+22C5, U+2318, U+25A0, U+25B2, U+25BC, U+25CA, U+25CF, U+2605,
        U+2610-2611, U+2666, U+2713, U+2E18, U+E004-E005, U+F43A-F43B,
        U+F460-F473, U+F498-F49F, U+F4C6-F4C7, U+F4CC-F4CD, U+F4D2-F4D7,
        U+F50A-F50B, U+F50E-F533, U+F536-F539, U+F53C-F53F, U+F637, U+F6C3,
        U+F6DD, U+F6DF-F6F3, U+F8FF, U+FB00-FB04;
        font-display: swap;
    }
    @font-face {
        font-family: "proxima-n-w01-reg";
        font-style: normal;
        font-weight: 400;
        src: url("//static.parastorage.com/fonts/v2/c24fcada-6239-48bc-8b88-9288338191c9/v1/proxima-n-w01-reg.woff2")
        format("woff2");
        unicode-range: U+000D, U+0020-007E, U+00A0-00FF, U+0110, U+0131,
        U+0152-0153, U+0160-0161, U+0178, U+017D-017E, U+0192, U+02C6-02C7,
        U+02DA, U+02DC, U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022,
        U+2026, U+2030, U+2039-203A, U+2044, U+20AC, U+2122, U+F656-F659;
        font-display: swap;
    }
    @font-face {
        font-family: "helvetica-w01-roman";
        font-style: normal;
        font-weight: 400;
        src: url("//static.parastorage.com/fonts/v2/2af1bf48-e783-4da8-9fa0-599dde29f2d5/v1/helvetica-lt-w10-roman.woff2")
        format("woff2");
        unicode-range: U+0000, U+000D, U+0020-007E, U+00A0, U+00A4, U+00A6-00A7,
        U+00A9, U+00AB-00AE, U+00B0-00B1, U+00B5-00B7, U+00BB, U+0401-040C,
        U+040E-044F, U+0451-045C, U+045E-045F, U+0490-0491, U+2013-2014,
        U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030, U+2039-203A,
        U+20AC, U+2116, U+2122;
        font-display: swap;
    }
    @font-face {
        font-family: "helvetica-w01-roman";
        font-style: normal;
        font-weight: 400;
        src: url("//static.parastorage.com/fonts/v2/2af1bf48-e783-4da8-9fa0-599dde29f2d5/v1/helvetica-w02-roman.woff2")
        format("woff2");
        unicode-range: U+000D, U+0020-007E, U+00A0-012B, U+012E-0137, U+0139-0149,
        U+014C-017E, U+0192, U+0218-021B, U+0237, U+02C6-02C7, U+02C9,
        U+02D8-02DD, U+0394, U+03A9, U+03BC, U+03C0, U+2013-2014, U+2018-201A,
        U+201C-201E, U+2020-2022, U+2026, U+2030, U+2039-203A, U+2044, U+20AC,
        U+2113, U+2122, U+2126, U+212E, U+2202, U+2206, U+220F, U+2211-2212,
        U+2215, U+2219-221A, U+221E, U+222B, U+2248, U+2260, U+2264-2265, U+25CA,
        U+E301-E304, U+E306-E30D, U+FB01-FB02;
        font-display: swap;
    }
    @font-face {
        font-family: "helvetica-w01-roman";
        font-style: normal;
        font-weight: 400;
        src: url("//static.parastorage.com/fonts/v2/2af1bf48-e783-4da8-9fa0-599dde29f2d5/v1/helvetica-w01-roman.woff2")
        format("woff2");
        unicode-range: U+0000, U+000D, U+0020-007E, U+00A0-012B, U+012E-0137,
        U+0139-0149, U+014C-017E, U+0192, U+0218-021B, U+0237, U+02C6-02C7,
        U+02C9, U+02D8-02DD, U+0394, U+03A9, U+03BC, U+03C0, U+0401-040C,
        U+040E-044F, U+0451-045C, U+045E-045F, U+0462-0463, U+0472-0475,
        U+0490-0491, U+04D9, U+1E9E, U+2013-2014, U+2018-201A, U+201C-201E,
        U+2020-2022, U+2026, U+2030, U+2039-203A, U+2044, U+20AC, U+20B9-20BA,
        U+20BC-20BD, U+2113, U+2116, U+2122, U+2126, U+212E, U+2202, U+2206,
        U+220F, U+2211-2212, U+2215, U+2219-221A, U+221E, U+222B, U+2248, U+2260,
        U+2264-2265, U+25CA, U+E300-E30D, U+F6C5, U+F6C9-F6D8, U+F8FF,
        U+FB01-FB02;
        font-display: swap;
    }
    #masterPage:not(.landingPage) #PAGES_CONTAINER {
        margin-top: 0px;
        margin-bottom: 0px;
    }
    #masterPage.landingPage #SITE_HEADER {
        display: none;
    }
    #masterPage.landingPage #CONTROLLER_COMP_CUSTOM_ID {
        display: none;
    }
    #masterPage.landingPage #SITE_FOOTER {
        display: none;
    }
    #masterPage.landingPage #SITE_HEADER-placeholder {
        display: none;
    }
    #masterPage.landingPage #SITE_FOOTER-placeholder {
        display: none;
    }
    #SITE_CONTAINER.focus-ring-active
    :not(.has-custom-focus):not(.ignore-focus):not([tabindex="-1"]):focus,
    #SITE_CONTAINER.focus-ring-active
    :not(.has-custom-focus):not(.ignore-focus):not([tabindex="-1"]):focus
    ~ .wixSdkShowFocusOnSibling {
        --focus-ring-box-shadow: 0 0 0 2px #116dff;
        box-shadow: var(--focus-ring-box-shadow) !important;
        z-index: 1;
    }
    .has-inner-focus-ring {
        --focus-ring-box-shadow: 0 0 0 2px #116dff !important;
    }
    #masterPage {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 0;
    }
    #SITE_HEADER {
        z-index: 50;
        --above-all-in-container: 10000;
    }
    #PAGES_CONTAINER {
        --pinned-layer-in-container: 51;
        --above-all-in-container: 49;
    }
    #CONTROLLER_COMP_CUSTOM_ID {
        --pinned-layer-in-container: 52;
        --above-all-in-container: 49;
    }
    #SITE_FOOTER {
        --pinned-layer-in-container: 53;
        --above-all-in-container: 49;
    }
    #comp-k0pd37s6-pinned-layer {
        z-index: calc(var(--pinned-layers-in-page, 0) + 54);
        --above-all-in-container: 10000;
    }
    [id="soapAfterPagesContainer"].page-without-sosp
    [data-mesh-id="soapAfterPagesContainerinlineContent"] {
        height: auto;
        width: 100%;
        position: static;
        min-height: auto;
        padding-bottom: 0px;
        box-sizing: border-box;
    }
    [id="soapAfterPagesContainer"].page-without-sosp
    [data-mesh-id="soapAfterPagesContainerinlineContent-gridContainer"]
    > [id="CONTROLLER_COMP_CUSTOM_ID"],
    [id="soapAfterPagesContainer"].page-without-sosp
    [data-mesh-id="soapAfterPagesContainerinlineContent-gridContainer"]
    > wix-interact-element
    > [id="CONTROLLER_COMP_CUSTOM_ID"] {
        position: absolute;
        top: 15px;
        left: 20px;
        margin-left: calc((100% - 980px) * 0.5);
    }
    [id="soapAfterPagesContainer"].page-with-sosp
    [data-mesh-id="soapAfterPagesContainerinlineContent"] {
        height: auto;
        width: 100%;
        position: static;
        min-height: auto;
        padding-bottom: 0px;
        box-sizing: border-box;
    }
    [id="soapAfterPagesContainer"].page-with-sosp
    [data-mesh-id="soapAfterPagesContainerinlineContent-gridContainer"]
    > [id="CONTROLLER_COMP_CUSTOM_ID"],
    [id="soapAfterPagesContainer"].page-with-sosp
    [data-mesh-id="soapAfterPagesContainerinlineContent-gridContainer"]
    > wix-interact-element
    > [id="CONTROLLER_COMP_CUSTOM_ID"] {
        position: absolute;
        top: 15px;
        left: 20px;
        margin-left: calc((100% - 980px) * 0.5);
    }
    #comp-k0pd37s6 {
        justify-self: end;
        align-self: end;
        position: absolute;
        grid-area: 1 / 1 / 2 / 2;
        pointer-events: auto;
    }
    :root,
    :host,
    .spxThemeOverride,
    .max-width-container {
        --color_0: 255, 255, 255;
        --color_1: 255, 255, 255;
        --color_2: 0, 0, 0;
        --color_3: 237, 28, 36;
        --color_4: 0, 136, 203;
        --color_5: 255, 203, 5;
        --color_6: 114, 114, 114;
        --color_7: 176, 176, 176;
        --color_8: 255, 255, 255;
        --color_9: 114, 114, 114;
        --color_10: 176, 176, 176;
        --color_11: 255, 255, 255;
        --color_12: 250, 250, 250;
        --color_13: 246, 243, 239;
        --color_14: 113, 113, 111;
        --color_15: 17, 17, 17;
        --color_16: 233, 186, 172;
        --color_17: 210, 148, 129;
        --color_18: 188, 76, 42;
        --color_19: 125, 51, 28;
        --color_20: 63, 25, 14;
        --color_21: 210, 209, 200;
        --color_22: 166, 164, 153;
        --color_23: 121, 119, 103;
        --color_24: 81, 79, 69;
        --color_25: 40, 40, 34;
        --color_26: 223, 203, 202;
        --color_27: 191, 157, 155;
        --color_28: 143, 118, 116;
        --color_29: 96, 79, 78;
        --color_30: 48, 39, 39;
        --color_31: 255, 216, 184;
        --color_32: 254, 177, 114;
        --color_33: 191, 133, 86;
        --color_34: 127, 89, 57;
        --color_35: 64, 44, 28;
        --color_36: 255, 255, 255;
        --color_37: 17, 17, 17;
        --color_38: 250, 250, 250;
        --color_39: 246, 243, 239;
        --color_40: 113, 113, 111;
        --color_41: 188, 76, 42;
        --color_42: 17, 17, 17;
        --color_43: 246, 243, 239;
        --color_44: 255, 255, 255;
        --color_45: 17, 17, 17;
        --color_46: 17, 17, 17;
        --color_47: 113, 113, 111;
        --color_48: 188, 76, 42;
        --color_49: 188, 76, 42;
        --color_50: 255, 255, 255;
        --color_51: 255, 255, 255;
        --color_52: 188, 76, 42;
        --color_53: 188, 76, 42;
        --color_54: 246, 243, 239;
        --color_55: 246, 243, 239;
        --color_56: 255, 255, 255;
        --color_57: 255, 255, 255;
        --color_58: 188, 76, 42;
        --color_59: 188, 76, 42;
        --color_60: 188, 76, 42;
        --color_61: 188, 76, 42;
        --color_62: 255, 255, 255;
        --color_63: 255, 255, 255;
        --color_64: 246, 243, 239;
        --color_65: 246, 243, 239;
        --font_0: normal normal normal 42px/1.4em poppins-semibold, poppins,
        sans-serif;
        --font_1: normal normal normal 16px/1.4em din-next-w01-light, sans-serif;
        --font_2: normal normal normal 30px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        --font_3: normal normal normal 28px/1.4em didot-w01-italic, serif;
        --font_4: normal normal normal 25px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        --font_5: normal normal normal 24px/1.4em poppins-semibold, poppins,
        sans-serif;
        --font_6: normal normal normal 20px/1.4em didot-w01-italic, serif;
        --font_7: normal normal normal 20px/1.4em didot-w01-italic, serif;
        --font_8: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        --font_9: normal normal normal 14px/1.4em proxima-n-w01-reg, sans-serif;
        --font_10: normal normal normal 12px/1.4em din-next-w01-light, sans-serif;
        --wix-ads-height: 0px;
        --sticky-offset: 0px;
        --wix-ads-top-height: 0px;
        --site-width: 980px;
        --above-all-z-index: 100000;
        --portals-z-index: 100001;
        --wix-opt-in-direction: ltr;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        --minViewportSize: 320;
        --maxViewportSize: 1920;
        --theme-spx-ratio: 1px;
        --full-viewport: 100 * var(--one-unit) * var(--browser-zoom);
        --scaling-factor: min(var(--full-viewport), var(--section-max-width));
        --customScaleViewportLimit: clamp(
                var(--minViewportSize) * 1px,
                var(--full-viewport),
                min(var(--section-max-width), var(--maxViewportSize) * 1px)
        );
    }
    .font_0 {
        font: var(--font_0);
        color: rgb(var(--color_15));
        letter-spacing: 0em;
    }
    .font_1 {
        font: var(--font_1);
        color: rgb(var(--color_14));
        letter-spacing: 0em;
    }
    .font_2 {
        font: var(--font_2);
        color: rgb(var(--color_15));
        letter-spacing: 0em;
    }
    .font_3 {
        font: var(--font_3);
        color: rgb(var(--color_18));
        letter-spacing: 0em;
    }
    .font_4 {
        font: var(--font_4);
        color: rgb(var(--color_15));
        letter-spacing: 0em;
    }
    .font_5 {
        font: var(--font_5);
        color: rgb(var(--color_15));
        letter-spacing: 0em;
    }
    .font_6 {
        font: var(--font_6);
        color: rgb(var(--color_18));
        letter-spacing: 0em;
    }
    .font_7 {
        font: var(--font_7);
        color: rgb(var(--color_15));
        letter-spacing: 0em;
    }
    .font_8 {
        font: var(--font_8);
        color: rgb(var(--color_15));
        letter-spacing: 0em;
    }
    .font_9 {
        font: var(--font_9);
        color: rgb(var(--color_15));
        letter-spacing: 0em;
    }
    .font_10 {
        font: var(--font_10);
        color: rgb(var(--color_14));
        letter-spacing: 0em;
    }
    .color_0 {
        color: rgb(var(--color_0));
    }
    .color_1 {
        color: rgb(var(--color_1));
    }
    .color_2 {
        color: rgb(var(--color_2));
    }
    .color_3 {
        color: rgb(var(--color_3));
    }
    .color_4 {
        color: rgb(var(--color_4));
    }
    .color_5 {
        color: rgb(var(--color_5));
    }
    .color_6 {
        color: rgb(var(--color_6));
    }
    .color_7 {
        color: rgb(var(--color_7));
    }
    .color_8 {
        color: rgb(var(--color_8));
    }
    .color_9 {
        color: rgb(var(--color_9));
    }
    .color_10 {
        color: rgb(var(--color_10));
    }
    .color_11 {
        color: rgb(var(--color_11));
    }
    .color_12 {
        color: rgb(var(--color_12));
    }
    .color_13 {
        color: rgb(var(--color_13));
    }
    .color_14 {
        color: rgb(var(--color_14));
    }
    .color_15 {
        color: rgb(var(--color_15));
    }
    .color_16 {
        color: rgb(var(--color_16));
    }
    .color_17 {
        color: rgb(var(--color_17));
    }
    .color_18 {
        color: rgb(var(--color_18));
    }
    .color_19 {
        color: rgb(var(--color_19));
    }
    .color_20 {
        color: rgb(var(--color_20));
    }
    .color_21 {
        color: rgb(var(--color_21));
    }
    .color_22 {
        color: rgb(var(--color_22));
    }
    .color_23 {
        color: rgb(var(--color_23));
    }
    .color_24 {
        color: rgb(var(--color_24));
    }
    .color_25 {
        color: rgb(var(--color_25));
    }
    .color_26 {
        color: rgb(var(--color_26));
    }
    .color_27 {
        color: rgb(var(--color_27));
    }
    .color_28 {
        color: rgb(var(--color_28));
    }
    .color_29 {
        color: rgb(var(--color_29));
    }
    .color_30 {
        color: rgb(var(--color_30));
    }
    .color_31 {
        color: rgb(var(--color_31));
    }
    .color_32 {
        color: rgb(var(--color_32));
    }
    .color_33 {
        color: rgb(var(--color_33));
    }
    .color_34 {
        color: rgb(var(--color_34));
    }
    .color_35 {
        color: rgb(var(--color_35));
    }
    .color_36 {
        color: rgb(var(--color_36));
    }
    .color_37 {
        color: rgb(var(--color_37));
    }
    .color_38 {
        color: rgb(var(--color_38));
    }
    .color_39 {
        color: rgb(var(--color_39));
    }
    .color_40 {
        color: rgb(var(--color_40));
    }
    .color_41 {
        color: rgb(var(--color_41));
    }
    .color_42 {
        color: rgb(var(--color_42));
    }
    .color_43 {
        color: rgb(var(--color_43));
    }
    .color_44 {
        color: rgb(var(--color_44));
    }
    .color_45 {
        color: rgb(var(--color_45));
    }
    .color_46 {
        color: rgb(var(--color_46));
    }
    .color_47 {
        color: rgb(var(--color_47));
    }
    .color_48 {
        color: rgb(var(--color_48));
    }
    .color_49 {
        color: rgb(var(--color_49));
    }
    .color_50 {
        color: rgb(var(--color_50));
    }
    .color_51 {
        color: rgb(var(--color_51));
    }
    .color_52 {
        color: rgb(var(--color_52));
    }
    .color_53 {
        color: rgb(var(--color_53));
    }
    .color_54 {
        color: rgb(var(--color_54));
    }
    .color_55 {
        color: rgb(var(--color_55));
    }
    .color_56 {
        color: rgb(var(--color_56));
    }
    .color_57 {
        color: rgb(var(--color_57));
    }
    .color_58 {
        color: rgb(var(--color_58));
    }
    .color_59 {
        color: rgb(var(--color_59));
    }
    .color_60 {
        color: rgb(var(--color_60));
    }
    .color_61 {
        color: rgb(var(--color_61));
    }
    .color_62 {
        color: rgb(var(--color_62));
    }
    .color_63 {
        color: rgb(var(--color_63));
    }
    .color_64 {
        color: rgb(var(--color_64));
    }
    .color_65 {
        color: rgb(var(--color_65));
    }
    .backcolor_0 {
        background-color: rgb(var(--color_0));
    }
    .backcolor_1 {
        background-color: rgb(var(--color_1));
    }
    .backcolor_2 {
        background-color: rgb(var(--color_2));
    }
    .backcolor_3 {
        background-color: rgb(var(--color_3));
    }
    .backcolor_4 {
        background-color: rgb(var(--color_4));
    }
    .backcolor_5 {
        background-color: rgb(var(--color_5));
    }
    .backcolor_6 {
        background-color: rgb(var(--color_6));
    }
    .backcolor_7 {
        background-color: rgb(var(--color_7));
    }
    .backcolor_8 {
        background-color: rgb(var(--color_8));
    }
    .backcolor_9 {
        background-color: rgb(var(--color_9));
    }
    .backcolor_10 {
        background-color: rgb(var(--color_10));
    }
    .backcolor_11 {
        background-color: rgb(var(--color_11));
    }
    .backcolor_12 {
        background-color: rgb(var(--color_12));
    }
    .backcolor_13 {
        background-color: rgb(var(--color_13));
    }
    .backcolor_14 {
        background-color: rgb(var(--color_14));
    }
    .backcolor_15 {
        background-color: rgb(var(--color_15));
    }
    .backcolor_16 {
        background-color: rgb(var(--color_16));
    }
    .backcolor_17 {
        background-color: rgb(var(--color_17));
    }
    .backcolor_18 {
        background-color: rgb(var(--color_18));
    }
    .backcolor_19 {
        background-color: rgb(var(--color_19));
    }
    .backcolor_20 {
        background-color: rgb(var(--color_20));
    }
    .backcolor_21 {
        background-color: rgb(var(--color_21));
    }
    .backcolor_22 {
        background-color: rgb(var(--color_22));
    }
    .backcolor_23 {
        background-color: rgb(var(--color_23));
    }
    .backcolor_24 {
        background-color: rgb(var(--color_24));
    }
    .backcolor_25 {
        background-color: rgb(var(--color_25));
    }
    .backcolor_26 {
        background-color: rgb(var(--color_26));
    }
    .backcolor_27 {
        background-color: rgb(var(--color_27));
    }
    .backcolor_28 {
        background-color: rgb(var(--color_28));
    }
    .backcolor_29 {
        background-color: rgb(var(--color_29));
    }
    .backcolor_30 {
        background-color: rgb(var(--color_30));
    }
    .backcolor_31 {
        background-color: rgb(var(--color_31));
    }
    .backcolor_32 {
        background-color: rgb(var(--color_32));
    }
    .backcolor_33 {
        background-color: rgb(var(--color_33));
    }
    .backcolor_34 {
        background-color: rgb(var(--color_34));
    }
    .backcolor_35 {
        background-color: rgb(var(--color_35));
    }
    .backcolor_36 {
        background-color: rgb(var(--color_36));
    }
    .backcolor_37 {
        background-color: rgb(var(--color_37));
    }
    .backcolor_38 {
        background-color: rgb(var(--color_38));
    }
    .backcolor_39 {
        background-color: rgb(var(--color_39));
    }
    .backcolor_40 {
        background-color: rgb(var(--color_40));
    }
    .backcolor_41 {
        background-color: rgb(var(--color_41));
    }
    .backcolor_42 {
        background-color: rgb(var(--color_42));
    }
    .backcolor_43 {
        background-color: rgb(var(--color_43));
    }
    .backcolor_44 {
        background-color: rgb(var(--color_44));
    }
    .backcolor_45 {
        background-color: rgb(var(--color_45));
    }
    .backcolor_46 {
        background-color: rgb(var(--color_46));
    }
    .backcolor_47 {
        background-color: rgb(var(--color_47));
    }
    .backcolor_48 {
        background-color: rgb(var(--color_48));
    }
    .backcolor_49 {
        background-color: rgb(var(--color_49));
    }
    .backcolor_50 {
        background-color: rgb(var(--color_50));
    }
    .backcolor_51 {
        background-color: rgb(var(--color_51));
    }
    .backcolor_52 {
        background-color: rgb(var(--color_52));
    }
    .backcolor_53 {
        background-color: rgb(var(--color_53));
    }
    .backcolor_54 {
        background-color: rgb(var(--color_54));
    }
    .backcolor_55 {
        background-color: rgb(var(--color_55));
    }
    .backcolor_56 {
        background-color: rgb(var(--color_56));
    }
    .backcolor_57 {
        background-color: rgb(var(--color_57));
    }
    .backcolor_58 {
        background-color: rgb(var(--color_58));
    }
    .backcolor_59 {
        background-color: rgb(var(--color_59));
    }
    .backcolor_60 {
        background-color: rgb(var(--color_60));
    }
    .backcolor_61 {
        background-color: rgb(var(--color_61));
    }
    .backcolor_62 {
        background-color: rgb(var(--color_62));
    }
    .backcolor_63 {
        background-color: rgb(var(--color_63));
    }
    .backcolor_64 {
        background-color: rgb(var(--color_64));
    }
    .backcolor_65 {
        background-color: rgb(var(--color_65));
    }
    #masterPage:not(.landingPage) {
        --top-offset: var(--header-height);
        --header-height: 170px;
    }
    #masterPage.landingPage {
        --top-offset: 0px;
    }
    #SITE_HEADER {
        --bg: var(--color_11);
        --shd: none;
        --brwt: 0px;
        --brd: var(--color_15);
        --brwb: 0px;
        --bgctr: var(--color_11);
        --rd: 0px;
        --alpha-bg: 1;
        --alpha-bgctr: 1;
        --alpha-brd: 1;
        --boxShadowToggleOn-shd: none;
        --backdrop-filter: none;
    }
    #SITE_HEADER {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 0;
    }
    [data-mesh-id="SITE_HEADERinlineContent"] {
        height: auto;
        width: 100%;
    }
    [data-mesh-id="SITE_HEADERinlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        grid-template-rows: min-content 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="SITE_HEADERinlineContent-gridContainer"]
    > [id="comp-ko2io8ag"],
    [data-mesh-id="SITE_HEADERinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-ko2io8ag"] {
        position: relative;
        margin: 0px 0px 14px calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="SITE_HEADERinlineContent-gridContainer"]
    > [id="comp-k00vh2l4"],
    [data-mesh-id="SITE_HEADERinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k00vh2l4"] {
        position: relative;
        margin: 0px 0px 17px calc((100% - 980px) * 0.5);
        left: 136px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
    }
    #SITE_HEADER {
        --bg-overlay-color: rgb(var(--color_36));
        --bg-gradient: none;
        --shc-mutated-brightness: 128, 128, 128;
        position: sticky !important;
        top: var(--wix-ads-height);
    }
    #comp-ko2io8ag {
        margin-left: auto;
        margin-right: auto;
        width: calc(100% - 50px - 50px);
        min-width: 980px;
    }
    [data-mesh-id="comp-ko2io8cvinlineContent"] {
        height: auto;
        width: 100%;
    }
    [data-mesh-id="comp-ko2io8cvinlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        grid-template-rows: 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-ko2io8cvinlineContent-gridContainer"]
    > [id="comp-mb7k7p9g"],
    [data-mesh-id="comp-ko2io8cvinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-mb7k7p9g"] {
        position: relative;
        margin: 23px 0px 25px calc((100% - 326px) * 0);
        left: 2px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-ko2iomsoinlineContent"] {
        height: auto;
        width: 100%;
    }
    [data-mesh-id="comp-ko2iomsoinlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        grid-template-rows: 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-ko2iomsoinlineContent-gridContainer"]
    > [id="comp-k00v24a7"],
    [data-mesh-id="comp-ko2iomsoinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k00v24a7"] {
        position: relative;
        margin: 15px 0px 18px calc((100% - 327px) * 0.5);
        left: 74px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-ko2ioo0ninlineContent"] {
        height: auto;
        width: 100%;
    }
    [data-mesh-id="comp-ko2ioo0ninlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        grid-template-rows: 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-ko2ioo0ninlineContent-gridContainer"]
    > [id="comp-k06rimoq"],
    [data-mesh-id="comp-ko2ioo0ninlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k06rimoq"] {
        position: relative;
        margin: 32px 0px 34px calc((100% - 327px) * 1);
        left: 13px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-ko2ioo0ninlineContent-gridContainer"]
    > [id="comp-kdzrmi1y"],
    [data-mesh-id="comp-ko2ioo0ninlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-kdzrmi1y"] {
        position: relative;
        margin: 23px 0px 26px calc((100% - 327px) * 1);
        left: 128px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-ko2ioo0ninlineContent-gridContainer"]
    > [id="comp-k00v4l5e"],
    [data-mesh-id="comp-ko2ioo0ninlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k00v4l5e"] {
        position: relative;
        margin: 33px 0px 38px calc((100% - 327px) * 1);
        left: 252px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    #comp-ko2io8ag {
        --bg-overlay-color: transparent;
        --bg-gradient: none;
        --padding: 0px;
        --margin: 0px;
        min-width: 980px;
        --firstChildMarginTop: -1px;
        --lastChildMarginBottom: -1px;
        --direction: ltr;
    }
    #comp-ko2io8cv {
        width: 326px;
    }
    #comp-ko2io8cv {
        --bg-overlay-color: transparent;
        --bg-gradient: none;
        width: 100%;
        --column-width: 326px;
        --column-flex: 326;
    }
    #comp-mb7k7p9g {
        width: 41px;
    }
    [data-mesh-id="comp-mb7k7p9ginlineContent"] {
        height: auto;
        width: 41px;
    }
    [data-mesh-id="comp-mb7k7p9ginlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        grid-template-rows: 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-mb7k7p9ginlineContent-gridContainer"]
    > [id="comp-mb7k7p9q"],
    [data-mesh-id="comp-mb7k7p9ginlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-mb7k7p9q"] {
        position: relative;
        margin: 0px 0px 0px 0;
        left: 0px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    #comp-mb7k7p9q {
        --font: var(--font_8);
        --color: rgba(var(--color_18), 1);
        --label-display: none;
        --letter-spacing: 0em;
        --line-height: unset;
        --text-decoration: none;
        --direction: ltr;
        --text-align: revert;
        --text-highlight: none;
        --text-transform: none;
        --text-outline: 1px 0px transparent, -1px 0px transparent,
        0px 1px transparent, 0px -1px transparent;
        --text-shadow: 0px 0px 0px transparent;
        --background: rgba(var(--color_11), 0);
        --border-left: 0px solid rgba(var(--color_15), 1);
        --border-right: 0px solid rgba(var(--color_15), 1);
        --border-top: 0px solid rgba(var(--color_15), 1);
        --border-bottom: 0px solid rgba(var(--color_15), 1);
        --padding-bottom: 0px;
        --padding-top: 0px;
        --padding-left: 0px;
        --padding-right: 0px;
        --border-top-left-radius: 0px;
        --border-top-right-radius: 0px;
        --border-bottom-left-radius: 0px;
        --border-bottom-right-radius: 0px;
        --icon-display: initial;
        --icon-size: 26px;
        --icon-color: rgba(var(--color_18), 1);
        --icon-rotation: 0;
        --container-flex-direction: row-reverse;
        --container-justify-content: center;
        --container-align-items: center;
        --content-horizontal-alignment: center;
        --content-gap: 8px;
        --label-overflow: ellipsis;
        --hover-icon-display: initial;
        --disabled-icon-rotation: 0;
        --hover-border-right: 0px solid rgba(var(--color_18), 1);
        --hover-icon-rotation: 0;
        --hover-icon-color: rgba(var(--color_18), 1);
        --disabled-icon-color: rgba(var(--color_14), 1);
        --hover-border-left: 0px solid rgba(var(--color_18), 1);
        --disabled-color: rgba(var(--color_14), 1);
        --hover-border-top: 0px solid rgba(var(--color_18), 1);
        --hover-border-bottom: 0px solid rgba(var(--color_18), 1);
        --disabled-icon-size: 26px;
        --hover-icon-size: 26px;
        --hover-color: rgba(var(--color_18), 1);
        --disabled-icon-display: initial;
    }
    #comp-mb7k7p9q {
        width: 41px;
        height: 41px;
    }
    #comp-mb7k7p9q {
        --btn-direction: unset;
        --direction: ltr;
        --overflow: hidden;
        --label-text-overflow: ellipsis;
        --label-white-space: nowrap;
        --btn-min-width: 10px;
        --container-justify-content: center;
        --container-align-items: center;
        --icon-rotation: 0deg;
        --disabled-icon-rotation: 0deg;
        --hover-icon-rotation: 0deg;
    }
    #comp-ko2iomso {
        width: 327px;
    }
    #comp-ko2iomso {
        --bg-overlay-color: transparent;
        --bg-gradient: none;
        width: 100%;
        --column-width: 327px;
        --column-flex: 327;
    }
    #comp-k00v24a7 {
        --txth: var(--color_37);
        --alpha-txth: 1;
        --trans: color 0.4s ease 0s;
        --fnt: normal normal normal 40px/1.4em didot-w01-italic, serif;
        --txt: var(--color_41);
        --alpha-txt: 1;
        --txtd: 255, 255, 255;
        --alpha-txtd: 1;
    }
    #comp-k00v24a7 {
        width: 182px;
        height: 56px;
    }
    #comp-k00v24a7 {
        --margin-start: 0px;
        --margin-end: 0px;
        --fnt: normal normal normal 40px/1.4em didot-w01-italic, serif;
        direction: var(--wix-opt-in-direction, ltr);
        --label-align: center;
        --label-text-align: center;
    }
    #comp-ko2ioo0n {
        width: 327px;
    }
    #comp-ko2ioo0n {
        --bg-overlay-color: transparent;
        --bg-gradient: none;
        width: 100%;
        --column-width: 327px;
        --column-flex: 327;
    }
    #comp-k06rimoq {
        width: 110px;
        height: 23px;
    }
    #comp-k06rimoq {
        --item-size: 23px;
        --item-margin-block: 0;
        --item-margin-inline: 0px 6px;
        --item-display: inline-block;
        --direction: var(--wix-opt-in-direction, ltr);
        width: 110px;
        height: 23px;
    }
    #comp-kdzrmi1y {
        --bg: 0, 0, 0;
        --alpha-bg: 0;
        --brw: 0px;
        --brd: var(--color_15);
        --rd: 0px;
        --shd: none;
        --bg-dd: var(--color_11);
        --alpha-bg-dd: 1;
        --brw-dd: 1px;
        --brd-dd: var(--color_15);
        --rd-dd: 0px;
        --shd-dd: none;
        --fnt: var(--font_8);
        --fnt-size-dd: 15px;
        --txt-dd: var(--color_15);
        --alpha-txt-dd: 1;
        --txt-slct-dd: var(--color_18);
        --alpha-txt-slct-dd: 1;
        --txth-dd: var(--color_14);
        --alpha-txth-dd: 1;
        --txth: var(--color_18);
        --alpha-txth: 1;
        --txt: var(--color_15);
        --alpha-txt: 1;
        --avatarCornerRadius: 100px;
        --avatarAndArrowStrokeWidth: 0px;
        --badge-bg: 226, 28, 33;
        --alpha-badge-bg: 1;
        --badge-txt: var(--color_11);
        --alpha-badge-txt: 1;
        --fillcolor: var(--color_18);
        --alpha-fillcolor: 1;
        --boxShadowToggleOn-shd: none;
        --alpha-brd: 1;
        --alpha-brd-dd: 0.2;
        --boxShadowToggleOn-shd-dd: none;
    }
    #comp-kdzrmi1y {
        width: 112px;
        height: 40px;
    }
    #comp-kdzrmi1y {
        justify-content: flex-end;
        direction: ltr;
        --icon-size: 23px;
        --fnt: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        --logged-in-avatar-display: block;
        --logged-in-text-display: none;
        --logged-out-avatar-display: block;
        --logged-out-text-display: block;
        --logged-out-icon-size: 23px;
        --arrow-display: block;
        --arrow-icon: var(--line-arrow-icon);
        --arrow-size: 14px;
        --greeting-text-display: none;
        --icons-display: block;
        --user-section-padding-start: 0px;
        --menu-items-alignment: flex-start;
        --avatarAndArrowStrokeWidth: 0px;
    }
    #comp-k00v4l5e {
        width: 75px;
        height: 18px;
    }
    .comp-k00v4l5e {
        --wix-direction: ltr;
        --cartWidgetIcon: 4;
        --cartWidgetButton_textFont: normal normal normal 16px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --cartWidgetButton_textFont-style: normal;
        --cartWidgetButton_textFont-variant: normal;
        --cartWidgetButton_textFont-weight: normal;
        --cartWidgetButton_textFont-size: 16px;
        --cartWidgetButton_textFont-line-height: 1.4em;
        --cartWidgetButton_textFont-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --cartWidgetButton_textFont-text-decoration: none;
        --miniCart_textFontStyle: normal normal normal 16px/20px
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --miniCart_textFontStyle-style: normal;
        --miniCart_textFontStyle-variant: normal;
        --miniCart_textFontStyle-weight: normal;
        --miniCart_textFontStyle-size: 16px;
        --miniCart_textFontStyle-line-height: 20px;
        --miniCart_textFontStyle-family: avenir-lt-w01_35-light1475496, sans-serif;
        --miniCart_textFontStyle-text-decoration: none;
        --wix-color-1: 255, 255, 255;
        --wix-color-2: 250, 250, 250;
        --wix-color-3: 246, 243, 239;
        --wix-color-4: 113, 113, 111;
        --wix-color-5: 17, 17, 17;
        --wix-color-6: 233, 186, 172;
        --wix-color-7: 210, 148, 129;
        --wix-color-8: 188, 76, 42;
        --wix-color-9: 125, 51, 28;
        --wix-color-10: 63, 25, 14;
        --wix-color-11: 210, 209, 200;
        --wix-color-12: 166, 164, 153;
        --wix-color-13: 121, 119, 103;
        --wix-color-14: 81, 79, 69;
        --wix-color-15: 40, 40, 34;
        --wix-color-16: 223, 203, 202;
        --wix-color-17: 191, 157, 155;
        --wix-color-18: 143, 118, 116;
        --wix-color-19: 96, 79, 78;
        --wix-color-20: 48, 39, 39;
        --wix-color-21: 255, 216, 184;
        --wix-color-22: 254, 177, 114;
        --wix-color-23: 191, 133, 86;
        --wix-color-24: 127, 89, 57;
        --wix-color-25: 64, 44, 28;
        --wix-color-26: 255, 255, 255;
        --wix-color-27: 17, 17, 17;
        --wix-color-28: 250, 250, 250;
        --wix-color-29: 246, 243, 239;
        --wix-color-30: 113, 113, 111;
        --wix-color-31: 188, 76, 42;
        --wix-color-32: 17, 17, 17;
        --wix-color-33: 246, 243, 239;
        --wix-color-34: 255, 255, 255;
        --wix-color-35: 17, 17, 17;
        --wix-color-36: 17, 17, 17;
        --wix-color-37: 113, 113, 111;
        --wix-color-38: 188, 76, 42;
        --wix-color-39: 188, 76, 42;
        --wix-color-40: 255, 255, 255;
        --wix-color-41: 255, 255, 255;
        --wix-color-42: 188, 76, 42;
        --wix-color-43: 188, 76, 42;
        --wix-color-44: 246, 243, 239;
        --wix-color-45: 246, 243, 239;
        --wix-color-46: 255, 255, 255;
        --wix-color-47: 255, 255, 255;
        --wix-color-48: 188, 76, 42;
        --wix-color-49: 188, 76, 42;
        --wix-color-50: 188, 76, 42;
        --wix-color-51: 188, 76, 42;
        --wix-color-52: 255, 255, 255;
        --wix-color-53: 255, 255, 255;
        --wix-color-54: 246, 243, 239;
        --wix-color-55: 246, 243, 239;
        --wix-font-Title: normal normal normal 42px/1.4em poppins-semibold,
        poppins, sans-serif;
        --wix-font-Title-style: normal;
        --wix-font-Title-variant: normal;
        --wix-font-Title-weight: normal;
        --wix-font-Title-size: 42px;
        --wix-font-Title-line-height: 1.4em;
        --wix-font-Title-family: poppins-semibold, poppins, sans-serif;
        --wix-font-Title-text-decoration: none;
        --wix-font-Menu: normal normal normal 16px/1.4em din-next-w01-light,
        sans-serif;
        --wix-font-Menu-style: normal;
        --wix-font-Menu-variant: normal;
        --wix-font-Menu-weight: normal;
        --wix-font-Menu-size: 16px;
        --wix-font-Menu-line-height: 1.4em;
        --wix-font-Menu-family: din-next-w01-light, sans-serif;
        --wix-font-Menu-text-decoration: none;
        --wix-font-Page-title: normal normal normal 30px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --wix-font-Page-title-style: normal;
        --wix-font-Page-title-variant: normal;
        --wix-font-Page-title-weight: normal;
        --wix-font-Page-title-size: 30px;
        --wix-font-Page-title-line-height: 1.4em;
        --wix-font-Page-title-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Page-title-text-decoration: none;
        --wix-font-Heading-XL: normal normal normal 28px/1.4em didot-w01-italic,
        serif;
        --wix-font-Heading-XL-style: normal;
        --wix-font-Heading-XL-variant: normal;
        --wix-font-Heading-XL-weight: normal;
        --wix-font-Heading-XL-size: 28px;
        --wix-font-Heading-XL-line-height: 1.4em;
        --wix-font-Heading-XL-family: didot-w01-italic, serif;
        --wix-font-Heading-XL-text-decoration: none;
        --wix-font-Heading-L: normal normal normal 25px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --wix-font-Heading-L-style: normal;
        --wix-font-Heading-L-variant: normal;
        --wix-font-Heading-L-weight: normal;
        --wix-font-Heading-L-size: 25px;
        --wix-font-Heading-L-line-height: 1.4em;
        --wix-font-Heading-L-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Heading-L-text-decoration: none;
        --wix-font-Heading-M: normal normal normal 24px/1.4em poppins-semibold,
        poppins, sans-serif;
        --wix-font-Heading-M-style: normal;
        --wix-font-Heading-M-variant: normal;
        --wix-font-Heading-M-weight: normal;
        --wix-font-Heading-M-size: 24px;
        --wix-font-Heading-M-line-height: 1.4em;
        --wix-font-Heading-M-family: poppins-semibold, poppins, sans-serif;
        --wix-font-Heading-M-text-decoration: none;
        --wix-font-Heading-S: normal normal normal 20px/1.4em didot-w01-italic,
        serif;
        --wix-font-Heading-S-style: normal;
        --wix-font-Heading-S-variant: normal;
        --wix-font-Heading-S-weight: normal;
        --wix-font-Heading-S-size: 20px;
        --wix-font-Heading-S-line-height: 1.4em;
        --wix-font-Heading-S-family: didot-w01-italic, serif;
        --wix-font-Heading-S-text-decoration: none;
        --wix-font-Body-L: normal normal normal 20px/1.4em didot-w01-italic, serif;
        --wix-font-Body-L-style: normal;
        --wix-font-Body-L-variant: normal;
        --wix-font-Body-L-weight: normal;
        --wix-font-Body-L-size: 20px;
        --wix-font-Body-L-line-height: 1.4em;
        --wix-font-Body-L-family: didot-w01-italic, serif;
        --wix-font-Body-L-text-decoration: none;
        --wix-font-Body-M: normal normal normal 16px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --wix-font-Body-M-style: normal;
        --wix-font-Body-M-variant: normal;
        --wix-font-Body-M-weight: normal;
        --wix-font-Body-M-size: 16px;
        --wix-font-Body-M-line-height: 1.4em;
        --wix-font-Body-M-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Body-M-text-decoration: none;
        --wix-font-Body-S: normal normal normal 14px/1.4em proxima-n-w01-reg,
        sans-serif;
        --wix-font-Body-S-style: normal;
        --wix-font-Body-S-variant: normal;
        --wix-font-Body-S-weight: normal;
        --wix-font-Body-S-size: 14px;
        --wix-font-Body-S-line-height: 1.4em;
        --wix-font-Body-S-family: proxima-n-w01-reg, sans-serif;
        --wix-font-Body-S-text-decoration: none;
        --wix-font-Body-XS: normal normal normal 12px/1.4em din-next-w01-light,
        sans-serif;
        --wix-font-Body-XS-style: normal;
        --wix-font-Body-XS-variant: normal;
        --wix-font-Body-XS-weight: normal;
        --wix-font-Body-XS-size: 12px;
        --wix-font-Body-XS-line-height: 1.4em;
        --wix-font-Body-XS-family: din-next-w01-light, sans-serif;
        --wix-font-Body-XS-text-decoration: none;
        --wix-font-LIGHT: normal normal normal 12px/1.4em HelveticaNeueW01-45Ligh;
        --wix-font-LIGHT-style: normal;
        --wix-font-LIGHT-variant: normal;
        --wix-font-LIGHT-weight: normal;
        --wix-font-LIGHT-size: 12px;
        --wix-font-LIGHT-line-height: 1.4em;
        --wix-font-LIGHT-family: HelveticaNeueW01-45Ligh;
        --wix-font-LIGHT-text-decoration: none;
        --wix-font-MEDIUM: normal normal normal 12px/1.4em HelveticaNeueW01-55Roma;
        --wix-font-MEDIUM-style: normal;
        --wix-font-MEDIUM-variant: normal;
        --wix-font-MEDIUM-weight: normal;
        --wix-font-MEDIUM-size: 12px;
        --wix-font-MEDIUM-line-height: 1.4em;
        --wix-font-MEDIUM-family: HelveticaNeueW01-55Roma;
        --wix-font-MEDIUM-text-decoration: none;
        --wix-font-STRONG: normal normal normal 12px/1.4em HelveticaNeueW01-65Medi;
        --wix-font-STRONG-style: normal;
        --wix-font-STRONG-variant: normal;
        --wix-font-STRONG-weight: normal;
        --wix-font-STRONG-size: 12px;
        --wix-font-STRONG-line-height: 1.4em;
        --wix-font-STRONG-family: HelveticaNeueW01-65Medi;
        --wix-font-STRONG-text-decoration: none;
    }

    .comp-k00v4l5e .ETC5zb {
        --cartWidget_cartIcon: #bc4c2a;
        --cartWidget_cartIconText: #bc4c2a;
        --cartWidget_cartIconTextFont: normal normal normal 16px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --cartWidget_cartIconNumberFont: normal normal normal 16px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --cartWidget_cartIconBubble: #bc4c2a;
    }
    .comp-k00v4l5e .s1dvzA rect,
    .comp-k00v4l5e .s1dvzA polygon,
    .comp-k00v4l5e .s1dvzA polyline,
    .comp-k00v4l5e .s1dvzA circle,
    .comp-k00v4l5e .s1dvzA path {
        fill: #bc4c2a;
    }
    .comp-k00v4l5e .s1dvzA text {
        fill: #bc4c2a;
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        font-size: 90px;
    }
    .comp-k00v4l5e .s1dvzA .uxskpx {
        fill: #ffffff;
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        font-size: 90px;
    }
    .comp-k00v4l5e .s1dvzA .uxskpx.M846Y_ {
        fill: #bc4c2a;
    }
    .comp-k00v4l5e .s1dvzA .ptVJi9 {
        fill: #bc4c2a;
    }
    #comp-k00vh2l4 {
        --menuTotalBordersX: 0px;
        --menuTotalBordersY: 0px;
        --bgDrop: var(--color_36);
        --rd: 0px;
        --shd: none;
        --fnt: var(--font_8);
        --pad: 5px;
        --txt: var(--color_37);
        --trans: color 0.4s ease 0s;
        --txth: var(--color_41);
        --txts: var(--color_41);
        --alpha-bgDrop: 1;
        --alpha-txt: 1;
        --alpha-txth: 1;
        --alpha-txts: 1;
        --boxShadowToggleOn-shd: none;
    }
    #comp-k00vh2l4 {
        width: 708px;
        height: 50px;
    }
    #comp-k00vh2l4 {
        --menuTotalBordersY: 0px;
        --menuTotalBordersX: 0px;
        --submenus-direction: inherit;
        --menu-direction: inherit;
        --align: center;
        --menu-align: inherit;
        --submenus-align: inherit;
    }
    #PAGES_CONTAINER {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 0;
    }
    #SITE_PAGES {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 0;
    }
    #SITE_PAGES {
        --transition-duration: 700ms;
    }
    #CONTROLLER_COMP_CUSTOM_ID {
        --alpha-txth: 1;
        --bgh: 43, 104, 156;
        --shd: 0 1px 4px rgba(0, 0, 0, 0.6);
        --rd: 20px;
        --alpha-brdh: 1;
        --txth: 255, 255, 255;
        --alpha-brd: 1;
        --alpha-bg: 1;
        --bg: 61, 155, 233;
        --txt: 255, 255, 255;
        --alpha-bgh: 1;
        --brw: 0px;
        --fnt: normal normal normal 14px/1.4em raleway;
        --brd: 43, 104, 156;
        --boxShadowToggleOn-shd: none;
        --alpha-txt: 1;
        --brdh: 61, 155, 233;
    }
    #SITE_FOOTER {
        --bg: var(--color_13);
        --shd: none;
        --brwt: 0px;
        --brd: var(--color_15);
        --brwb: 0px;
        --bgctr: var(--color_13);
        --rd: 0px;
        --alpha-bg: 1;
        --alpha-bgctr: 1;
        --alpha-brd: 1;
        --boxShadowToggleOn-shd: none;
        --backdrop-filter: none;
    }
    #SITE_FOOTER {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 0;
    }
    [data-mesh-id="SITE_FOOTERinlineContent"] {
        height: auto;
        width: 100%;
        display: flex;
    }
    [data-mesh-id="SITE_FOOTERinlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        margin-top: -2px;
        grid-template-rows: min-content 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="SITE_FOOTERinlineContent-gridContainer"]
    > [id="comp-k02bdd4r"],
    [data-mesh-id="SITE_FOOTERinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k02bdd4r"] {
        position: relative;
        margin: 0px 0px 15px calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="SITE_FOOTERinlineContent-gridContainer"]
    > [id="comp-k02bjnx4"],
    [data-mesh-id="SITE_FOOTERinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k02bjnx4"] {
        position: relative;
        margin: 0px 0px 17px calc((100% - 980px) * 0.5);
        left: 208px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
    }
    #SITE_FOOTER {
        --shc-mutated-brightness: 123, 122, 120;
        --bg-overlay-color: rgb(var(--color_13));
        --bg-gradient: none;
    }
    #comp-k02bdd4r {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 980px;
    }
    [data-mesh-id="comp-k02bdd6pinlineContent"] {
        height: auto;
        width: 100%;
    }
    [data-mesh-id="comp-k02bdd6pinlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: 482px;
        grid-template-rows: 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-k02bdd6pinlineContent-gridContainer"]
    > [id="comp-k02bbazo"],
    [data-mesh-id="comp-k02bdd6pinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k02bbazo"] {
        position: relative;
        margin: 103px 0px 10px calc((100% - 196px) * 0.5);
        left: 0px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-k02bdd73inlineContent"] {
        height: auto;
        width: 100%;
    }
    [data-mesh-id="comp-k02bdd73inlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: 482px;
        grid-template-rows: 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-k02bdd73inlineContent-gridContainer"]
    > [id="comp-k02bdd70"],
    [data-mesh-id="comp-k02bdd73inlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k02bdd70"] {
        position: relative;
        margin: 116px 0px 10px calc((100% - 196px) * 0.5);
        left: 7px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-k02bdd7finlineContent"] {
        height: auto;
        width: 100%;
    }
    [data-mesh-id="comp-k02bdd7finlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: 482px;
        grid-template-rows: 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-k02bdd7finlineContent-gridContainer"]
    > [id="comp-k02bou8l"],
    [data-mesh-id="comp-k02bdd7finlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k02bou8l"] {
        position: relative;
        margin: 116px 0px 10px calc((100% - 196px) * 0.5);
        left: 7px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-k02belvbinlineContent"] {
        height: auto;
        width: 100%;
    }
    [data-mesh-id="comp-k02belvbinlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: 482px;
        grid-template-rows: 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-k02belvbinlineContent-gridContainer"]
    > [id="comp-k02bpi59"],
    [data-mesh-id="comp-k02belvbinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k02bpi59"] {
        position: relative;
        margin: 116px 0px 10px calc((100% - 196px) * 0.5);
        left: 7px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-k02beohpinlineContent"] {
        height: auto;
        width: 100%;
    }
    [data-mesh-id="comp-k02beohpinlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: 482px;
        grid-template-rows: min-content 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-k02beohpinlineContent-gridContainer"]
    > [id="comp-k02bdd6x"],
    [data-mesh-id="comp-k02beohpinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k02bdd6x"] {
        position: relative;
        margin: 119px 0px 0 calc((100% - 196px) * 0.5);
        left: 20px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-k02beohpinlineContent-gridContainer"]
    > [id="comp-k0gm2138"],
    [data-mesh-id="comp-k02beohpinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k0gm2138"] {
        position: relative;
        margin: 0px 0px 10px calc((100% - 196px) * 0.5);
        left: 4px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
    }
    #comp-k02bdd4r {
        --bg-overlay-color: transparent;
        --bg-gradient: none;
        --padding: 0px;
        --margin: 0px;
        min-width: 980px;
        --firstChildMarginTop: -1px;
        --lastChildMarginBottom: -1px;
        --direction: ltr;
    }
    #comp-k02bdd6p {
        width: 196px;
    }
    #comp-k02bdd6p {
        --bg-overlay-color: rgb(var(--color_11));
        --bg-gradient: none;
        width: 100%;
        --column-width: 196px;
        --column-flex: 196;
    }
    #comp-k02bbazo {
        --txth: var(--color_15);
        --alpha-txth: 1;
        --trans: color 0.4s ease 0s;
        --fnt: normal normal normal 40px/1.4em didot-w01-italic, serif;
        --txt: var(--color_18);
        --alpha-txt: 1;
        --txtd: 255, 255, 255;
        --alpha-txtd: 1;
    }
    #comp-k02bbazo {
        width: 182px;
        height: 56px;
    }
    #comp-k02bbazo {
        --margin-start: 0px;
        --margin-end: 0px;
        --fnt: normal normal normal 40px/1.4em didot-w01-italic, serif;
        direction: var(--wix-opt-in-direction, ltr);
        --label-align: center;
        --label-text-align: center;
    }
    #comp-k02bdd73 {
        width: 196px;
    }
    #comp-k02bdd73 {
        --bg-overlay-color: rgb(var(--color_11));
        --bg-gradient: none;
        width: 100%;
        --column-width: 196px;
        --column-flex: 196;
    }
    #comp-k02bdd70 {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
    }
    #comp-k02bdd70 {
        width: 182px;
        height: auto;
    }
    #comp-k02bdd70 {
        --text-direction: var(--wix-opt-in-direction);
    }
    #comp-k02bdd7f {
        width: 196px;
    }
    #comp-k02bdd7f {
        --bg-overlay-color: rgb(var(--color_11));
        --bg-gradient: none;
        width: 100%;
        --column-width: 196px;
        --column-flex: 196;
    }
    #comp-k02bou8l {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
    }
    #comp-k02bou8l {
        width: 182px;
        height: auto;
    }
    #comp-k02bou8l {
        --min-height: 240px;
        --text-direction: var(--wix-opt-in-direction);
    }
    #comp-k02belvb {
        width: 196px;
    }
    #comp-k02belvb {
        --bg-overlay-color: rgb(var(--color_11));
        --bg-gradient: none;
        width: 100%;
        --column-width: 196px;
        --column-flex: 196;
    }
    #comp-k02bpi59 {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
    }
    #comp-k02bpi59 {
        width: 182px;
        height: auto;
    }
    #comp-k02bpi59 {
        --text-direction: var(--wix-opt-in-direction);
    }
    #comp-k02beohp {
        width: 196px;
    }
    #comp-k02beohp {
        --bg-overlay-color: rgb(var(--color_11));
        --bg-gradient: none;
        width: 100%;
        --column-width: 196px;
        --column-flex: 196;
    }
    #comp-k02bdd6x {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
    }
    #comp-k02bdd6x {
        width: 156px;
        height: auto;
    }
    #comp-k02bdd6x {
        --text-direction: var(--wix-opt-in-direction);
    }
    #comp-k0gm2138 {
        width: 188px;
    }
    [data-mesh-id="comp-k0gm2138inlineContent"] {
        height: auto;
        width: 188px;
    }
    [data-mesh-id="comp-k0gm2138inlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        grid-template-rows: 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-k0gm2138inlineContent-gridContainer"]
    > [id="comp-k0gm213t"],
    [data-mesh-id="comp-k0gm2138inlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k0gm213t"] {
        position: relative;
        margin: 0px 0px 0px 0;
        left: 0px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    #comp-k0gm213t {
        --rd: 0px;
        --shd: none;
        --bg: var(--color_11);
        --brd: var(--color_14);
        --alpha-brd: 1;
        --brw: 0px;
        --boxShadowToggleOn-shd: none;
        --alpha-bg: 0;
    }
    #comp-k0gm213t {
        width: 188px;
    }
    [data-mesh-id="comp-k0gm213tinlineContent"] {
        height: auto;
        width: 188px;
    }
    [data-mesh-id="comp-k0gm213tinlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        grid-template-rows: repeat(2, min-content) 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-k0gm213tinlineContent-gridContainer"]
    > [id="comp-k0gm2149"],
    [data-mesh-id="comp-k0gm213tinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k0gm2149"] {
        position: relative;
        margin: 15px 0px 30px 0;
        left: 6px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-k0gm213tinlineContent-gridContainer"]
    > [id="comp-k0gm214j"],
    [data-mesh-id="comp-k0gm213tinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k0gm214j"] {
        position: relative;
        margin: 0px 0px 19px 0;
        left: 6px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-k0gm213tinlineContent-gridContainer"]
    > [id="comp-k0gm214p"],
    [data-mesh-id="comp-k0gm213tinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k0gm214p"] {
        position: relative;
        margin: 0px 0px 22px 0;
        left: 9px;
        grid-area: 3 / 1 / 4 / 2;
        justify-self: start;
        align-self: start;
    }
    #comp-k0gm2149 {
        --errorTextColor: 255, 64, 64;
        --alpha-errorTextColor: 1;
        --errorTextFont: var(--font_8);
        --shd: none;
        --rd: 0px;
        --fnt: var(--font_8);
        --brw: 0px 0px 1px 0px;
        --bg: var(--color_11);
        --txt: var(--color_15);
        --alpha-txt: 1;
        --brd: var(--color_18);
        --txt2: var(--color_15);
        --alpha-txt2: 1;
        --brwh: 0px 0px 2px 0px;
        --bgh: var(--color_11);
        --brdh: var(--color_18);
        --brwf: 0px 0px 2px 0px;
        --bgf: var(--color_11);
        --brdf: var(--color_18);
        --brwe: 0px 0px 2px 0px;
        --bge: var(--color_11);
        --brde: 255, 64, 64;
        --trns: opacity 0.5s ease 0s, border 0.5s ease 0s, color 0.5s ease 0s;
        --bgd: 255, 255, 255;
        --txtd: 219, 219, 219;
        --alpha-txtd: 1;
        --brwd: 1px;
        --brdd: 219, 219, 219;
        --alpha-brdd: 1;
        --fntlbl: var(--font_8);
        --txtlbl: var(--color_15);
        --alpha-txtlbl: 1;
        --txtlblrq: var(--color_15);
        --alpha-txtlblrq: 1;
        --fntprefix: normal normal normal 16px/1.4em helvetica-w01-roman,
        sans-serif;
        --alpha-bg: 1;
        --alpha-bgd: 1;
        --alpha-bge: 1;
        --alpha-bgf: 1;
        --alpha-bgh: 1;
        --alpha-brd: 1;
        --alpha-brde: 1;
        --alpha-brdf: 1;
        --alpha-brdh: 1;
        --alpha-btn_brd: 0.55;
        --boxShadowToggleOn-shd: none;
        --btn_brd: var(--color_15);
        --btn_brw: 1;
        --btn_fnt: var(--font_8);
        --fnt2: var(--font_8);
        --txt-placeholder: var(--color_14);
        --alpha-txt-placeholder: 1;
    }
    #comp-k0gm2149 {
        width: 174px;
        height: 42px;
    }
    #comp-k0gm2149 {
        --fnt: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        --fntlbl: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        --direction: var(--wix-opt-in-direction, ltr);
        --align: start;
        --labelDirection: inherit;
        --inputDirection: inherit;
        --errorDirection: inherit;
        --requiredIndicationDisplay: inline;
        --labelMarginBottom: 1px;
        --textPadding: 3px;
        --textPadding_start: 3px;
        --textPadding_end: 3px;
        --labelPadding_start: 0px;
        --labelPadding_end: 20px;
        height: auto;
        --inputHeight: 25px;
    }
    #comp-k0gm214j {
        --rd: 0px;
        --trans1: border-color 0.4s ease 0s, background-color 0.4s ease 0s;
        --shd: none;
        --fnt: var(--font_8);
        --trans2: color 0.4s ease 0s;
        --txt: var(--color_18);
        --brw: 1px;
        --bg: var(--color_11);
        --brd: var(--color_18);
        --bgh: var(--color_18);
        --brdh: var(--color_18);
        --txth: var(--color_11);
        --bgd: 204, 204, 204;
        --alpha-bgd: 1;
        --brdd: 204, 204, 204;
        --alpha-brdd: 1;
        --txtd: 255, 255, 255;
        --alpha-txtd: 1;
        --alpha-bg: 0;
        --alpha-bgh: 1;
        --alpha-brd: 1;
        --alpha-brdh: 1;
        --alpha-txt: 1;
        --alpha-txth: 1;
        --boxShadowToggleOn-shd: none;
    }
    #comp-k0gm214j {
        width: 176px;
        height: 51px;
    }
    #comp-k0gm214j {
        --shc-mutated-brightness: 128, 128, 128;
        --margin-start: 0px;
        --margin-end: 0px;
        --fnt: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        direction: var(--wix-opt-in-direction, ltr);
        --label-align: center;
        --label-text-align: center;
    }
    #comp-k0gm214p {
        width: 170px;
        height: auto;
    }
    #comp-k0gm214p {
        --text-direction: var(--wix-opt-in-direction);
    }
    #comp-k02bjnx4 {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
    }
    #comp-k02bjnx4 {
        width: 563px;
        height: auto;
    }
    #comp-k02bjnx4 {
        --text-direction: var(--wix-opt-in-direction);
    }
    #comp-k0pd37s6 {
        width: 94px;
        height: 94px;
    }
</style>
<style id="css_c1dmp">
    @font-face {
        font-family: "didot-w01-italic";
        font-style: normal;
        font-weight: 400;
        src: url("//static.parastorage.com/fonts/v2/6a8685bf-8255-4762-98b8-54a1192acc7c/v1/didot-w05-italic.woff2")
        format("woff2");
        unicode-range: U+0000, U+0100-0130, U+0132-0151, U+0154-015F, U+0162-0177,
        U+0179-017C, U+01FA-01FF, U+0218-021B, U+0237, U+02C9, U+02D8-02D9,
        U+02DB, U+02DD, U+0394, U+03A9, U+03BC, U+03C0, U+1E80-1E85, U+1EF2-1EF3,
        U+2044, U+2113, U+2126, U+212E, U+2153-2154, U+215B-215E, U+2202, U+2206,
        U+220F, U+2211-2212, U+2215, U+2219-221A, U+221E, U+222B, U+2248, U+2260,
        U+2264-2265, U+25CA, U+F8FF, U+FB00-FB04;
        font-display: swap;
    }
    @font-face {
        font-family: "didot-w01-italic";
        font-style: normal;
        font-weight: 400;
        src: url("//static.parastorage.com/fonts/v2/6a8685bf-8255-4762-98b8-54a1192acc7c/v1/didot-w01-italic.woff2")
        format("woff2");
        unicode-range: U+000D, U+0020-007E, U+00A0-00FF, U+0131, U+0152-0153,
        U+0160-0161, U+0178, U+017D-017E, U+0192, U+02C6-02C7, U+02DA, U+02DC,
        U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030,
        U+2039-203A, U+20AC, U+2122, U+E000, U+E002, U+E004, U+E006, U+E009,
        U+E00B, U+E011;
        font-display: swap;
    }
    @font-face {
        font-family: "avenir-lt-w01_35-light1475496";
        font-style: normal;
        font-weight: 400;
        src: url("//static.parastorage.com/fonts/v2/af36905f-3c92-4ef9-b0c1-f91432f16ac1/v1/avenir-lt-w05_35-light.woff2")
        format("woff2");
        unicode-range: U+0100-012B, U+012E-0130, U+0132-0137, U+0139-0149,
        U+014C-0151, U+0154-015F, U+0162-0177, U+0179-017C, U+0218-021B, U+02C9,
        U+02D8-02D9, U+02DB, U+02DD, U+0394, U+03A9, U+03BC, U+03C0, U+1E9E,
        U+20B9-20BA, U+20BC-20BD, U+2113, U+2126, U+212E, U+2202, U+2206, U+220F,
        U+2211-2212, U+2215, U+2219-221A, U+221E, U+222B, U+2248, U+2260,
        U+2264-2265, U+25CA, U+F8FF, U+FB01-FB02;
        font-display: swap;
    }
    @font-face {
        font-family: "avenir-lt-w01_35-light1475496";
        font-style: normal;
        font-weight: 400;
        src: url("//static.parastorage.com/fonts/v2/af36905f-3c92-4ef9-b0c1-f91432f16ac1/v1/avenir-lt-w01_35-light1475496.woff2")
        format("woff2");
        unicode-range: U+0000, U+000D, U+0020-007E, U+00A0-00FF, U+0131,
        U+0152-0153, U+0160-0161, U+0178, U+017D-017E, U+0192, U+0237,
        U+02C6-02C7, U+02DA, U+02DC, U+2013-2014, U+2018-201A, U+201C-201E,
        U+2020-2022, U+2026, U+2030, U+2039-203A, U+2044, U+20AC, U+2122;
        font-display: swap;
    }
    #c1dmp {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 0;
    }
    #masterPage {
        --pinned-layers-in-page: 0;
    }
    [data-mesh-id="Containerc1dmpinlineContent"] {
        height: auto;
        width: 100%;
    }
    [data-mesh-id="Containerc1dmpinlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: 40px;
        grid-template-rows: repeat(5, min-content) 1fr;
        grid-template-columns: 100%;
        padding-bottom: 0px;
        box-sizing: border-box;
    }
    [data-mesh-id="Containerc1dmpinlineContent-gridContainer"]
    > [id="comp-lvf72jjk"],
    [data-mesh-id="Containerc1dmpinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-lvf72jjk"] {
        position: relative;
        margin: 0px 0px 0 calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="Containerc1dmpinlineContent-gridContainer"]
    > [id="comp-lvf72jjl"],
    [data-mesh-id="Containerc1dmpinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-lvf72jjl"] {
        position: relative;
        margin: 0px 0px 0 calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="Containerc1dmpinlineContent-gridContainer"]
    > [id="comp-lvf72jjl1"],
    [data-mesh-id="Containerc1dmpinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-lvf72jjl1"] {
        position: relative;
        margin: 0px 0px 0 calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 3 / 1 / 4 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="Containerc1dmpinlineContent-gridContainer"]
    > [id="comp-lvf72jjm"],
    [data-mesh-id="Containerc1dmpinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-lvf72jjm"] {
        position: relative;
        margin: 0px 0px 0 calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 4 / 1 / 5 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="Containerc1dmpinlineContent-gridContainer"]
    > [id="comp-lvf72jjm1"],
    [data-mesh-id="Containerc1dmpinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-lvf72jjm1"] {
        position: relative;
        margin: 0px 0px 0 calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 5 / 1 / 6 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="Containerc1dmpinlineContent-gridContainer"]
    > [id="comp-lvf72jjn"],
    [data-mesh-id="Containerc1dmpinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-lvf72jjn"] {
        position: relative;
        margin: 0px 0px 0 calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 6 / 1 / 7 / 2;
        justify-self: start;
        align-self: start;
    }
    @media (prefers-reduced-motion: no-preference) {
        #comp-lvf72jjk [data-motion-part="BG_MEDIA comp-lvf72jjk"] {
            will-change: var(--motion-bgreveal-will-change);
            height: calc(100% + 200lvh);
            margin-top: -100lvh;
            isolation: isolate;
        }
        :is(#comp-lvf72jjk)[data-has-alpha="true"] canvas,
        :is(#comp-lvf72jjk):not([data-show-canvas])
        [data-motion-part="BG_IMG comp-lvf72jjk"] {
            position: sticky;
            height: max(100lvh, calc(100% - 200lvh));
            width: 100%;
            top: 0px;
            margin-bottom: calc(
                    100lvh - max(100lvh, var(--motion-comp-height, 100%))
            );
            display: block;
            padding: 0px;
        }
        #comp-lvf72jjk [data-motion-part="BG_LAYER comp-lvf72jjk"] {
            overflow: clip;
        }
        @supports (-moz-appearance: none) {
            body {
                --motion-bgreveal-will-change: transform;
            }
        }
        #comp-lvf72jjk[data-testid="imageX"]
        [data-motion-part="BG_MEDIA comp-lvf72jjk"] {
            transform: translate3d(0, 0, 0);
        }
    }
    #comp-lvf72jjk {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 0;
    }
    [data-mesh-id="comp-lvf72jjkinlineContent"] {
        height: auto;
        width: 100%;
    }
    [data-mesh-id="comp-lvf72jjkinlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: 671px;
        grid-template-rows: min-content 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-lvf72jjkinlineContent-gridContainer"]
    > [id="comp-k00w5lmz"],
    [data-mesh-id="comp-lvf72jjkinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k00w5lmz"] {
        position: relative;
        margin: 238px 0px 47px calc((100% - 980px) * 0.5);
        left: 195px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-lvf72jjkinlineContent-gridContainer"]
    > [id="comp-k00wjfku"],
    [data-mesh-id="comp-lvf72jjkinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k00wjfku"] {
        position: relative;
        margin: 0px 0px 10px calc((100% - 980px) * 0.5);
        left: 368px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
    }
    #comp-k00w5lmz {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
    }
    #comp-k00w5lmz {
        width: 589px;
        height: auto;
    }
    #comp-k00wjfku {
        --rd: 0px;
        --trans1: border-color 0.4s ease 0s, background-color 0.4s ease 0s;
        --shd: none;
        --fnt: var(--font_8);
        --trans2: color 0.4s ease 0s;
        --txt: var(--color_11);
        --brw: 1px;
        --bg: var(--color_11);
        --brd: var(--color_11);
        --bgh: var(--color_11);
        --brdh: var(--color_11);
        --txth: var(--color_18);
        --bgd: 204, 204, 204;
        --alpha-bgd: 1;
        --brdd: 204, 204, 204;
        --alpha-brdd: 1;
        --txtd: 255, 255, 255;
        --alpha-txtd: 1;
        --alpha-bg: 0;
        --alpha-bgh: 1;
        --alpha-brd: 1;
        --alpha-brdh: 1;
        --alpha-txt: 1;
        --alpha-txth: 1;
        --boxShadowToggleOn-shd: none;
    }
    #comp-k00wjfku {
        width: 244px;
        height: 61px;
    }
    #comp-lvf72jjl {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 0;
    }
    [data-mesh-id="comp-lvf72jjlinlineContent"] {
        height: auto;
        width: 100%;
    }
    [data-mesh-id="comp-lvf72jjlinlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: 984px;
        grid-template-rows: repeat(3, min-content) 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-lvf72jjlinlineContent-gridContainer"]
    > [id="comp-k00x1l4v"],
    [data-mesh-id="comp-lvf72jjlinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k00x1l4v"] {
        position: relative;
        margin: 98px 0px 30px calc((100% - 980px) * 0.5);
        left: 265px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-lvf72jjlinlineContent-gridContainer"]
    > [id="comp-k00x5vdf"],
    [data-mesh-id="comp-lvf72jjlinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k00x5vdf"] {
        position: relative;
        margin: 0px 0px 65px calc((100% - 980px) * 0.5);
        left: 480px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-lvf72jjlinlineContent-gridContainer"]
    > [id="comp-k00x9iml"],
    [data-mesh-id="comp-lvf72jjlinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k00x9iml"] {
        position: relative;
        margin: 0px 80px 43px 80px;
        left: 0;
        grid-area: 3 / 1 / 4 / 2;
        justify-self: stretch;
        align-self: start;
    }
    [data-mesh-id="comp-lvf72jjlinlineContent-gridContainer"]
    > [id="comp-k00zbqd5"],
    [data-mesh-id="comp-lvf72jjlinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k00zbqd5"] {
        position: relative;
        margin: 0px 0px 10px calc((100% - 980px) * 0.5);
        left: 368px;
        grid-area: 4 / 1 / 5 / 2;
        justify-self: start;
        align-self: start;
    }
    #comp-k00x1l4v {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
    }
    #comp-k00x1l4v {
        width: 450px;
        height: auto;
    }
    #comp-k00x5vdf {
        --lnw: 3px;
        --brd: var(--color_15);
        --alpha-brd: 1;
    }
    #comp-k00x5vdf {
        width: 19px;
        height: 5px;
    }
    #comp-k00x9iml {
        width: calc(100% - 80px - 80px);
        left: 0;
        margin-left: 80px;
        min-width: initial;
        height: 436px;
    }
    #comp-k00zbqd5 {
        --rd: 0px;
        --trans1: border-color 0.4s ease 0s, background-color 0.4s ease 0s;
        --shd: none;
        --fnt: var(--font_8);
        --trans2: color 0.4s ease 0s;
        --txt: var(--color_18);
        --brw: 1px;
        --bg: var(--color_11);
        --brd: var(--color_18);
        --bgh: var(--color_18);
        --brdh: var(--color_18);
        --txth: var(--color_11);
        --bgd: 204, 204, 204;
        --alpha-bgd: 1;
        --brdd: 204, 204, 204;
        --alpha-brdd: 1;
        --txtd: 255, 255, 255;
        --alpha-txtd: 1;
        --alpha-bg: 0;
        --alpha-bgh: 1;
        --alpha-brd: 1;
        --alpha-brdh: 1;
        --alpha-txt: 1;
        --alpha-txth: 1;
        --boxShadowToggleOn-shd: none;
    }
    #comp-k00zbqd5 {
        width: 244px;
        height: 61px;
    }
    #comp-lvf72jjl1 {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 0;
    }
    [data-mesh-id="comp-lvf72jjl1inlineContent"] {
        height: auto;
        width: 100%;
    }
    [data-mesh-id="comp-lvf72jjl1inlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        grid-template-rows: min-content 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-lvf72jjl1inlineContent-gridContainer"]
    > [id="comp-k00zfgw4"],
    [data-mesh-id="comp-lvf72jjl1inlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k00zfgw4"] {
        position: relative;
        margin: 0px 0px 0 calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-lvf72jjl1inlineContent-gridContainer"]
    > [id="comp-k011k29f"],
    [data-mesh-id="comp-lvf72jjl1inlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k011k29f"] {
        position: relative;
        margin: 0px 0px 0px calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
    }
    #comp-k00zfgw4 {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 980px;
    }
    [data-mesh-id="comp-k00zfgxjinlineContent"] {
        height: auto;
        width: 100%;
    }
    [data-mesh-id="comp-k00zfgxjinlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: 680px;
        grid-template-rows: 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-k00zfgxjinlineContent-gridContainer"]
    > [id="comp-k013mc5w"],
    [data-mesh-id="comp-k00zfgxjinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k013mc5w"] {
        position: relative;
        margin: 135px 0px 10px calc((100% - 490px) * 0.5);
        left: 5px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-k00zfyzuinlineContent"] {
        height: auto;
        width: 100%;
    }
    [data-mesh-id="comp-k00zfyzuinlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: 680px;
        grid-template-rows: 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-k00zfyzuinlineContent-gridContainer"]
    > [id="comp-k00zgfqb"],
    [data-mesh-id="comp-k00zfyzuinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k00zgfqb"] {
        position: relative;
        margin: 322px 0px 10px calc((100% - 490px) * 0.5);
        left: 1px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    #comp-k00zfgxj {
        width: 490px;
    }
    #comp-k013mc5w {
        width: 480px;
        height: 410px;
    }
    @media (prefers-reduced-motion: no-preference) {
        #comp-k00zfyzu [data-motion-part="BG_MEDIA comp-k00zfyzu"] {
            will-change: var(--motion-bgreveal-will-change);
            height: calc(100% + 200lvh);
            margin-top: -100lvh;
            isolation: isolate;
        }
        :is(#comp-k00zfyzu)[data-has-alpha="true"] canvas,
        :is(#comp-k00zfyzu):not([data-show-canvas])
        [data-motion-part="BG_IMG comp-k00zfyzu"] {
            position: sticky;
            height: max(100lvh, calc(100% - 200lvh));
            width: 100%;
            top: 0px;
            margin-bottom: calc(
                    100lvh - max(100lvh, var(--motion-comp-height, 100%))
            );
            display: block;
            padding: 0px;
        }
        #comp-k00zfyzu [data-motion-part="BG_LAYER comp-k00zfyzu"] {
            overflow: clip;
        }
        @supports (-moz-appearance: none) {
            body {
                --motion-bgreveal-will-change: transform;
            }
        }
        #comp-k00zfyzu[data-testid="imageX"]
        [data-motion-part="BG_MEDIA comp-k00zfyzu"] {
            transform: translate3d(0, 0, 0);
        }
    }
    #comp-k00zfyzu {
        width: 490px;
    }
    #comp-k00zgfqb {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
    }
    #comp-k00zgfqb {
        width: 488px;
        height: auto;
    }
    #comp-k011k29f {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 980px;
    }
    [data-mesh-id="comp-k011k2bsinlineContent"] {
        height: auto;
        width: 100%;
    }
    [data-mesh-id="comp-k011k2bsinlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: 680px;
        grid-template-rows: 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-k011k2bsinlineContent-gridContainer"]
    > [id="comp-k011k2bx"],
    [data-mesh-id="comp-k011k2bsinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k011k2bx"] {
        position: relative;
        margin: 326px 0px 10px calc((100% - 490px) * 0.5);
        left: 1px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-k011k2boinlineContent"] {
        height: auto;
        width: 100%;
    }
    [data-mesh-id="comp-k011k2boinlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: 680px;
        grid-template-rows: 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-k011k2boinlineContent-gridContainer"]
    > [id="comp-k023jkdl"],
    [data-mesh-id="comp-k011k2boinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k023jkdl"] {
        position: relative;
        margin: 135px 0px 10px calc((100% - 490px) * 0.5);
        left: 5px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    #comp-k011k2bs {
        width: 490px;
    }
    #comp-k011k2bx {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
    }
    #comp-k011k2bx {
        width: 488px;
        height: auto;
    }
    #comp-k011k2bo {
        width: 490px;
    }
    #comp-k023jkdl {
        width: 480px;
        height: 410px;
    }
    #comp-lvf72jjm {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 0;
    }
    [data-mesh-id="comp-lvf72jjminlineContent"] {
        height: auto;
        width: 100%;
    }
    [data-mesh-id="comp-lvf72jjminlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        grid-template-rows: 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-lvf72jjminlineContent-gridContainer"]
    > [id="comp-k02fkpr9"],
    [data-mesh-id="comp-lvf72jjminlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k02fkpr9"] {
        position: relative;
        margin: 0px 0px 0px calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    #comp-k02fkpr9 {
        margin-left: auto;
        margin-right: auto;
        width: calc(100% - 16px - 16px);
        min-width: 980px;
    }
    [data-mesh-id="comp-k02fkptkinlineContent"] {
        height: auto;
        width: 100%;
    }
    [data-mesh-id="comp-k02fkptkinlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: 383px;
        grid-template-rows: repeat(3, min-content) 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-k02fkptkinlineContent-gridContainer"]
    > [id="comp-k025q3gs"],
    [data-mesh-id="comp-k02fkptkinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k025q3gs"] {
        position: relative;
        margin: 114px 0px -4px calc((100% - 222px) * 0.5);
        left: 1px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-k02fkptkinlineContent-gridContainer"]
    > [id="comp-k025onp2"],
    [data-mesh-id="comp-k02fkptkinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k025onp2"] {
        position: relative;
        margin: 0px 0px 10px calc((100% - 222px) * 0.5);
        left: 11px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-k02fkptkinlineContent-gridContainer"]
    > [id="comp-k02fzxi0"],
    [data-mesh-id="comp-k02fkptkinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k02fzxi0"] {
        position: relative;
        margin: 0px 0px 40px calc((100% - 222px) * 0.5);
        left: 101px;
        grid-area: 3 / 1 / 4 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-k02fkptkinlineContent-gridContainer"]
    > [id="comp-k02fphzb"],
    [data-mesh-id="comp-k02fkptkinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k02fphzb"] {
        position: relative;
        margin: 0px 0px 10px calc((100% - 222px) * 0.5);
        left: 20px;
        grid-area: 4 / 1 / 5 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-k02fkpu6inlineContent"] {
        height: auto;
        width: 100%;
    }
    [data-mesh-id="comp-k02fkpu6inlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: 383px;
        grid-template-rows: repeat(3, min-content) 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-k02fkpu6inlineContent-gridContainer"]
    > [id="comp-k03q3mrs"],
    [data-mesh-id="comp-k02fkpu6inlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k03q3mrs"] {
        position: relative;
        margin: 114px 0px -4px calc((100% - 215px) * 0.5);
        left: -2px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-k02fkpu6inlineContent-gridContainer"]
    > [id="comp-k03q3mt1"],
    [data-mesh-id="comp-k02fkpu6inlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k03q3mt1"] {
        position: relative;
        margin: 0px 0px 10px calc((100% - 215px) * 0.5);
        left: 4px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-k02fkpu6inlineContent-gridContainer"]
    > [id="comp-k03q3mu3"],
    [data-mesh-id="comp-k02fkpu6inlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k03q3mu3"] {
        position: relative;
        margin: 0px 0px 40px calc((100% - 215px) * 0.5);
        left: 98px;
        grid-area: 3 / 1 / 4 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-k02fkpu6inlineContent-gridContainer"]
    > [id="comp-k03q3mva"],
    [data-mesh-id="comp-k02fkpu6inlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k03q3mva"] {
        position: relative;
        margin: 0px 0px 10px calc((100% - 215px) * 0.5);
        left: 16px;
        grid-area: 4 / 1 / 5 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-k02fkpuminlineContent"] {
        height: auto;
        width: 100%;
    }
    [data-mesh-id="comp-k02fkpuminlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: 383px;
        grid-template-rows: repeat(3, min-content) 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-k02fkpuminlineContent-gridContainer"]
    > [id="comp-k03q578n"],
    [data-mesh-id="comp-k02fkpuminlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k03q578n"] {
        position: relative;
        margin: 114px 0px -4px calc((100% - 215px) * 0.5);
        left: 4px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-k02fkpuminlineContent-gridContainer"]
    > [id="comp-k03q579x"],
    [data-mesh-id="comp-k02fkpuminlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k03q579x"] {
        position: relative;
        margin: 0px 0px 10px calc((100% - 215px) * 0.5);
        left: 10px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-k02fkpuminlineContent-gridContainer"]
    > [id="comp-k03q57az"],
    [data-mesh-id="comp-k02fkpuminlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k03q57az"] {
        position: relative;
        margin: 0px 0px 40px calc((100% - 215px) * 0.5);
        left: 98px;
        grid-area: 3 / 1 / 4 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-k02fkpuminlineContent-gridContainer"]
    > [id="comp-k03q57c7"],
    [data-mesh-id="comp-k02fkpuminlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k03q57c7"] {
        position: relative;
        margin: 0px 0px 10px calc((100% - 215px) * 0.5);
        left: 16px;
        grid-area: 4 / 1 / 5 / 2;
        justify-self: start;
        align-self: start;
    }
    #comp-k02fkptk {
        width: 222px;
    }
    #comp-k025q3gs {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
    }
    #comp-k025q3gs {
        width: 220px;
        height: auto;
    }
    #comp-k025onp2 {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
    }
    #comp-k025onp2 {
        width: 199px;
        height: auto;
    }
    #comp-k02fzxi0 {
        --lnw: 3px;
        --brd: var(--color_11);
        --alpha-brd: 1;
    }
    #comp-k02fzxi0 {
        width: 19px;
        height: 5px;
    }
    #comp-k02fphzb {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
    }
    #comp-k02fphzb {
        width: 182px;
        height: auto;
    }
    #comp-k02fkpu6 {
        width: 215px;
    }
    #comp-k03q3mrs {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
    }
    #comp-k03q3mrs {
        width: 220px;
        height: auto;
    }
    #comp-k03q3mt1 {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
    }
    #comp-k03q3mt1 {
        width: 207px;
        height: auto;
    }
    #comp-k03q3mu3 {
        --lnw: 3px;
        --brd: var(--color_11);
        --alpha-brd: 1;
    }
    #comp-k03q3mu3 {
        width: 18px;
        height: 5px;
    }
    #comp-k03q3mva {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
    }
    #comp-k03q3mva {
        width: 183px;
        height: auto;
    }
    #comp-k02fkpum {
        width: 215px;
    }
    #comp-k03q578n {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
    }
    #comp-k03q578n {
        width: 207px;
        height: auto;
    }
    #comp-k03q579x {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
    }
    #comp-k03q579x {
        width: 194px;
        height: auto;
    }
    #comp-k03q57az {
        --lnw: 3px;
        --brd: var(--color_11);
        --alpha-brd: 1;
    }
    #comp-k03q57az {
        width: 18px;
        height: 5px;
    }
    #comp-k03q57c7 {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
    }
    #comp-k03q57c7 {
        width: 183px;
        height: auto;
    }
    #comp-lvf72jjm1 {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 0;
    }
    [data-mesh-id="comp-lvf72jjm1inlineContent"] {
        height: auto;
        width: 100%;
    }
    [data-mesh-id="comp-lvf72jjm1inlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        grid-template-rows: 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-lvf72jjm1inlineContent-gridContainer"]
    > [id="comp-k028si32"],
    [data-mesh-id="comp-lvf72jjm1inlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k028si32"] {
        position: relative;
        margin: 0px 0px 0px calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    #comp-k028si32 {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 980px;
    }
    [data-mesh-id="comp-k028si53inlineContent"] {
        height: auto;
        width: 100%;
    }
    [data-mesh-id="comp-k028si53inlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        grid-template-rows: repeat(3, min-content) 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-k028si53inlineContent-gridContainer"]
    > [id="comp-k028t4ha"],
    [data-mesh-id="comp-k028si53inlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k028t4ha"] {
        position: relative;
        margin: 108px 0px 12px calc((100% - 980px) * 0.5);
        left: 175px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-k028si53inlineContent-gridContainer"]
    > [id="comp-k029dktn"],
    [data-mesh-id="comp-k028si53inlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k029dktn"] {
        position: relative;
        margin: 0px 0px 10px calc((100% - 980px) * 0.5);
        left: 370px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-k028si53inlineContent-gridContainer"]
    > [id="comp-mcum3ej7"],
    [data-mesh-id="comp-k028si53inlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-mcum3ej7"] {
        position: relative;
        margin: 0px 0 20px 0;
        left: 0;
        grid-area: 4 / 1 / 5 / 2;
        justify-self: stretch;
        align-self: start;
    }
    [data-mesh-id="comp-k028si53inlineContent-wedge-4"] {
        visibility: hidden;
        height: 331px;
        width: 0;
        grid-area: 1 / 1 / 4 / 2;
    }
    #comp-k028si53 {
        width: 980px;
    }
    #comp-k028t4ha {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
    }
    #comp-k028t4ha {
        width: 629px;
        height: auto;
    }
    #comp-k029dktn {
        --txth: var(--color_15);
        --alpha-txth: 1;
        --trans: color 0.4s ease 0s;
        --fnt: normal normal normal 28px/1.4em didot-w01-italic, serif;
        --txt: var(--color_18);
        --alpha-txt: 1;
        --txtd: 255, 255, 255;
        --alpha-txtd: 1;
    }
    #comp-k029dktn {
        width: 240px;
        height: 56px;
    }
    #comp-mcum3ej7 {
        --alpha-bg: 0;
        --bg: var(--color_11);
    }
    #comp-mcum3ej7 {
        width: 100%;
        left: 0;
        margin-left: 0;
        min-width: initial;
    }
    [data-mesh-id="comp-mcum3ej7inlineContent"] {
        height: auto;
        width: 100%;
        position: static;
        min-height: auto;
        padding-bottom: 0px;
        box-sizing: border-box;
    }
    #comp-mcum3ej7_r_comp-lgnn37ba {
        --l_display: unset;
        min-width: 0px;
        min-height: 0px;
        width: auto;
        height: auto;
        --comp-display: unset;
        align-self: stretch;
        justify-self: stretch;
        pointer-events: auto;
        margin-left: 0px;
        margin-right: 0px;
        margin-top: 0px;
        margin-bottom: 0px;
        grid-area: 1/1/2/2;
        position: relative;
    }
    .comp-mcum3ej7_r_comp-lgnn37ba-container {
        box-sizing: border-box;
        display: var(--l_display, var(--container-display));
        grid-template-rows: 1fr;
        grid-template-columns: 1fr;
        --container-layout-type: grid-container-layout;
        --container-display: grid;
    }
    #comp-mcum3ej7_r_comp-lgnn37ba:not(
				.comp-mcum3ej7_r_comp-lgnn37ba-container
			) {
        display: var(--l_display, var(--container-display));
        grid-template-rows: 1fr;
        grid-template-columns: minmax(0, 1fr);
        --container-display: grid;
    }
    #comp-mcum3ej7_r_comp-lgnn37ba {
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-lppdf90l: 0px;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-lui6dunj: 0px;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-luphkxsd: 32px;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-luphlnw7: 32px;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-luphoq8z: 0px;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-luphrmt3: 0.9999724614798879fr;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-luphsix5: 1.000027538520112fr;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-lupi5x69: 2;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-lupi6w0w: 3;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-lupia2ej-grid: center;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-lupia2ej-flex: center;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-luzhyc9e: 1;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-luzhynx3: 2;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-luziqdtl-grid: center;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-luziqdtl-flex: center;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-luziwul3: 3;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-luzix4gw: 4;
    }
    .device-mobile-optimized #comp-mcum3ej7_r_comp-lgnn37ba {
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-lppdf90l: 0px;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-lui6dunj: 0px;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-luphkxsd: 20px;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-luphlnw7: 20px;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-luphoq8z: 4px;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-luphrmt3: 0.9999724614798879fr;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-luphsix5: 1.000027538520112fr;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-lupi5x69: 1;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-lupi6w0w: 5;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-lupia2ej-grid: center;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-lupia2ej-flex: center;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-luzhyc9e: 2;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-luzhynx3: 3;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-luziqdtl-grid: center;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-luziqdtl-flex: center;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-luziwul3: 1;
        --comp-mcum3ej7_r_comp-lgnn37ba-variables-luzix4gw: 5;
    }
    #comp-mcum3ej7_r_comp-lgnn37bd1 {
        --l_display: unset;
        height: auto;
        min-width: 0px;
        width: auto;
        --comp-display: unset;
        align-self: stretch;
        justify-self: stretch;
        pointer-events: auto;
        margin-left: 0px;
        margin-right: 0px;
        margin-top: 0px;
        margin-bottom: 0px;
        grid-area: 1/1/2/2;
        position: relative;
    }
    .comp-mcum3ej7_r_comp-lgnn37bd1-container {
        box-sizing: border-box;
        padding-top: 0px;
        padding-right: 0px;
        padding-left: 0px;
        padding-bottom: 0px;
        display: var(--l_display, var(--container-display));
        grid-template-rows: min-content auto min-content;
        grid-template-columns: 1fr 1fr;
        --container-layout-type: grid-container-layout;
        --container-display: grid;
    }
    .device-mobile-optimized #comp-mcum3ej7_r_comp-lgnn37bd1 {
        --rd: 0px;
    }
    #comp-mcum3ej7_r_comp-lgnn37bd1 {
        --brw: 0px;
        --brd: var(--color_13);
        --bg: var(--color_11);
        --rd: 0px 0px 0px 0px;
        --shd: none;
        --gradient: none;
        --alpha-brd: 1;
        --alpha-bg: 1;
        --boxShadowToggleOn-shd: none;
        --bg-gradient: none;
    }
    #comp-mcum3ej7_r_comp-lqwd66ma {
        width: auto;
        height: auto;
        min-height: 0px;
        --l_display: unset;
        min-width: 0px;
        --comp-display: unset;
        align-self: stretch;
        justify-self: stretch;
        pointer-events: auto;
        margin-left: 0px;
        margin-right: 0px;
        margin-top: 0px;
        margin-bottom: 0px;
        grid-area: 2/1/3/3;
        position: relative;
    }
    .comp-mcum3ej7_r_comp-lqwd66ma-container {
        box-sizing: border-box;
        display: var(--l_display, var(--container-display));
        grid-template-rows: 1fr;
        grid-template-columns: 1fr;
        --container-layout-type: grid-container-layout;
        --container-display: grid;
    }
    #comp-mcum3ej7_r_comp-lqwd66ma:not(
				.comp-mcum3ej7_r_comp-lqwd66ma-container
			) {
        display: var(--l_display, var(--container-display));
        grid-template-rows: 1fr;
        grid-template-columns: minmax(0, 1fr);
        --container-display: grid;
    }
    #comp-mcum3ej7_r_comp-lqwd66ma_r_comp-lqwcss2e {
        --l_display: unset;
        min-width: 0px;
        min-height: 0px;
        width: auto;
        height: auto;
        --comp-display: unset;
        align-self: stretch;
        justify-self: stretch;
        pointer-events: auto;
        margin-left: 0px;
        margin-right: 0px;
        margin-top: 0px;
        margin-bottom: 0px;
        grid-area: 1/1/2/2;
        position: relative;
    }
    .comp-mcum3ej7_r_comp-lqwd66ma_r_comp-lqwcss2e-container {
        box-sizing: border-box;
        display: var(--l_display, var(--container-display));
        grid-template-rows: 1fr;
        grid-template-columns: 1fr;
        --container-layout-type: grid-container-layout;
        --container-display: grid;
    }
    #comp-mcum3ej7_r_comp-lqwd66ma_r_comp-lqwcss2e:not(
				.comp-mcum3ej7_r_comp-lqwd66ma_r_comp-lqwcss2e-container
			) {
        display: var(--l_display, var(--container-display));
        grid-template-rows: 1fr;
        grid-template-columns: minmax(0, 1fr);
        --container-display: grid;
    }
    #comp-mcum3ej7_r_comp-lqwd66ma_r_comp-lqwcss2i {
        --l_display: unset;
        height: auto;
        width: auto;
        min-width: 0px;
        --comp-display: unset;
        align-self: stretch;
        justify-self: stretch;
        pointer-events: auto;
        margin-left: 0px;
        margin-right: 0px;
        margin-top: 0px;
        margin-bottom: 0px;
        grid-area: 1/1/2/2;
        position: relative;
    }
    .comp-mcum3ej7_r_comp-lqwd66ma_r_comp-lqwcss2i-container {
        box-sizing: border-box;
        padding-top: 20px;
        padding-right: 20px;
        padding-left: 20px;
        padding-bottom: 20px;
        display: var(--l_display, var(--container-display));
        grid-template-rows: min-content min-content;
        grid-template-columns: 1fr;
        --container-layout-type: grid-container-layout;
        --container-display: grid;
    }
    #comp-mcum3ej7_r_comp-lqwd66ma_r_comp-lqwcss2i {
        --brw: 0px;
        --brd: var(--color_13);
        --bg: var(--color_11);
        --rd: 0px;
        --shd: none;
        --gradient: none;
        --alpha-brd: 1;
        --alpha-bg: 0;
        --boxShadowToggleOn-shd: none;
        --bg-gradient: none;
    }
    #comp-mcum3ej7_r_comp-lqwd66ma_r_comp-lqwctm3h {
        width: auto;
        height: auto;
        --l_display: unset;
        --comp-display: unset;
        display: var(--l_display, var(--display, block));
        align-self: end;
        justify-self: stretch;
        pointer-events: auto;
        margin-left: 0%;
        margin-right: 0%;
        margin-top: 0px;
        margin-bottom: 0px;
        grid-area: 1/1/2/2;
        position: relative;
    }
    #comp-mcum3ej7_r_comp-lqwd66ma_r_comp-lqwctm3h {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
        --textDecoration: none;
        --textAlign: center;
        --letterSpacing: 0em;
        --lineHeight: normal;
        --fontSize: 32px;
        --color: var(--color_15);
        --alpha-color: 1;
    }
    #comp-mcum3ej7_r_comp-lqwd66ma_r_comp-lqwcu1sz {
        width: auto;
        height: auto;
        --l_display: unset;
        --comp-display: unset;
        display: var(--l_display, var(--display, block));
        align-self: start;
        justify-self: stretch;
        pointer-events: auto;
        margin-left: 0%;
        margin-right: 0%;
        margin-top: 24px;
        margin-bottom: 0px;
        grid-area: 2/1/3/2;
        position: relative;
    }
    #comp-mcum3ej7_r_comp-lqwd66ma_r_comp-lqwcu1sz {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
        --color: var(--color_15);
        --alpha-color: 1;
        --textAlign: center;
        --letterSpacing: 0em;
        --lineHeight: 1.6em;
        --fontSize: 16px;
    }
    #comp-mcum3ej7_r_comp-lp9pu1jk {
        width: auto;
        height: auto;
        --l_display: unset;
        min-height: 20px;
        --comp-display: unset;
        display: var(--l_display, var(--display, block));
        align-self: stretch;
        justify-self: stretch;
        position: relative;
        --force-auto: auto;
        top: var(--force-auto, calc(0px));
        bottom: var(--force-auto);
        left: var(--force-auto);
        right: var(--force-auto);
        pointer-events: auto;
        margin-left: var(--comp-mcum3ej7_r_comp-lgnn37ba-variables-lui6dunj);
        margin-right: var(--comp-mcum3ej7_r_comp-lgnn37ba-variables-lui6dunj);
        margin-top: var(--comp-mcum3ej7_r_comp-lgnn37ba-variables-lppdf90l);
        margin-bottom: var(--comp-mcum3ej7_r_comp-lgnn37ba-variables-lppdf90l);
        grid-area: 2/1/3/3;
    } /* END STYLABLE DIRECTIVE RULES */

    .device-mobile-optimized
    #comp-mcum3ej7_r_comp-lp9pu1jk
    .comp-mcum3ej7_r_comp-lp9pu1jk-styleId__root
    .nav-arrows-container
    svg.slideshow-arrow {
        fill: #000000;
    }

    /* START STYLABLE DIRECTIVE RULES */

    .device-mobile-optimized
    #comp-mcum3ej7_r_comp-lp9pu1jk
    .comp-mcum3ej7_r_comp-lp9pu1jk-styleId__root
    .nav-arrows-container {
        border-radius: 100px;
        background-color: rgba(255, 255, 255, 0.6);
    }

    .device-mobile-optimized
    #comp-mcum3ej7_r_comp-lp9pu1jk
    .comp-mcum3ej7_r_comp-lp9pu1jk-styleId__root
    .gallery-item-container {
        background-color: rgba(164, 164, 164, 0);
    }

    .device-mobile-optimized
    #comp-mcum3ej7_r_comp-lp9pu1jk
    .comp-mcum3ej7_r_comp-lp9pu1jk-styleId__root
    .gallery-item-container
    .gallery-item-hover::before {
        background-color: rgba(0, 0, 0, 0.7);
    }

    .device-mobile-optimized
    #comp-mcum3ej7_r_comp-lp9pu1jk
    .comp-mcum3ej7_r_comp-lp9pu1jk-styleId__root
    .gallery-item-common-info
    .info-element-description {
        color: #111111;
        font-family: avenir-lt-w01_35-light1475496, sans-serif;
        font-size: 16px;
        font-weight: normal;
        font-style: normal;
        font-size: 16px;
    }

    .device-mobile-optimized
    #comp-mcum3ej7_r_comp-lp9pu1jk
    .comp-mcum3ej7_r_comp-lp9pu1jk-styleId__root
    .gallery-item-common-info
    .info-element-title {
        font-family: avenir-lt-w01_35-light1475496, sans-serif;
        font-size: 30px;
        font-weight: normal;
        font-style: normal;
        font-size: 24px;
        color: #111111;
    }

    .device-mobile-optimized
    #comp-mcum3ej7_r_comp-lp9pu1jk
    .comp-mcum3ej7_r_comp-lp9pu1jk-styleId__root
    .hover-info-element
    .info-element-description {
        color: #f8f8f8;
        font-family: avenir-lt-w01_35-light1475496, sans-serif;
        font-size: 16px;
        font-weight: normal;
        font-style: normal;
        font-size: 14px;
    }

    .device-mobile-optimized
    #comp-mcum3ej7_r_comp-lp9pu1jk
    .comp-mcum3ej7_r_comp-lp9pu1jk-styleId__root
    .hover-info-element
    .info-element-title {
        font-family: avenir-lt-w01_35-light1475496, sans-serif;
        font-size: 30px;
        font-weight: normal;
        font-style: normal;
        font-size: 24px;
        color: #ffffff;
    }

    .device-mobile-optimized
    #comp-mcum3ej7_r_comp-lp9pu1jk
    .comp-mcum3ej7_r_comp-lp9pu1jk-styleId__root
    .gallery-item-container:hover {
        background-color: rgba(0, 0, 0, 0.3);
    }

    .device-mobile-optimized
    #comp-mcum3ej7_r_comp-lp9pu1jk
    .comp-mcum3ej7_r_comp-lp9pu1jk-styleId__root
    .show-more {
        border: 1px solid #111111;
        box-shadow: 0.71px 0.71px 0 0 rgba(0, 0, 0, 0);
        padding: 12px;
    }

    .device-mobile-optimized
    #comp-mcum3ej7_r_comp-lp9pu1jk
    .comp-mcum3ej7_r_comp-lp9pu1jk-styleId__root {
        -st-extends: ProGallery;
        color: #dfe6e9;
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-controllers_layoutParams_info_allowTitleAndDescription: ",controllers_layoutParams_info_allowTitle,controllers_layoutParams_info_allowDescription";
        background: rgba(255, 255, 255, 0);
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-controllers_layoutParams_info_verticalPadding: 0;
        box-shadow: 0.71px 0.71px 0 0 rgba(0, 0, 0, 0);
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-layoutParams_structure_responsiveMode: "SET_ITEMS_PER_ROW";
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-layoutParams_targetItemSize_value: 90;
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-layoutParams_groups_density: 0.3;
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-controllers_layoutParams_info_verticalAlignment: "CENTER";
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-controllers_layoutParams_info_horizontalAlignment: "CENTER";
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-behaviourParams_item_content_hoverAnimation: "NO_EFFECT";
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-controllers_layoutParams_info_horizontalPadding: 0;
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-behaviourParams_item_overlay_hoveringBehaviour: "APPEARS";
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-behaviourParams_gallery_blockContextMenu: true;
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-layoutParams_structure_galleryLayout: 2;
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-layoutParams_structure_scrollDirection: "HORIZONTAL";
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-layoutParams_structure_numberOfGridRows: 1;
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-controllers_layoutParams_structure_galleryRatio_value: 3;
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-controllers_layoutParams_structure_galleryRatio_method: "MANUAL";
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-layoutParams_structure_itemSpacing: 12;
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-layoutParams_navigationArrows_position: "ON_GALLERY";
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-layoutParams_navigationArrows_size: 24;
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-layoutParams_navigationArrows_padding: 24;
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-behaviourParams_item_overlay_hoverAnimation: "NO_EFFECT";
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-behaviourParams_gallery_scrollAnimation: "NO_EFFECT";
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-behaviourParams_gallery_layoutDirection: "LEFT_TO_RIGHT";
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-variant_count: 20;
    }

    .device-mobile-optimized
    #comp-mcum3ej7_r_comp-lp9pu1jk
    .comp-mcum3ej7_r_comp-lp9pu1jk-styleId__root
    .pro-gallery-parent-container {
        border-radius: 0px;
        background-color: rgba(255, 255, 255, 0);
    }

    @media screen and (min-width: 1px) and (max-width: 0px) {
        .device-mobile-optimized
        #comp-mcum3ej7_r_comp-lp9pu1jk
        .comp-mcum3ej7_r_comp-lp9pu1jk-styleId__root
        .nav-arrows-container {
            background-color: rgba(255, 255, 255, 0);
        }
    } /* END STYLABLE DIRECTIVE RULES */

    #comp-mcum3ej7_r_comp-lp9pu1jk
    .comp-mcum3ej7_r_comp-lp9pu1jk-styleId__root
    .nav-arrows-container
    svg.slideshow-arrow {
        fill: #000000;
    }

    /* START STYLABLE DIRECTIVE RULES */

    #comp-mcum3ej7_r_comp-lp9pu1jk
    .comp-mcum3ej7_r_comp-lp9pu1jk-styleId__root
    .nav-arrows-container {
        border-radius: 100px;
        background-color: rgba(255, 255, 255, 0);
    }

    #comp-mcum3ej7_r_comp-lp9pu1jk
    .comp-mcum3ej7_r_comp-lp9pu1jk-styleId__root
    .nav-arrows-container:hover {
        border-radius: 100px;
    }

    #comp-mcum3ej7_r_comp-lp9pu1jk
    .comp-mcum3ej7_r_comp-lp9pu1jk-styleId__root
    .gallery-item-container {
        background-color: rgba(164, 164, 164, 0);
        border-radius: 0px;
    }

    #comp-mcum3ej7_r_comp-lp9pu1jk
    .comp-mcum3ej7_r_comp-lp9pu1jk-styleId__root
    .gallery-item-container
    .gallery-item-hover::before {
        background-color: rgba(0, 0, 0, 0.7);
    }

    #comp-mcum3ej7_r_comp-lp9pu1jk
    .comp-mcum3ej7_r_comp-lp9pu1jk-styleId__root
    .gallery-item-common-info
    .info-element-description {
        font-family: avenir-lt-w01_35-light1475496, sans-serif;
        font-size: 16px;
        font-weight: normal;
        font-style: normal;
        font-size: 16px;
        color: #ffffff;
    }

    #comp-mcum3ej7_r_comp-lp9pu1jk
    .comp-mcum3ej7_r_comp-lp9pu1jk-styleId__root
    .gallery-item-common-info
    .info-element-title {
        font-family: avenir-lt-w01_35-light1475496, sans-serif;
        font-size: 30px;
        font-weight: normal;
        font-style: normal;
        font-size: 24px;
        color: #111111;
    }

    #comp-mcum3ej7_r_comp-lp9pu1jk
    .comp-mcum3ej7_r_comp-lp9pu1jk-styleId__root
    .hover-info-element
    .info-element-description {
        font-family: avenir-lt-w01_35-light1475496, sans-serif;
        font-size: 16px;
        font-weight: normal;
        font-style: normal;
        color: #f8f8f8;
    }

    #comp-mcum3ej7_r_comp-lp9pu1jk
    .comp-mcum3ej7_r_comp-lp9pu1jk-styleId__root
    .hover-info-element
    .info-element-title {
        font-family: avenir-lt-w01_35-light1475496, sans-serif;
        font-size: 30px;
        font-weight: normal;
        font-style: normal;
        font-size: 24px;
        color: #ffffff;
    }

    #comp-mcum3ej7_r_comp-lp9pu1jk
    .comp-mcum3ej7_r_comp-lp9pu1jk-styleId__root
    .gallery-item-container:hover {
        background-color: rgba(0, 0, 0, 0.3);
    }

    #comp-mcum3ej7_r_comp-lp9pu1jk
    .comp-mcum3ej7_r_comp-lp9pu1jk-styleId__root
    .show-more {
        border: 1px solid #111111;
        box-shadow: 0.71px 0.71px 0 0 rgba(0, 0, 0, 0);
        padding: 12px;
    }

    #comp-mcum3ej7_r_comp-lp9pu1jk
    .comp-mcum3ej7_r_comp-lp9pu1jk-styleId__root {
        -st-extends: ProGallery;
        color: #dfe6e9;
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-controllers_layoutParams_info_allowTitleAndDescription: ",controllers_layoutParams_info_allowTitle,controllers_layoutParams_info_allowDescription";
        background: rgba(255, 255, 255, 0);
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-controllers_layoutParams_info_verticalPadding: 0;
        box-shadow: 0.71px 0.71px 0 0 rgba(0, 0, 0, 0);
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-layoutParams_structure_responsiveMode: "SET_ITEMS_PER_ROW";
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-layoutParams_groups_density: 0.3;
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-controllers_layoutParams_info_verticalAlignment: "CENTER";
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-controllers_layoutParams_info_horizontalAlignment: "CENTER";
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-behaviourParams_item_content_hoverAnimation: "NO_EFFECT";
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-controllers_layoutParams_info_horizontalPadding: 0;
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-layoutParams_structure_galleryLayout: 2;
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-behaviourParams_item_overlay_hoveringBehaviour: "APPEARS";
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-behaviourParams_gallery_blockContextMenu: true;
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-layoutParams_structure_itemSpacing: 12;
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-layoutParams_structure_scrollDirection: "HORIZONTAL";
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-layoutParams_crop_ratios: 1;
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-layoutParams_targetItemSize_value: 21;
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-controllers_layoutParams_structure_galleryRatio_value: 3;
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-layoutParams_crop_method: "FILL";
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-controllers_layoutParams_structure_galleryRatio_method: "MANUAL";
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-layoutParams_navigationArrows_position: "ON_GALLERY";
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-layoutParams_navigationArrows_container_type: "BOX";
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-layoutParams_navigationArrows_verticalAlignment: "ITEM_CENTER";
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-layoutParams_navigationArrows_enable: true;
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-behaviourParams_item_overlay_hoverAnimation: "NO_EFFECT";
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-behaviourParams_gallery_scrollAnimation: "NO_EFFECT";
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-layoutParams_structure_numberOfGridRows: 1;
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-layoutParams_navigationArrows_size: 50;
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-layoutParams_navigationArrows_padding: 32;
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-behaviourParams_gallery_layoutDirection: "LEFT_TO_RIGHT";
        --comp-mcum3ej7_r_comp-lp9pu1jk-styleId-ProGallery-variant_count: 27;
    }

    #comp-mcum3ej7_r_comp-lp9pu1jk
    .comp-mcum3ej7_r_comp-lp9pu1jk-styleId__root
    .pro-gallery-parent-container {
        border-radius: 0px;
        background: rgba(255, 255, 255, 0);
    }
    #comp-mcum3ej7_r_comp-luph70yy {
        width: auto;
        height: auto;
        min-height: 0px;
        --l_display: unset;
        min-width: 0px;
        --comp-display: unset;
        align-self: stretch;
        justify-self: stretch;
        pointer-events: auto;
        margin-left: 0px;
        margin-right: 0px;
        margin-top: 0px;
        margin-bottom: 0px;
        grid-area: 1/1/2/3;
        position: relative;
    }
    .comp-mcum3ej7_r_comp-luph70yy-container {
        box-sizing: border-box;
        padding-top: var(--comp-mcum3ej7_r_comp-lgnn37ba-variables-luphkxsd);
        padding-right: var(--comp-mcum3ej7_r_comp-lgnn37ba-variables-luphlnw7);
        padding-left: var(--comp-mcum3ej7_r_comp-lgnn37ba-variables-luphlnw7);
        padding-bottom: var(--comp-mcum3ej7_r_comp-lgnn37ba-variables-luphkxsd);
        column-gap: 8px;
        display: var(--l_display, var(--container-display));
        grid-template-rows: min-content min-content;
        grid-template-columns: var(
					--comp-mcum3ej7_r_comp-lgnn37ba-variables-luphrmt3
				) max-content max-content var(
					--comp-mcum3ej7_r_comp-lgnn37ba-variables-luphsix5
				);
        --container-layout-type: grid-container-layout;
        --container-display: grid;
    }
    #comp-mcum3ej7_r_comp-luph70yy:not(
				.comp-mcum3ej7_r_comp-luph70yy-container
			) {
        display: var(--l_display, var(--container-display));
        grid-template-rows: 1fr;
        grid-template-columns: minmax(0, 1fr);
        --container-display: grid;
    }
    #comp-mcum3ej7_r_comp-luph70yy {
        --brw: 0px;
        --brd: 50, 65, 88;
        --bg: var(--color_11);
        --rd: 0px;
        --shd: none;
        --gradient: none;
        --alpha-brd: 1;
        --alpha-bg: 0;
        --boxShadowToggleOn-shd: none;
        --bg-gradient: none;
    }
    #comp-mcum3ej7_r_comp-m010jxj2 {
        width: 150px;
        height: 48.8671875px;
        min-height: 0px;
        --l_display: unset;
        min-width: 0px;
        max-width: 99999px;
        max-height: 99999px;
        --comp-display: unset;
        display: var(--l_display, var(--display, block));
        align-self: stretch;
        justify-self: center;
        pointer-events: auto;
        margin-left: 0%;
        margin-right: 0%;
        margin-top: 31.992406249999988px;
        margin-bottom: 31.992406250000045px;
        grid-area: 3/1/4/3;
        position: relative;
    } /* END STYLABLE DIRECTIVE RULES */

    .device-mobile-optimized
    #comp-mcum3ej7_r_comp-m010jxj2
    .comp-mcum3ej7_r_comp-m010jxj2-styleId__root {
        -st-extends: StylableButton;
        transition: all 0.2s ease, visibility 0s;
        border-radius: 0px;
        padding-right: 16px;
        padding-left: 16px;
        border: 1px solid #bc4c2a;
        padding-top: 12px;
        padding-bottom: 12px;
        background: #ffffff;
    }

    /* START STYLABLE DIRECTIVE RULES */

    .device-mobile-optimized
    #comp-mcum3ej7_r_comp-m010jxj2
    .comp-mcum3ej7_r_comp-m010jxj2-styleId__root:hover {
        background: #ffffff;
        border: 1px solid rgba(56, 74, 211, 0.7);
    }

    .device-mobile-optimized
    #comp-mcum3ej7_r_comp-m010jxj2
    .comp-mcum3ej7_r_comp-m010jxj2-styleId__root:hover
    .StylableButton2545352419__icon {
        transform: rotate(2deg);
        fill: #111111;
    }

    .device-mobile-optimized
    #comp-mcum3ej7_r_comp-m010jxj2
    .comp-mcum3ej7_r_comp-m010jxj2-styleId__root:hover
    .StylableButton2545352419__label {
        color: rgba(56, 74, 211, 0.7);
    }

    .device-mobile-optimized
    #comp-mcum3ej7_r_comp-m010jxj2
    .comp-mcum3ej7_r_comp-m010jxj2-styleId__root:disabled {
        background: #ffffff;
        border: 1px solid #f6f3ef;
    }

    .device-mobile-optimized
    #comp-mcum3ej7_r_comp-m010jxj2
    .comp-mcum3ej7_r_comp-m010jxj2-styleId__root:disabled
    .StylableButton2545352419__label {
        color: #f6f3ef;
    }

    .device-mobile-optimized
    #comp-mcum3ej7_r_comp-m010jxj2
    .comp-mcum3ej7_r_comp-m010jxj2-styleId__root:disabled
    .StylableButton2545352419__icon {
        fill: #8f8f8f;
    }

    .device-mobile-optimized
    #comp-mcum3ej7_r_comp-m010jxj2
    .comp-mcum3ej7_r_comp-m010jxj2-styleId__root
    .StylableButton2545352419__container {
        transition: inherit;
        flex-direction: row-reverse;
    }

    .device-mobile-optimized
    #comp-mcum3ej7_r_comp-m010jxj2
    .comp-mcum3ej7_r_comp-m010jxj2-styleId__root
    .StylableButton2545352419__label {
        transition: inherit;
        display: inherited;
        margin: 0px 0px 0px 4px;
        letter-spacing: 0em;
        line-height: 1.4em;
        text-align: center;
        color: #bc4c2a;
        font-family: avenir-lt-w01_35-light1475496, sans-serif;
        font-size: 16px;
        font-weight: normal;
        font-style: normal;
        font-size: 16px;
    }

    .device-mobile-optimized
    #comp-mcum3ej7_r_comp-m010jxj2
    .comp-mcum3ej7_r_comp-m010jxj2-styleId__root
    .StylableButton2545352419__icon {
        transition: inherit;
        margin: 0px 4px 0px 0px;
        width: 24px;
        height: 24px;
        fill: #bc4c2a;
        display: none;
    } /* END STYLABLE DIRECTIVE RULES */

    #comp-mcum3ej7_r_comp-m010jxj2
    .comp-mcum3ej7_r_comp-m010jxj2-styleId__root {
        -st-extends: StylableButton;
        transition: all 0.2s ease, visibility 0s;
        border-radius: 0px;
        padding-right: 16px;
        padding-left: 16px;
        border: 1px solid #bc4c2a;
        padding-top: 12px;
        padding-bottom: 12px;
        background: #ffffff;
    }

    /* START STYLABLE DIRECTIVE RULES */

    #comp-mcum3ej7_r_comp-m010jxj2
    .comp-mcum3ej7_r_comp-m010jxj2-styleId__root:hover {
        background: #ffffff;
        border: 1px solid rgba(56, 74, 211, 0.7);
    }

    #comp-mcum3ej7_r_comp-m010jxj2
    .comp-mcum3ej7_r_comp-m010jxj2-styleId__root:hover
    .StylableButton2545352419__icon {
        transform: rotate(2deg);
        fill: #111111;
    }

    #comp-mcum3ej7_r_comp-m010jxj2
    .comp-mcum3ej7_r_comp-m010jxj2-styleId__root:hover
    .StylableButton2545352419__label {
        color: rgba(56, 74, 211, 0.7);
    }

    #comp-mcum3ej7_r_comp-m010jxj2
    .comp-mcum3ej7_r_comp-m010jxj2-styleId__root:disabled {
        background: #ffffff;
        border: 1px solid #f6f3ef;
    }

    #comp-mcum3ej7_r_comp-m010jxj2
    .comp-mcum3ej7_r_comp-m010jxj2-styleId__root:disabled
    .StylableButton2545352419__label {
        color: #f6f3ef;
    }

    #comp-mcum3ej7_r_comp-m010jxj2
    .comp-mcum3ej7_r_comp-m010jxj2-styleId__root:disabled
    .StylableButton2545352419__icon {
        fill: #8f8f8f;
    }

    #comp-mcum3ej7_r_comp-m010jxj2
    .comp-mcum3ej7_r_comp-m010jxj2-styleId__root
    .StylableButton2545352419__container {
        transition: inherit;
        flex-direction: row-reverse;
    }

    #comp-mcum3ej7_r_comp-m010jxj2
    .comp-mcum3ej7_r_comp-m010jxj2-styleId__root
    .StylableButton2545352419__label {
        transition: inherit;
        display: inherited;
        margin: 0px 0px 0px 4px;
        letter-spacing: 0em;
        line-height: 1.4em;
        text-align: center;
        color: #bc4c2a;
        font-family: avenir-lt-w01_35-light1475496, sans-serif;
        font-size: 16px;
        font-weight: normal;
        font-style: normal;
        font-size: 16px;
    }

    #comp-mcum3ej7_r_comp-m010jxj2
    .comp-mcum3ej7_r_comp-m010jxj2-styleId__root
    .StylableButton2545352419__icon {
        transition: inherit;
        margin: 0px 4px 0px 0px;
        width: 24px;
        height: 24px;
        fill: #bc4c2a;
        display: none;
    }
    #comp-lvf72jjn {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 0;
    }
    [data-mesh-id="comp-lvf72jjninlineContent"] {
        height: auto;
        width: 100%;
    }
    [data-mesh-id="comp-lvf72jjninlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        grid-template-rows: 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-lvf72jjninlineContent-gridContainer"]
    > [id="comp-k029lmv4"],
    [data-mesh-id="comp-lvf72jjninlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k029lmv4"] {
        position: relative;
        margin: 0px 0px 0px calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    #comp-k029lmv4 {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 980px;
    }
    [data-mesh-id="comp-k029lmw7inlineContent"] {
        height: auto;
        width: 100%;
    }
    [data-mesh-id="comp-k029lmw7inlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        grid-template-rows: min-content 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-k029lmw7inlineContent-gridContainer"]
    > [id="comp-k06l4jp2"],
    [data-mesh-id="comp-k029lmw7inlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k06l4jp2"] {
        position: relative;
        margin: 63px 0px 16px calc((100% - 327px) * 1);
        left: 154px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-k029lmw7inlineContent-gridContainer"]
    > [id="comp-k029qmvg"],
    [data-mesh-id="comp-k029lmw7inlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k029qmvg"] {
        position: relative;
        margin: 0px 0px 57px calc((100% - 327px) * 1);
        left: 4px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-k02aq3h2inlineContent"] {
        height: auto;
        width: 100%;
    }
    [data-mesh-id="comp-k02aq3h2inlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        grid-template-rows: min-content 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-k02aq3h2inlineContent-gridContainer"]
    > [id="comp-k06l4fnm"],
    [data-mesh-id="comp-k02aq3h2inlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k06l4fnm"] {
        position: relative;
        margin: 63px 0px 16px calc((100% - 327px) * 0.5);
        left: 153px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-k02aq3h2inlineContent-gridContainer"]
    > [id="comp-k02avett"],
    [data-mesh-id="comp-k02aq3h2inlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k02avett"] {
        position: relative;
        margin: 0px 0px 57px calc((100% - 327px) * 0.5);
        left: 3px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-k02aq67tinlineContent"] {
        height: auto;
        width: 100%;
    }
    [data-mesh-id="comp-k02aq67tinlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        grid-template-rows: min-content 1fr;
        grid-template-columns: 100%;
    }
    [data-mesh-id="comp-k02aq67tinlineContent-gridContainer"]
    > [id="comp-k06k4usu"],
    [data-mesh-id="comp-k02aq67tinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k06k4usu"] {
        position: relative;
        margin: 64px 0px 15px calc((100% - 326px) * 0);
        left: 154px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
    }
    [data-mesh-id="comp-k02aq67tinlineContent-gridContainer"]
    > [id="comp-k02avq28"],
    [data-mesh-id="comp-k02aq67tinlineContent-gridContainer"]
    > wix-interact-element
    > [id="comp-k02avq28"] {
        position: relative;
        margin: 0px 0px 57px calc((100% - 326px) * 0);
        left: 4px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
    }
    #comp-k029lmw7 {
        width: 327px;
    }
    #comp-k06l4jp2 {
        --lnw: 3px;
        --brd: var(--color_18);
        --alpha-brd: 1;
    }
    #comp-k06l4jp2 {
        width: 18px;
        height: 5px;
    }
    #comp-k029qmvg {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
    }
    #comp-k029qmvg {
        width: 319px;
        height: auto;
    }
    #comp-k02aq3h2 {
        width: 327px;
    }
    #comp-k06l4fnm {
        --lnw: 3px;
        --brd: var(--color_18);
        --alpha-brd: 1;
    }
    #comp-k06l4fnm {
        width: 20px;
        height: 5px;
    }
    #comp-k02avett {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
    }
    #comp-k02avett {
        width: 320px;
        height: auto;
    }
    #comp-k02aq67t {
        width: 326px;
    }
    #comp-k06k4usu {
        --lnw: 3px;
        --brd: var(--color_18);
        --alpha-brd: 1;
    }
    #comp-k06k4usu {
        width: 17px;
        height: 5px;
    }
    #comp-k02avq28 {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
    }
    #comp-k02avq28 {
        width: 317px;
        height: auto;
    }
</style>
<style id="compCssMappers_c1dmp">
    #c1dmp {
        width: auto;
        min-height: 40px;
    }
    #pageBackground_c1dmp {
        --bg-position: absolute;
        --fill-layer-background-overlay-color: transparent;
        --fill-layer-background-overlay-position: absolute;
        --bg-overlay-color: rgb(var(--color_11));
        --bg-gradient: none;
    }
    #comp-lvf72jjk {
        --fill-layer-image-opacity: 0.7;
        --bg-overlay-color: rgb(var(--color_15));
        --bg-gradient: none;
        min-width: 980px;
    }
    #comp-k00w5lmz {
        --text-direction: var(--wix-opt-in-direction);
    }
    #comp-k00wjfku {
        --shc-mutated-brightness: 128, 128, 128;
        --margin-start: 0px;
        --margin-end: 0px;
        --fnt: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        direction: var(--wix-opt-in-direction, ltr);
        --label-align: center;
        --label-text-align: center;
    }
    #comp-lvf72jjl {
        --bg-overlay-color: transparent;
        --bg-gradient: none;
        min-width: 980px;
    }
    #comp-k00x1l4v {
        --text-direction: var(--wix-opt-in-direction);
    }
    #comp-k00x5vdf {
        transform-origin: center 1.5px;
    }
    .comp-k00x9iml {
        --wix-direction: ltr;
        --full_width_margin: 80;
        --galleryImageRatio: 3;
        --galleryMargin: 35;
        --gallery_productMargin: 18;
        --gallery_productBorderStyleType: 1;
        --gallery_priceAndDiscountLayout: 1;
        --gallery_addToCartButtonContentType: 1;
        --gallery_addToCartButtonIcon: 3;
        --gallery_addToCartButtonIconSize: 30;
        --gallery_addToCartButtonPlacement: 2;
        --gallery_addToCartButtonOnImageSidePadding: 4;
        --gallery_addToCartButtonOnImageBottomPadding: 4;
        --gallery_ribbonSidePadding: 0;
        --gallery_ribbonTopPadding: 0;
        --gallery_ribbonCornerRadius: 0;
        --gallery_ribbonBorderWidth: 0;
        --gallery_namePriceLayout: 1;
        --gallery_productOptionSwatchesLimit: 4;
        --gallery_productDropdownListWidth: 100;
        --gallery_quantityBoxWidth: 100;
        --galleryColumns: 4;
        --galleryRows: 5;
        --galleryMarginRow: 35;
        --galleryMarginColumn: 35;
        --mobile-galleryMarginRow: 20;
        --mobile-galleryMarginColumn: 20;
        --mobile-gallery_productMargin: 18;
        --gallery_imageMode: 1;
        --mobile-gallery_imageMode: 1;
        --gallery_ribbonPlacement: 1;
        --gallery_ribbonType: 1;
        --mobile-galleryImageRatio: 3;
        --mobile-galleryMargin: 10;
        --mobile-galleryColumns: 1;
        --gallery_addToCartAction: 1;
        --gallery_productSize: 240;
        --gallery_productsCount: 24;
        --gallery_fixedGridProductsCount: 20;
        --gallery_gapSize: 20;
        --gallery_gapSizeColumn: 20;
        --gallery_gapSizeRow: 20;
        --gallery_gridType: 1;
        --gallery_loadMoreProductsType: 1;
        --gallery_paginationFormat: 1;
        --mobile-gallery_headerTextFontSize: 25;
        --mobile-gallery_productNameFontSize: 16;
        --mobile-gallery_productPriceFontSize: 18;
        --mobile-gallery_discountNameFontSize: 14;
        --mobile-gallery_buttonTextFontSize: 15;
        --mobile-gallery_ribbonTextFontSize: 14;
        --gallery_imageWidth: 50;
        --mobile-gallery_imageWidth: 50;
        --gallery_imageAndInfoSpacing: 0;
        --mobile-gallery_imageAndInfoSpacing: 0;
        --gallery_itemLinkVerticalCustomizePadding: 0;
        --gallery_itemLinkHorizontalCustomizePadding: 0;
        --mobile-gallery_itemLinkVerticalCustomizePadding: 0;
        --mobile-gallery_itemLinkHorizontalCustomizePadding: 0;
        --gallery_categoryHeaderSpaceBetweenTitleDescription: 4;
        --gallery_categoryHeaderImageCornerRadius: 0;
        --gallery_categoryDescriptionContainerCornerRadius: 0;
        --gallery_categoryHeaderPosition: 0;
        --gallery_categoryHeaderLayout: 0;
        --gallery_categoryHeaderImageMinHeight: 280;
        --gallery_categoryDescriptionContainerBorderWidth: 0;
        --gallery_categoryListHeaderBehavior: 0;
        --gallery_longCategoryListLayout: 0;
        --gallery_categoryListMaxRows: 10;
        --mobile-gallery_categoriesBreadcrumbsFontSize: 16;
        --mobile-gallery_categoryDescriptionFontSize: 16;
        --mobile-gallery_categoryReadMoreFontSize: 16;
        --mobile-gallery_categoryFilterAndSortButtonFontSize: 14;
        --mobile-gallery_categoryTitleFontSize: 28;
        --gallery_categoryMobileFilterAndSortButtonStyle: 0;
        --gallery_sortingAndFiltersButtonBorderWidth: 1;
        --gallery_sortingAndFiltersButtonRadius: 0;
        --gallery_categoryListStrategy: 0;
        --gallery_categoryListItemsToShow: 1;
        --gallery_categoryListLayout: 0;
        --gallery_categoryListHorizontalOverflow: 1;
        --gallery_scrollNavigationIntervals: 0;
        --gallery_categoryListHorizontalSpaceBetween: 8;
        --gallery_categoryListHorizontalButtonsVerticalPadding: 6;
        --gallery_categoryListHorizontalButtonsHorizontalPadding: 12;
        --gallery_categoryListHorizontalWidth: 100;
        --gallery_categoryListHorizontalPosition: 0;
        --gallery_categoryListHorizontalBaseButtonBorderWidth: 1;
        --gallery_categoryListHorizontalHoverButtonBorderWidth: 1;
        --gallery_categoryListHorizontalSelectedButtonBorderWidth: 1;
        --gallery_categoryListHorizontalBaseButtonCornerRadius: 0;
        --gallery_categoryListHorizontalHoverButtonCornerRadius: 0;
        --gallery_categoryListHorizontalSelectedButtonCornerRadius: 0;
        --gallery_editorViewMode: 1;
        --gallery_categoryListHorizontalUnderlineWidth: 0;
        --gallery_categoryListHorizontalBaseButtonBorderType: 2;
        --gallery_categoryListHorizontalHoverButtonBorderType: 2;
        --gallery_categoryListHorizontalSelectedButtonBorderType: 2;
        --gallery_sliderArrowsPlacement: 1;
        --gallery_sliderTeaserOffset: 40;
        --gallery_stickySidebarDistanceFromTop: 30;
        --gallery_sliderArrowsSize: 24;
        --gallery_paginationDotsMarginTop: 20;
        --gallery_sliderNavigationArrowsSpacing: 16;
        --gallery_sliderArrowsContainerBorderWidth: 0;
        --gallery_sliderArrowsCornerRadius: 0;
        --gallery_nameAndPriceGap: 4;
        --gallery_layoutVerticalPadding: 16;
        --gallery_layoutHorizontalPadding: 0;
        --gallery_sliderScrollBehavior: 0;
        --gallery_appliedFiltersBorderRadius: 0;
        --gallery_appliedFiltersBorderWidth: 0;
        --gallery_cardCornerRadius: 0;
        --gallery_imageCornerRadius: 0;
        --gallery_dividerLength: 154;
        --gallery_dividerWidth: 3;
        --gallery_loadMoreButtoncornersRadius: 0;
        --gallery_textualOptionType: 1;
        --gallery_buttonOptionWidthType: 0;
        --gallery_buttonOptionsHorizontalPadding: 8;
        --gallery_buttonOptionsVerticalPadding: 4;
        --gallery_alignment: center;
        --gallery_hoverType: none;
        --gallery_discountNameFont: normal normal normal 14px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_addToCartButtonTextFont: normal normal normal 15px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_ribbonTextFont: normal normal normal 14px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --mobile-gallery_imageEffect: none;
        --gallery_imageCarouselArrowSize: small;
        --gallery_paginationAlignment: center;
        --gallery_verticalAlignment: center;
        --gallery_imagePlacement: vertical;
        --mobile-gallery_imagePlacement: vertical;
        --gallery_imagePosition: left;
        --mobile-gallery_imagePosition: left;
        --gallery_autoGridTemplateRepeatOption: auto-fit;
        --gallery_categoryInfoAlignment: left;
        --gallery_categoryInfoVerticalAlignment: bottom;
        --gallery_categoriesBreadcrumbsAlignment: left;
        --gallery_categoriesBreadcrumbsFont: normal normal normal 16px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_addToCartButtonWidth: stretch;
        --gallery_categoryProductCounterFont: normal normal normal 14px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_productsCounterFont: normal normal normal 14px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_categoryNameFont: normal normal normal 28px/1.4em
        poppins-semibold,
        poppins, sans-serif;
        --gallery_categoryDescriptionFont: normal normal normal 16px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_categoryDescriptionReadMoreLinkFont: normal normal normal 16px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_categoryTreeTitleFont: normal normal normal 20px/1.4em
        poppins-semibold,
        poppins, sans-serif;
        --gallery_categoryMenuTitleFont: normal normal normal 20px/1.4em
        poppins-semibold,
        poppins, sans-serif;
        --gallery_filtersTitleFont: normal normal normal 20px/1.4em
        poppins-semibold,
        poppins, sans-serif;
        --gallery_categoryAndFilterNamesFont: normal normal normal 16px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_filterOptionsFont: normal normal normal 14px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_selectedCategoryFont: normal normal normal 16px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_categoryListHeaderFont: normal normal normal 16px/1.4em
        poppins-semibold,
        poppins, sans-serif;
        --gallery_categoryListViewMoreLessFont: normal normal normal 16px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_categoryHoverFont: normal normal normal 16px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_clearFiltersButtonFont: normal normal normal 14px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_sortingLabelFont: normal normal normal 16px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_sortingDefaultOption: gallerySortRecommended;
        --gallery_quantityAndOptionsTextFont: normal normal normal 14px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_priceBreakdownFont: normal normal normal 12px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_headerTextFont: normal normal normal 25px/1.4em poppins-semibold,
        poppins, sans-serif;
        --gallery_titleFont: normal normal normal 26px/1.4em poppins-semibold,
        poppins, sans-serif;
        --gallery_subtitleFont: normal normal normal 15px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_sortingFiltersTextFont: normal normal normal 16px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_outOfStockFontStyle: normal normal normal 16px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_categoriesFilterAndSortButtonTextFont: normal normal normal 16px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_categoryListHorizontalAlignment: start;
        --gallery_categoryListHorizontalBaseButtonTextFont: normal normal normal
        16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_categoryListHorizontalHoverButtonTextFont: normal normal normal
        16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_categoryListHorizontalSelectedButtonTextFont: normal normal
        normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_noProductsMessageFont: normal normal normal 20px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_quickViewTextFontStyle: normal normal normal 14px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_paginationDotsAlignment: center;
        --gallery_quantityAndOptionsAdditionalSwatchesTextFont: normal normal
        normal 14px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_outOfStockTextFontStyle: normal normal normal 16px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_paginationNumbersTextFont: normal normal normal 16px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_loadMoreButtonborderSize: 1px;
        --gallery_loadMoreButtonbuttonWidth: 22%;
        --gallery_loadMoreButtontextFont: normal normal normal 16px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_headerTextAlignment: start;
        --gallery_background: 255, 255, 255, 0;
        --gallery_background-rgb: 255, 255, 255;
        --gallery_background-opacity: 0;
        --gallery_priceColor: 188, 76, 42;
        --gallery_priceColor-rgb: 188, 76, 42;
        --gallery_priceColor-opacity: 1;
        --gallery_productBackground: 255, 255, 255, 0;
        --gallery_productBackground-rgb: 255, 255, 255;
        --gallery_productBackground-opacity: 0;
        --gallery_quickViewBackground: 255, 255, 255;
        --gallery_quickViewBackground-rgb: 255, 255, 255;
        --gallery_quickViewBackground-opacity: 1;
        --gallery_quickViewTextColor: 17, 17, 17;
        --gallery_quickViewTextColor-rgb: 17, 17, 17;
        --gallery_quickViewTextColor-opacity: 1;
        --quickView_background: 255, 255, 255;
        --quickView_background-rgb: 255, 255, 255;
        --quickView_background-opacity: 1;
        --quickView_thumbnailBorder: 188, 76, 42;
        --quickView_thumbnailBorder-rgb: 188, 76, 42;
        --quickView_thumbnailBorder-opacity: 1;
        --quickView_priceColor: 188, 76, 42;
        --quickView_priceColor-rgb: 188, 76, 42;
        --quickView_priceColor-opacity: 1;
        --gallery_paginationDotsBorderColor: 17, 17, 17, 0;
        --gallery_paginationDotsBorderColor-rgb: 17, 17, 17;
        --gallery_paginationDotsBorderColor-opacity: 0;
        --gallery_paginationDotsOpacityAndColor: 17, 17, 17;
        --gallery_paginationDotsOpacityAndColor-rgb: 17, 17, 17;
        --gallery_paginationDotsOpacityAndColor-opacity: 1;
        --gallery_loadMoreButtontextColor: 17, 17, 17;
        --gallery_loadMoreButtontextColor-rgb: 17, 17, 17;
        --gallery_loadMoreButtontextColor-opacity: 1;
        --gallery_loadMoreButtonborderColor: 17, 17, 17;
        --gallery_loadMoreButtonborderColor-rgb: 17, 17, 17;
        --gallery_loadMoreButtonborderColor-opacity: 1;
        --gallery_categoryProductCounterColor: 113, 113, 111;
        --gallery_categoryProductCounterColor-rgb: 113, 113, 111;
        --gallery_categoryProductCounterColor-opacity: 1;
        --gallery_productsCounterColor: 113, 113, 111;
        --gallery_productsCounterColor-rgb: 113, 113, 111;
        --gallery_productsCounterColor-opacity: 1;
        --gallery_categoriesBreadcrumbsColor: 17, 17, 17;
        --gallery_categoriesBreadcrumbsColor-rgb: 17, 17, 17;
        --gallery_categoriesBreadcrumbsColor-opacity: 1;
        --gallery_categoryNameColor: 17, 17, 17;
        --gallery_categoryNameColor-rgb: 17, 17, 17;
        --gallery_categoryNameColor-opacity: 1;
        --gallery_categoryDescriptionColor: 17, 17, 17;
        --gallery_categoryDescriptionColor-rgb: 17, 17, 17;
        --gallery_categoryDescriptionColor-opacity: 1;
        --gallery_categoryDescriptionReadMoreLinkColor: 17, 17, 17;
        --gallery_categoryDescriptionReadMoreLinkColor-rgb: 17, 17, 17;
        --gallery_categoryDescriptionReadMoreLinkColor-opacity: 1;
        --gallery_categoryDescriptionContainerColor: 255, 255, 255;
        --gallery_categoryDescriptionContainerColor-rgb: 255, 255, 255;
        --gallery_categoryDescriptionContainerColor-opacity: 1;
        --gallery_categoryDescriptionContainerBorderColor: 17, 17, 17;
        --gallery_categoryDescriptionContainerBorderColor-rgb: 17, 17, 17;
        --gallery_categoryDescriptionContainerBorderColor-opacity: 1;
        --gallery_selectedCategoryColor: 188, 76, 42;
        --gallery_selectedCategoryColor-rgb: 188, 76, 42;
        --gallery_selectedCategoryColor-opacity: 1;
        --gallery_categoryListHeaderColor: 17, 17, 17;
        --gallery_categoryListHeaderColor-rgb: 17, 17, 17;
        --gallery_categoryListHeaderColor-opacity: 1;
        --gallery_categoryListViewMoreLessColor: 17, 17, 17;
        --gallery_categoryListViewMoreLessColor-rgb: 17, 17, 17;
        --gallery_categoryListViewMoreLessColor-opacity: 1;
        --gallery_categoryHoverColor: 17, 17, 17;
        --gallery_categoryHoverColor-rgb: 17, 17, 17;
        --gallery_categoryHoverColor-opacity: 1;
        --gallery_clearFiltersButtonColor: 17, 17, 17;
        --gallery_clearFiltersButtonColor-rgb: 17, 17, 17;
        --gallery_clearFiltersButtonColor-opacity: 1;
        --gallery_sortingLabelColor: 17, 17, 17;
        --gallery_sortingLabelColor-rgb: 17, 17, 17;
        --gallery_sortingLabelColor-opacity: 1;
        --gallery_sortingAndFiltersFillColor: 255, 255, 255;
        --gallery_sortingAndFiltersFillColor-rgb: 255, 255, 255;
        --gallery_sortingAndFiltersFillColor-opacity: 1;
        --gallery_sortingFiltersTextColor: 17, 17, 17;
        --gallery_sortingFiltersTextColor-rgb: 17, 17, 17;
        --gallery_sortingFiltersTextColor-opacity: 1;
        --gallery_categoriesFilterAndSortButtonTextColor: 17, 17, 17;
        --gallery_categoriesFilterAndSortButtonTextColor-rgb: 17, 17, 17;
        --gallery_categoriesFilterAndSortButtonTextColor-opacity: 1;
        --gallery_categoryListHorizontalBaseButtonBackgroundColor: 255, 255, 255,
        0;
        --gallery_categoryListHorizontalBaseButtonBackgroundColor-rgb: 255, 255,
        255;
        --gallery_categoryListHorizontalBaseButtonBackgroundColor-opacity: 0;
        --gallery_categoryListHorizontalHoverButtonBackgroundColor: 188, 76, 42,
        0.1;
        --gallery_categoryListHorizontalHoverButtonBackgroundColor-rgb: 188, 76,
        42;
        --gallery_categoryListHorizontalHoverButtonBackgroundColor-opacity: 0.1;
        --gallery_categoryListHorizontalSelectedButtonBackgroundColor: 188, 76, 42;
        --gallery_categoryListHorizontalSelectedButtonBackgroundColor-rgb: 188, 76,
        42;
        --gallery_categoryListHorizontalSelectedButtonBackgroundColor-opacity: 1;
        --gallery_categoryListHorizontalBaseButtonTextColor: 17, 17, 17;
        --gallery_categoryListHorizontalBaseButtonTextColor-rgb: 17, 17, 17;
        --gallery_categoryListHorizontalBaseButtonTextColor-opacity: 1;
        --gallery_categoryListHorizontalHoverButtonTextColor: 17, 17, 17;
        --gallery_categoryListHorizontalHoverButtonTextColor-rgb: 17, 17, 17;
        --gallery_categoryListHorizontalHoverButtonTextColor-opacity: 1;
        --gallery_categoryListHorizontalSelectedButtonTextColor: 255, 255, 255;
        --gallery_categoryListHorizontalSelectedButtonTextColor-rgb: 255, 255, 255;
        --gallery_categoryListHorizontalSelectedButtonTextColor-opacity: 1;
        --gallery_categoryListHorizontalBaseButtonBorderColor: 17, 17, 17, 0.3;
        --gallery_categoryListHorizontalBaseButtonBorderColor-rgb: 17, 17, 17;
        --gallery_categoryListHorizontalBaseButtonBorderColor-opacity: 0.3;
        --gallery_categoryListHorizontalHoverButtonBorderColor: 17, 17, 17, 0.3;
        --gallery_categoryListHorizontalHoverButtonBorderColor-rgb: 17, 17, 17;
        --gallery_categoryListHorizontalHoverButtonBorderColor-opacity: 0.3;
        --gallery_categoryListHorizontalSelectedButtonBorderColor: 17, 17, 17, 0;
        --gallery_categoryListHorizontalSelectedButtonBorderColor-rgb: 17, 17, 17;
        --gallery_categoryListHorizontalSelectedButtonBorderColor-opacity: 0;
        --gallery_categoryListHorizontalUnderlineColor: 17, 17, 17, 0.3;
        --gallery_categoryListHorizontalUnderlineColor-rgb: 17, 17, 17;
        --gallery_categoryListHorizontalUnderlineColor-opacity: 0.3;
        --gallery_ribbonBackground: 188, 76, 42;
        --gallery_ribbonBackground-rgb: 188, 76, 42;
        --gallery_ribbonBackground-opacity: 1;
        --gallery_ribbonBorderColor: 188, 76, 42;
        --gallery_ribbonBorderColor-rgb: 188, 76, 42;
        --gallery_ribbonBorderColor-opacity: 1;
        --gallery_arrowBackground: 17, 17, 17;
        --gallery_arrowBackground-rgb: 17, 17, 17;
        --gallery_arrowBackground-opacity: 1;
        --gallery_sliderArrowsOpacityAndColor: 17, 17, 17;
        --gallery_sliderArrowsOpacityAndColor-rgb: 17, 17, 17;
        --gallery_sliderArrowsOpacityAndColor-opacity: 1;
        --gallery_quantityAndOptionsAdditionalSwatchesTextColor: 113, 113, 111;
        --gallery_quantityAndOptionsAdditionalSwatchesTextColor-rgb: 113, 113, 111;
        --gallery_quantityAndOptionsAdditionalSwatchesTextColor-opacity: 1;
        --gallery_addToCartButtonTextColorDisabled: 255, 255, 255;
        --gallery_addToCartButtonTextColorDisabled-rgb: 255, 255, 255;
        --gallery_addToCartButtonTextColorDisabled-opacity: 1;
        --gallery_addToCartButtonBackgroundColorDisabled: 246, 243, 239;
        --gallery_addToCartButtonBackgroundColorDisabled-rgb: 246, 243, 239;
        --gallery_addToCartButtonBackgroundColorDisabled-opacity: 1;
        --gallery_appliedFiltersBorderColor: 17, 17, 17;
        --gallery_appliedFiltersBorderColor-rgb: 17, 17, 17;
        --gallery_appliedFiltersBorderColor-opacity: 1;
        --gallery_appliedFiltersFillColor: 17, 17, 17, 0.1;
        --gallery_appliedFiltersFillColor-rgb: 17, 17, 17;
        --gallery_appliedFiltersFillColor-opacity: 0.1;
        --gallery_salePriceColor: 188, 76, 42;
        --gallery_salePriceColor-rgb: 188, 76, 42;
        --gallery_salePriceColor-opacity: 1;
        --gallery_strikethroughPriceColor: 188, 76, 42;
        --gallery_strikethroughPriceColor-rgb: 188, 76, 42;
        --gallery_strikethroughPriceColor-opacity: 1;
        --gallery_priceBreakdownColor: 113, 113, 111;
        --gallery_priceBreakdownColor-rgb: 113, 113, 111;
        --gallery_priceBreakdownColor-opacity: 1;
        --gallery_discountNameColor: 188, 76, 42;
        --gallery_discountNameColor-rgb: 188, 76, 42;
        --gallery_discountNameColor-opacity: 1;
        --gallery_dividerColor: 17, 17, 17;
        --gallery_dividerColor-rgb: 17, 17, 17;
        --gallery_dividerColor-opacity: 1;
        --gallery_outOfStockTextColor: 113, 113, 111;
        --gallery_outOfStockTextColor-rgb: 113, 113, 111;
        --gallery_outOfStockTextColor-opacity: 1;
        --gallery_quantityAndOptionsBackgroundColor: 255, 255, 255;
        --gallery_quantityAndOptionsBackgroundColor-rgb: 255, 255, 255;
        --gallery_quantityAndOptionsBackgroundColor-opacity: 1;
        --gallery_paginationActiveNumberTextColor: 188, 76, 42;
        --gallery_paginationActiveNumberTextColor-rgb: 188, 76, 42;
        --gallery_paginationActiveNumberTextColor-opacity: 1;
        --gallery_paginationNumbersTextColor: 17, 17, 17;
        --gallery_paginationNumbersTextColor-rgb: 17, 17, 17;
        --gallery_paginationNumbersTextColor-opacity: 1;
        --gallery_loadMoreButtonbackgroundColor: 255, 255, 255, 0;
        --gallery_loadMoreButtonbackgroundColor-rgb: 255, 255, 255;
        --gallery_loadMoreButtonbackgroundColor-opacity: 0;
        --gallery_priceFontStyle: normal normal normal 18px/22px didot-w01-italic,
        serif;
        --gallery_priceFontStyle-style: normal;
        --gallery_priceFontStyle-variant: normal;
        --gallery_priceFontStyle-weight: normal;
        --gallery_priceFontStyle-size: 18px;
        --gallery_priceFontStyle-line-height: 22px;
        --gallery_priceFontStyle-family: didot-w01-italic, serif;
        --gallery_priceFontStyle-text-decoration: none;
        --quickView_priceFontStyle: normal normal normal 20px/1.4em
        didot-w01-italic,
        serif;
        --quickView_priceFontStyle-style: normal;
        --quickView_priceFontStyle-variant: normal;
        --quickView_priceFontStyle-weight: normal;
        --quickView_priceFontStyle-size: 20px;
        --quickView_priceFontStyle-line-height: 1.4em;
        --quickView_priceFontStyle-family: didot-w01-italic, serif;
        --quickView_priceFontStyle-text-decoration: none;
        --gallery_discountNameFont-style: normal;
        --gallery_discountNameFont-variant: normal;
        --gallery_discountNameFont-weight: normal;
        --gallery_discountNameFont-size: 14px;
        --gallery_discountNameFont-line-height: 1.4em;
        --gallery_discountNameFont-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_discountNameFont-text-decoration: none;
        --gallery_addToCartButtonTextFont-style: normal;
        --gallery_addToCartButtonTextFont-variant: normal;
        --gallery_addToCartButtonTextFont-weight: normal;
        --gallery_addToCartButtonTextFont-size: 15px;
        --gallery_addToCartButtonTextFont-line-height: 1.4em;
        --gallery_addToCartButtonTextFont-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_addToCartButtonTextFont-text-decoration: none;
        --gallery_ribbonTextFont-style: normal;
        --gallery_ribbonTextFont-variant: normal;
        --gallery_ribbonTextFont-weight: normal;
        --gallery_ribbonTextFont-size: 14px;
        --gallery_ribbonTextFont-line-height: 1.4em;
        --gallery_ribbonTextFont-family: avenir-lt-w01_35-light1475496, sans-serif;
        --gallery_ribbonTextFont-text-decoration: none;
        --gallery_strikethroughPriceFont: normal normal normal 18px/22px
        didot-w01-italic,
        serif;
        --gallery_strikethroughPriceFont-style: normal;
        --gallery_strikethroughPriceFont-variant: normal;
        --gallery_strikethroughPriceFont-weight: normal;
        --gallery_strikethroughPriceFont-size: 18px;
        --gallery_strikethroughPriceFont-line-height: 22px;
        --gallery_strikethroughPriceFont-family: didot-w01-italic, serif;
        --gallery_strikethroughPriceFont-text-decoration: none;
        --gallery_salePriceFont: normal normal normal 18px/22px didot-w01-italic,
        serif;
        --gallery_salePriceFont-style: normal;
        --gallery_salePriceFont-variant: normal;
        --gallery_salePriceFont-weight: normal;
        --gallery_salePriceFont-size: 18px;
        --gallery_salePriceFont-line-height: 22px;
        --gallery_salePriceFont-family: didot-w01-italic, serif;
        --gallery_salePriceFont-text-decoration: none;
        --gallery_categoriesBreadcrumbsFont-style: normal;
        --gallery_categoriesBreadcrumbsFont-variant: normal;
        --gallery_categoriesBreadcrumbsFont-weight: normal;
        --gallery_categoriesBreadcrumbsFont-size: 16px;
        --gallery_categoriesBreadcrumbsFont-line-height: 1.4em;
        --gallery_categoriesBreadcrumbsFont-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_categoriesBreadcrumbsFont-text-decoration: none;
        --gallery_categoryProductCounterFont-style: normal;
        --gallery_categoryProductCounterFont-variant: normal;
        --gallery_categoryProductCounterFont-weight: normal;
        --gallery_categoryProductCounterFont-size: 14px;
        --gallery_categoryProductCounterFont-line-height: 1.4em;
        --gallery_categoryProductCounterFont-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_categoryProductCounterFont-text-decoration: none;
        --gallery_productsCounterFont-style: normal;
        --gallery_productsCounterFont-variant: normal;
        --gallery_productsCounterFont-weight: normal;
        --gallery_productsCounterFont-size: 14px;
        --gallery_productsCounterFont-line-height: 1.4em;
        --gallery_productsCounterFont-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_productsCounterFont-text-decoration: none;
        --gallery_categoryNameFont-style: normal;
        --gallery_categoryNameFont-variant: normal;
        --gallery_categoryNameFont-weight: normal;
        --gallery_categoryNameFont-size: 28px;
        --gallery_categoryNameFont-line-height: 1.4em;
        --gallery_categoryNameFont-family: poppins-semibold, poppins, sans-serif;
        --gallery_categoryNameFont-text-decoration: none;
        --gallery_categoryDescriptionFont-style: normal;
        --gallery_categoryDescriptionFont-variant: normal;
        --gallery_categoryDescriptionFont-weight: normal;
        --gallery_categoryDescriptionFont-size: 16px;
        --gallery_categoryDescriptionFont-line-height: 1.4em;
        --gallery_categoryDescriptionFont-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_categoryDescriptionFont-text-decoration: none;
        --gallery_categoryDescriptionReadMoreLinkFont-style: normal;
        --gallery_categoryDescriptionReadMoreLinkFont-variant: normal;
        --gallery_categoryDescriptionReadMoreLinkFont-weight: normal;
        --gallery_categoryDescriptionReadMoreLinkFont-size: 16px;
        --gallery_categoryDescriptionReadMoreLinkFont-line-height: 1.4em;
        --gallery_categoryDescriptionReadMoreLinkFont-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_categoryDescriptionReadMoreLinkFont-text-decoration: none;
        --gallery_categoryTreeTitleFont-style: normal;
        --gallery_categoryTreeTitleFont-variant: normal;
        --gallery_categoryTreeTitleFont-weight: normal;
        --gallery_categoryTreeTitleFont-size: 20px;
        --gallery_categoryTreeTitleFont-line-height: 1.4em;
        --gallery_categoryTreeTitleFont-family: poppins-semibold, poppins,
        sans-serif;
        --gallery_categoryTreeTitleFont-text-decoration: none;
        --gallery_categoryMenuTitleFont-style: normal;
        --gallery_categoryMenuTitleFont-variant: normal;
        --gallery_categoryMenuTitleFont-weight: normal;
        --gallery_categoryMenuTitleFont-size: 20px;
        --gallery_categoryMenuTitleFont-line-height: 1.4em;
        --gallery_categoryMenuTitleFont-family: poppins-semibold, poppins,
        sans-serif;
        --gallery_categoryMenuTitleFont-text-decoration: none;
        --gallery_filtersTitleFont-style: normal;
        --gallery_filtersTitleFont-variant: normal;
        --gallery_filtersTitleFont-weight: normal;
        --gallery_filtersTitleFont-size: 20px;
        --gallery_filtersTitleFont-line-height: 1.4em;
        --gallery_filtersTitleFont-family: poppins-semibold, poppins, sans-serif;
        --gallery_filtersTitleFont-text-decoration: none;
        --gallery_categoryAndFilterNamesFont-style: normal;
        --gallery_categoryAndFilterNamesFont-variant: normal;
        --gallery_categoryAndFilterNamesFont-weight: normal;
        --gallery_categoryAndFilterNamesFont-size: 16px;
        --gallery_categoryAndFilterNamesFont-line-height: 1.4em;
        --gallery_categoryAndFilterNamesFont-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_categoryAndFilterNamesFont-text-decoration: none;
        --gallery_filterOptionsFont-style: normal;
        --gallery_filterOptionsFont-variant: normal;
        --gallery_filterOptionsFont-weight: normal;
        --gallery_filterOptionsFont-size: 14px;
        --gallery_filterOptionsFont-line-height: 1.4em;
        --gallery_filterOptionsFont-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_filterOptionsFont-text-decoration: none;
        --gallery_selectedCategoryFont-style: normal;
        --gallery_selectedCategoryFont-variant: normal;
        --gallery_selectedCategoryFont-weight: normal;
        --gallery_selectedCategoryFont-size: 16px;
        --gallery_selectedCategoryFont-line-height: 1.4em;
        --gallery_selectedCategoryFont-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_selectedCategoryFont-text-decoration: underline;
        --gallery_categoryListHeaderFont-style: normal;
        --gallery_categoryListHeaderFont-variant: normal;
        --gallery_categoryListHeaderFont-weight: normal;
        --gallery_categoryListHeaderFont-size: 16px;
        --gallery_categoryListHeaderFont-line-height: 1.4em;
        --gallery_categoryListHeaderFont-family: poppins-semibold, poppins,
        sans-serif;
        --gallery_categoryListHeaderFont-text-decoration: none;
        --gallery_categoryListViewMoreLessFont-style: normal;
        --gallery_categoryListViewMoreLessFont-variant: normal;
        --gallery_categoryListViewMoreLessFont-weight: normal;
        --gallery_categoryListViewMoreLessFont-size: 16px;
        --gallery_categoryListViewMoreLessFont-line-height: 1.4em;
        --gallery_categoryListViewMoreLessFont-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_categoryListViewMoreLessFont-text-decoration: underline;
        --gallery_categoryHoverFont-style: normal;
        --gallery_categoryHoverFont-variant: normal;
        --gallery_categoryHoverFont-weight: normal;
        --gallery_categoryHoverFont-size: 16px;
        --gallery_categoryHoverFont-line-height: 1.4em;
        --gallery_categoryHoverFont-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_categoryHoverFont-text-decoration: underline;
        --gallery_clearFiltersButtonFont-style: normal;
        --gallery_clearFiltersButtonFont-variant: normal;
        --gallery_clearFiltersButtonFont-weight: normal;
        --gallery_clearFiltersButtonFont-size: 14px;
        --gallery_clearFiltersButtonFont-line-height: 1.4em;
        --gallery_clearFiltersButtonFont-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_clearFiltersButtonFont-text-decoration: none;
        --gallery_sortingLabelFont-style: normal;
        --gallery_sortingLabelFont-variant: normal;
        --gallery_sortingLabelFont-weight: normal;
        --gallery_sortingLabelFont-size: 16px;
        --gallery_sortingLabelFont-line-height: 1.4em;
        --gallery_sortingLabelFont-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_sortingLabelFont-text-decoration: none;
        --gallery_quantityAndOptionsTextFont-style: normal;
        --gallery_quantityAndOptionsTextFont-variant: normal;
        --gallery_quantityAndOptionsTextFont-weight: normal;
        --gallery_quantityAndOptionsTextFont-size: 14px;
        --gallery_quantityAndOptionsTextFont-line-height: 1.4em;
        --gallery_quantityAndOptionsTextFont-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_quantityAndOptionsTextFont-text-decoration: none;
        --gallery_priceBreakdownFont-style: normal;
        --gallery_priceBreakdownFont-variant: normal;
        --gallery_priceBreakdownFont-weight: normal;
        --gallery_priceBreakdownFont-size: 12px;
        --gallery_priceBreakdownFont-line-height: 1.4em;
        --gallery_priceBreakdownFont-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_priceBreakdownFont-text-decoration: none;
        --gallery_headerTextFont-style: normal;
        --gallery_headerTextFont-variant: normal;
        --gallery_headerTextFont-weight: normal;
        --gallery_headerTextFont-size: 25px;
        --gallery_headerTextFont-line-height: 1.4em;
        --gallery_headerTextFont-family: poppins-semibold, poppins, sans-serif;
        --gallery_headerTextFont-text-decoration: none;
        --gallery_titleFont-style: normal;
        --gallery_titleFont-variant: normal;
        --gallery_titleFont-weight: normal;
        --gallery_titleFont-size: 26px;
        --gallery_titleFont-line-height: 1.4em;
        --gallery_titleFont-family: poppins-semibold, poppins, sans-serif;
        --gallery_titleFont-text-decoration: none;
        --gallery_subtitleFont-style: normal;
        --gallery_subtitleFont-variant: normal;
        --gallery_subtitleFont-weight: normal;
        --gallery_subtitleFont-size: 15px;
        --gallery_subtitleFont-line-height: 1.4em;
        --gallery_subtitleFont-family: avenir-lt-w01_35-light1475496, sans-serif;
        --gallery_subtitleFont-text-decoration: none;
        --gallery_sortingFiltersTextFont-style: normal;
        --gallery_sortingFiltersTextFont-variant: normal;
        --gallery_sortingFiltersTextFont-weight: normal;
        --gallery_sortingFiltersTextFont-size: 16px;
        --gallery_sortingFiltersTextFont-line-height: 1.4em;
        --gallery_sortingFiltersTextFont-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_sortingFiltersTextFont-text-decoration: none;
        --gallery_outOfStockFontStyle-style: normal;
        --gallery_outOfStockFontStyle-variant: normal;
        --gallery_outOfStockFontStyle-weight: normal;
        --gallery_outOfStockFontStyle-size: 16px;
        --gallery_outOfStockFontStyle-line-height: 1.4em;
        --gallery_outOfStockFontStyle-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_outOfStockFontStyle-text-decoration: none;
        --gallery_categoriesFilterAndSortButtonTextFont-style: normal;
        --gallery_categoriesFilterAndSortButtonTextFont-variant: normal;
        --gallery_categoriesFilterAndSortButtonTextFont-weight: normal;
        --gallery_categoriesFilterAndSortButtonTextFont-size: 16px;
        --gallery_categoriesFilterAndSortButtonTextFont-line-height: 1.4em;
        --gallery_categoriesFilterAndSortButtonTextFont-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_categoriesFilterAndSortButtonTextFont-text-decoration: none;
        --gallery_categoryListHorizontalBaseButtonTextFont-style: normal;
        --gallery_categoryListHorizontalBaseButtonTextFont-variant: normal;
        --gallery_categoryListHorizontalBaseButtonTextFont-weight: normal;
        --gallery_categoryListHorizontalBaseButtonTextFont-size: 16px;
        --gallery_categoryListHorizontalBaseButtonTextFont-line-height: 1.4em;
        --gallery_categoryListHorizontalBaseButtonTextFont-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_categoryListHorizontalBaseButtonTextFont-text-decoration: none;
        --gallery_categoryListHorizontalHoverButtonTextFont-style: normal;
        --gallery_categoryListHorizontalHoverButtonTextFont-variant: normal;
        --gallery_categoryListHorizontalHoverButtonTextFont-weight: normal;
        --gallery_categoryListHorizontalHoverButtonTextFont-size: 16px;
        --gallery_categoryListHorizontalHoverButtonTextFont-line-height: 1.4em;
        --gallery_categoryListHorizontalHoverButtonTextFont-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_categoryListHorizontalHoverButtonTextFont-text-decoration: none;
        --gallery_categoryListHorizontalSelectedButtonTextFont-style: normal;
        --gallery_categoryListHorizontalSelectedButtonTextFont-variant: normal;
        --gallery_categoryListHorizontalSelectedButtonTextFont-weight: normal;
        --gallery_categoryListHorizontalSelectedButtonTextFont-size: 16px;
        --gallery_categoryListHorizontalSelectedButtonTextFont-line-height: 1.4em;
        --gallery_categoryListHorizontalSelectedButtonTextFont-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_categoryListHorizontalSelectedButtonTextFont-text-decoration: none;
        --gallery_noProductsMessageFont-style: normal;
        --gallery_noProductsMessageFont-variant: normal;
        --gallery_noProductsMessageFont-weight: normal;
        --gallery_noProductsMessageFont-size: 20px;
        --gallery_noProductsMessageFont-line-height: 1.4em;
        --gallery_noProductsMessageFont-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_noProductsMessageFont-text-decoration: none;
        --gallery_quickViewTextFontStyle-style: normal;
        --gallery_quickViewTextFontStyle-variant: normal;
        --gallery_quickViewTextFontStyle-weight: normal;
        --gallery_quickViewTextFontStyle-size: 14px;
        --gallery_quickViewTextFontStyle-line-height: 1.4em;
        --gallery_quickViewTextFontStyle-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_quickViewTextFontStyle-text-decoration: none;
        --gallery_quantityAndOptionsAdditionalSwatchesTextFont-style: normal;
        --gallery_quantityAndOptionsAdditionalSwatchesTextFont-variant: normal;
        --gallery_quantityAndOptionsAdditionalSwatchesTextFont-weight: normal;
        --gallery_quantityAndOptionsAdditionalSwatchesTextFont-size: 14px;
        --gallery_quantityAndOptionsAdditionalSwatchesTextFont-line-height: 1.4em;
        --gallery_quantityAndOptionsAdditionalSwatchesTextFont-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_quantityAndOptionsAdditionalSwatchesTextFont-text-decoration: none;
        --gallery_outOfStockTextFontStyle-style: normal;
        --gallery_outOfStockTextFontStyle-variant: normal;
        --gallery_outOfStockTextFontStyle-weight: normal;
        --gallery_outOfStockTextFontStyle-size: 16px;
        --gallery_outOfStockTextFontStyle-line-height: 1.4em;
        --gallery_outOfStockTextFontStyle-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_outOfStockTextFontStyle-text-decoration: none;
        --gallery_paginationNumbersTextFont-style: normal;
        --gallery_paginationNumbersTextFont-variant: normal;
        --gallery_paginationNumbersTextFont-weight: normal;
        --gallery_paginationNumbersTextFont-size: 16px;
        --gallery_paginationNumbersTextFont-line-height: 1.4em;
        --gallery_paginationNumbersTextFont-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_paginationNumbersTextFont-text-decoration: none;
        --gallery_loadMoreButtontextFont-style: normal;
        --gallery_loadMoreButtontextFont-variant: normal;
        --gallery_loadMoreButtontextFont-weight: normal;
        --gallery_loadMoreButtontextFont-size: 16px;
        --gallery_loadMoreButtontextFont-line-height: 1.4em;
        --gallery_loadMoreButtontextFont-family: avenir-lt-w01_35-light1475496,
        sans-serif;
        --gallery_loadMoreButtontextFont-text-decoration: none;
        --filtersHeaderPaddingBottom: 20px;
        --extendedGalleryInlineStartPadding: 20px;
        --categoryHeaderImageHeight: 280px;
        --categoryHeaderImageMinHeight: 280px;
        --showCategoryHeaderImageGap: 24px;
        --categoryHeaderFlexDirection: column;
        --imageContainerPosition: relative;
        --categoryHeaderSpaceBetweenTitleDescription: 4;
        --categoryCountAndFilterContainerJustifyContent: space-between;
        --categoryDescriptionContainerColor: unset;
        --categoryDescriptionContainerBorderColor: unset;
        --categoryDescriptionContainerBorderWidth: unset;
        --categoryDescriptionContainerBorderStyle: unset;
        --categoryDescriptionContainerCornerRadius: unset;
        --categoryDescriptionContainerPadding: inherit;
        --categoryDescriptionContainerMargin: inherit;
        --categoryInfoVerticalAlignment: unset;
        --imageCarouselButtonSize: 16px;
        --imageCarouselChevronSize: 8px;
        --priceAndDiscountWrapBehavior: wrap;
        --priceAndDiscountLayoutFlexDirection: row;
        --priceAndDiscountVerticalAlignment: baseline;
        --priceAndDiscountHorizontalAlignment: center;
        --productItemFlexDirection: column;
        --productItemOddIndexFlexDirection: column;
        --productItemImageWidth: revert;
        --productItemNotImageContainerWidth: revert;
        --productItemImageAndInfoSpacing: revert;
        --productItemNotImageContainerPaddingTop: 16px;
        --productItemVerticalAlignment: space-between;
        --productItemHorizontalAlignment: center;
        --productItemDetailsLinkFlexGrow: 1;
        --addToCartButtonShowOnHoverOpacity: inherit;
        --addToCartButtonShowOnHoverOpacityOnHover: inherit;
        --ribbonPadding: 2px 12px;
        --ribbonBackground: rgb(188, 76, 42);
        --ribbonBorder: 0px solid rgb(188, 76, 42);
        --addToCartButtonWidth: 100%;
        --disabledOptionsOpacity: 1;
        --namePriceLayoutFlexDirection: column;
        --namePriceLayoutAlignItems: center;
        --namePriceLayoutJustifyContent: normal;
        --namePriceLayoutFlexGap: 0;
        --nameTextAlign: inherit;
        --pricesMarginTop: 4px;
        --pricesMarginTopMobile: 3px;
        --colorPickerItemRemainingDisplay: revert;
        --loadMoreButtonBorderWidth: 1;
        --buttonOptionsPadding: 4px 8px;
        --arrowsBaseOpacity: 1;
        --arrowsOffset: 0;
        --arrowContainerPosition: revert;
        --arrowContainerAlignSelf: revert;
        --arrowsReferenceHeight: unset;
        --sliderSidePadding: 40px;
        --spaceBetweenSlides: 70;
        --teaserOffsetOld: 0;
        --teaserOffset: 0;
        --teaserSpace: 0;
        --shouldLimitLongCategoryList: 0;
        --collapsedCategoryListDisplay: block;
        --categoryListIndentationPx: 28px;
        --categoryListMarginBottom: 12px;
        --horizontalCategoryListFlexWrap: nowrap;
        --categoryListHorizontalBaseButtonBoxShadow: inset 0 0 0 1px
        rgba(17, 17, 17, 0.3);
        --categoryListHorizontalHoverButtonBoxShadow: inset 0 0 0 1px
        rgba(17, 17, 17, 0.3);
        --categoryListHorizontalSelectedButtonBoxShadow: inset 0 0 0 1px
        rgba(17, 17, 17, 0);
        --categoryListHorizontalWidth: 100%;
        --categoryListHorizontalItemsAlignment: start;
        --filtersSubmitButtonFullWidthOnlySort: 132px;
        --filtersSubmitButtonFullWidthOnlySortWhenFiltersDisabled: 132px;
        --mobileSortContainerWidth: 100%;
        --mobileSortWithFiltersWrapperWidth: 100%;
        --mobileSortWithFiltersWrapperMarginInlineStart: 0;
        --mobileSortWithFiltersIconJustifyContent: flex-end;
        --mobileSortWithoutFiltersSelectPaddingInlineStart: 12px;
        --mobileSortWithoutFiltersSelectColor: rgb(17, 17, 17);
        --galleryAppContentWidth: 100%;
        --galleryAppSideFiltersWithSortMarginTop: 0;
        --full_width-display: revert;
        --showAlternativeImage-display: revert;
        --gallery_showColorOptionsOnly-display: none;
        --galleryFiltersCategories-display: revert;
        --galleryFiltersPrice-display: revert;
        --galleryFiltersProductOptions-display: revert;
        --galleryShowFilters-display: none;
        --galleryShowSort-display: none;
        --gallerySortNameAsc-display: revert;
        --gallerySortNameDes-display: revert;
        --gallerySortNewest-display: revert;
        --gallerySortPriceAsc-display: revert;
        --gallerySortPriceDes-display: revert;
        --gallerySortRecommended-display: revert;
        --gallery_showAddToCartButton-display: none;
        --mobile-gallery_showAddToCartButton-display: none;
        --gallery_addToCartButtonShowOnHover-display: none;
        --gallery_alternateImagePosition-display: none;
        --mobile-gallery_alternateImagePosition-display: none;
        --gallery_showAddToCartQuantity-display: none;
        --mobile-gallery_showQuantity-display: none;
        --gallery_showDividers-display: none;
        --gallery_showDigitalBadge-display: revert;
        --gallery_showPrice-display: revert;
        --gallery_showDiscountName-display: revert;
        --gallery_showRibbon-display: revert;
        --gallery_showProductName-display: revert;
        --gallery_showCategoryHeaderSection-display: revert;
        --gallery_showCategoryHeaderImage-display: revert;
        --gallery_showCategoryHeaderReadMoreLink-display: revert;
        --gallery_showCategoryHeaderName-display: revert;
        --gallery_showCategoryHeaderDescription-display: revert;
        --gallery_paginationFirstLastArrows-display: none;
        --gallery_showProductOptionsButton-display: none;
        --mobile-gallery_showProductOptions-display: none;
        --gallery_shouldLimitProductOptions-display: none;
        --showQuickView-display: revert;
        --gallery_showCategoriesBreadcrumbs-display: revert;
        --gallery_showCategoryListHeader-display: revert;
        --gallery_showCategoriesProductsCounter-display: revert;
        --gallery_showProductsCounter-display: revert;
        --gallery_showAppliedFilters-display: revert;
        --gallery_showCategories-display: revert;
        --gallery_showCategoriesTitle-display: revert;
        --gallery_showFiltersTitle-display: revert;
        --gallery_enableStickySidebar-display: none;
        --gallery_showCategoryListShopAll-display: none;
        --gallery_sliderShowArrowsOnHoverOnly-display: none;
        --gallery_sliderInfiniteLoop-display: revert;
        --gallery_sliderShowTeaser-display: none;
        --gallery_showSliderNavigationArrows-display: revert;
        --gallery_showSliderPaginationDots-display: none;
        --__IS_RTL__-display: none;
        --showTitleWasTurnedOn-display: none;
        --showTitleWasNeverChanged-display: revert;
        --showCategoryHeaderNameOrDescription-display: revert;
        --showHeroSection-display: revert;
        --showCategoriesBreadcrumbs-display: revert;
        --showAddToCartInProductInfo-display: none;
        --showAddToCartOnImage-display: none;
        --showAddToCartTextButton-display: revert;
        --showAddToCartIconAndTextButton-display: none;
        --showAddToCartIconButton-display: none;
        --shouldShowRibbonOnImage-display: revert;
        --shouldShowRibbonOnProductInfo-display: none;
        --showProductDetails-display: revert;
        --notShowProductName-display: none;
        --notShowAddToCartButtonOrIconOnlyButton-display: revert;
        --showTextualAddToCartButton-display: none;
        --showTextualOptions-display: revert;
        --showDivider-display: none;
        --showColorPickerLimit-display: none;
        --categoryListHeaderGoesBackToParent-display: revert;
        --categoryListHeaderDoesNothing-display: none;
        --shouldLimitCategoryList-display: none;
        --showSidePanel-display: revert;
        --showSidePanelWithoutFilters-display: revert;
        --showHorizontalCategoryList-display: none;
        --showHorizontalCategoryListWhenNoSubcategories-display: none;
        --shouldShowMobileFiltersOrSort-display: none;
        --shouldRenderSortOptionsWhenFiltersDisabled-display: revert;
        --shouldRenderFiltersHeader-display: none;
        --shouldRenderMobileFiltersAndSortButtonText-display: none;
        --shouldRenderMobileFiltersButtonText-display: none;
        --shouldRenderMobileSortButtonText-display: none;
        --shouldRenderMobileSortButtonIconWhenFiltersDisabled-display: revert;
        --wix-color-1: 255, 255, 255;
        --wix-color-2: 250, 250, 250;
        --wix-color-3: 246, 243, 239;
        --wix-color-4: 113, 113, 111;
        --wix-color-5: 17, 17, 17;
        --wix-color-6: 233, 186, 172;
        --wix-color-7: 210, 148, 129;
        --wix-color-8: 188, 76, 42;
        --wix-color-9: 125, 51, 28;
        --wix-color-10: 63, 25, 14;
        --wix-color-11: 210, 209, 200;
        --wix-color-12: 166, 164, 153;
        --wix-color-13: 121, 119, 103;
        --wix-color-14: 81, 79, 69;
        --wix-color-15: 40, 40, 34;
        --wix-color-16: 223, 203, 202;
        --wix-color-17: 191, 157, 155;
        --wix-color-18: 143, 118, 116;
        --wix-color-19: 96, 79, 78;
        --wix-color-20: 48, 39, 39;
        --wix-color-21: 255, 216, 184;
        --wix-color-22: 254, 177, 114;
        --wix-color-23: 191, 133, 86;
        --wix-color-24: 127, 89, 57;
        --wix-color-25: 64, 44, 28;
        --wix-color-26: 255, 255, 255;
        --wix-color-27: 17, 17, 17;
        --wix-color-28: 250, 250, 250;
        --wix-color-29: 246, 243, 239;
        --wix-color-30: 113, 113, 111;
        --wix-color-31: 188, 76, 42;
        --wix-color-32: 17, 17, 17;
        --wix-color-33: 246, 243, 239;
        --wix-color-34: 255, 255, 255;
        --wix-color-35: 17, 17, 17;
        --wix-color-36: 17, 17, 17;
        --wix-color-37: 113, 113, 111;
        --wix-color-38: 188, 76, 42;
        --wix-color-39: 188, 76, 42;
        --wix-color-40: 255, 255, 255;
        --wix-color-41: 255, 255, 255;
        --wix-color-42: 188, 76, 42;
        --wix-color-43: 188, 76, 42;
        --wix-color-44: 246, 243, 239;
        --wix-color-45: 246, 243, 239;
        --wix-color-46: 255, 255, 255;
        --wix-color-47: 255, 255, 255;
        --wix-color-48: 188, 76, 42;
        --wix-color-49: 188, 76, 42;
        --wix-color-50: 188, 76, 42;
        --wix-color-51: 188, 76, 42;
        --wix-color-52: 255, 255, 255;
        --wix-color-53: 255, 255, 255;
        --wix-color-54: 246, 243, 239;
        --wix-color-55: 246, 243, 239;
        --wix-font-Title: normal normal normal 42px/1.4em poppins-semibold,
        poppins, sans-serif;
        --wix-font-Title-style: normal;
        --wix-font-Title-variant: normal;
        --wix-font-Title-weight: normal;
        --wix-font-Title-size: 42px;
        --wix-font-Title-line-height: 1.4em;
        --wix-font-Title-family: poppins-semibold, poppins, sans-serif;
        --wix-font-Title-text-decoration: none;
        --wix-font-Menu: normal normal normal 16px/1.4em din-next-w01-light,
        sans-serif;
        --wix-font-Menu-style: normal;
        --wix-font-Menu-variant: normal;
        --wix-font-Menu-weight: normal;
        --wix-font-Menu-size: 16px;
        --wix-font-Menu-line-height: 1.4em;
        --wix-font-Menu-family: din-next-w01-light, sans-serif;
        --wix-font-Menu-text-decoration: none;
        --wix-font-Page-title: normal normal normal 30px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --wix-font-Page-title-style: normal;
        --wix-font-Page-title-variant: normal;
        --wix-font-Page-title-weight: normal;
        --wix-font-Page-title-size: 30px;
        --wix-font-Page-title-line-height: 1.4em;
        --wix-font-Page-title-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Page-title-text-decoration: none;
        --wix-font-Heading-XL: normal normal normal 28px/1.4em didot-w01-italic,
        serif;
        --wix-font-Heading-XL-style: normal;
        --wix-font-Heading-XL-variant: normal;
        --wix-font-Heading-XL-weight: normal;
        --wix-font-Heading-XL-size: 28px;
        --wix-font-Heading-XL-line-height: 1.4em;
        --wix-font-Heading-XL-family: didot-w01-italic, serif;
        --wix-font-Heading-XL-text-decoration: none;
        --wix-font-Heading-L: normal normal normal 25px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --wix-font-Heading-L-style: normal;
        --wix-font-Heading-L-variant: normal;
        --wix-font-Heading-L-weight: normal;
        --wix-font-Heading-L-size: 25px;
        --wix-font-Heading-L-line-height: 1.4em;
        --wix-font-Heading-L-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Heading-L-text-decoration: none;
        --wix-font-Heading-M: normal normal normal 24px/1.4em poppins-semibold,
        poppins, sans-serif;
        --wix-font-Heading-M-style: normal;
        --wix-font-Heading-M-variant: normal;
        --wix-font-Heading-M-weight: normal;
        --wix-font-Heading-M-size: 24px;
        --wix-font-Heading-M-line-height: 1.4em;
        --wix-font-Heading-M-family: poppins-semibold, poppins, sans-serif;
        --wix-font-Heading-M-text-decoration: none;
        --wix-font-Heading-S: normal normal normal 20px/1.4em didot-w01-italic,
        serif;
        --wix-font-Heading-S-style: normal;
        --wix-font-Heading-S-variant: normal;
        --wix-font-Heading-S-weight: normal;
        --wix-font-Heading-S-size: 20px;
        --wix-font-Heading-S-line-height: 1.4em;
        --wix-font-Heading-S-family: didot-w01-italic, serif;
        --wix-font-Heading-S-text-decoration: none;
        --wix-font-Body-L: normal normal normal 20px/1.4em didot-w01-italic, serif;
        --wix-font-Body-L-style: normal;
        --wix-font-Body-L-variant: normal;
        --wix-font-Body-L-weight: normal;
        --wix-font-Body-L-size: 20px;
        --wix-font-Body-L-line-height: 1.4em;
        --wix-font-Body-L-family: didot-w01-italic, serif;
        --wix-font-Body-L-text-decoration: none;
        --wix-font-Body-M: normal normal normal 16px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --wix-font-Body-M-style: normal;
        --wix-font-Body-M-variant: normal;
        --wix-font-Body-M-weight: normal;
        --wix-font-Body-M-size: 16px;
        --wix-font-Body-M-line-height: 1.4em;
        --wix-font-Body-M-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Body-M-text-decoration: none;
        --wix-font-Body-S: normal normal normal 14px/1.4em proxima-n-w01-reg,
        sans-serif;
        --wix-font-Body-S-style: normal;
        --wix-font-Body-S-variant: normal;
        --wix-font-Body-S-weight: normal;
        --wix-font-Body-S-size: 14px;
        --wix-font-Body-S-line-height: 1.4em;
        --wix-font-Body-S-family: proxima-n-w01-reg, sans-serif;
        --wix-font-Body-S-text-decoration: none;
        --wix-font-Body-XS: normal normal normal 12px/1.4em din-next-w01-light,
        sans-serif;
        --wix-font-Body-XS-style: normal;
        --wix-font-Body-XS-variant: normal;
        --wix-font-Body-XS-weight: normal;
        --wix-font-Body-XS-size: 12px;
        --wix-font-Body-XS-line-height: 1.4em;
        --wix-font-Body-XS-family: din-next-w01-light, sans-serif;
        --wix-font-Body-XS-text-decoration: none;
        --wix-font-LIGHT: normal normal normal 12px/1.4em HelveticaNeueW01-45Ligh;
        --wix-font-LIGHT-style: normal;
        --wix-font-LIGHT-variant: normal;
        --wix-font-LIGHT-weight: normal;
        --wix-font-LIGHT-size: 12px;
        --wix-font-LIGHT-line-height: 1.4em;
        --wix-font-LIGHT-family: HelveticaNeueW01-45Ligh;
        --wix-font-LIGHT-text-decoration: none;
        --wix-font-MEDIUM: normal normal normal 12px/1.4em HelveticaNeueW01-55Roma;
        --wix-font-MEDIUM-style: normal;
        --wix-font-MEDIUM-variant: normal;
        --wix-font-MEDIUM-weight: normal;
        --wix-font-MEDIUM-size: 12px;
        --wix-font-MEDIUM-line-height: 1.4em;
        --wix-font-MEDIUM-family: HelveticaNeueW01-55Roma;
        --wix-font-MEDIUM-text-decoration: none;
        --wix-font-STRONG: normal normal normal 12px/1.4em HelveticaNeueW01-65Medi;
        --wix-font-STRONG-style: normal;
        --wix-font-STRONG-variant: normal;
        --wix-font-STRONG-weight: normal;
        --wix-font-STRONG-size: 12px;
        --wix-font-STRONG-line-height: 1.4em;
        --wix-font-STRONG-family: HelveticaNeueW01-65Medi;
        --wix-font-STRONG-text-decoration: none;
    }
    .comp-k00x9iml .ETPbIy .TUWFt6 {
        --gallery_quickViewTextFontStyle_local: normal normal normal 14px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
    }

    #comp-k00zbqd5 {
        --shc-mutated-brightness: 128, 128, 128;
        --margin-start: 0px;
        --margin-end: 0px;
        --fnt: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        direction: var(--wix-opt-in-direction, ltr);
        --label-align: center;
        --label-text-align: center;
    }
    #comp-lvf72jjl1 {
        --bg-overlay-color: transparent;
        --bg-gradient: none;
        min-width: 980px;
    }
    #comp-k00zfgw4 {
        --bg-overlay-color: transparent;
        --bg-gradient: none;
        --padding: 0px;
        --margin: 0px;
        min-width: 980px;
        --firstChildMarginTop: -1px;
        --lastChildMarginBottom: -1px;
        --direction: ltr;
    }
    #comp-k00zfgxj {
        --bg-overlay-color: rgb(var(--color_13));
        --bg-gradient: none;
        width: 100%;
        --column-width: 490px;
        --column-flex: 490;
    }
    .comp-k013mc5w {
        --wix-direction: ltr;
        --actionButton_buttonWidth: 50%;
        --alignment: center;
        --borderSize: 0px;
        --buttonSpace: 30px;
        --dividerHeight: 2px;
        --dividerWidth: 20px;
        --horizontalSpace: 25px;
        --hoverBackgroundColorOpacity: 0.7;
        --hoverBorderSize: 0px;
        --hoverState: overlay;
        --imageScaling: crop;
        --innerSpace: 15px;
        --layout: layout2;
        --verticalSpace: 20px;
        --widgetAction: addToCart;
        --actionButton_backgroundColor: 188, 76, 42, 0;
        --actionButton_backgroundColor-rgb: 188, 76, 42;
        --actionButton_backgroundColor-opacity: 0;
        --actionButton_borderColor: 188, 76, 42;
        --actionButton_borderColor-rgb: 188, 76, 42;
        --actionButton_borderColor-opacity: 1;
        --actionButton_textColor: 188, 76, 42;
        --actionButton_textColor-rgb: 188, 76, 42;
        --actionButton_textColor-opacity: 1;
        --backgroundColor: 255, 255, 255, 0;
        --backgroundColor-rgb: 255, 255, 255;
        --backgroundColor-opacity: 0;
        --hoverBackgroundColor: 246, 243, 239, 0;
        --hoverBackgroundColor-rgb: 246, 243, 239;
        --hoverBackgroundColor-opacity: 0;
        --priceColor: 188, 76, 42;
        --priceColor-rgb: 188, 76, 42;
        --priceColor-opacity: 1;
        --actionButton_textFont: normal normal normal 16px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --actionButton_textFont-style: normal;
        --actionButton_textFont-variant: normal;
        --actionButton_textFont-weight: normal;
        --actionButton_textFont-size: 16px;
        --actionButton_textFont-line-height: 1.4em;
        --actionButton_textFont-family: avenir-lt-w01_35-light1475496, sans-serif;
        --actionButton_textFont-text-decoration: none;
        --nameFont: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        --nameFont-style: normal;
        --nameFont-variant: normal;
        --nameFont-weight: normal;
        --nameFont-size: 16px;
        --nameFont-line-height: 1.4em;
        --nameFont-family: avenir-lt-w01_35-light1475496, sans-serif;
        --nameFont-text-decoration: none;
        --outOfStockFont: normal normal normal 16px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --outOfStockFont-style: normal;
        --outOfStockFont-variant: normal;
        --outOfStockFont-weight: normal;
        --outOfStockFont-size: 16px;
        --outOfStockFont-line-height: 1.4em;
        --outOfStockFont-family: avenir-lt-w01_35-light1475496, sans-serif;
        --outOfStockFont-text-decoration: none;
        --priceFont: normal normal normal 18px/22px didot-w01-italic, serif;
        --priceFont-style: normal;
        --priceFont-variant: normal;
        --priceFont-weight: normal;
        --priceFont-size: 18px;
        --priceFont-line-height: 22px;
        --priceFont-family: didot-w01-italic, serif;
        --priceFont-text-decoration: none;
        --wix-color-1: 255, 255, 255;
        --wix-color-2: 250, 250, 250;
        --wix-color-3: 246, 243, 239;
        --wix-color-4: 113, 113, 111;
        --wix-color-5: 17, 17, 17;
        --wix-color-6: 233, 186, 172;
        --wix-color-7: 210, 148, 129;
        --wix-color-8: 188, 76, 42;
        --wix-color-9: 125, 51, 28;
        --wix-color-10: 63, 25, 14;
        --wix-color-11: 210, 209, 200;
        --wix-color-12: 166, 164, 153;
        --wix-color-13: 121, 119, 103;
        --wix-color-14: 81, 79, 69;
        --wix-color-15: 40, 40, 34;
        --wix-color-16: 223, 203, 202;
        --wix-color-17: 191, 157, 155;
        --wix-color-18: 143, 118, 116;
        --wix-color-19: 96, 79, 78;
        --wix-color-20: 48, 39, 39;
        --wix-color-21: 255, 216, 184;
        --wix-color-22: 254, 177, 114;
        --wix-color-23: 191, 133, 86;
        --wix-color-24: 127, 89, 57;
        --wix-color-25: 64, 44, 28;
        --wix-color-26: 255, 255, 255;
        --wix-color-27: 17, 17, 17;
        --wix-color-28: 250, 250, 250;
        --wix-color-29: 246, 243, 239;
        --wix-color-30: 113, 113, 111;
        --wix-color-31: 188, 76, 42;
        --wix-color-32: 17, 17, 17;
        --wix-color-33: 246, 243, 239;
        --wix-color-34: 255, 255, 255;
        --wix-color-35: 17, 17, 17;
        --wix-color-36: 17, 17, 17;
        --wix-color-37: 113, 113, 111;
        --wix-color-38: 188, 76, 42;
        --wix-color-39: 188, 76, 42;
        --wix-color-40: 255, 255, 255;
        --wix-color-41: 255, 255, 255;
        --wix-color-42: 188, 76, 42;
        --wix-color-43: 188, 76, 42;
        --wix-color-44: 246, 243, 239;
        --wix-color-45: 246, 243, 239;
        --wix-color-46: 255, 255, 255;
        --wix-color-47: 255, 255, 255;
        --wix-color-48: 188, 76, 42;
        --wix-color-49: 188, 76, 42;
        --wix-color-50: 188, 76, 42;
        --wix-color-51: 188, 76, 42;
        --wix-color-52: 255, 255, 255;
        --wix-color-53: 255, 255, 255;
        --wix-color-54: 246, 243, 239;
        --wix-color-55: 246, 243, 239;
        --wix-font-Title: normal normal normal 42px/1.4em poppins-semibold,
        poppins, sans-serif;
        --wix-font-Title-style: normal;
        --wix-font-Title-variant: normal;
        --wix-font-Title-weight: normal;
        --wix-font-Title-size: 42px;
        --wix-font-Title-line-height: 1.4em;
        --wix-font-Title-family: poppins-semibold, poppins, sans-serif;
        --wix-font-Title-text-decoration: none;
        --wix-font-Menu: normal normal normal 16px/1.4em din-next-w01-light,
        sans-serif;
        --wix-font-Menu-style: normal;
        --wix-font-Menu-variant: normal;
        --wix-font-Menu-weight: normal;
        --wix-font-Menu-size: 16px;
        --wix-font-Menu-line-height: 1.4em;
        --wix-font-Menu-family: din-next-w01-light, sans-serif;
        --wix-font-Menu-text-decoration: none;
        --wix-font-Page-title: normal normal normal 30px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --wix-font-Page-title-style: normal;
        --wix-font-Page-title-variant: normal;
        --wix-font-Page-title-weight: normal;
        --wix-font-Page-title-size: 30px;
        --wix-font-Page-title-line-height: 1.4em;
        --wix-font-Page-title-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Page-title-text-decoration: none;
        --wix-font-Heading-XL: normal normal normal 28px/1.4em didot-w01-italic,
        serif;
        --wix-font-Heading-XL-style: normal;
        --wix-font-Heading-XL-variant: normal;
        --wix-font-Heading-XL-weight: normal;
        --wix-font-Heading-XL-size: 28px;
        --wix-font-Heading-XL-line-height: 1.4em;
        --wix-font-Heading-XL-family: didot-w01-italic, serif;
        --wix-font-Heading-XL-text-decoration: none;
        --wix-font-Heading-L: normal normal normal 25px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --wix-font-Heading-L-style: normal;
        --wix-font-Heading-L-variant: normal;
        --wix-font-Heading-L-weight: normal;
        --wix-font-Heading-L-size: 25px;
        --wix-font-Heading-L-line-height: 1.4em;
        --wix-font-Heading-L-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Heading-L-text-decoration: none;
        --wix-font-Heading-M: normal normal normal 24px/1.4em poppins-semibold,
        poppins, sans-serif;
        --wix-font-Heading-M-style: normal;
        --wix-font-Heading-M-variant: normal;
        --wix-font-Heading-M-weight: normal;
        --wix-font-Heading-M-size: 24px;
        --wix-font-Heading-M-line-height: 1.4em;
        --wix-font-Heading-M-family: poppins-semibold, poppins, sans-serif;
        --wix-font-Heading-M-text-decoration: none;
        --wix-font-Heading-S: normal normal normal 20px/1.4em didot-w01-italic,
        serif;
        --wix-font-Heading-S-style: normal;
        --wix-font-Heading-S-variant: normal;
        --wix-font-Heading-S-weight: normal;
        --wix-font-Heading-S-size: 20px;
        --wix-font-Heading-S-line-height: 1.4em;
        --wix-font-Heading-S-family: didot-w01-italic, serif;
        --wix-font-Heading-S-text-decoration: none;
        --wix-font-Body-L: normal normal normal 20px/1.4em didot-w01-italic, serif;
        --wix-font-Body-L-style: normal;
        --wix-font-Body-L-variant: normal;
        --wix-font-Body-L-weight: normal;
        --wix-font-Body-L-size: 20px;
        --wix-font-Body-L-line-height: 1.4em;
        --wix-font-Body-L-family: didot-w01-italic, serif;
        --wix-font-Body-L-text-decoration: none;
        --wix-font-Body-M: normal normal normal 16px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --wix-font-Body-M-style: normal;
        --wix-font-Body-M-variant: normal;
        --wix-font-Body-M-weight: normal;
        --wix-font-Body-M-size: 16px;
        --wix-font-Body-M-line-height: 1.4em;
        --wix-font-Body-M-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Body-M-text-decoration: none;
        --wix-font-Body-S: normal normal normal 14px/1.4em proxima-n-w01-reg,
        sans-serif;
        --wix-font-Body-S-style: normal;
        --wix-font-Body-S-variant: normal;
        --wix-font-Body-S-weight: normal;
        --wix-font-Body-S-size: 14px;
        --wix-font-Body-S-line-height: 1.4em;
        --wix-font-Body-S-family: proxima-n-w01-reg, sans-serif;
        --wix-font-Body-S-text-decoration: none;
        --wix-font-Body-XS: normal normal normal 12px/1.4em din-next-w01-light,
        sans-serif;
        --wix-font-Body-XS-style: normal;
        --wix-font-Body-XS-variant: normal;
        --wix-font-Body-XS-weight: normal;
        --wix-font-Body-XS-size: 12px;
        --wix-font-Body-XS-line-height: 1.4em;
        --wix-font-Body-XS-family: din-next-w01-light, sans-serif;
        --wix-font-Body-XS-text-decoration: none;
        --wix-font-LIGHT: normal normal normal 12px/1.4em HelveticaNeueW01-45Ligh;
        --wix-font-LIGHT-style: normal;
        --wix-font-LIGHT-variant: normal;
        --wix-font-LIGHT-weight: normal;
        --wix-font-LIGHT-size: 12px;
        --wix-font-LIGHT-line-height: 1.4em;
        --wix-font-LIGHT-family: HelveticaNeueW01-45Ligh;
        --wix-font-LIGHT-text-decoration: none;
        --wix-font-MEDIUM: normal normal normal 12px/1.4em HelveticaNeueW01-55Roma;
        --wix-font-MEDIUM-style: normal;
        --wix-font-MEDIUM-variant: normal;
        --wix-font-MEDIUM-weight: normal;
        --wix-font-MEDIUM-size: 12px;
        --wix-font-MEDIUM-line-height: 1.4em;
        --wix-font-MEDIUM-family: HelveticaNeueW01-55Roma;
        --wix-font-MEDIUM-text-decoration: none;
        --wix-font-STRONG: normal normal normal 12px/1.4em HelveticaNeueW01-65Medi;
        --wix-font-STRONG-style: normal;
        --wix-font-STRONG-variant: normal;
        --wix-font-STRONG-weight: normal;
        --wix-font-STRONG-size: 12px;
        --wix-font-STRONG-line-height: 1.4em;
        --wix-font-STRONG-family: HelveticaNeueW01-65Medi;
        --wix-font-STRONG-text-decoration: none;
    }
    .comp-k013mc5w .s3AoZtO.o11i7Qx--forceBWTheme {
        --wut-main-cta-color: #bc4c2a;
    }
    .comp-k013mc5w .s3zMy0d {
        --Text3763176629-primary-color: #111111;
        --Text3763176629-secondary-color: #71716f;
    }
    .comp-k013mc5w .s3zMy0d.ovInIEc---typography-10-smallTitle {
        font: normal normal normal 24px/1.33em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w .s3zMy0d.ovInIEc---typography-11-runningText {
        font: normal normal normal 16px/1.5em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w .s3zMy0d.ovInIEc---typography-8-listText {
        font: normal normal normal 16px/2em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w .s3zMy0d.ovInIEc---typography-10-largeTitle {
        font: normal normal normal 32px/1.25em poppins-semibold, poppins,
        sans-serif;
    }
    .comp-k013mc5w .s3zMy0d.ovInIEc--mobile.ovInIEc---typography-10-smallTitle {
        font: normal normal normal 20px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w
    .s3zMy0d.ovInIEc--mobile.ovInIEc---typography-11-runningText {
        font: normal normal normal 14px/1.42em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w .s3zMy0d.ovInIEc--mobile.ovInIEc---typography-8-listText {
        font: normal normal normal 14px/1.72em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w .s3zMy0d.ovInIEc--mobile.ovInIEc---typography-10-largeTitle {
        font: normal normal normal 24px/1.33em poppins-semibold, poppins,
        sans-serif;
    }
    .comp-k013mc5w .-M081 {
        border-width: 0px;
        border-color: #f6f3ef;
    }
    .comp-k013mc5w ._8Luqx {
        border-width: 0px;
    }
    .comp-k013mc5w
    .s3vyM4t.o368P-v--disabled.s38mrmY
    .s3FfuoS
    svg:not([fill="currentColor"])
    path {
        stroke: #f6f3ef;
    }
    .comp-k013mc5w
    .s3vyM4t.o368P-v--disabled.sY3gMfK
    .s3FfuoS
    svg:not([fill="currentColor"])
    path {
        fill: #f6f3ef;
        stroke: #f6f3ef;
    }
    .comp-k013mc5w .s38mrmY .s3FfuoS svg:not([fill="currentColor"]) path,
    .comp-k013mc5w
    .s3vyM4t.o368P-v---skin-4-line
    .s3FfuoS
    svg:not([fill="currentColor"])
    path {
        stroke: #111111;
    }
    .comp-k013mc5w .sY3gMfK .s3FfuoS svg:not([fill="currentColor"]) path,
    .comp-k013mc5w
    .s3vyM4t.o368P-v---skin-4-full
    .s3FfuoS
    svg:not([fill="currentColor"])
    path {
        fill: #111111;
        stroke: #111111;
    }
    .comp-k013mc5w .s3vyM4t .s3FfuoS svg[fill="currentColor"] {
        color: #111111;
    }
    .comp-k013mc5w
    .s3vyM4t.o368P-v--disabled
    .s3FfuoS
    svg[fill="currentColor"] {
        color: #f6f3ef;
    }
    .comp-k013mc5w .s3vyM4t.o368P-v---theme-3-box {
        background-color: #ffffff;
    }
    .comp-k013mc5w .s3H0l6- {
        border-color: #bc4c2a;
        border-radius: 0;
    }
    .comp-k013mc5w .s3H0l6-,
    .comp-k013mc5w .s3H0l6-.oqw7-AE---priority-5-basic {
        color: #ffffff;
        background-color: #111111;
        border-width: 0px;
    }
    .comp-k013mc5w .s3H0l6-:active,
    .comp-k013mc5w .s3H0l6-.oqw7-AE---priority-5-basic:active,
    .comp-k013mc5w .s3H0l6-.o3ZnY6r--focus,
    .comp-k013mc5w .s3H0l6-.oqw7-AE---priority-5-basic.o3ZnY6r--focus,
    .comp-k013mc5w .s3H0l6-:hover,
    .comp-k013mc5w .s3H0l6-.oqw7-AE---priority-5-basic:hover {
        background-color: rgba(17, 17, 17, 0.7);
        color: rgba(255, 255, 255, 0.7);
        border-color: #bc4c2a;
    }
    .comp-k013mc5w .s3H0l6-.oqw7-AE---priority-14-basicSecondary {
        color: #111111;
        background-color: rgba(0, 0, 0, 0);
        border-color: #111111;
        border-width: 1px;
    }
    .comp-k013mc5w .s3H0l6-.oqw7-AE---priority-14-basicSecondary:active,
    .comp-k013mc5w .s3H0l6-.oqw7-AE---priority-14-basicSecondary.o3ZnY6r--focus,
    .comp-k013mc5w .s3H0l6-.oqw7-AE---priority-14-basicSecondary:hover {
        color: rgba(17, 17, 17, 0.7);
        border-color: rgba(17, 17, 17, 0.7);
    }
    .comp-k013mc5w .s3H0l6-.oqw7-AE---priority-7-primary {
        color: #ffffff;
        background-color: #bc4c2a;
        border-width: 0px;
    }
    .comp-k013mc5w .s3H0l6-.oqw7-AE---priority-7-primary:active,
    .comp-k013mc5w .s3H0l6-.oqw7-AE---priority-7-primary.o3ZnY6r--focus,
    .comp-k013mc5w .s3H0l6-.oqw7-AE---priority-7-primary:hover {
        background-color: rgba(188, 76, 42, 0.7);
        color: rgba(255, 255, 255, 0.7);
        border-color: #bc4c2a;
    }
    .comp-k013mc5w .s3H0l6-.oqw7-AE---priority-9-secondary {
        color: #bc4c2a;
        background-color: rgba(0, 0, 0, 0);
        border-color: #bc4c2a;
        border-width: 1px;
    }
    .comp-k013mc5w .s3H0l6-.oqw7-AE---priority-9-secondary:active,
    .comp-k013mc5w .s3H0l6-.oqw7-AE---priority-9-secondary.o3ZnY6r--focus,
    .comp-k013mc5w .s3H0l6-.oqw7-AE---priority-9-secondary:hover {
        color: rgba(188, 76, 42, 0.7);
        border-color: rgba(188, 76, 42, 0.7);
    }
    .comp-k013mc5w .s3H0l6-.okhokll--disabled,
    .comp-k013mc5w .s3H0l6-.oqw7-AE---priority-5-basic.okhokll--disabled,
    .comp-k013mc5w .s3H0l6-.oqw7-AE---priority-7-primary.okhokll--disabled {
        background-color: #f6f3ef;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-14-basicSecondary.okhokll--disabled,
    .comp-k013mc5w .s3H0l6-.oqw7-AE---priority-9-secondary.okhokll--disabled {
        color: #f6f3ef;
        background-color: rgba(0, 0, 0, 0);
        border-color: #f6f3ef;
    }
    .comp-k013mc5w .s3H0l6-.oqw7-AE---size-4-tiny {
        font: normal normal normal 14px/1.43em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w .s3H0l6-.oqw7-AE---size-5-small {
        font: normal normal normal 16px/1.5em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w .s3H0l6-,
    .comp-k013mc5w .s3H0l6-.oqw7-AE---size-6-medium {
        font: normal normal normal 16px/1.5em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w .s3H0l6-.oqw7-AE--mobile,
    .comp-k013mc5w .s3H0l6-.oqw7-AE--mobile.oqw7-AE---size-6-medium {
        font: normal normal normal 14px/1.44em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w .s3H0l6-.oqw7-AE---size-5-large {
        font: normal normal normal 20px/1.5em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w .s3H0l6-.oqw7-AE--mobile.oqw7-AE--upgrade {
        font: normal normal normal 14px/1 avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---size-4-tiny.oqw7-AE--upgrade:not(.oqw7-AE--mobile) {
        font: normal normal normal 14px/1 avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-9-secondary.oqw7-AE--upgrade.oqw7-AE---size-4-tiny,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-14-basicSecondary.oqw7-AE--upgrade.oqw7-AE---size-4-tiny {
        padding: calc(9px - 1px) 16px;
    }
    .comp-k013mc5w .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---size-4-tiny,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-4-tiny,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-4-tiny {
        padding: calc(9px - 0px) 16px;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-9-secondary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-4-tiny,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-14-basicSecondary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-4-tiny {
        padding: calc(6.9px - 1px) 16px;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-4-tiny,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-4-tiny,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-4-tiny {
        padding: calc(6.9px - 0px) 16px;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---size-5-small.oqw7-AE--upgrade:not(.oqw7-AE--mobile) {
        font: normal normal normal 16px/1 avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary.oqw7-AE---size-5-small,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-5-small {
        padding: calc(10px - 1px) 16px;
    }
    .comp-k013mc5w .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---size-5-small,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-5-small,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-5-small {
        padding: calc(10px - 0px) 16px;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary.oqw7-AE---size-5-small,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-5-small {
        padding: calc(7.6px - 1px) 16px;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-small,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-small,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-small {
        padding: calc(7.6px - 0px) 16px;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary.oqw7-AE---size-5-small.oqw7-AE--mobile,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-5-small.oqw7-AE--mobile {
        padding: calc(11px - 1px) 16px;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---size-5-small.oqw7-AE--mobile,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-5-small.oqw7-AE--mobile,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-5-small.oqw7-AE--mobile {
        padding: calc(11px - 0px) 16px;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary.oqw7-AE---size-5-small.oqw7-AE--mobile,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-5-small.oqw7-AE--mobile {
        padding: calc(8.9px - 1px) 16px;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-small.oqw7-AE--mobile,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-small.oqw7-AE--mobile,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-small.oqw7-AE--mobile {
        padding: calc(8.9px - 0px) 16px;
    }
    .comp-k013mc5w .s3H0l6-.oqw7-AE--upgrade:not(.oqw7-AE--mobile),
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---size-6-medium.oqw7-AE--upgrade:not(.oqw7-AE--mobile) {
        font: normal normal normal 16px/1 avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary.oqw7-AE---size-6-medium,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-6-medium {
        padding: calc(12px - 1px) 16px;
    }
    .comp-k013mc5w .s3H0l6-.oqw7-AE--upgrade,
    .comp-k013mc5w .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---size-6-medium,
    .comp-k013mc5w .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-6-medium,
    .comp-k013mc5w .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-6-medium {
        padding: calc(12px - 0px) 16px;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary.oqw7-AE---size-6-medium,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-6-medium {
        padding: calc(9.6px - 1px) 16px;
    }
    .comp-k013mc5w .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-6-medium,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-6-medium,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-6-medium {
        padding: calc(9.6px - 0px) 16px;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary.oqw7-AE--mobile,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary.oqw7-AE---size-6-medium.oqw7-AE--mobile,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary.oqw7-AE--mobile,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-6-medium.oqw7-AE--mobile {
        padding: calc(13px - 1px) 16px;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---size-6-medium.oqw7-AE--mobile,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--mobile,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-6-medium.oqw7-AE--mobile,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--mobile,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-6-medium.oqw7-AE--mobile {
        padding: calc(13px - 0px) 16px;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary.oqw7-AE--mobile,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary.oqw7-AE---size-6-medium.oqw7-AE--mobile,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary.oqw7-AE--mobile,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-6-medium.oqw7-AE--mobile {
        padding: calc(10.9px - 1px) 16px;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-6-medium.oqw7-AE--mobile,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE--mobile,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-6-medium.oqw7-AE--mobile,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE--mobile,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-6-medium.oqw7-AE--mobile {
        padding: calc(10.9px - 0px) 16px;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---size-5-large.oqw7-AE--upgrade:not(.oqw7-AE--mobile) {
        font: normal normal normal 16px/1 avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary {
        padding: calc(16px - 1px) 16px;
    }
    .comp-k013mc5w .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---size-5-large,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-5-large,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-5-large {
        padding: calc(16px - 0px) 16px;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary {
        padding: calc(13.6px - 1px) 16px;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-large,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-large,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-large {
        padding: calc(13.6px - 0px) 16px;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary.oqw7-AE--mobile,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary.oqw7-AE--mobile {
        padding: calc(17px - 1px) 16px;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---size-5-large.oqw7-AE--mobile,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-5-large.oqw7-AE--mobile,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-5-large.oqw7-AE--mobile {
        padding: calc(17px - 1px) 16px;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary.oqw7-AE--mobile,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary.oqw7-AE--mobile {
        padding: calc(14.9px - 1px) 16px;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-large.oqw7-AE--mobile,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-large.oqw7-AE--mobile,
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-large.oqw7-AE--mobile {
        padding: calc(14.9px - 1px) 16px;
    }
    .comp-k013mc5w .s3H0l6- .s3XkdGq svg:not([fill="currentColor"]) path {
        stroke: #ffffff;
    }
    .comp-k013mc5w .s3H0l6-:hover .s3XkdGq svg:not([fill="currentColor"]) path {
        stroke: rgba(255, 255, 255, 0.7);
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-9-secondary
    .s3XkdGq
    svg:not([fill="currentColor"])
    path {
        stroke: #bc4c2a;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-9-secondary:hover
    .s3XkdGq
    svg:not([fill="currentColor"])
    path {
        stroke: rgba(188, 76, 42, 0.7);
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-14-basicSecondary
    .s3XkdGq
    svg:not([fill="currentColor"])
    path {
        stroke: #111111;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-14-basicSecondary:hover
    .s3XkdGq
    svg:not([fill="currentColor"])
    path {
        stroke: rgba(17, 17, 17, 0.7);
    }
    .comp-k013mc5w .s3H0l6- .s3XkdGq svg[fill="currentColor"] {
        color: #ffffff;
    }
    .comp-k013mc5w .s3H0l6-:hover .s3XkdGq svg[fill="currentColor"] {
        color: rgba(255, 255, 255, 0.7);
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-9-secondary
    .s3XkdGq
    svg[fill="currentColor"] {
        color: #bc4c2a;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-9-secondary:hover
    .s3XkdGq
    svg[fill="currentColor"] {
        color: rgba(188, 76, 42, 0.7);
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-14-basicSecondary
    .s3XkdGq
    svg[fill="currentColor"] {
        color: #111111;
    }
    .comp-k013mc5w
    .s3H0l6-.oqw7-AE---priority-14-basicSecondary:hover
    .s3XkdGq
    svg[fill="currentColor"] {
        color: rgba(17, 17, 17, 0.7);
    }
    .comp-k013mc5w .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi .s2je5Mz {
        background-color: #ffffff;
    }
    .comp-k013mc5w
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi
    .s8aWKTI.o368P-v--disabled.s38mrmY
    .s3FfuoS
    svg:not([fill="currentColor"])
    path {
        stroke: #f6f3ef;
    }
    .comp-k013mc5w
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi
    .s8aWKTI.o368P-v--disabled.sY3gMfK
    .s3FfuoS
    svg:not([fill="currentColor"])
    path {
        fill: #f6f3ef;
        stroke: #f6f3ef;
    }
    .comp-k013mc5w
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi
    .s8aWKTI
    .s38mrmY
    .s3FfuoS
    svg:not([fill="currentColor"])
    path,
    .comp-k013mc5w
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi
    .s8aWKTI.o368P-v---skin-4-line
    .s3FfuoS
    svg:not([fill="currentColor"])
    path {
        stroke: #000000;
    }
    .comp-k013mc5w
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi
    .s8aWKTI
    .sY3gMfK
    .s3FfuoS
    svg:not([fill="currentColor"])
    path,
    .comp-k013mc5w
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi
    .s8aWKTI.o368P-v---skin-4-full
    .s3FfuoS
    svg:not([fill="currentColor"])
    path {
        fill: #000000;
        stroke: #000000;
    }
    .comp-k013mc5w
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi
    .s8aWKTI
    .s3FfuoS
    svg[fill="currentColor"] {
        color: #000000;
    }
    .comp-k013mc5w
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi
    .s8aWKTI.o368P-v--disabled
    .s3FfuoS
    svg[fill="currentColor"] {
        color: #f6f3ef;
    }
    .comp-k013mc5w
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi
    .s8aWKTI.o368P-v---theme-3-box {
        background-color: #ffffff;
    }
    .comp-k013mc5w .s3WR7z9.o1u-apJ--wired.sQubKFT .s2je5Mz {
        background-color: #ffffff;
    }
    .comp-k013mc5w
    .s3WR7z9.o1u-apJ--wired.sQubKFT
    .s8aWKTI.o368P-v--disabled.s38mrmY
    .s3FfuoS
    svg:not([fill="currentColor"])
    path {
        stroke: #f6f3ef;
    }
    .comp-k013mc5w
    .s3WR7z9.o1u-apJ--wired.sQubKFT
    .s8aWKTI.o368P-v--disabled.sY3gMfK
    .s3FfuoS
    svg:not([fill="currentColor"])
    path {
        fill: #f6f3ef;
        stroke: #f6f3ef;
    }
    .comp-k013mc5w
    .s3WR7z9.o1u-apJ--wired.sQubKFT
    .s8aWKTI
    .s38mrmY
    .s3FfuoS
    svg:not([fill="currentColor"])
    path,
    .comp-k013mc5w
    .s3WR7z9.o1u-apJ--wired.sQubKFT
    .s8aWKTI.o368P-v---skin-4-line
    .s3FfuoS
    svg:not([fill="currentColor"])
    path {
        stroke: #111111;
    }
    .comp-k013mc5w
    .s3WR7z9.o1u-apJ--wired.sQubKFT
    .s8aWKTI
    .sY3gMfK
    .s3FfuoS
    svg:not([fill="currentColor"])
    path,
    .comp-k013mc5w
    .s3WR7z9.o1u-apJ--wired.sQubKFT
    .s8aWKTI.o368P-v---skin-4-full
    .s3FfuoS
    svg:not([fill="currentColor"])
    path {
        fill: #111111;
        stroke: #111111;
    }
    .comp-k013mc5w
    .s3WR7z9.o1u-apJ--wired.sQubKFT
    .s8aWKTI
    .s3FfuoS
    svg[fill="currentColor"] {
        color: #111111;
    }
    .comp-k013mc5w
    .s3WR7z9.o1u-apJ--wired.sQubKFT
    .s8aWKTI.o368P-v--disabled
    .s3FfuoS
    svg[fill="currentColor"] {
        color: #f6f3ef;
    }
    .comp-k013mc5w
    .s3WR7z9.o1u-apJ--wired.sQubKFT
    .s8aWKTI.o368P-v---theme-3-box {
        background-color: #ffffff;
    }
    @media only screen and (min-width: 769px) {
        .comp-k013mc5w .FGmSV:hover .Btrwx.lG9yE:before {
            background-color: rgba(246, 243, 239, 0);
        }
        .comp-k013mc5w .FGmSV:hover .Btrwx.\+HTSx:before {
            background-color: rgba(246, 243, 239, 0);
        }
    }
    .comp-k013mc5w .Xxql9 {
        border-width: 0px;
        border-color: #f6f3ef;
    }
    .comp-k013mc5w .xedmF:hover {
        border-width: 0px;
        border-color: #f6f3ef;
    }
    .comp-k013mc5w .t\+aKN {
        padding-top: 20px;
        padding-bottom: 20px;
    }
    .comp-k013mc5w .t\+aKN.y59ra {
        background-color: rgba(255, 255, 255, 0);
    }
    .comp-k013mc5w .t\+aKN.fAF3C {
        background-color: rgba(255, 255, 255, 0);
    }
    .comp-k013mc5w .edsBl.y59ra {
        padding-left: 12%;
        padding-right: 12%;
    }
    .comp-k013mc5w .edsBl.fAF3C {
        padding-left: 25px;
        padding-right: 25px;
    }
    .comp-k013mc5w .zFUN1 {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        background: rgba(188, 76, 42, 0);
        border-color: rgba(188, 76, 42, 1);
        border-width: 1px;
        border-radius: 0;
        width: 50%;
        color: rgba(188, 76, 42, 1);
    }
    .comp-k013mc5w .xlPd- {
        margin-top: 30px;
    }
    .comp-k013mc5w ._2d1gz {
        color: #ffffff;
        background: #fafafa;
    }
    .comp-k013mc5w .s2-r02J {
        --Text3763176629-primary-color: #111111;
        --Text3763176629-secondary-color: #111111;
    }
    .comp-k013mc5w .s2-r02J.ovInIEc---typography-10-smallTitle {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w .s2-r02J.ovInIEc---typography-11-runningText {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w .s2-r02J.ovInIEc---typography-8-listText {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w .s2-r02J.ovInIEc---typography-10-largeTitle {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w .s2-r02J.ovInIEc--mobile.ovInIEc---typography-10-smallTitle {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w
    .s2-r02J.ovInIEc--mobile.ovInIEc---typography-11-runningText {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w .s2-r02J.ovInIEc--mobile.ovInIEc---typography-8-listText {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w .s2-r02J.ovInIEc--mobile.ovInIEc---typography-10-largeTitle {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w .s1G5A6w {
        border-color: rgb(188, 76, 42);
        border-radius: 0;
        width: 50%;
    }
    .comp-k013mc5w .s1G5A6w,
    .comp-k013mc5w .s1G5A6w.oqw7-AE---priority-5-basic {
        color: rgb(188, 76, 42);
        background-color: rgba(188, 76, 42, 0);
        border-width: 1px;
    }
    .comp-k013mc5w .s1G5A6w:active,
    .comp-k013mc5w .s1G5A6w.oqw7-AE---priority-5-basic:active,
    .comp-k013mc5w .s1G5A6w.o3ZnY6r--focus,
    .comp-k013mc5w .s1G5A6w.oqw7-AE---priority-5-basic.o3ZnY6r--focus,
    .comp-k013mc5w .s1G5A6w:hover,
    .comp-k013mc5w .s1G5A6w.oqw7-AE---priority-5-basic:hover {
        background-color: rgba(188, 76, 42, 0);
        color: rgba(188, 76, 42, 0.7);
        border-color: rgb(188, 76, 42);
    }
    .comp-k013mc5w .s1G5A6w.oqw7-AE---priority-14-basicSecondary {
        color: rgb(188, 76, 42);
        background-color: rgba(188, 76, 42, 0);
        border-color: rgb(188, 76, 42);
        border-width: 1px;
    }
    .comp-k013mc5w .s1G5A6w.oqw7-AE---priority-14-basicSecondary:active,
    .comp-k013mc5w .s1G5A6w.oqw7-AE---priority-14-basicSecondary.o3ZnY6r--focus,
    .comp-k013mc5w .s1G5A6w.oqw7-AE---priority-14-basicSecondary:hover {
        color: rgba(188, 76, 42, 0.7);
        border-color: rgba(188, 76, 42, 0.7);
    }
    .comp-k013mc5w .s1G5A6w.oqw7-AE---priority-7-primary {
        color: rgb(188, 76, 42);
        background-color: rgba(188, 76, 42, 0);
        border-width: 1px;
    }
    .comp-k013mc5w .s1G5A6w.oqw7-AE---priority-7-primary:active,
    .comp-k013mc5w .s1G5A6w.oqw7-AE---priority-7-primary.o3ZnY6r--focus,
    .comp-k013mc5w .s1G5A6w.oqw7-AE---priority-7-primary:hover {
        background-color: rgba(188, 76, 42, 0);
        color: rgba(188, 76, 42, 0.7);
        border-color: rgb(188, 76, 42);
    }
    .comp-k013mc5w .s1G5A6w.oqw7-AE---priority-9-secondary {
        color: rgb(188, 76, 42);
        background-color: rgba(188, 76, 42, 0);
        border-color: rgb(188, 76, 42);
        border-width: 1px;
    }
    .comp-k013mc5w .s1G5A6w.oqw7-AE---priority-9-secondary:active,
    .comp-k013mc5w .s1G5A6w.oqw7-AE---priority-9-secondary.o3ZnY6r--focus,
    .comp-k013mc5w .s1G5A6w.oqw7-AE---priority-9-secondary:hover {
        color: rgba(188, 76, 42, 0.7);
        border-color: rgba(188, 76, 42, 0.7);
    }
    .comp-k013mc5w .s1G5A6w.okhokll--disabled,
    .comp-k013mc5w .s1G5A6w.oqw7-AE---priority-5-basic.okhokll--disabled,
    .comp-k013mc5w .s1G5A6w.oqw7-AE---priority-7-primary.okhokll--disabled {
        background-color: #f6f3ef;
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-14-basicSecondary.okhokll--disabled,
    .comp-k013mc5w .s1G5A6w.oqw7-AE---priority-9-secondary.okhokll--disabled {
        color: #f6f3ef;
        background-color: rgba(0, 0, 0, 0);
        border-color: #f6f3ef;
    }
    .comp-k013mc5w .s1G5A6w.oqw7-AE---size-4-tiny {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w .s1G5A6w.oqw7-AE---size-5-small {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w .s1G5A6w,
    .comp-k013mc5w .s1G5A6w.oqw7-AE---size-6-medium {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w .s1G5A6w.oqw7-AE--mobile,
    .comp-k013mc5w .s1G5A6w.oqw7-AE--mobile.oqw7-AE---size-6-medium {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w .s1G5A6w.oqw7-AE---size-5-large {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w .s1G5A6w.oqw7-AE--mobile.oqw7-AE--upgrade {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---size-4-tiny.oqw7-AE--upgrade:not(.oqw7-AE--mobile) {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-9-secondary.oqw7-AE--upgrade.oqw7-AE---size-4-tiny,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-14-basicSecondary.oqw7-AE--upgrade.oqw7-AE---size-4-tiny {
        padding: calc(9px - 1px) 16px;
    }
    .comp-k013mc5w .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---size-4-tiny,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-4-tiny,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-4-tiny {
        padding: calc(9px - 1px) 16px;
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-9-secondary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-4-tiny,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-14-basicSecondary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-4-tiny {
        padding: calc(6.9px - 1px) 16px;
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-4-tiny,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-4-tiny,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-4-tiny {
        padding: calc(6.9px - 1px) 16px;
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---size-5-small.oqw7-AE--upgrade:not(.oqw7-AE--mobile) {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary.oqw7-AE---size-5-small,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-5-small {
        padding: calc(10px - 1px) 16px;
    }
    .comp-k013mc5w .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---size-5-small,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-5-small,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-5-small {
        padding: calc(10px - 1px) 16px;
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary.oqw7-AE---size-5-small,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-5-small {
        padding: calc(7.6px - 1px) 16px;
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-small,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-small,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-small {
        padding: calc(7.6px - 1px) 16px;
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary.oqw7-AE---size-5-small.oqw7-AE--mobile,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-5-small.oqw7-AE--mobile {
        padding: calc(11px - 1px) 16px;
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---size-5-small.oqw7-AE--mobile,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-5-small.oqw7-AE--mobile,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-5-small.oqw7-AE--mobile {
        padding: calc(11px - 1px) 16px;
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary.oqw7-AE---size-5-small.oqw7-AE--mobile,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-5-small.oqw7-AE--mobile {
        padding: calc(8.9px - 1px) 16px;
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-small.oqw7-AE--mobile,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-small.oqw7-AE--mobile,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-small.oqw7-AE--mobile {
        padding: calc(8.9px - 1px) 16px;
    }
    .comp-k013mc5w .s1G5A6w.oqw7-AE--upgrade:not(.oqw7-AE--mobile),
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---size-6-medium.oqw7-AE--upgrade:not(.oqw7-AE--mobile) {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary.oqw7-AE---size-6-medium,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-6-medium {
        padding: calc(12px - 1px) 16px;
    }
    .comp-k013mc5w .s1G5A6w.oqw7-AE--upgrade,
    .comp-k013mc5w .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---size-6-medium,
    .comp-k013mc5w .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-6-medium,
    .comp-k013mc5w .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-6-medium {
        padding: calc(12px - 1px) 16px;
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary.oqw7-AE---size-6-medium,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-6-medium {
        padding: calc(9.6px - 1px) 16px;
    }
    .comp-k013mc5w .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-6-medium,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-6-medium,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-6-medium {
        padding: calc(9.6px - 1px) 16px;
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary.oqw7-AE--mobile,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary.oqw7-AE---size-6-medium.oqw7-AE--mobile,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary.oqw7-AE--mobile,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-6-medium.oqw7-AE--mobile {
        padding: calc(13px - 1px) 16px;
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---size-6-medium.oqw7-AE--mobile,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--mobile,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-6-medium.oqw7-AE--mobile,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--mobile,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-6-medium.oqw7-AE--mobile {
        padding: calc(13px - 1px) 16px;
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary.oqw7-AE--mobile,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary.oqw7-AE---size-6-medium.oqw7-AE--mobile,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary.oqw7-AE--mobile,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-6-medium.oqw7-AE--mobile {
        padding: calc(10.9px - 1px) 16px;
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-6-medium.oqw7-AE--mobile,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE--mobile,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-6-medium.oqw7-AE--mobile,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE--mobile,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-6-medium.oqw7-AE--mobile {
        padding: calc(10.9px - 1px) 16px;
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---size-5-large.oqw7-AE--upgrade:not(.oqw7-AE--mobile) {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary {
        padding: calc(16px - 1px) 16px;
    }
    .comp-k013mc5w .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---size-5-large,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-5-large,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-5-large {
        padding: calc(16px - 1px) 16px;
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary {
        padding: calc(13.6px - 1px) 16px;
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-large,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-large,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-large {
        padding: calc(13.6px - 1px) 16px;
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary.oqw7-AE--mobile,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary.oqw7-AE--mobile {
        padding: calc(17px - 1px) 16px;
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---size-5-large.oqw7-AE--mobile,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-5-large.oqw7-AE--mobile,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-5-large.oqw7-AE--mobile {
        padding: calc(17px - 1px) 16px;
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary.oqw7-AE--mobile,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary.oqw7-AE--mobile {
        padding: calc(14.9px - 1px) 16px;
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-large.oqw7-AE--mobile,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-large.oqw7-AE--mobile,
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-large.oqw7-AE--mobile {
        padding: calc(14.9px - 1px) 16px;
    }
    .comp-k013mc5w .s1G5A6w .s3XkdGq svg:not([fill="currentColor"]) path {
        stroke: rgb(188, 76, 42);
    }
    .comp-k013mc5w .s1G5A6w:hover .s3XkdGq svg:not([fill="currentColor"]) path {
        stroke: rgba(188, 76, 42, 0.7);
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-9-secondary
    .s3XkdGq
    svg:not([fill="currentColor"])
    path {
        stroke: rgb(188, 76, 42);
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-9-secondary:hover
    .s3XkdGq
    svg:not([fill="currentColor"])
    path {
        stroke: rgba(188, 76, 42, 0.7);
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-14-basicSecondary
    .s3XkdGq
    svg:not([fill="currentColor"])
    path {
        stroke: rgb(188, 76, 42);
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-14-basicSecondary:hover
    .s3XkdGq
    svg:not([fill="currentColor"])
    path {
        stroke: rgba(188, 76, 42, 0.7);
    }
    .comp-k013mc5w .s1G5A6w .s3XkdGq svg[fill="currentColor"] {
        color: rgb(188, 76, 42);
    }
    .comp-k013mc5w .s1G5A6w:hover .s3XkdGq svg[fill="currentColor"] {
        color: rgba(188, 76, 42, 0.7);
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-9-secondary
    .s3XkdGq
    svg[fill="currentColor"] {
        color: rgb(188, 76, 42);
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-9-secondary:hover
    .s3XkdGq
    svg[fill="currentColor"] {
        color: rgba(188, 76, 42, 0.7);
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-14-basicSecondary
    .s3XkdGq
    svg[fill="currentColor"] {
        color: rgb(188, 76, 42);
    }
    .comp-k013mc5w
    .s1G5A6w.oqw7-AE---priority-14-basicSecondary:hover
    .s3XkdGq
    svg[fill="currentColor"] {
        color: rgba(188, 76, 42, 0.7);
    }
    .comp-k013mc5w .XZcR6 {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        color: #111111;
    }
    .comp-k013mc5w .usz8p {
        margin-bottom: 15px;
    }
    .comp-k013mc5w .-z-qM {
        text-align: center;
    }
    .comp-k013mc5w .S8HtR {
        text-align: center;
    }
    .comp-k013mc5w ._9292T {
        height: 2px;
        width: 20px;
        background-color: #111111;
    }
    .comp-k013mc5w ._4430u {
        margin-bottom: 15px;
    }
    .comp-k013mc5w .OnjFr {
        font: normal normal normal 18px/22px didot-w01-italic, serif;
        color: rgb(188, 76, 42);
        font-size: [object Object];
    }
    .comp-k013mc5w ._0o3Qi {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        color: #71716f;
        font-size: 12px;
    }
    .comp-k013mc5w .\+j2N0 {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        color: #71716f;
        font-size: 12px;
    }
    .comp-k013mc5w .p\+iyY {
        font: normal normal normal 14px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        color: #bc4c2a;
    }
    .comp-k013mc5w .DDgM4 {
        color: #8f7674;
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k013mc5w .mwsWw {
        width: 50%;
    }
    .comp-k013mc5w .doqoa {
        background-color: #111111;
        color: #ffffff;
    }
    .comp-k013mc5w .VBsKx {
        background-color: #fafafa;
        color: #71716f;
    }
    .comp-k013mc5w .jMeVp {
        --ribbonText: #ffffff;
        --ribbonFont: normal normal normal 16px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --ribbonBackground: #bc4c2a;
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        color: #ffffff;
        background: #bc4c2a;
    }
    #comp-k00zfyzu {
        --fill-layer-image-opacity: 0.83;
        --bg-overlay-color: rgb(var(--color_15));
        --bg-gradient: none;
        width: 100%;
        --column-width: 490px;
        --column-flex: 490;
    }
    #comp-k00zgfqb {
        --text-direction: var(--wix-opt-in-direction);
    }
    #comp-k011k29f {
        --bg-overlay-color: transparent;
        --bg-gradient: none;
        --padding: 0px;
        --margin: 0px;
        min-width: 980px;
        --firstChildMarginTop: -1px;
        --lastChildMarginBottom: -1px;
        --direction: ltr;
    }
    #comp-k011k2bs {
        --fill-layer-image-opacity: 0.83;
        --bg-overlay-color: rgb(var(--color_15));
        --bg-gradient: none;
        width: 100%;
        --column-width: 490px;
        --column-flex: 490;
    }
    #comp-k011k2bx {
        --text-direction: var(--wix-opt-in-direction);
    }
    #comp-k011k2bo {
        --bg-overlay-color: rgb(var(--color_13));
        --bg-gradient: none;
        width: 100%;
        --column-width: 490px;
        --column-flex: 490;
    }
    .comp-k023jkdl {
        --wix-direction: ltr;
        --alignment: center;
        --borderSize: 0px;
        --buttonSpace: 30px;
        --dividerHeight: 2px;
        --dividerWidth: 20px;
        --horizontalSpace: 25px;
        --hoverBackgroundColorOpacity: 0;
        --hoverBorderSize: 0px;
        --hoverState: zoom;
        --imageScaling: crop;
        --innerSpace: 10px;
        --layout: layout2;
        --verticalSpace: 36px;
        --widgetAction: addToCart;
        --actionButton_borderColor: 188, 76, 42;
        --actionButton_borderColor-rgb: 188, 76, 42;
        --actionButton_borderColor-opacity: 1;
        --actionButton_textColor: 188, 76, 42;
        --actionButton_textColor-rgb: 188, 76, 42;
        --actionButton_textColor-opacity: 1;
        --hoverBackgroundColor: 246, 243, 239, 0;
        --hoverBackgroundColor-rgb: 246, 243, 239;
        --hoverBackgroundColor-opacity: 0;
        --priceColor: 188, 76, 42;
        --priceColor-rgb: 188, 76, 42;
        --priceColor-opacity: 1;
        --actionButton_textFont: normal normal normal 16px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --actionButton_textFont-style: normal;
        --actionButton_textFont-variant: normal;
        --actionButton_textFont-weight: normal;
        --actionButton_textFont-size: 16px;
        --actionButton_textFont-line-height: 1.4em;
        --actionButton_textFont-family: avenir-lt-w01_35-light1475496, sans-serif;
        --actionButton_textFont-text-decoration: none;
        --nameFont: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        --nameFont-style: normal;
        --nameFont-variant: normal;
        --nameFont-weight: normal;
        --nameFont-size: 16px;
        --nameFont-line-height: 1.4em;
        --nameFont-family: avenir-lt-w01_35-light1475496, sans-serif;
        --nameFont-text-decoration: none;
        --outOfStockFont: normal normal normal 16px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --outOfStockFont-style: normal;
        --outOfStockFont-variant: normal;
        --outOfStockFont-weight: normal;
        --outOfStockFont-size: 16px;
        --outOfStockFont-line-height: 1.4em;
        --outOfStockFont-family: avenir-lt-w01_35-light1475496, sans-serif;
        --outOfStockFont-text-decoration: none;
        --priceFont: normal normal normal 18px/22px didot-w01-italic, serif;
        --priceFont-style: normal;
        --priceFont-variant: normal;
        --priceFont-weight: normal;
        --priceFont-size: 18px;
        --priceFont-line-height: 22px;
        --priceFont-family: didot-w01-italic, serif;
        --priceFont-text-decoration: none;
        --wix-color-1: 255, 255, 255;
        --wix-color-2: 250, 250, 250;
        --wix-color-3: 246, 243, 239;
        --wix-color-4: 113, 113, 111;
        --wix-color-5: 17, 17, 17;
        --wix-color-6: 233, 186, 172;
        --wix-color-7: 210, 148, 129;
        --wix-color-8: 188, 76, 42;
        --wix-color-9: 125, 51, 28;
        --wix-color-10: 63, 25, 14;
        --wix-color-11: 210, 209, 200;
        --wix-color-12: 166, 164, 153;
        --wix-color-13: 121, 119, 103;
        --wix-color-14: 81, 79, 69;
        --wix-color-15: 40, 40, 34;
        --wix-color-16: 223, 203, 202;
        --wix-color-17: 191, 157, 155;
        --wix-color-18: 143, 118, 116;
        --wix-color-19: 96, 79, 78;
        --wix-color-20: 48, 39, 39;
        --wix-color-21: 255, 216, 184;
        --wix-color-22: 254, 177, 114;
        --wix-color-23: 191, 133, 86;
        --wix-color-24: 127, 89, 57;
        --wix-color-25: 64, 44, 28;
        --wix-color-26: 255, 255, 255;
        --wix-color-27: 17, 17, 17;
        --wix-color-28: 250, 250, 250;
        --wix-color-29: 246, 243, 239;
        --wix-color-30: 113, 113, 111;
        --wix-color-31: 188, 76, 42;
        --wix-color-32: 17, 17, 17;
        --wix-color-33: 246, 243, 239;
        --wix-color-34: 255, 255, 255;
        --wix-color-35: 17, 17, 17;
        --wix-color-36: 17, 17, 17;
        --wix-color-37: 113, 113, 111;
        --wix-color-38: 188, 76, 42;
        --wix-color-39: 188, 76, 42;
        --wix-color-40: 255, 255, 255;
        --wix-color-41: 255, 255, 255;
        --wix-color-42: 188, 76, 42;
        --wix-color-43: 188, 76, 42;
        --wix-color-44: 246, 243, 239;
        --wix-color-45: 246, 243, 239;
        --wix-color-46: 255, 255, 255;
        --wix-color-47: 255, 255, 255;
        --wix-color-48: 188, 76, 42;
        --wix-color-49: 188, 76, 42;
        --wix-color-50: 188, 76, 42;
        --wix-color-51: 188, 76, 42;
        --wix-color-52: 255, 255, 255;
        --wix-color-53: 255, 255, 255;
        --wix-color-54: 246, 243, 239;
        --wix-color-55: 246, 243, 239;
        --wix-font-Title: normal normal normal 42px/1.4em poppins-semibold,
        poppins, sans-serif;
        --wix-font-Title-style: normal;
        --wix-font-Title-variant: normal;
        --wix-font-Title-weight: normal;
        --wix-font-Title-size: 42px;
        --wix-font-Title-line-height: 1.4em;
        --wix-font-Title-family: poppins-semibold, poppins, sans-serif;
        --wix-font-Title-text-decoration: none;
        --wix-font-Menu: normal normal normal 16px/1.4em din-next-w01-light,
        sans-serif;
        --wix-font-Menu-style: normal;
        --wix-font-Menu-variant: normal;
        --wix-font-Menu-weight: normal;
        --wix-font-Menu-size: 16px;
        --wix-font-Menu-line-height: 1.4em;
        --wix-font-Menu-family: din-next-w01-light, sans-serif;
        --wix-font-Menu-text-decoration: none;
        --wix-font-Page-title: normal normal normal 30px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --wix-font-Page-title-style: normal;
        --wix-font-Page-title-variant: normal;
        --wix-font-Page-title-weight: normal;
        --wix-font-Page-title-size: 30px;
        --wix-font-Page-title-line-height: 1.4em;
        --wix-font-Page-title-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Page-title-text-decoration: none;
        --wix-font-Heading-XL: normal normal normal 28px/1.4em didot-w01-italic,
        serif;
        --wix-font-Heading-XL-style: normal;
        --wix-font-Heading-XL-variant: normal;
        --wix-font-Heading-XL-weight: normal;
        --wix-font-Heading-XL-size: 28px;
        --wix-font-Heading-XL-line-height: 1.4em;
        --wix-font-Heading-XL-family: didot-w01-italic, serif;
        --wix-font-Heading-XL-text-decoration: none;
        --wix-font-Heading-L: normal normal normal 25px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --wix-font-Heading-L-style: normal;
        --wix-font-Heading-L-variant: normal;
        --wix-font-Heading-L-weight: normal;
        --wix-font-Heading-L-size: 25px;
        --wix-font-Heading-L-line-height: 1.4em;
        --wix-font-Heading-L-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Heading-L-text-decoration: none;
        --wix-font-Heading-M: normal normal normal 24px/1.4em poppins-semibold,
        poppins, sans-serif;
        --wix-font-Heading-M-style: normal;
        --wix-font-Heading-M-variant: normal;
        --wix-font-Heading-M-weight: normal;
        --wix-font-Heading-M-size: 24px;
        --wix-font-Heading-M-line-height: 1.4em;
        --wix-font-Heading-M-family: poppins-semibold, poppins, sans-serif;
        --wix-font-Heading-M-text-decoration: none;
        --wix-font-Heading-S: normal normal normal 20px/1.4em didot-w01-italic,
        serif;
        --wix-font-Heading-S-style: normal;
        --wix-font-Heading-S-variant: normal;
        --wix-font-Heading-S-weight: normal;
        --wix-font-Heading-S-size: 20px;
        --wix-font-Heading-S-line-height: 1.4em;
        --wix-font-Heading-S-family: didot-w01-italic, serif;
        --wix-font-Heading-S-text-decoration: none;
        --wix-font-Body-L: normal normal normal 20px/1.4em didot-w01-italic, serif;
        --wix-font-Body-L-style: normal;
        --wix-font-Body-L-variant: normal;
        --wix-font-Body-L-weight: normal;
        --wix-font-Body-L-size: 20px;
        --wix-font-Body-L-line-height: 1.4em;
        --wix-font-Body-L-family: didot-w01-italic, serif;
        --wix-font-Body-L-text-decoration: none;
        --wix-font-Body-M: normal normal normal 16px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --wix-font-Body-M-style: normal;
        --wix-font-Body-M-variant: normal;
        --wix-font-Body-M-weight: normal;
        --wix-font-Body-M-size: 16px;
        --wix-font-Body-M-line-height: 1.4em;
        --wix-font-Body-M-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Body-M-text-decoration: none;
        --wix-font-Body-S: normal normal normal 14px/1.4em proxima-n-w01-reg,
        sans-serif;
        --wix-font-Body-S-style: normal;
        --wix-font-Body-S-variant: normal;
        --wix-font-Body-S-weight: normal;
        --wix-font-Body-S-size: 14px;
        --wix-font-Body-S-line-height: 1.4em;
        --wix-font-Body-S-family: proxima-n-w01-reg, sans-serif;
        --wix-font-Body-S-text-decoration: none;
        --wix-font-Body-XS: normal normal normal 12px/1.4em din-next-w01-light,
        sans-serif;
        --wix-font-Body-XS-style: normal;
        --wix-font-Body-XS-variant: normal;
        --wix-font-Body-XS-weight: normal;
        --wix-font-Body-XS-size: 12px;
        --wix-font-Body-XS-line-height: 1.4em;
        --wix-font-Body-XS-family: din-next-w01-light, sans-serif;
        --wix-font-Body-XS-text-decoration: none;
        --wix-font-LIGHT: normal normal normal 12px/1.4em HelveticaNeueW01-45Ligh;
        --wix-font-LIGHT-style: normal;
        --wix-font-LIGHT-variant: normal;
        --wix-font-LIGHT-weight: normal;
        --wix-font-LIGHT-size: 12px;
        --wix-font-LIGHT-line-height: 1.4em;
        --wix-font-LIGHT-family: HelveticaNeueW01-45Ligh;
        --wix-font-LIGHT-text-decoration: none;
        --wix-font-MEDIUM: normal normal normal 12px/1.4em HelveticaNeueW01-55Roma;
        --wix-font-MEDIUM-style: normal;
        --wix-font-MEDIUM-variant: normal;
        --wix-font-MEDIUM-weight: normal;
        --wix-font-MEDIUM-size: 12px;
        --wix-font-MEDIUM-line-height: 1.4em;
        --wix-font-MEDIUM-family: HelveticaNeueW01-55Roma;
        --wix-font-MEDIUM-text-decoration: none;
        --wix-font-STRONG: normal normal normal 12px/1.4em HelveticaNeueW01-65Medi;
        --wix-font-STRONG-style: normal;
        --wix-font-STRONG-variant: normal;
        --wix-font-STRONG-weight: normal;
        --wix-font-STRONG-size: 12px;
        --wix-font-STRONG-line-height: 1.4em;
        --wix-font-STRONG-family: HelveticaNeueW01-65Medi;
        --wix-font-STRONG-text-decoration: none;
    }
    .comp-k023jkdl .s3AoZtO.o11i7Qx--forceBWTheme {
        --wut-main-cta-color: #bc4c2a;
    }
    .comp-k023jkdl .s3zMy0d {
        --Text3763176629-primary-color: #111111;
        --Text3763176629-secondary-color: #71716f;
    }
    .comp-k023jkdl .s3zMy0d.ovInIEc---typography-10-smallTitle {
        font: normal normal normal 24px/1.33em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl .s3zMy0d.ovInIEc---typography-11-runningText {
        font: normal normal normal 16px/1.5em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl .s3zMy0d.ovInIEc---typography-8-listText {
        font: normal normal normal 16px/2em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl .s3zMy0d.ovInIEc---typography-10-largeTitle {
        font: normal normal normal 32px/1.25em poppins-semibold, poppins,
        sans-serif;
    }
    .comp-k023jkdl .s3zMy0d.ovInIEc--mobile.ovInIEc---typography-10-smallTitle {
        font: normal normal normal 20px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl
    .s3zMy0d.ovInIEc--mobile.ovInIEc---typography-11-runningText {
        font: normal normal normal 14px/1.42em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl .s3zMy0d.ovInIEc--mobile.ovInIEc---typography-8-listText {
        font: normal normal normal 14px/1.72em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl .s3zMy0d.ovInIEc--mobile.ovInIEc---typography-10-largeTitle {
        font: normal normal normal 24px/1.33em poppins-semibold, poppins,
        sans-serif;
    }
    .comp-k023jkdl .-M081 {
        border-width: 0px;
        border-color: #f6f3ef;
    }
    .comp-k023jkdl ._8Luqx {
        border-width: 0px;
    }
    .comp-k023jkdl
    .s3vyM4t.o368P-v--disabled.s38mrmY
    .s3FfuoS
    svg:not([fill="currentColor"])
    path {
        stroke: #f6f3ef;
    }
    .comp-k023jkdl
    .s3vyM4t.o368P-v--disabled.sY3gMfK
    .s3FfuoS
    svg:not([fill="currentColor"])
    path {
        fill: #f6f3ef;
        stroke: #f6f3ef;
    }
    .comp-k023jkdl .s38mrmY .s3FfuoS svg:not([fill="currentColor"]) path,
    .comp-k023jkdl
    .s3vyM4t.o368P-v---skin-4-line
    .s3FfuoS
    svg:not([fill="currentColor"])
    path {
        stroke: #111111;
    }
    .comp-k023jkdl .sY3gMfK .s3FfuoS svg:not([fill="currentColor"]) path,
    .comp-k023jkdl
    .s3vyM4t.o368P-v---skin-4-full
    .s3FfuoS
    svg:not([fill="currentColor"])
    path {
        fill: #111111;
        stroke: #111111;
    }
    .comp-k023jkdl .s3vyM4t .s3FfuoS svg[fill="currentColor"] {
        color: #111111;
    }
    .comp-k023jkdl
    .s3vyM4t.o368P-v--disabled
    .s3FfuoS
    svg[fill="currentColor"] {
        color: #f6f3ef;
    }
    .comp-k023jkdl .s3vyM4t.o368P-v---theme-3-box {
        background-color: #ffffff;
    }
    .comp-k023jkdl .s3H0l6- {
        border-color: #bc4c2a;
        border-radius: 0;
    }
    .comp-k023jkdl .s3H0l6-,
    .comp-k023jkdl .s3H0l6-.oqw7-AE---priority-5-basic {
        color: #ffffff;
        background-color: #111111;
        border-width: 0px;
    }
    .comp-k023jkdl .s3H0l6-:active,
    .comp-k023jkdl .s3H0l6-.oqw7-AE---priority-5-basic:active,
    .comp-k023jkdl .s3H0l6-.o3ZnY6r--focus,
    .comp-k023jkdl .s3H0l6-.oqw7-AE---priority-5-basic.o3ZnY6r--focus,
    .comp-k023jkdl .s3H0l6-:hover,
    .comp-k023jkdl .s3H0l6-.oqw7-AE---priority-5-basic:hover {
        background-color: rgba(17, 17, 17, 0.7);
        color: rgba(255, 255, 255, 0.7);
        border-color: #bc4c2a;
    }
    .comp-k023jkdl .s3H0l6-.oqw7-AE---priority-14-basicSecondary {
        color: #111111;
        background-color: rgba(0, 0, 0, 0);
        border-color: #111111;
        border-width: 1px;
    }
    .comp-k023jkdl .s3H0l6-.oqw7-AE---priority-14-basicSecondary:active,
    .comp-k023jkdl .s3H0l6-.oqw7-AE---priority-14-basicSecondary.o3ZnY6r--focus,
    .comp-k023jkdl .s3H0l6-.oqw7-AE---priority-14-basicSecondary:hover {
        color: rgba(17, 17, 17, 0.7);
        border-color: rgba(17, 17, 17, 0.7);
    }
    .comp-k023jkdl .s3H0l6-.oqw7-AE---priority-7-primary {
        color: #ffffff;
        background-color: #bc4c2a;
        border-width: 0px;
    }
    .comp-k023jkdl .s3H0l6-.oqw7-AE---priority-7-primary:active,
    .comp-k023jkdl .s3H0l6-.oqw7-AE---priority-7-primary.o3ZnY6r--focus,
    .comp-k023jkdl .s3H0l6-.oqw7-AE---priority-7-primary:hover {
        background-color: rgba(188, 76, 42, 0.7);
        color: rgba(255, 255, 255, 0.7);
        border-color: #bc4c2a;
    }
    .comp-k023jkdl .s3H0l6-.oqw7-AE---priority-9-secondary {
        color: #bc4c2a;
        background-color: rgba(0, 0, 0, 0);
        border-color: #bc4c2a;
        border-width: 1px;
    }
    .comp-k023jkdl .s3H0l6-.oqw7-AE---priority-9-secondary:active,
    .comp-k023jkdl .s3H0l6-.oqw7-AE---priority-9-secondary.o3ZnY6r--focus,
    .comp-k023jkdl .s3H0l6-.oqw7-AE---priority-9-secondary:hover {
        color: rgba(188, 76, 42, 0.7);
        border-color: rgba(188, 76, 42, 0.7);
    }
    .comp-k023jkdl .s3H0l6-.okhokll--disabled,
    .comp-k023jkdl .s3H0l6-.oqw7-AE---priority-5-basic.okhokll--disabled,
    .comp-k023jkdl .s3H0l6-.oqw7-AE---priority-7-primary.okhokll--disabled {
        background-color: #f6f3ef;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-14-basicSecondary.okhokll--disabled,
    .comp-k023jkdl .s3H0l6-.oqw7-AE---priority-9-secondary.okhokll--disabled {
        color: #f6f3ef;
        background-color: rgba(0, 0, 0, 0);
        border-color: #f6f3ef;
    }
    .comp-k023jkdl .s3H0l6-.oqw7-AE---size-4-tiny {
        font: normal normal normal 14px/1.43em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl .s3H0l6-.oqw7-AE---size-5-small {
        font: normal normal normal 16px/1.5em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl .s3H0l6-,
    .comp-k023jkdl .s3H0l6-.oqw7-AE---size-6-medium {
        font: normal normal normal 16px/1.5em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl .s3H0l6-.oqw7-AE--mobile,
    .comp-k023jkdl .s3H0l6-.oqw7-AE--mobile.oqw7-AE---size-6-medium {
        font: normal normal normal 14px/1.44em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl .s3H0l6-.oqw7-AE---size-5-large {
        font: normal normal normal 20px/1.5em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl .s3H0l6-.oqw7-AE--mobile.oqw7-AE--upgrade {
        font: normal normal normal 14px/1 avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---size-4-tiny.oqw7-AE--upgrade:not(.oqw7-AE--mobile) {
        font: normal normal normal 14px/1 avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-9-secondary.oqw7-AE--upgrade.oqw7-AE---size-4-tiny,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-14-basicSecondary.oqw7-AE--upgrade.oqw7-AE---size-4-tiny {
        padding: calc(9px - 1px) 16px;
    }
    .comp-k023jkdl .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---size-4-tiny,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-4-tiny,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-4-tiny {
        padding: calc(9px - 0px) 16px;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-9-secondary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-4-tiny,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-14-basicSecondary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-4-tiny {
        padding: calc(6.9px - 1px) 16px;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-4-tiny,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-4-tiny,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-4-tiny {
        padding: calc(6.9px - 0px) 16px;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---size-5-small.oqw7-AE--upgrade:not(.oqw7-AE--mobile) {
        font: normal normal normal 16px/1 avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary.oqw7-AE---size-5-small,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-5-small {
        padding: calc(10px - 1px) 16px;
    }
    .comp-k023jkdl .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---size-5-small,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-5-small,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-5-small {
        padding: calc(10px - 0px) 16px;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary.oqw7-AE---size-5-small,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-5-small {
        padding: calc(7.6px - 1px) 16px;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-small,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-small,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-small {
        padding: calc(7.6px - 0px) 16px;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary.oqw7-AE---size-5-small.oqw7-AE--mobile,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-5-small.oqw7-AE--mobile {
        padding: calc(11px - 1px) 16px;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---size-5-small.oqw7-AE--mobile,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-5-small.oqw7-AE--mobile,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-5-small.oqw7-AE--mobile {
        padding: calc(11px - 0px) 16px;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary.oqw7-AE---size-5-small.oqw7-AE--mobile,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-5-small.oqw7-AE--mobile {
        padding: calc(8.9px - 1px) 16px;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-small.oqw7-AE--mobile,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-small.oqw7-AE--mobile,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-small.oqw7-AE--mobile {
        padding: calc(8.9px - 0px) 16px;
    }
    .comp-k023jkdl .s3H0l6-.oqw7-AE--upgrade:not(.oqw7-AE--mobile),
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---size-6-medium.oqw7-AE--upgrade:not(.oqw7-AE--mobile) {
        font: normal normal normal 16px/1 avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary.oqw7-AE---size-6-medium,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-6-medium {
        padding: calc(12px - 1px) 16px;
    }
    .comp-k023jkdl .s3H0l6-.oqw7-AE--upgrade,
    .comp-k023jkdl .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---size-6-medium,
    .comp-k023jkdl .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-6-medium,
    .comp-k023jkdl .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-6-medium {
        padding: calc(12px - 0px) 16px;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary.oqw7-AE---size-6-medium,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-6-medium {
        padding: calc(9.6px - 1px) 16px;
    }
    .comp-k023jkdl .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-6-medium,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-6-medium,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-6-medium {
        padding: calc(9.6px - 0px) 16px;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary.oqw7-AE--mobile,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary.oqw7-AE---size-6-medium.oqw7-AE--mobile,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary.oqw7-AE--mobile,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-6-medium.oqw7-AE--mobile {
        padding: calc(13px - 1px) 16px;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---size-6-medium.oqw7-AE--mobile,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--mobile,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-6-medium.oqw7-AE--mobile,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--mobile,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-6-medium.oqw7-AE--mobile {
        padding: calc(13px - 0px) 16px;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary.oqw7-AE--mobile,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary.oqw7-AE---size-6-medium.oqw7-AE--mobile,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary.oqw7-AE--mobile,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-6-medium.oqw7-AE--mobile {
        padding: calc(10.9px - 1px) 16px;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-6-medium.oqw7-AE--mobile,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE--mobile,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-6-medium.oqw7-AE--mobile,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE--mobile,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-6-medium.oqw7-AE--mobile {
        padding: calc(10.9px - 0px) 16px;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---size-5-large.oqw7-AE--upgrade:not(.oqw7-AE--mobile) {
        font: normal normal normal 16px/1 avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary {
        padding: calc(16px - 1px) 16px;
    }
    .comp-k023jkdl .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---size-5-large,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-5-large,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-5-large {
        padding: calc(16px - 0px) 16px;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary {
        padding: calc(13.6px - 1px) 16px;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-large,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-large,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-large {
        padding: calc(13.6px - 0px) 16px;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary.oqw7-AE--mobile,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary.oqw7-AE--mobile {
        padding: calc(17px - 1px) 16px;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE---size-5-large.oqw7-AE--mobile,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-5-large.oqw7-AE--mobile,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-5-large.oqw7-AE--mobile {
        padding: calc(17px - 1px) 16px;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary.oqw7-AE--mobile,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary.oqw7-AE--mobile {
        padding: calc(14.9px - 1px) 16px;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-large.oqw7-AE--mobile,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-large.oqw7-AE--mobile,
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-large.oqw7-AE--mobile {
        padding: calc(14.9px - 1px) 16px;
    }
    .comp-k023jkdl .s3H0l6- .s3XkdGq svg:not([fill="currentColor"]) path {
        stroke: #ffffff;
    }
    .comp-k023jkdl .s3H0l6-:hover .s3XkdGq svg:not([fill="currentColor"]) path {
        stroke: rgba(255, 255, 255, 0.7);
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-9-secondary
    .s3XkdGq
    svg:not([fill="currentColor"])
    path {
        stroke: #bc4c2a;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-9-secondary:hover
    .s3XkdGq
    svg:not([fill="currentColor"])
    path {
        stroke: rgba(188, 76, 42, 0.7);
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-14-basicSecondary
    .s3XkdGq
    svg:not([fill="currentColor"])
    path {
        stroke: #111111;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-14-basicSecondary:hover
    .s3XkdGq
    svg:not([fill="currentColor"])
    path {
        stroke: rgba(17, 17, 17, 0.7);
    }
    .comp-k023jkdl .s3H0l6- .s3XkdGq svg[fill="currentColor"] {
        color: #ffffff;
    }
    .comp-k023jkdl .s3H0l6-:hover .s3XkdGq svg[fill="currentColor"] {
        color: rgba(255, 255, 255, 0.7);
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-9-secondary
    .s3XkdGq
    svg[fill="currentColor"] {
        color: #bc4c2a;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-9-secondary:hover
    .s3XkdGq
    svg[fill="currentColor"] {
        color: rgba(188, 76, 42, 0.7);
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-14-basicSecondary
    .s3XkdGq
    svg[fill="currentColor"] {
        color: #111111;
    }
    .comp-k023jkdl
    .s3H0l6-.oqw7-AE---priority-14-basicSecondary:hover
    .s3XkdGq
    svg[fill="currentColor"] {
        color: rgba(17, 17, 17, 0.7);
    }
    .comp-k023jkdl .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi .s2je5Mz {
        background-color: #ffffff;
    }
    .comp-k023jkdl
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi
    .s8aWKTI.o368P-v--disabled.s38mrmY
    .s3FfuoS
    svg:not([fill="currentColor"])
    path {
        stroke: #f6f3ef;
    }
    .comp-k023jkdl
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi
    .s8aWKTI.o368P-v--disabled.sY3gMfK
    .s3FfuoS
    svg:not([fill="currentColor"])
    path {
        fill: #f6f3ef;
        stroke: #f6f3ef;
    }
    .comp-k023jkdl
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi
    .s8aWKTI
    .s38mrmY
    .s3FfuoS
    svg:not([fill="currentColor"])
    path,
    .comp-k023jkdl
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi
    .s8aWKTI.o368P-v---skin-4-line
    .s3FfuoS
    svg:not([fill="currentColor"])
    path {
        stroke: #000000;
    }
    .comp-k023jkdl
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi
    .s8aWKTI
    .sY3gMfK
    .s3FfuoS
    svg:not([fill="currentColor"])
    path,
    .comp-k023jkdl
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi
    .s8aWKTI.o368P-v---skin-4-full
    .s3FfuoS
    svg:not([fill="currentColor"])
    path {
        fill: #000000;
        stroke: #000000;
    }
    .comp-k023jkdl
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi
    .s8aWKTI
    .s3FfuoS
    svg[fill="currentColor"] {
        color: #000000;
    }
    .comp-k023jkdl
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi
    .s8aWKTI.o368P-v--disabled
    .s3FfuoS
    svg[fill="currentColor"] {
        color: #f6f3ef;
    }
    .comp-k023jkdl
    .s3WR7z9:not(.o1u-apJ--wired).s1bIcsi
    .s8aWKTI.o368P-v---theme-3-box {
        background-color: #ffffff;
    }
    .comp-k023jkdl .s3WR7z9.o1u-apJ--wired.sQubKFT .s2je5Mz {
        background-color: #ffffff;
    }
    .comp-k023jkdl
    .s3WR7z9.o1u-apJ--wired.sQubKFT
    .s8aWKTI.o368P-v--disabled.s38mrmY
    .s3FfuoS
    svg:not([fill="currentColor"])
    path {
        stroke: #f6f3ef;
    }
    .comp-k023jkdl
    .s3WR7z9.o1u-apJ--wired.sQubKFT
    .s8aWKTI.o368P-v--disabled.sY3gMfK
    .s3FfuoS
    svg:not([fill="currentColor"])
    path {
        fill: #f6f3ef;
        stroke: #f6f3ef;
    }
    .comp-k023jkdl
    .s3WR7z9.o1u-apJ--wired.sQubKFT
    .s8aWKTI
    .s38mrmY
    .s3FfuoS
    svg:not([fill="currentColor"])
    path,
    .comp-k023jkdl
    .s3WR7z9.o1u-apJ--wired.sQubKFT
    .s8aWKTI.o368P-v---skin-4-line
    .s3FfuoS
    svg:not([fill="currentColor"])
    path {
        stroke: #111111;
    }
    .comp-k023jkdl
    .s3WR7z9.o1u-apJ--wired.sQubKFT
    .s8aWKTI
    .sY3gMfK
    .s3FfuoS
    svg:not([fill="currentColor"])
    path,
    .comp-k023jkdl
    .s3WR7z9.o1u-apJ--wired.sQubKFT
    .s8aWKTI.o368P-v---skin-4-full
    .s3FfuoS
    svg:not([fill="currentColor"])
    path {
        fill: #111111;
        stroke: #111111;
    }
    .comp-k023jkdl
    .s3WR7z9.o1u-apJ--wired.sQubKFT
    .s8aWKTI
    .s3FfuoS
    svg[fill="currentColor"] {
        color: #111111;
    }
    .comp-k023jkdl
    .s3WR7z9.o1u-apJ--wired.sQubKFT
    .s8aWKTI.o368P-v--disabled
    .s3FfuoS
    svg[fill="currentColor"] {
        color: #f6f3ef;
    }
    .comp-k023jkdl
    .s3WR7z9.o1u-apJ--wired.sQubKFT
    .s8aWKTI.o368P-v---theme-3-box {
        background-color: #ffffff;
    }
    @media only screen and (min-width: 769px) {
        .comp-k023jkdl .FGmSV:hover .Btrwx.lG9yE:before {
            background-color: rgba(246, 243, 239, 0);
        }
        .comp-k023jkdl .FGmSV:hover .Btrwx.\+HTSx:before {
            background-color: rgba(246, 243, 239, 0);
        }
    }
    .comp-k023jkdl .Xxql9 {
        border-width: 0px;
        border-color: #f6f3ef;
    }
    .comp-k023jkdl .xedmF:hover {
        border-width: 0px;
        border-color: #f6f3ef;
    }
    .comp-k023jkdl .t\+aKN {
        padding-top: 36px;
        padding-bottom: 36px;
    }
    .comp-k023jkdl .t\+aKN.y59ra {
        background-color: #ffffff;
    }
    .comp-k023jkdl .t\+aKN.fAF3C {
        background-color: transparent;
    }
    .comp-k023jkdl .edsBl.y59ra {
        padding-left: 12%;
        padding-right: 12%;
    }
    .comp-k023jkdl .edsBl.fAF3C {
        padding-left: 25px;
        padding-right: 25px;
    }
    .comp-k023jkdl .zFUN1 {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        background: transparent;
        border-color: rgba(188, 76, 42, 1);
        border-width: 1px;
        border-radius: 0;
        width: 70%;
        color: rgba(188, 76, 42, 1);
    }
    .comp-k023jkdl .xlPd- {
        margin-top: 30px;
    }
    .comp-k023jkdl ._2d1gz {
        color: #ffffff;
        background: #fafafa;
    }
    .comp-k023jkdl .s2-r02J {
        --Text3763176629-primary-color: #111111;
        --Text3763176629-secondary-color: #111111;
    }
    .comp-k023jkdl .s2-r02J.ovInIEc---typography-10-smallTitle {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl .s2-r02J.ovInIEc---typography-11-runningText {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl .s2-r02J.ovInIEc---typography-8-listText {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl .s2-r02J.ovInIEc---typography-10-largeTitle {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl .s2-r02J.ovInIEc--mobile.ovInIEc---typography-10-smallTitle {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl
    .s2-r02J.ovInIEc--mobile.ovInIEc---typography-11-runningText {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl .s2-r02J.ovInIEc--mobile.ovInIEc---typography-8-listText {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl .s2-r02J.ovInIEc--mobile.ovInIEc---typography-10-largeTitle {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl .s1G5A6w {
        border-color: rgb(188, 76, 42);
        border-radius: 0;
        width: 70%;
    }
    .comp-k023jkdl .s1G5A6w,
    .comp-k023jkdl .s1G5A6w.oqw7-AE---priority-5-basic {
        color: rgb(188, 76, 42);
        background-color: rgba(0, 0, 0, 0);
        border-width: 1px;
    }
    .comp-k023jkdl .s1G5A6w:active,
    .comp-k023jkdl .s1G5A6w.oqw7-AE---priority-5-basic:active,
    .comp-k023jkdl .s1G5A6w.o3ZnY6r--focus,
    .comp-k023jkdl .s1G5A6w.oqw7-AE---priority-5-basic.o3ZnY6r--focus,
    .comp-k023jkdl .s1G5A6w:hover,
    .comp-k023jkdl .s1G5A6w.oqw7-AE---priority-5-basic:hover {
        background-color: rgba(0, 0, 0, 0);
        color: rgba(188, 76, 42, 0.7);
        border-color: rgb(188, 76, 42);
    }
    .comp-k023jkdl .s1G5A6w.oqw7-AE---priority-14-basicSecondary {
        color: rgb(188, 76, 42);
        background-color: rgba(0, 0, 0, 0);
        border-color: rgb(188, 76, 42);
        border-width: 1px;
    }
    .comp-k023jkdl .s1G5A6w.oqw7-AE---priority-14-basicSecondary:active,
    .comp-k023jkdl .s1G5A6w.oqw7-AE---priority-14-basicSecondary.o3ZnY6r--focus,
    .comp-k023jkdl .s1G5A6w.oqw7-AE---priority-14-basicSecondary:hover {
        color: rgba(188, 76, 42, 0.7);
        border-color: rgba(188, 76, 42, 0.7);
    }
    .comp-k023jkdl .s1G5A6w.oqw7-AE---priority-7-primary {
        color: rgb(188, 76, 42);
        background-color: rgba(0, 0, 0, 0);
        border-width: 1px;
    }
    .comp-k023jkdl .s1G5A6w.oqw7-AE---priority-7-primary:active,
    .comp-k023jkdl .s1G5A6w.oqw7-AE---priority-7-primary.o3ZnY6r--focus,
    .comp-k023jkdl .s1G5A6w.oqw7-AE---priority-7-primary:hover {
        background-color: rgba(0, 0, 0, 0);
        color: rgba(188, 76, 42, 0.7);
        border-color: rgb(188, 76, 42);
    }
    .comp-k023jkdl .s1G5A6w.oqw7-AE---priority-9-secondary {
        color: rgb(188, 76, 42);
        background-color: rgba(0, 0, 0, 0);
        border-color: rgb(188, 76, 42);
        border-width: 1px;
    }
    .comp-k023jkdl .s1G5A6w.oqw7-AE---priority-9-secondary:active,
    .comp-k023jkdl .s1G5A6w.oqw7-AE---priority-9-secondary.o3ZnY6r--focus,
    .comp-k023jkdl .s1G5A6w.oqw7-AE---priority-9-secondary:hover {
        color: rgba(188, 76, 42, 0.7);
        border-color: rgba(188, 76, 42, 0.7);
    }
    .comp-k023jkdl .s1G5A6w.okhokll--disabled,
    .comp-k023jkdl .s1G5A6w.oqw7-AE---priority-5-basic.okhokll--disabled,
    .comp-k023jkdl .s1G5A6w.oqw7-AE---priority-7-primary.okhokll--disabled {
        background-color: #f6f3ef;
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-14-basicSecondary.okhokll--disabled,
    .comp-k023jkdl .s1G5A6w.oqw7-AE---priority-9-secondary.okhokll--disabled {
        color: #f6f3ef;
        background-color: rgba(0, 0, 0, 0);
        border-color: #f6f3ef;
    }
    .comp-k023jkdl .s1G5A6w.oqw7-AE---size-4-tiny {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl .s1G5A6w.oqw7-AE---size-5-small {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl .s1G5A6w,
    .comp-k023jkdl .s1G5A6w.oqw7-AE---size-6-medium {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl .s1G5A6w.oqw7-AE--mobile,
    .comp-k023jkdl .s1G5A6w.oqw7-AE--mobile.oqw7-AE---size-6-medium {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl .s1G5A6w.oqw7-AE---size-5-large {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl .s1G5A6w.oqw7-AE--mobile.oqw7-AE--upgrade {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---size-4-tiny.oqw7-AE--upgrade:not(.oqw7-AE--mobile) {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-9-secondary.oqw7-AE--upgrade.oqw7-AE---size-4-tiny,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-14-basicSecondary.oqw7-AE--upgrade.oqw7-AE---size-4-tiny {
        padding: calc(9px - 1px) 16px;
    }
    .comp-k023jkdl .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---size-4-tiny,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-4-tiny,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-4-tiny {
        padding: calc(9px - 1px) 16px;
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-9-secondary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-4-tiny,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-14-basicSecondary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-4-tiny {
        padding: calc(6.9px - 1px) 16px;
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-4-tiny,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-4-tiny,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-4-tiny {
        padding: calc(6.9px - 1px) 16px;
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---size-5-small.oqw7-AE--upgrade:not(.oqw7-AE--mobile) {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary.oqw7-AE---size-5-small,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-5-small {
        padding: calc(10px - 1px) 16px;
    }
    .comp-k023jkdl .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---size-5-small,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-5-small,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-5-small {
        padding: calc(10px - 1px) 16px;
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary.oqw7-AE---size-5-small,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-5-small {
        padding: calc(7.6px - 1px) 16px;
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-small,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-small,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-small {
        padding: calc(7.6px - 1px) 16px;
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary.oqw7-AE---size-5-small.oqw7-AE--mobile,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-5-small.oqw7-AE--mobile {
        padding: calc(11px - 1px) 16px;
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---size-5-small.oqw7-AE--mobile,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-5-small.oqw7-AE--mobile,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-5-small.oqw7-AE--mobile {
        padding: calc(11px - 1px) 16px;
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary.oqw7-AE---size-5-small.oqw7-AE--mobile,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-5-small.oqw7-AE--mobile {
        padding: calc(8.9px - 1px) 16px;
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-small.oqw7-AE--mobile,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-small.oqw7-AE--mobile,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-small.oqw7-AE--mobile {
        padding: calc(8.9px - 1px) 16px;
    }
    .comp-k023jkdl .s1G5A6w.oqw7-AE--upgrade:not(.oqw7-AE--mobile),
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---size-6-medium.oqw7-AE--upgrade:not(.oqw7-AE--mobile) {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary.oqw7-AE---size-6-medium,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-6-medium {
        padding: calc(12px - 1px) 16px;
    }
    .comp-k023jkdl .s1G5A6w.oqw7-AE--upgrade,
    .comp-k023jkdl .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---size-6-medium,
    .comp-k023jkdl .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-6-medium,
    .comp-k023jkdl .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-6-medium {
        padding: calc(12px - 1px) 16px;
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary.oqw7-AE---size-6-medium,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-6-medium {
        padding: calc(9.6px - 1px) 16px;
    }
    .comp-k023jkdl .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-6-medium,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-6-medium,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-6-medium {
        padding: calc(9.6px - 1px) 16px;
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary.oqw7-AE--mobile,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary.oqw7-AE---size-6-medium.oqw7-AE--mobile,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary.oqw7-AE--mobile,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-6-medium.oqw7-AE--mobile {
        padding: calc(13px - 1px) 16px;
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---size-6-medium.oqw7-AE--mobile,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--mobile,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-6-medium.oqw7-AE--mobile,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--mobile,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-6-medium.oqw7-AE--mobile {
        padding: calc(13px - 1px) 16px;
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary.oqw7-AE--mobile,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary.oqw7-AE---size-6-medium.oqw7-AE--mobile,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary.oqw7-AE--mobile,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary.oqw7-AE---size-6-medium.oqw7-AE--mobile {
        padding: calc(10.9px - 1px) 16px;
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-6-medium.oqw7-AE--mobile,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE--mobile,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-6-medium.oqw7-AE--mobile,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE--mobile,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-6-medium.oqw7-AE--mobile {
        padding: calc(10.9px - 1px) 16px;
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---size-5-large.oqw7-AE--upgrade:not(.oqw7-AE--mobile) {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary {
        padding: calc(16px - 1px) 16px;
    }
    .comp-k023jkdl .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---size-5-large,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-5-large,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-5-large {
        padding: calc(16px - 1px) 16px;
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary {
        padding: calc(13.6px - 1px) 16px;
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-large,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-large,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-large {
        padding: calc(13.6px - 1px) 16px;
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE---priority-9-secondary.oqw7-AE--mobile,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE---priority-14-basicSecondary.oqw7-AE--mobile {
        padding: calc(17px - 1px) 16px;
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE---size-5-large.oqw7-AE--mobile,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE---size-5-large.oqw7-AE--mobile,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE---size-5-large.oqw7-AE--mobile {
        padding: calc(17px - 1px) 16px;
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-9-secondary.oqw7-AE--mobile,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---size-5-large.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---priority-14-basicSecondary.oqw7-AE--mobile {
        padding: calc(14.9px - 1px) 16px;
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-large.oqw7-AE--mobile,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-7-primary.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-large.oqw7-AE--mobile,
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-5-basic.oqw7-AE--upgrade.oqw7-AE--wrapContent.oqw7-AE---size-5-large.oqw7-AE--mobile {
        padding: calc(14.9px - 1px) 16px;
    }
    .comp-k023jkdl .s1G5A6w .s3XkdGq svg:not([fill="currentColor"]) path {
        stroke: rgb(188, 76, 42);
    }
    .comp-k023jkdl .s1G5A6w:hover .s3XkdGq svg:not([fill="currentColor"]) path {
        stroke: rgba(188, 76, 42, 0.7);
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-9-secondary
    .s3XkdGq
    svg:not([fill="currentColor"])
    path {
        stroke: rgb(188, 76, 42);
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-9-secondary:hover
    .s3XkdGq
    svg:not([fill="currentColor"])
    path {
        stroke: rgba(188, 76, 42, 0.7);
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-14-basicSecondary
    .s3XkdGq
    svg:not([fill="currentColor"])
    path {
        stroke: rgb(188, 76, 42);
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-14-basicSecondary:hover
    .s3XkdGq
    svg:not([fill="currentColor"])
    path {
        stroke: rgba(188, 76, 42, 0.7);
    }
    .comp-k023jkdl .s1G5A6w .s3XkdGq svg[fill="currentColor"] {
        color: rgb(188, 76, 42);
    }
    .comp-k023jkdl .s1G5A6w:hover .s3XkdGq svg[fill="currentColor"] {
        color: rgba(188, 76, 42, 0.7);
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-9-secondary
    .s3XkdGq
    svg[fill="currentColor"] {
        color: rgb(188, 76, 42);
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-9-secondary:hover
    .s3XkdGq
    svg[fill="currentColor"] {
        color: rgba(188, 76, 42, 0.7);
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-14-basicSecondary
    .s3XkdGq
    svg[fill="currentColor"] {
        color: rgb(188, 76, 42);
    }
    .comp-k023jkdl
    .s1G5A6w.oqw7-AE---priority-14-basicSecondary:hover
    .s3XkdGq
    svg[fill="currentColor"] {
        color: rgba(188, 76, 42, 0.7);
    }
    .comp-k023jkdl .XZcR6 {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        color: #111111;
    }
    .comp-k023jkdl .usz8p {
        margin-bottom: 10px;
    }
    .comp-k023jkdl .-z-qM {
        text-align: center;
    }
    .comp-k023jkdl .S8HtR {
        text-align: center;
    }
    .comp-k023jkdl ._9292T {
        height: 2px;
        width: 20px;
        background-color: #111111;
    }
    .comp-k023jkdl ._4430u {
        margin-bottom: 10px;
    }
    .comp-k023jkdl .OnjFr {
        font: normal normal normal 18px/22px didot-w01-italic, serif;
        color: rgb(188, 76, 42);
        font-size: [object Object];
    }
    .comp-k023jkdl ._0o3Qi {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        color: #71716f;
        font-size: 12px;
    }
    .comp-k023jkdl .\+j2N0 {
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        color: #71716f;
        font-size: 12px;
    }
    .comp-k023jkdl .p\+iyY {
        font: normal normal normal 14px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        color: #bc4c2a;
    }
    .comp-k023jkdl .DDgM4 {
        color: #8f7674;
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
    }
    .comp-k023jkdl .mwsWw {
        width: 50%;
    }
    .comp-k023jkdl .doqoa {
        background-color: #111111;
        color: #ffffff;
    }
    .comp-k023jkdl .VBsKx {
        background-color: #fafafa;
        color: #71716f;
    }
    .comp-k023jkdl .jMeVp {
        --ribbonText: #ffffff;
        --ribbonFont: normal normal normal 16px/1.4em
        avenir-lt-w01_35-light1475496,
        sans-serif;
        --ribbonBackground: #bc4c2a;
        font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
        sans-serif;
        color: #ffffff;
        background: #bc4c2a;
    }
    #comp-lvf72jjm {
        --bg-overlay-color: transparent;
        --bg-gradient: none;
        min-width: 980px;
    }
    #comp-k02fkpr9 {
        --bg-overlay-color: transparent;
        --bg-gradient: none;
        --padding: 64px;
        --margin: 100px;
        min-width: 980px;
        --direction: ltr;
    }
    #comp-k02fkptk {
        --fill-layer-image-opacity: 0.69;
        --bg-overlay-color: rgb(var(--color_15));
        --bg-gradient: none;
        width: 100%;
        --column-width: 222px;
        --column-flex: 222;
    }
    #comp-k025q3gs {
        --text-direction: var(--wix-opt-in-direction);
    }
    #comp-k025onp2 {
        --text-direction: var(--wix-opt-in-direction);
    }
    #comp-k02fzxi0 {
        transform-origin: center 1.5px;
    }
    #comp-k02fphzb {
        --text-direction: var(--wix-opt-in-direction);
    }
    #comp-k02fkpu6 {
        --fill-layer-image-opacity: 0.71;
        --bg-overlay-color: rgb(var(--color_15));
        --bg-gradient: none;
        width: 100%;
        --column-width: 215px;
        --column-flex: 215;
    }
    #comp-k03q3mrs {
        --text-direction: var(--wix-opt-in-direction);
    }
    #comp-k03q3mt1 {
        --text-direction: var(--wix-opt-in-direction);
    }
    #comp-k03q3mu3 {
        transform-origin: center 1.5px;
    }
    #comp-k03q3mva {
        --text-direction: var(--wix-opt-in-direction);
    }
    #comp-k02fkpum {
        --fill-layer-image-opacity: 0.73;
        --bg-overlay-color: rgb(var(--color_15));
        --bg-gradient: none;
        width: 100%;
        --column-width: 215px;
        --column-flex: 215;
    }
    #comp-k03q578n {
        --text-direction: var(--wix-opt-in-direction);
    }
    #comp-k03q579x {
        --text-direction: var(--wix-opt-in-direction);
    }
    #comp-k03q57az {
        transform-origin: center 1.5px;
    }
    #comp-k03q57c7 {
        --text-direction: var(--wix-opt-in-direction);
    }
    #comp-lvf72jjm1 {
        --bg-overlay-color: transparent;
        --bg-gradient: none;
        min-width: 980px;
    }
    #comp-k028si32 {
        --bg-overlay-color: transparent;
        --bg-gradient: none;
        --padding: 0px;
        --margin: 0px;
        min-width: 980px;
        --firstChildMarginTop: -1px;
        --lastChildMarginBottom: -1px;
        --direction: ltr;
    }
    #comp-k028si53 {
        --bg-overlay-color: rgb(var(--color_13));
        --bg-gradient: none;
        width: 100%;
        --column-width: 980px;
        --column-flex: 980;
    }
    #comp-k028t4ha {
        --text-direction: var(--wix-opt-in-direction);
    }
    #comp-k029dktn {
        --margin-start: 0px;
        --margin-end: 0px;
        --fnt: normal normal normal 28px/1.4em didot-w01-italic, serif;
        direction: var(--wix-opt-in-direction, ltr);
        --label-align: center;
        --label-text-align: center;
    }
    #comp-mcum3ej7 {
        min-height: 364px;
        display: grid;
    }
    .device-mobile-optimized #comp-mcum3ej7_r_comp-lgnn37bd1 {
        --shc-mutated-brightness: 128, 128, 128;
    }
    #comp-mcum3ej7_r_comp-lgnn37bd1 {
        --shc-mutated-brightness: 128, 128, 128;
    }
    .device-mobile-optimized #comp-mcum3ej7_r_comp-lqwd66ma_r_comp-lqwcss2i {
        --shc-mutated-brightness: 128, 128, 128;
    }
    #comp-mcum3ej7_r_comp-lqwd66ma_r_comp-lqwcss2i {
        --shc-mutated-brightness: 128, 128, 128;
    }
    .device-mobile-optimized #comp-mcum3ej7_r_comp-lqwd66ma_r_comp-lqwctm3h {
        --text-direction: var(--wix-opt-in-direction);
    }
    #comp-mcum3ej7_r_comp-lqwd66ma_r_comp-lqwctm3h {
        --text-direction: var(--wix-opt-in-direction);
    }
    .device-mobile-optimized
    #comp-mcum3ej7_r_comp-lqwd66ma_r_comp-lqwctm3h
    :is(
				p,
				h1,
				h2,
				h3,
				h4,
				h5,
				h6,
				ul,
				ol,
				span[data-attr-richtext-marker],
				blockquote,
				div
			) {
        color: #111111 !important;
        background-color: transparent !important;
        font-size: 32px !important;
        text-decoration: none !important;
        text-align: center !important;
        letter-spacing: 0em !important;
        line-height: normal !important;
    }
    .device-mobile-optimized
    #comp-mcum3ej7_r_comp-lqwd66ma_r_comp-lqwctm3h
    [class$="rich-text__text"]:is(
				p,
				h1,
				h2,
				h3,
				h4,
				h5,
				h6,
				ul,
				ol,
				span[data-attr-richtext-marker],
				blockquote,
				div
			) {
        color: var(--corvid-color, #111111 !important);
    }
    #comp-mcum3ej7_r_comp-lqwd66ma_r_comp-lqwctm3h
    :is(
				p,
				h1,
				h2,
				h3,
				h4,
				h5,
				h6,
				ul,
				ol,
				span[data-attr-richtext-marker],
				blockquote,
				div
			) {
        color: #111111 !important;
        background-color: transparent !important;
        font-size: 32px !important;
        text-decoration: none !important;
        text-align: center !important;
        letter-spacing: 0em !important;
        line-height: normal !important;
    }
    #comp-mcum3ej7_r_comp-lqwd66ma_r_comp-lqwctm3h
    [class$="rich-text__text"]:is(
				p,
				h1,
				h2,
				h3,
				h4,
				h5,
				h6,
				ul,
				ol,
				span[data-attr-richtext-marker],
				blockquote,
				div
			) {
        color: var(--corvid-color, #111111 !important);
    }
    .device-mobile-optimized #comp-mcum3ej7_r_comp-lqwd66ma_r_comp-lqwcu1sz {
        --text-direction: var(--wix-opt-in-direction);
    }
    #comp-mcum3ej7_r_comp-lqwd66ma_r_comp-lqwcu1sz {
        --text-direction: var(--wix-opt-in-direction);
    }
    .device-mobile-optimized
    #comp-mcum3ej7_r_comp-lqwd66ma_r_comp-lqwcu1sz
    :is(
				p,
				h1,
				h2,
				h3,
				h4,
				h5,
				h6,
				ul,
				ol,
				span[data-attr-richtext-marker],
				blockquote,
				div
			) {
        color: #111111 !important;
        background-color: transparent !important;
        font-size: 16px !important;
        text-align: center !important;
        letter-spacing: 0em !important;
        line-height: 1.6 !important;
    }
    .device-mobile-optimized
    #comp-mcum3ej7_r_comp-lqwd66ma_r_comp-lqwcu1sz
    [class$="rich-text__text"]:is(
				p,
				h1,
				h2,
				h3,
				h4,
				h5,
				h6,
				ul,
				ol,
				span[data-attr-richtext-marker],
				blockquote,
				div
			) {
        color: var(--corvid-color, #111111 !important);
    }
    #comp-mcum3ej7_r_comp-lqwd66ma_r_comp-lqwcu1sz
    :is(
				p,
				h1,
				h2,
				h3,
				h4,
				h5,
				h6,
				ul,
				ol,
				span[data-attr-richtext-marker],
				blockquote,
				div
			) {
        color: #111111 !important;
        background-color: transparent !important;
        font-size: 16px !important;
        text-align: center !important;
        letter-spacing: 0em !important;
        line-height: 1.6 !important;
    }
    #comp-mcum3ej7_r_comp-lqwd66ma_r_comp-lqwcu1sz
    [class$="rich-text__text"]:is(
				p,
				h1,
				h2,
				h3,
				h4,
				h5,
				h6,
				ul,
				ol,
				span[data-attr-richtext-marker],
				blockquote,
				div
			) {
        color: var(--corvid-color, #111111 !important);
    }
    .device-mobile-optimized #comp-mcum3ej7_r_comp-m010jxj2 {
        height: max-content;
        min-width: max-content;
    }
    #comp-mcum3ej7_r_comp-m010jxj2 {
        height: max-content;
        min-width: max-content;
    }
    #comp-lvf72jjn {
        --bg-overlay-color: transparent;
        --bg-gradient: none;
        min-width: 980px;
    }
    #comp-k029lmv4 {
        --bg-overlay-color: transparent;
        --bg-gradient: none;
        --padding: 0px;
        --margin: 0px;
        min-width: 980px;
        --firstChildMarginTop: -1px;
        --lastChildMarginBottom: -1px;
        --direction: ltr;
    }
    #comp-k029lmw7 {
        --bg-overlay-color: rgb(var(--color_13));
        --bg-gradient: none;
        width: 100%;
        --column-width: 327px;
        --column-flex: 327;
    }
    #comp-k06l4jp2 {
        transform-origin: center 1.5px;
    }
    #comp-k029qmvg {
        --text-direction: var(--wix-opt-in-direction);
    }
    #comp-k02aq3h2 {
        --bg-overlay-color: rgb(var(--color_13));
        --bg-gradient: none;
        width: 100%;
        --column-width: 327px;
        --column-flex: 327;
    }
    #comp-k06l4fnm {
        transform-origin: center 1.5px;
    }
    #comp-k02avett {
        --text-direction: var(--wix-opt-in-direction);
    }
    #comp-k02aq67t {
        --bg-overlay-color: rgb(var(--color_13));
        --bg-gradient: none;
        width: 100%;
        --column-width: 326px;
        --column-flex: 326;
    }
    #comp-k06k4usu {
        transform-origin: center 1.5px;
    }
    #comp-k02avq28 {
        --text-direction: var(--wix-opt-in-direction);
    }
</style>

<script src="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt_bootstrap.bbbbf2e1.bundle.min.js"></script>
<script src="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt_bootstrap-classic.7e5655c5.bundle.min.js"></script>
<script src="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[SkipToContentButton].077e22c7.bundle.min.js"></script>
<script src="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[RefComponent].b26e033b.bundle.min.js"></script>
<script src="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt_bootstrap-responsive.82f6bb27.bundle.min.js"></script>
<script src="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[StripColumnsContainer_Default].ce95a690.bundle.min.js"></script>
<script src="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[MeshGroup].63bcf4c3.bundle.min.js"></script>
<script src="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[AppWidget_Classic].c344fd85.bundle.min.js"></script>
<script src="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[LoginSocialBar].bf6428bb.bundle.min.js"></script>
<script src="https://static.parastorage.com/unpkg/requirejs-bolt@2.3.6/requirejs.min.js"></script>
<script src="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[ClassicSection].591e118e.bundle.min.js"></script>
<script src="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[SearchButton].b0e81b85.bundle.min.js"></script>
<script src="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[FormContainer_FormContainerSkin].1584209c.bundle.min.js"></script>
<script
        type="text/javascript"
        charset="utf-8"
        async=""
        data-requirecontext="_"
        data-requiremodule="https://static.parastorage.com/services/ecom-platform-cart-icon/1.1945.0/CartIconViewerWidgetNoCss.bundle.min.js"
        src="https://static.parastorage.com/services/ecom-platform-cart-icon/1.1945.0/CartIconViewerWidgetNoCss.bundle.min.js"
></script>
<script src="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[FiveGridLine_SolidLine].d8658921.bundle.min.js"></script>
<script src="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[TextInput].84b8e145.bundle.min.js"></script>
<script
        type="text/javascript"
        charset="utf-8"
        async=""
        data-requirecontext="_"
        data-requiremodule="https://static.parastorage.com/services/wixstores-client-gallery/1.5486.0/SliderGalleryViewerWidgetNoCss.bundle.min.js"
        src="https://static.parastorage.com/services/wixstores-client-gallery/1.5486.0/SliderGalleryViewerWidgetNoCss.bundle.min.js"
></script>
<body>
<script type="module" src="./main.js"></script>

