var options={chart:{height:328,type:"area",dropShadow:{enabled:!0,opacity:.2,blur:10,left:-7,top:22},toolbar:{show:!1}},colors:["#47ad94","#ff6c2f"],dataLabels:{enabled:!1},stroke:{show:!0,curve:"smooth",width:2,lineCap:"square"},series:[{name:"Expenses",data:[16800,16800,15500,17e3,14800,15500,19e3,16e3,15e3,17e3,14e3,17e3]},{name:"Income",data:[16500,17500,16200,21500,17300,16e3,16e3,17e3,16e3,19e3,18e3,19e3]}],labels:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],xaxis:{axisBorder:{show:!1},axisTicks:{show:!1},crosshairs:{show:!0},labels:{offsetX:0,offsetY:5,style:{fontSize:"12px",cssClass:"apexcharts-xaxis-title"}}},yaxis:{labels:{formatter:function(e,s){return e/1e3+"K"},offsetX:-15,offsetY:0,style:{fontSize:"12px",cssClass:"apexcharts-yaxis-title"}}},grid:{borderColor:"#191e3a",strokeDashArray:5,xaxis:{lines:{show:!0}},yaxis:{lines:{show:!1}},padding:{top:-50,right:0,bottom:0,left:5}},legend:{show:!1},fill:{type:"gradient",gradient:{type:"vertical",shadeIntensity:1,inverseColors:!1,opacityFrom:.12,opacityTo:.1,stops:[100,100]}},responsive:[{breakpoint:575,options:{legend:{offsetY:-50}}}]},chart=new ApexCharts(document.querySelector("#sales_analytic_seller"),options);chart.render();