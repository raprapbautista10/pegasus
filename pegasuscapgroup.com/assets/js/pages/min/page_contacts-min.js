var ContactPage=function(){return{initMap:function(){var a;$(document).ready(function(){a=new GMaps({div:"#map",scrollwheel:!1,lat:34.020615,lng:-118.451165});var n=a.addMarker({lat:34.020615,lng:-118.451165,title:"Pegasus Capital Group"})})},initPanorama:function(){var a;$(document).ready(function(){a=GMaps.createPanorama({el:"#panorama",lat:-34.397,lng:150.644})})}}}();