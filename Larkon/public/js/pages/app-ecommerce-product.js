class EcommerceProduct{constructor(){this.body=document.getElementsByTagName("body")[0],this.window=window}initEditors(){document.getElementById("bubble-editor")&&new Quill("#bubble-editor",{theme:"bubble"}),document.getElementById("snow-editor")&&new Quill("#snow-editor",{theme:"snow",modules:{toolbar:[[{font:[]},{size:[]}],["bold","italic","underline","strike"],[{color:[]},{background:[]}],[{script:"super"},{script:"sub"}],[{header:[!1,1,2,3,4,5,6]},"blockquote","code-block"],[{list:"ordered"},{list:"bullet"},{indent:"-1"},{indent:"+1"}],["direction",{align:[]}],["link","image","video"],["clean"]]}}),document.getElementById("simplemde1")&&new SimpleMDE({element:document.getElementById("simplemde1"),spellChecker:!1,placeholder:"Write something..",tabSize:2,status:["autosave","lines","words","cursor"],autosave:{enabled:!0,uniqueId:"MyUniqueID"}})}initSelect2(){document.querySelectorAll('[data-toggle="select2"]').forEach(function(e){e.multiple?new Choices(e,{itemSelectText:"",placeholderValue:"select",placeholder:!0,removeItemButton:!0,removeItems:!0,choices:[{value:"select",label:"Select",selected:!0}]}).setChoiceByValue("select"):new Choices(e,{itemSelectText:"",placeholderValue:"select",placeholder:!0,removeItemButton:!1,removeItems:!1}).setChoiceByValue("aselect"),document.querySelectorAll(".choices__group .choices__heading").forEach(function(e){""==e.innerHTML&&e.parentElement.classList.add("d-none")})})}init(){this.initEditors(),this.initSelect2()}}document.addEventListener("DOMContentLoaded",function(e){(new EcommerceProduct).init()});