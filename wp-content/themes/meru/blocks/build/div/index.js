(()=>{"use strict";const e=window.React,n=window.wp.blocks,t=window.wp.blockEditor;(0,n.registerBlockType)("rk/div",{edit:()=>{const n=(0,t.useBlockProps)();return(0,e.createElement)("div",{...n},(0,e.createElement)(t.InnerBlocks,null))},save:()=>(0,e.createElement)(t.InnerBlocks.Content,null)})})();