import{r as e,a0 as a,R as t}from"./vendor.49c01715.js";import{h as r,i as s,B as l,H as c,D as n,E as o,k as i,l as d,m,o as u,p,q as g,t as E}from"./main.264ebebe.js";import{G as h}from"./glide.esm.699249e3.js";import{n as v}from"./ncNanoId.147a6e91.js";import{c as b,C as N,a as f,b as w,g as y,d as k,e as S,f as _}from"./Card14Skeleton.86c7350f.js";const C=({className:C="",domNode:L,apiSettings:V,sectionIndex:x})=>{var I;const P="FactoryBlockPostsSlider"+v(),{graphQLvariables:T,settings:j,graphQLData:H}=V,Q=!T&&!!H,{funcGqlQueryGetPosts:A,loading:B,IS_SKELETON:F,LISTS_POSTS:$,data:q,error:D,fetchMore:G,setTabActiveId:M,tabActiveId:O}=r({graphQLData:H,graphQLvariables:T});let R=null;R=Q?e.exports.useRef(null):s(A,x).ref;const K=e=>{-1!==e?e.id!==O&&M(e.id):M(e)},z="layout-2"===j.blockLayoutStyle||j.showFilterTab,J=j.itemPerView||5,U={direction:"rtl"===(null==(I=document.querySelector("html"))?void 0:I.getAttribute("dir"))?"rtl":"ltr",perView:J,gap:32,bound:!0,breakpoints:{1440:{gap:24},1280:{perView:J-1,gap:24},1023:{perView:J-2||1.2,gap:24},767:{perView:J-2||1.2,gap:20},639:{perView:1.2,gap:20}}};e.exports.useEffect((()=>{new h(`.${P}`,U).mount()}),[q]);return a.createPortal((()=>{const{hasBackground:e,subHeading:a,heading:r,showFilterTab:s,categories:h,viewMoreHref:v}=j,L=e;return t.createElement("div",{className:`nc-FactoryBlockPostsSlider relative  ${L?"py-16":""}  ${C}`,ref:R},L&&t.createElement(l,null),t.createElement("div",{className:`relative ${P}`},s?t.createElement(c,{tabActiveId:O,tabs:h,viewMoreHref:v,heading:r,subHeading:a,onClickTab:K}):(()=>{const{heading:e,subHeading:a,blockLayoutStyle:r}=V.settings;return"layout-1"===r?t.createElement(E,{desc:a,hasNextPrev:!0},e):t.createElement(E,{desc:a,isCenter:!0},e)})(),t.createElement("div",{className:"glide__track","data-glide-el":"track"},t.createElement("ul",{className:"glide__slides"},F?[1,1,1,1,1,1,1,1].map(((e,a)=>t.createElement("li",{key:a,className:"glide__slide "+(z?"pb-12 xl:pb-16":"")},(()=>{switch(V.settings.postCardName){case"card4":return t.createElement(y,{className:z?void 0:"hover:!shadow-sm"});case"card7":return t.createElement(_,null);case"card9":return t.createElement(g,null);case"card10":return t.createElement(p,null);case"card10V2":return t.createElement(S,null);case"card11":return t.createElement(u,{className:z?void 0:"hover:!shadow-sm"});case"card14":return t.createElement(k,null);default:return t.createElement(y,{className:z?void 0:"hover:!shadow-sm"})}})()))):$.map(((e,a)=>t.createElement("li",{key:a,className:"glide__slide "+(z?"pb-12 xl:pb-16":"")},(e=>{switch(V.settings.postCardName){case"card4":return t.createElement(b,{post:e,className:z?void 0:"hover:!shadow-sm"});case"card7":return t.createElement(w,{post:e});case"card9":return t.createElement(m,{post:e});case"card10":return t.createElement(d,{post:e});case"card10V2":return t.createElement(f,{post:e});case"card11":return t.createElement(i,{post:e,className:z?void 0:"hover:!shadow-sm"});case"card14":return t.createElement(N,{post:e});default:return t.createElement(b,{className:z?void 0:"hover:!shadow-sm",post:e})}})(e.node)))))),t.createElement(n,{className:"my-5",data:$,error:D,isSkeleton:F}),z&&t.createElement(o,{btnClassName:"w-12 h-12",containerClassName:"justify-center"})))})(),L)};export{C as default};