import{j as e,d as he,g as xe,r as I,e as ce}from"./app-sDuuM2Vb.js";import{C as ge,N as be}from"./Naviibar-DxwUJMu8.js";import{G as ae,F as ve}from"./Futa-CNZ7xR-5.js";import{n as de}from"./nosky-CYudvpS8.js";const ye="/build/assets/picture1-XPjg1Gzw.jpg",we="/build/assets/picture2-BL0Ql0M6.jpg",je="/build/assets/picture3-h3-phzZ5.jpg",ke="/build/assets/picture4-CnqImUCU.jpg",Ne="/build/assets/picture5-Bo2ZQIib.jpg";function ze(){return e.jsx("div",{className:"h-56 sm:h-64 xl:h-80 2xl:h-96 ",children:e.jsxs(ge,{children:[e.jsx("img",{src:ye,alt:"..."}),e.jsx("img",{src:we,alt:"..."}),e.jsx("img",{src:je,alt:"..."}),e.jsx("img",{src:ke,alt:"..."}),e.jsx("img",{src:Ne,alt:"..."})]})})}var fe={exports:{}};(function(a,m){(function(l,n){a.exports=n()})(he,function(){return function(l){function n(r){if(t[r])return t[r].exports;var o=t[r]={exports:{},id:r,loaded:!1};return l[r].call(o.exports,o,o.exports,n),o.loaded=!0,o.exports}var t={};return n.m=l,n.c=t,n.p="dist/",n(0)}([function(l,n,t){function r(h){return h&&h.__esModule?h:{default:h}}var o=Object.assign||function(h){for(var S=1;S<arguments.length;S++){var B=arguments[S];for(var W in B)Object.prototype.hasOwnProperty.call(B,W)&&(h[W]=B[W])}return h},f=t(1),g=(r(f),t(6)),c=r(g),i=t(7),u=r(i),x=t(8),p=r(x),y=t(9),O=r(y),M=t(10),V=r(M),P=t(11),G=r(P),Z=t(14),D=r(Z),z=[],F=!1,w={offset:120,delay:0,easing:"ease",duration:400,disable:!1,once:!1,startEvent:"DOMContentLoaded",throttleDelay:99,debounceDelay:50,disableMutationObserver:!1},E=function(){var h=arguments.length>0&&arguments[0]!==void 0&&arguments[0];if(h&&(F=!0),F)return z=(0,G.default)(z,w),(0,V.default)(z,w.once),z},L=function(){z=(0,D.default)(),E()},d=function(){z.forEach(function(h,S){h.node.removeAttribute("data-aos"),h.node.removeAttribute("data-aos-easing"),h.node.removeAttribute("data-aos-duration"),h.node.removeAttribute("data-aos-delay")})},s=function(h){return h===!0||h==="mobile"&&O.default.mobile()||h==="phone"&&O.default.phone()||h==="tablet"&&O.default.tablet()||typeof h=="function"&&h()===!0},b=function(h){w=o(w,h),z=(0,D.default)();var S=document.all&&!window.atob;return s(w.disable)||S?d():(w.disableMutationObserver||p.default.isSupported()||(console.info(`
      aos: MutationObserver is not supported on this browser,
      code mutations observing has been disabled.
      You may have to call "refreshHard()" by yourself.
    `),w.disableMutationObserver=!0),document.querySelector("body").setAttribute("data-aos-easing",w.easing),document.querySelector("body").setAttribute("data-aos-duration",w.duration),document.querySelector("body").setAttribute("data-aos-delay",w.delay),w.startEvent==="DOMContentLoaded"&&["complete","interactive"].indexOf(document.readyState)>-1?E(!0):w.startEvent==="load"?window.addEventListener(w.startEvent,function(){E(!0)}):document.addEventListener(w.startEvent,function(){E(!0)}),window.addEventListener("resize",(0,u.default)(E,w.debounceDelay,!0)),window.addEventListener("orientationchange",(0,u.default)(E,w.debounceDelay,!0)),window.addEventListener("scroll",(0,c.default)(function(){(0,V.default)(z,w.once)},w.throttleDelay)),w.disableMutationObserver||p.default.ready("[data-aos]",L),z)};l.exports={init:b,refresh:E,refreshHard:L}},function(l,n){},,,,,function(l,n){(function(t){function r(s,b,h){function S(j){var q=H,ne=K;return H=K=void 0,ee=j,A=s.apply(ne,q)}function B(j){return ee=j,C=setTimeout(Q,b),te?S(j):A}function W(j){var q=j-R,ne=j-ee,le=b-q;return J?L(le,U-ne):le}function X(j){var q=j-R,ne=j-ee;return R===void 0||q>=b||q<0||J&&ne>=U}function Q(){var j=d();return X(j)?v(j):void(C=setTimeout(Q,W(j)))}function v(j){return C=void 0,N&&H?S(j):(H=K=void 0,A)}function T(){C!==void 0&&clearTimeout(C),ee=0,H=R=K=C=void 0}function _(){return C===void 0?A:v(d())}function k(){var j=d(),q=X(j);if(H=arguments,K=this,R=j,q){if(C===void 0)return B(R);if(J)return C=setTimeout(Q,b),S(R)}return C===void 0&&(C=setTimeout(Q,b)),A}var H,K,U,A,C,R,ee=0,te=!1,J=!1,N=!0;if(typeof s!="function")throw new TypeError(x);return b=i(b)||0,f(h)&&(te=!!h.leading,J="maxWait"in h,U=J?E(i(h.maxWait)||0,b):U,N="trailing"in h?!!h.trailing:N),k.cancel=T,k.flush=_,k}function o(s,b,h){var S=!0,B=!0;if(typeof s!="function")throw new TypeError(x);return f(h)&&(S="leading"in h?!!h.leading:S,B="trailing"in h?!!h.trailing:B),r(s,b,{leading:S,maxWait:b,trailing:B})}function f(s){var b=typeof s>"u"?"undefined":u(s);return!!s&&(b=="object"||b=="function")}function g(s){return!!s&&(typeof s>"u"?"undefined":u(s))=="object"}function c(s){return(typeof s>"u"?"undefined":u(s))=="symbol"||g(s)&&w.call(s)==y}function i(s){if(typeof s=="number")return s;if(c(s))return p;if(f(s)){var b=typeof s.valueOf=="function"?s.valueOf():s;s=f(b)?b+"":b}if(typeof s!="string")return s===0?s:+s;s=s.replace(O,"");var h=V.test(s);return h||P.test(s)?G(s.slice(2),h?2:8):M.test(s)?p:+s}var u=typeof Symbol=="function"&&typeof Symbol.iterator=="symbol"?function(s){return typeof s}:function(s){return s&&typeof Symbol=="function"&&s.constructor===Symbol&&s!==Symbol.prototype?"symbol":typeof s},x="Expected a function",p=NaN,y="[object Symbol]",O=/^\s+|\s+$/g,M=/^[-+]0x[0-9a-f]+$/i,V=/^0b[01]+$/i,P=/^0o[0-7]+$/i,G=parseInt,Z=(typeof t>"u"?"undefined":u(t))=="object"&&t&&t.Object===Object&&t,D=(typeof self>"u"?"undefined":u(self))=="object"&&self&&self.Object===Object&&self,z=Z||D||Function("return this")(),F=Object.prototype,w=F.toString,E=Math.max,L=Math.min,d=function(){return z.Date.now()};l.exports=o}).call(n,function(){return this}())},function(l,n){(function(t){function r(d,s,b){function h(N){var j=k,q=H;return k=H=void 0,R=N,U=d.apply(q,j)}function S(N){return R=N,A=setTimeout(X,s),ee?h(N):U}function B(N){var j=N-C,q=N-R,ne=s-j;return te?E(ne,K-q):ne}function W(N){var j=N-C,q=N-R;return C===void 0||j>=s||j<0||te&&q>=K}function X(){var N=L();return W(N)?Q(N):void(A=setTimeout(X,B(N)))}function Q(N){return A=void 0,J&&k?h(N):(k=H=void 0,U)}function v(){A!==void 0&&clearTimeout(A),R=0,k=C=H=A=void 0}function T(){return A===void 0?U:Q(L())}function _(){var N=L(),j=W(N);if(k=arguments,H=this,C=N,j){if(A===void 0)return S(C);if(te)return A=setTimeout(X,s),h(C)}return A===void 0&&(A=setTimeout(X,s)),U}var k,H,K,U,A,C,R=0,ee=!1,te=!1,J=!0;if(typeof d!="function")throw new TypeError(u);return s=c(s)||0,o(b)&&(ee=!!b.leading,te="maxWait"in b,K=te?w(c(b.maxWait)||0,s):K,J="trailing"in b?!!b.trailing:J),_.cancel=v,_.flush=T,_}function o(d){var s=typeof d>"u"?"undefined":i(d);return!!d&&(s=="object"||s=="function")}function f(d){return!!d&&(typeof d>"u"?"undefined":i(d))=="object"}function g(d){return(typeof d>"u"?"undefined":i(d))=="symbol"||f(d)&&F.call(d)==p}function c(d){if(typeof d=="number")return d;if(g(d))return x;if(o(d)){var s=typeof d.valueOf=="function"?d.valueOf():d;d=o(s)?s+"":s}if(typeof d!="string")return d===0?d:+d;d=d.replace(y,"");var b=M.test(d);return b||V.test(d)?P(d.slice(2),b?2:8):O.test(d)?x:+d}var i=typeof Symbol=="function"&&typeof Symbol.iterator=="symbol"?function(d){return typeof d}:function(d){return d&&typeof Symbol=="function"&&d.constructor===Symbol&&d!==Symbol.prototype?"symbol":typeof d},u="Expected a function",x=NaN,p="[object Symbol]",y=/^\s+|\s+$/g,O=/^[-+]0x[0-9a-f]+$/i,M=/^0b[01]+$/i,V=/^0o[0-7]+$/i,P=parseInt,G=(typeof t>"u"?"undefined":i(t))=="object"&&t&&t.Object===Object&&t,Z=(typeof self>"u"?"undefined":i(self))=="object"&&self&&self.Object===Object&&self,D=G||Z||Function("return this")(),z=Object.prototype,F=z.toString,w=Math.max,E=Math.min,L=function(){return D.Date.now()};l.exports=r}).call(n,function(){return this}())},function(l,n){function t(i){var u=void 0,x=void 0;for(u=0;u<i.length;u+=1)if(x=i[u],x.dataset&&x.dataset.aos||x.children&&t(x.children))return!0;return!1}function r(){return window.MutationObserver||window.WebKitMutationObserver||window.MozMutationObserver}function o(){return!!r()}function f(i,u){var x=window.document,p=r(),y=new p(g);c=u,y.observe(x.documentElement,{childList:!0,subtree:!0,removedNodes:!0})}function g(i){i&&i.forEach(function(u){var x=Array.prototype.slice.call(u.addedNodes),p=Array.prototype.slice.call(u.removedNodes),y=x.concat(p);if(t(y))return c()})}Object.defineProperty(n,"__esModule",{value:!0});var c=function(){};n.default={isSupported:o,ready:f}},function(l,n){function t(x,p){if(!(x instanceof p))throw new TypeError("Cannot call a class as a function")}function r(){return navigator.userAgent||navigator.vendor||window.opera||""}Object.defineProperty(n,"__esModule",{value:!0});var o=function(){function x(p,y){for(var O=0;O<y.length;O++){var M=y[O];M.enumerable=M.enumerable||!1,M.configurable=!0,"value"in M&&(M.writable=!0),Object.defineProperty(p,M.key,M)}}return function(p,y,O){return y&&x(p.prototype,y),O&&x(p,O),p}}(),f=/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i,g=/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i,c=/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i,i=/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i,u=function(){function x(){t(this,x)}return o(x,[{key:"phone",value:function(){var p=r();return!(!f.test(p)&&!g.test(p.substr(0,4)))}},{key:"mobile",value:function(){var p=r();return!(!c.test(p)&&!i.test(p.substr(0,4)))}},{key:"tablet",value:function(){return this.mobile()&&!this.phone()}}]),x}();n.default=new u},function(l,n){Object.defineProperty(n,"__esModule",{value:!0});var t=function(o,f,g){var c=o.node.getAttribute("data-aos-once");f>o.position?o.node.classList.add("aos-animate"):typeof c<"u"&&(c==="false"||!g&&c!=="true")&&o.node.classList.remove("aos-animate")},r=function(o,f){var g=window.pageYOffset,c=window.innerHeight;o.forEach(function(i,u){t(i,c+g,f)})};n.default=r},function(l,n,t){function r(c){return c&&c.__esModule?c:{default:c}}Object.defineProperty(n,"__esModule",{value:!0});var o=t(12),f=r(o),g=function(c,i){return c.forEach(function(u,x){u.node.classList.add("aos-init"),u.position=(0,f.default)(u.node,i.offset)}),c};n.default=g},function(l,n,t){function r(c){return c&&c.__esModule?c:{default:c}}Object.defineProperty(n,"__esModule",{value:!0});var o=t(13),f=r(o),g=function(c,i){var u=0,x=0,p=window.innerHeight,y={offset:c.getAttribute("data-aos-offset"),anchor:c.getAttribute("data-aos-anchor"),anchorPlacement:c.getAttribute("data-aos-anchor-placement")};switch(y.offset&&!isNaN(y.offset)&&(x=parseInt(y.offset)),y.anchor&&document.querySelectorAll(y.anchor)&&(c=document.querySelectorAll(y.anchor)[0]),u=(0,f.default)(c).top,y.anchorPlacement){case"top-bottom":break;case"center-bottom":u+=c.offsetHeight/2;break;case"bottom-bottom":u+=c.offsetHeight;break;case"top-center":u+=p/2;break;case"bottom-center":u+=p/2+c.offsetHeight;break;case"center-center":u+=p/2+c.offsetHeight/2;break;case"top-top":u+=p;break;case"bottom-top":u+=c.offsetHeight+p;break;case"center-top":u+=c.offsetHeight/2+p}return y.anchorPlacement||y.offset||isNaN(i)||(x=i),u+x};n.default=g},function(l,n){Object.defineProperty(n,"__esModule",{value:!0});var t=function(r){for(var o=0,f=0;r&&!isNaN(r.offsetLeft)&&!isNaN(r.offsetTop);)o+=r.offsetLeft-(r.tagName!="BODY"?r.scrollLeft:0),f+=r.offsetTop-(r.tagName!="BODY"?r.scrollTop:0),r=r.offsetParent;return{top:f,left:o}};n.default=t},function(l,n){Object.defineProperty(n,"__esModule",{value:!0});var t=function(r){return r=r||document.querySelectorAll("[data-aos]"),Array.prototype.map.call(r,function(o){return{node:o}})};n.default=t}])})})(fe);var Me=fe.exports;const me=xe(Me),Se="/build/assets/lipilima1-CpfDJfUp.jpg",Oe="/build/assets/lipilima2-BivbjVhB.jpg",He="/build/assets/lipilima3-D1fSnTZZ.jpg",Ce="/build/assets/lipilima4-DRtaEalT.jpg",Ee="/build/assets/lipilima5-Cgw8CFAX.jpg",Te="/build/assets/lipilima6-NXb4rTxe.jpg",_e="/build/assets/lipilima7-C5U1cbCS.jpg",Ae="/build/assets/lipilima8-CKlrmVFZ.jpg",Le="/build/assets/lipilima9-fb0spDB7.jpg",Be="/build/assets/lipilima10-D_11g3Qp.jpg",Pe="/build/assets/lipilima11-u5fDPndN.jpg",De="/build/assets/lipilima12-nirHEGVP.jpg";me.init();function Fe(){return e.jsxs(e.Fragment,{children:[e.jsx("h1",{className:"mb-4 text-4xl text-center  font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white pt-4",children:"Gallery"}),e.jsxs("div",{className:"grid grid-cols-2 md:grid-cols-4 gap-4",children:[e.jsxs("div",{className:"grid gap-4",children:[e.jsx("div",{children:e.jsx("img",{className:"h-auto max-w-full rounded-lg",src:Se,alt:"","data-aos":"zoom-in"})}),e.jsx("div",{children:e.jsx("img",{className:"h-auto max-w-full rounded-lg",src:Ee,alt:"","data-aos":"zoom-in-left"})}),e.jsx("div",{children:e.jsx("img",{className:"h-auto max-w-full rounded-lg",src:Ae,alt:"","data-aos":"zoom-in-right"})})]}),e.jsxs("div",{className:"grid gap-4",children:[e.jsx("div",{children:e.jsx("img",{className:"h-auto max-w-full rounded-lg",src:Ce,alt:"","data-aos":"fade-down","data-aos-easing":"linear","data-aos-duration":"1500"})}),e.jsx("div",{children:e.jsx("img",{className:"h-auto max-w-full rounded-lg",src:De,alt:"","data-aos":"fade-up","data-aos-anchor-placement":"top-center"})}),e.jsx("div",{children:e.jsx("img",{className:"h-auto max-w-full rounded-lg",src:He,alt:"","data-aos":"fade-up","data-aos-anchor-placement":"bottom-bottom"})})]}),e.jsxs("div",{className:"grid gap-4",children:[e.jsx("div",{children:e.jsx("img",{className:"h-auto max-w-full rounded-lg",src:_e,alt:"","data-aos":"flip-left","data-aos-easing":"ease-out-cubic","data-aos-duration":"2000"})}),e.jsx("div",{children:e.jsx("img",{className:"h-auto max-w-full rounded-lg",src:Le,alt:"","data-aos":"flip-left","data-aos-easing":"ease-out-cubic","data-aos-duration":"2000"})}),e.jsx("div",{children:e.jsx("img",{className:"h-auto max-w-full rounded-lg",src:Te,alt:"","data-aos":"fade-up","data-aos-anchor-placement":"center-bottom"})})]}),e.jsxs("div",{className:"grid gap-4",children:[e.jsx("div",{children:e.jsx("img",{className:"h-auto max-w-full rounded-lg",src:Be,alt:"","data-aos":"fade-up","data-aos-anchor-placement":"top-bottom"})}),e.jsx("div",{children:e.jsx("img",{className:"h-auto max-w-full rounded-lg",src:Pe,alt:"","data-aos":"flip-left","data-aos-easing":"ease-out-cubic","data-aos-duration":"2000"})}),e.jsx("div",{children:e.jsx("img",{className:"h-auto max-w-full rounded-lg",src:Oe,alt:"","data-aos":"fade-zoom-in","data-aos-easing":"ease-in-back","data-aos-delay":"300","data-aos-offset":"0"})})]})]})]})}function ie(a,m,l,n){return new(l||(l=Promise))(function(t,r){function o(c){try{g(n.next(c))}catch(i){r(i)}}function f(c){try{g(n.throw(c))}catch(i){r(i)}}function g(c){var i;c.done?t(c.value):(i=c.value,i instanceof l?i:new l(function(u){u(i)})).then(o,f)}g((n=n.apply(a,[])).next())})}function re(a,m){var l,n,t,r,o={label:0,sent:function(){if(1&t[0])throw t[1];return t[1]},trys:[],ops:[]};return r={next:f(0),throw:f(1),return:f(2)},typeof Symbol=="function"&&(r[Symbol.iterator]=function(){return this}),r;function f(g){return function(c){return function(i){if(l)throw new TypeError("Generator is already executing.");for(;o;)try{if(l=1,n&&(t=2&i[0]?n.return:i[0]?n.throw||((t=n.return)&&t.call(n),0):n.next)&&!(t=t.call(n,i[1])).done)return t;switch(n=0,t&&(i=[2&i[0],t.value]),i[0]){case 0:case 1:t=i;break;case 4:return o.label++,{value:i[1],done:!1};case 5:o.label++,n=i[1],i=[0];continue;case 7:i=o.ops.pop(),o.trys.pop();continue;default:if(t=o.trys,!((t=t.length>0&&t[t.length-1])||i[0]!==6&&i[0]!==2)){o=0;continue}if(i[0]===3&&(!t||i[1]>t[0]&&i[1]<t[3])){o.label=i[1];break}if(i[0]===6&&o.label<t[1]){o.label=t[1],t=i;break}if(t&&o.label<t[2]){o.label=t[2],o.ops.push(i);break}t[2]&&o.ops.pop(),o.trys.pop();continue}i=m.call(a,o)}catch(u){i=[6,u],n=0}finally{l=t=0}if(5&i[0])throw i[1];return{value:i[0]?i[1]:void 0,done:!0}}([g,c])}}}function se(a){var m=typeof Symbol=="function"&&Symbol.iterator,l=m&&a[m],n=0;if(l)return l.call(a);if(a&&typeof a.length=="number")return{next:function(){return a&&n>=a.length&&(a=void 0),{value:a&&a[n++],done:!a}}};throw new TypeError(m?"Object is not iterable.":"Symbol.iterator is not defined.")}function $(a,m){var l=typeof Symbol=="function"&&a[Symbol.iterator];if(!l)return a;var n,t,r=l.call(a),o=[];try{for(;(m===void 0||m-- >0)&&!(n=r.next()).done;)o.push(n.value)}catch(f){t={error:f}}finally{try{n&&!n.done&&(l=r.return)&&l.call(r)}finally{if(t)throw t.error}}return o}function Y(a,m,l){if(arguments.length===2)for(var n,t=0,r=m.length;t<r;t++)!n&&t in m||(n||(n=Array.prototype.slice.call(m,0,t)),n[t]=m[t]);return a.concat(n||Array.prototype.slice.call(m))}function ue(a,m,l,n,t){for(var r=[],o=5;o<arguments.length;o++)r[o-5]=arguments[o];return ie(this,void 0,void 0,function(){var f,g,c,i,u,x;return re(this,function(p){switch(p.label){case 0:p.trys.push([0,12,13,14]),f=se(r),g=f.next(),p.label=1;case 1:if(g.done)return[3,11];switch(c=g.value,typeof c){case"string":return[3,2];case"number":return[3,4];case"function":return[3,6]}return[3,8];case 2:return[4,qe(a,m,c,l,n,t)];case 3:return p.sent(),[3,10];case 4:return[4,pe(c)];case 5:return p.sent(),[3,10];case 6:return[4,c.apply(void 0,Y([a,m,l,n,t],$(r),!1))];case 7:return p.sent(),[3,10];case 8:return[4,c];case 9:p.sent(),p.label=10;case 10:return g=f.next(),[3,1];case 11:return[3,14];case 12:return i=p.sent(),u={error:i},[3,14];case 13:try{g&&!g.done&&(x=f.return)&&x.call(f)}finally{if(u)throw u.error}return[7];case 14:return[2]}})})}function qe(a,m,l,n,t,r){return ie(this,void 0,void 0,function(){var o,f;return re(this,function(g){switch(g.label){case 0:return o=a.textContent||"",f=function(c,i){var u=$(i).slice(0);return Y(Y([],$(c),!1),[NaN],!1).findIndex(function(x,p){return u[p]!==x})}(o,l),[4,Re(a,Y(Y([],$(Ve(o,m,f)),!1),$(Ie(l,m,f)),!1),n,t,r)];case 1:return g.sent(),[2]}})})}function pe(a){return ie(this,void 0,void 0,function(){return re(this,function(m){switch(m.label){case 0:return[4,new Promise(function(l){return setTimeout(l,a)})];case 1:return m.sent(),[2]}})})}function Re(a,m,l,n,t){return ie(this,void 0,void 0,function(){var r,o,f,g,c,i,u,x,p,y,O,M,V;return re(this,function(P){switch(P.label){case 0:if(r=m,t){for(o=0,f=1;f<m.length;f++)if(g=$([m[f-1],m[f]],2),c=g[0],(i=g[1]).length>c.length||i===""){o=f;break}r=m.slice(o,m.length)}P.label=1;case 1:P.trys.push([1,6,7,8]),u=se(function(G){var Z,D,z,F,w,E,L;return re(this,function(d){switch(d.label){case 0:Z=function(s){return re(this,function(b){switch(b.label){case 0:return[4,{op:function(h){return requestAnimationFrame(function(){return h.textContent=s})},opCode:function(h){var S=h.textContent||"";return s===""||S.length>s.length?"DELETE":"WRITING"}}];case 1:return b.sent(),[2]}})},d.label=1;case 1:d.trys.push([1,6,7,8]),D=se(G),z=D.next(),d.label=2;case 2:return z.done?[3,5]:(F=z.value,[5,Z(F)]);case 3:d.sent(),d.label=4;case 4:return z=D.next(),[3,2];case 5:return[3,8];case 6:return w=d.sent(),E={error:w},[3,8];case 7:try{z&&!z.done&&(L=D.return)&&L.call(D)}finally{if(E)throw E.error}return[7];case 8:return[2]}})}(r)),x=u.next(),P.label=2;case 2:return x.done?[3,5]:(p=x.value,y=p.opCode(a)==="WRITING"?l+l*(Math.random()-.5):n+n*(Math.random()-.5),p.op(a),[4,pe(y)]);case 3:P.sent(),P.label=4;case 4:return x=u.next(),[3,2];case 5:return[3,8];case 6:return O=P.sent(),M={error:O},[3,8];case 7:try{x&&!x.done&&(V=u.return)&&V.call(u)}finally{if(M)throw M.error}return[7];case 8:return[2]}})})}function Ie(a,m,l){var n,t;return l===void 0&&(l=0),re(this,function(r){switch(r.label){case 0:n=m(a),t=n.length,r.label=1;case 1:return l<t?[4,n.slice(0,++l).join("")]:[3,3];case 2:return r.sent(),[3,1];case 3:return[2]}})}function Ve(a,m,l){var n,t;return l===void 0&&(l=0),re(this,function(r){switch(r.label){case 0:n=m(a),t=n.length,r.label=1;case 1:return t>l?[4,n.slice(0,--t).join("")]:[3,3];case 2:return r.sent(),[3,1];case 3:return[2]}})}var Ze="index-module_type__E-SaG";(function(a,m){m===void 0&&(m={});var l=m.insertAt;if(typeof document<"u"){var n=document.head||document.getElementsByTagName("head")[0],t=document.createElement("style");t.type="text/css",l==="top"&&n.firstChild?n.insertBefore(t,n.firstChild):n.appendChild(t),t.styleSheet?t.styleSheet.cssText=a:t.appendChild(document.createTextNode(a))}})(`.index-module_type__E-SaG::after {
  content: '|';
  animation: index-module_cursor__PQg0P 1.1s infinite step-start;
}

@keyframes index-module_cursor__PQg0P {
  50% {
    opacity: 0;
  }
}
`);var Ge=I.memo(I.forwardRef(function(a,m){var l=a.sequence,n=a.repeat,t=a.className,r=a.speed,o=r===void 0?40:r,f=a.deletionSpeed,g=a.omitDeletionAnimation,c=g!==void 0&&g,i=a.preRenderFirstString,u=i!==void 0&&i,x=a.wrapper,p=x===void 0?"span":x,y=a.splitter,O=y===void 0?function(v){return Y([],$(v),!1)}:y,M=a.cursor,V=M===void 0||M,P=a.style,G=function(v,T){var _={};for(var k in v)Object.prototype.hasOwnProperty.call(v,k)&&T.indexOf(k)<0&&(_[k]=v[k]);if(v!=null&&typeof Object.getOwnPropertySymbols=="function"){var H=0;for(k=Object.getOwnPropertySymbols(v);H<k.length;H++)T.indexOf(k[H])<0&&Object.prototype.propertyIsEnumerable.call(v,k[H])&&(_[k[H]]=v[k[H]])}return _}(a,["sequence","repeat","className","speed","deletionSpeed","omitDeletionAnimation","preRenderFirstString","wrapper","splitter","cursor","style"]),Z=G["aria-label"],D=G["aria-hidden"],z=G.role;f||(f=o);var F=new Array(2).fill(40);[o,f].forEach(function(v,T){switch(typeof v){case"number":F[T]=Math.abs(v-100);break;case"object":var _=v.type,k=v.value;if(typeof k!="number")break;_==="keyStrokeDelayInMs"&&(F[T]=k)}});var w,E,L,d,s,b,h=F[0],S=F[1],B=function(v,T){T===void 0&&(T=null);var _=I.useRef(T);return I.useEffect(function(){v&&(typeof v=="function"?v(_.current):v.current=_.current)},[v]),_}(m),W=Ze;w=t?"".concat(V?W+" ":"").concat(t):V?W:"",E=I.useRef(function(){var v,T=l;n===1/0?v=ue:typeof n=="number"&&(T=Array(1+n).fill(l).flat());var _=v?Y(Y([],$(T),!1),[v],!1):Y([],$(T),!1);return ue.apply(void 0,Y([B.current,O,h,S,c],$(_),!1)),function(){B.current}}),L=I.useRef(),d=I.useRef(!1),s=I.useRef(!1),b=$(I.useState(0),2)[1],d.current&&(s.current=!0),I.useEffect(function(){return d.current||(L.current=E.current(),d.current=!0),b(function(v){return v+1}),function(){s.current&&L.current&&L.current()}},[]);var X=p,Q=u?l.find(function(v){return typeof v=="string"})||"":null;return ce.createElement(X,{"aria-hidden":D,"aria-label":Z,role:z,style:P,className:w,children:Z?ce.createElement("span",{"aria-hidden":"true",ref:B,children:Q}):Q,ref:Z?void 0:B})}),function(a,m){return!0});function We(){return e.jsx(e.Fragment,{children:e.jsx("section",{className:"bg-white dark:bg-gray-900",children:e.jsxs("div",{className:"py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16",children:[e.jsx("h1",{className:"mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white",children:e.jsx(Ge,{sequence:["Lipilima",1e3,"Lipilima Tower",2e3,"Lipilima Tower & Apartments-Iringa",2e3,()=>{console.log("Sequence completed")}],wrapper:"span",cursor:!0,repeat:1/0,style:{fontSize:"2em",display:"inline-block"}})}),e.jsx("p",{className:"mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400",children:"We offer Modern Living and Functional Business Spaces for Short & Long Stay."}),e.jsx("div",{className:"flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0",children:e.jsxs("a",{href:"/start_book",className:" hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300  animate-wave           inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900",children:["Book Now",e.jsx("svg",{className:"w-3.5 h-3.5 ms-2 rtl:rotate-180","aria-hidden":"true",xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 14 10",children:e.jsx("path",{stroke:"currentColor","stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M1 5h12m0 0L9 1m4 4L9 9"})})]})})]})})})}me.init();function $e(){return e.jsx(e.Fragment,{children:e.jsx("section",{className:"bg-white dark:bg-gray-900",children:e.jsxs("div",{className:"gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6",children:[e.jsx("img",{className:"w-full dark:hidden",src:de,alt:"dashboard image","data-aos":"fade-top"}),e.jsx("img",{className:"w-full hidden dark:block",src:de,alt:"dashboard image","data-aos":"fade-top"}),e.jsxs("div",{className:"mt-4 md:mt-0","data-aos":"fade-right","data-aos-duration":"3000",children:[e.jsx("h2",{className:"mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white",children:"About Us"}),e.jsx("p",{className:"mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400",children:"Lipilima Tower is a modern high-rise offering stylish and comfortable accommodations. With contemporary furnishings and state-of-the-art amenities, guests can enjoy spacious apartments with stunning city views. The tower features convenient services such as a fitness center, a rooftop terrace, and secure parking. Ideally located, it provides easy access to local attractions, dining, and shopping, making it a great choice for both short-term and extended stays."}),e.jsxs("a",{href:"#",className:"inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900",children:["Get started",e.jsx("svg",{className:"ml-2 -mr-1 w-5 h-5",fill:"currentColor",viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg",children:e.jsx("path",{"fill-rule":"evenodd",d:"M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z","clip-rule":"evenodd"})})]})]})]})})})}function Qe(a){return ae({tag:"svg",attr:{viewBox:"0 0 640 512"},child:[{tag:"path",attr:{d:"M192 384h192c53 0 96-43 96-96h32c70.6 0 128-57.4 128-128S582.6 32 512 32H120c-13.3 0-24 10.7-24 24v232c0 53 43 96 96 96zM512 96c35.3 0 64 28.7 64 64s-28.7 64-64 64h-32V96h32zm47.7 384H48.3c-47.6 0-61-64-36-64h583.3c25 0 11.8 64-35.9 64z"},child:[]}]})(a)}function Ke(a){return ae({tag:"svg",attr:{viewBox:"0 0 448 512"},child:[{tag:"path",attr:{d:"M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM240 320h-48v48c0 8.8-7.2 16-16 16h-32c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16h96c52.9 0 96 43.1 96 96s-43.1 96-96 96zm0-128h-48v64h48c17.6 0 32-14.4 32-32s-14.4-32-32-32z"},child:[]}]})(a)}function Ue(a){return ae({tag:"svg",attr:{viewBox:"0 0 640 512"},child:[{tag:"path",attr:{d:"M634.91 154.88C457.74-8.99 182.19-8.93 5.09 154.88c-6.66 6.16-6.79 16.59-.35 22.98l34.24 33.97c6.14 6.1 16.02 6.23 22.4.38 145.92-133.68 371.3-133.71 517.25 0 6.38 5.85 16.26 5.71 22.4-.38l34.24-33.97c6.43-6.39 6.3-16.82-.36-22.98zM320 352c-35.35 0-64 28.65-64 64s28.65 64 64 64 64-28.65 64-64-28.65-64-64-64zm202.67-83.59c-115.26-101.93-290.21-101.82-405.34 0-6.9 6.1-7.12 16.69-.57 23.15l34.44 33.99c6 5.92 15.66 6.32 22.05.8 83.95-72.57 209.74-72.41 293.49 0 6.39 5.52 16.05 5.13 22.05-.8l34.44-33.99c6.56-6.46 6.33-17.06-.56-23.15z"},child:[]}]})(a)}function Ye(a){return ae({tag:"svg",attr:{viewBox:"0 0 256 256",fill:"currentColor"},child:[{tag:"path",attr:{d:"M240,208h-8V72a8,8,0,0,0-8-8H184V40a8,8,0,0,0-8-8H80a8,8,0,0,0-8,8V96H32a8,8,0,0,0-8,8V208H16a8,8,0,0,0,0,16H240a8,8,0,0,0,0-16ZM80,176H64a8,8,0,0,1,0-16H80a8,8,0,0,1,0,16Zm0-32H64a8,8,0,0,1,0-16H80a8,8,0,0,1,0,16Zm64,64H112V168h32Zm-8-64H120a8,8,0,0,1,0-16h16a8,8,0,0,1,0,16Zm0-32H120a8,8,0,0,1,0-16h16a8,8,0,0,1,0,16Zm0-32H120a8,8,0,0,1,0-16h16a8,8,0,0,1,0,16Zm56,96H176a8,8,0,0,1,0-16h16a8,8,0,0,1,0,16Zm0-32H176a8,8,0,0,1,0-16h16a8,8,0,0,1,0,16Zm0-32H176a8,8,0,0,1,0-16h16a8,8,0,0,1,0,16Z"},child:[]}]})(a)}function Xe(a){return ae({tag:"svg",attr:{viewBox:"0 0 24 24"},child:[{tag:"path",attr:{fill:"none",d:"M0 0h24v24H0V0z"},child:[]},{tag:"path",attr:{d:"M8 14c0-.55.45-1 1-1s1 .45 1 1-.45 1-1 1-1-.45-1-1zm4 1c.55 0 1-.45 1-1s-.45-1-1-1-1 .45-1 1 .45 1 1 1zm3 0c.55 0 1-.45 1-1s-.45-1-1-1-1 .45-1 1 .45 1 1 1zm-3-7.5c-1.76 0-3.22 1.31-3.46 3h6.93a3.52 3.52 0 0 0-3.47-3M12 6c2.76 0 5 2.24 5 5v1H7v-1c0-2.76 2.24-5 5-5zM9 18c.55 0 1-.45 1-1s-.45-1-1-1-1 .45-1 1 .45 1 1 1zm3 0c.55 0 1-.45 1-1s-.45-1-1-1-1 .45-1 1 .45 1 1 1zm3 0c.55 0 1-.45 1-1s-.45-1-1-1-1 .45-1 1 .45 1 1 1zm5-14H4v16h16V4m0-2c1.1 0 2 .9 2 2v16c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h16z"},child:[]}]})(a)}function Je(a){return ae({tag:"svg",attr:{viewBox:"0 0 576 512"},child:[{tag:"path",attr:{d:"M240 144A96 96 0 1 0 48 144a96 96 0 1 0 192 0zm44.4 32C269.9 240.1 212.5 288 144 288C64.5 288 0 223.5 0 144S64.5 0 144 0c68.5 0 125.9 47.9 140.4 112h71.8c8.8-9.8 21.6-16 35.8-16H496c26.5 0 48 21.5 48 48s-21.5 48-48 48H392c-14.2 0-27-6.2-35.8-16H284.4zM144 80a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM400 240c13.3 0 24 10.7 24 24v8h96c13.3 0 24 10.7 24 24s-10.7 24-24 24H280c-13.3 0-24-10.7-24-24s10.7-24 24-24h96v-8c0-13.3 10.7-24 24-24zM288 464V352H512V464c0 26.5-21.5 48-48 48H336c-26.5 0-48-21.5-48-48zM48 320h80 16 32c26.5 0 48 21.5 48 48s-21.5 48-48 48H160c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V336c0-8.8 7.2-16 16-16zm128 64c8.8 0 16-7.2 16-16s-7.2-16-16-16H160v32h16zM24 464H200c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24s10.7-24 24-24z"},child:[]}]})(a)}const et="/build/assets/standard-8KcS4dc1.jpg",tt="/build/assets/deluxe-FpbCJivz.jpg",nt="/build/assets/picture5-Bo2ZQIib.jpg",oe=({id:a,isActive:m,title:l,description:n,price:t,image:r})=>e.jsx(e.Fragment,{children:e.jsxs("div",{id:a,className:`tab-content ${m?"":"hidden"} flex items-center`,children:[e.jsxs("div",{className:"flex flex-col w-full lg:w-1/2 lg:pr-8",children:[e.jsx("h2",{className:"text-2xl font-semibold mb-2 text-black",children:l}),e.jsx("p",{className:"text-gray-700 text-sm",children:n}),e.jsx("p",{className:"text-xl font-bold mt-4 text-black",children:t}),e.jsxs("ul",{children:[e.jsxs("li",{className:"flex items-center space-x-3",children:[e.jsx("svg",{class:"flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400",fill:"currentColor",viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg",children:e.jsx("path",{"fill-rule":"evenodd",d:"M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z","clip-rule":"evenodd"})}),e.jsxs("span",{className:"text-gray-950 flex items-center text-sm",children:["Free Wifi",e.jsx(Ue,{className:"ml-2 text-gray-950"})]})]}),e.jsxs("li",{className:"flex items-center space-x-3",children:[e.jsx("svg",{class:"flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400",fill:"currentColor",viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg",children:e.jsx("path",{"fill-rule":"evenodd",d:"M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z","clip-rule":"evenodd"})}),e.jsxs("span",{className:"text-gray-950 flex items-center text-sm",children:["Breakfast",e.jsx(Qe,{className:"ml-2 text-gray-950"})]})]}),e.jsxs("li",{className:"flex items-center space-x-3",children:[e.jsx("svg",{class:"flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400",fill:"currentColor",viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg",children:e.jsx("path",{"fill-rule":"evenodd",d:"M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z","clip-rule":"evenodd"})}),e.jsxs("span",{className:"text-gray-950 flex items-center text-sm",children:["Parking",e.jsx(Ke,{className:"ml-2 text-gray-950"})]})]}),e.jsxs("li",{className:"flex items-center space-x-3",children:[e.jsx("svg",{class:"flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400",fill:"currentColor",viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg",children:e.jsx("path",{"fill-rule":"evenodd",d:"M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z","clip-rule":"evenodd"})}),e.jsxs("span",{className:"text-gray-950 flex items-center text-sm",children:["Apartment",e.jsx(Ye,{className:"ml-2 text-gray-950"})]})]}),e.jsxs("li",{className:"flex items-center space-x-3",children:[e.jsx("svg",{class:"flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400",fill:"currentColor",viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg",children:e.jsx("path",{"fill-rule":"evenodd",d:"M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z","clip-rule":"evenodd"})}),e.jsxs("span",{className:"text-gray-950 flex items-center text-sm",children:["Bathroom",e.jsx(Xe,{className:"ml-2 text-gray-950"})]})]}),e.jsxs("li",{className:"flex items-center space-x-3",children:[e.jsx("svg",{class:"flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400",fill:"currentColor",viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg",children:e.jsx("path",{"fill-rule":"evenodd",d:"M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z","clip-rule":"evenodd"})}),e.jsxs("span",{className:"text-gray-950 flex items-center text-sm",children:["Kitchen",e.jsx(Je,{className:"ml-2 text-gray-950"})]})]})]})]}),e.jsx("div",{className:"w-full lg:w-1/2 mt-4 lg:mt-0",children:e.jsx("img",{src:r,alt:l,className:"w-full h-80  rounded-lg shadow-lg"})})]})}),rt=()=>{const[a,m]=I.useState("basic");return e.jsxs(e.Fragment,{children:[e.jsx("h1",{className:"mb-4 text-4xl text-center  font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white",children:"Choose Plan"}),e.jsxs("div",{className:"container mx-auto mt-10 px-4",children:[e.jsx("div",{className:"mb-4",children:e.jsxs("ul",{className:"flex border-b border-gray-200",children:[e.jsx("li",{className:"mr-1",children:e.jsx("button",{onClick:()=>m("basic"),className:`inline-block py-2 px-4 ${a==="basic"?"text-blue-500 border-blue-500 border-b-2":"text-gray-500 hover:text-blue-500 hover:border-blue-500"}`,children:"Standard Room"})}),e.jsx("li",{className:"mr-1",children:e.jsx("button",{onClick:()=>m("standard"),className:`inline-block py-2 px-4 ${a==="standard"?"text-blue-500 border-blue-500 border-b-2":"text-gray-500 hover:text-blue-500 hover:border-blue-500"}`,children:"Deluxe Room"})}),e.jsx("li",{className:"mr-1",children:e.jsx("button",{onClick:()=>m("premium"),className:`inline-block py-2 px-4 ${a==="premium"?"text-blue-500 border-blue-500 border-b-2":"text-gray-500 hover:text-blue-500 hover:border-blue-500"}`,children:"Executive Room"})})]})}),e.jsxs("div",{id:"tab-content",children:[e.jsx(oe,{id:"basic",isActive:a==="basic",title:"Standard Room",description:"..",price:"Tsh 60,000/day",image:et}),e.jsx(oe,{id:"standard",isActive:a==="standard",title:"Deluxe room",description:"..",price:"Tsh 80,000/day",image:tt}),e.jsx(oe,{id:"premium",isActive:a==="premium",title:"Executive Room",description:"..",price:"Tsh 120,000/day",image:nt})]})]})]})},at=()=>e.jsxs("div",{className:"w-full max-w-4xl px-2 bg-white shadow-lg rounded-lg",children:[e.jsx("h1",{className:"mb-4 text-4xl text-center  font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white",children:"Location"}),e.jsx("div",{className:"map-container",children:e.jsx("iframe",{src:"https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d372.6727268936799!2d35.68975592973254!3d-7.783779557001616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x18543d006cbfdc8d%3A0xf9d2383652b542c2!2s6M8R%2B84R%20Lipilima%20Tower%2C%20A104%2C%20Iringa!3m2!1d-7.7837628!2d35.6902119!5e1!3m2!1sen!2stz!4v1725288023257!5m2!1sen!2stz",style:{border:0},allowFullScreen:"",loading:"lazy",title:"Google Map"})})]});function ct(){const[a,m]=I.useState(!0);return I.useEffect(()=>{const l=setTimeout(()=>{m(!1)},2e3);return()=>clearTimeout(l)},[]),e.jsx(e.Fragment,{children:e.jsx("div",{className:"app",children:a?e.jsx("div",{className:"loader-container",children:e.jsxs("div",{className:"lds-ripple",children:[e.jsx("div",{}),e.jsx("div",{})]})}):e.jsx("div",{className:"content",children:e.jsxs("main",{className:" dark:bg-gray-800",children:[e.jsx(be,{}),e.jsx(ze,{}),e.jsx(We,{}),e.jsx($e,{}),e.jsx(rt,{}),e.jsx(Fe,{}),e.jsx(at,{}),e.jsx(ve,{})]})})})})}export{ct as default};
