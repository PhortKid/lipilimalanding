import{r as s,j as e}from"./app-Uj-_xgAT.js";const r=()=>{const[a,t]=s.useState(!0);return s.useEffect(()=>{const i=setTimeout(()=>{t(!1)},4e3);return()=>clearTimeout(i)},[]),e.jsx("div",{className:`flex items-center justify-center w-full h-screen bg-gray-900 ${a?"flex":"hidden"}`,children:e.jsxs("div",{className:"lds-ripple",children:[e.jsx("div",{className:"bg-gray-400 w-20 h-20 rounded-full animate-ping"}),e.jsx("div",{className:"bg-gray-400 w-20 h-20 rounded-full animate-ping animation-delay-200"})]})})};export{r as default};