// khởi tạo bản đồ
var webgis = L.map('mymap',{
    center: [10.835, 106.678],
    zoom:10,
    fullscreenControl: true,
    // OR
    fullscreenControl: {
        pseudoFullscreen: false // if true, fullscreen to page width and height
    }
    
})
//thêm bản đồ nền
var Esri_WorldStreetMap = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
});
webgis.addLayer(Esri_WorldStreetMap)


var Esri_WorldImagery = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
});
webgis.addLayer(Esri_WorldImagery)
// thêm điểm Marker
var point_1 = L.marker([15.832194, 108.406380]).bindPopup("<div> <b>Hoiana Resort & Golf</b> <img src='https://lh5.googleusercontent.com/p/AF1QipOulFesIM-i7MazWxmNTlqWJ4X5m1JKYN0Ogi-z=w750-h813-p-k-no' style='width:100%'>      </div>",{minWidth:200})
var point_2 = L.marker([15.532194, 108.506380]).bindPopup('Điểm 2')
//webgis.addLayer(point_1)
//webgis.addLayer(point_2)
var point = L.layerGroup([point_1,point_2])

// thêm control panel
var baseLayer = {
    'World Street Map':Esri_WorldStreetMap,
    'World Imagery':Esri_WorldImagery
}
var overLays = {
    'Điểm':point 

}
var control_Panel = L.control.layers(baseLayer,overLays,{
    position:'topleft',// topright, bottomleft/right
    collapsed:true
})
webgis.addControl(control_Panel)

// THÊM THANH TỶ LỆ
L.control.scale({
    metric:true,
    position: 'bottomleft',
    maxWidth:200
}).addTo(webgis)
// thêm minimap
var tileMinimap = 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}'
var tile_Minimap = new L.TileLayer(tileMinimap,{minZoom:3, maxZoom:15})
var tile_Mini_map = new L.Control.MiniMap(tile_Minimap).addTo(webgis)
// thêm công cụ làm mờ
//OpacityControl
L.control.opacity(baseLayer, {
        label: 'Layers Opacity',
        position:'topright'
    })
    .addTo(webgis);

    // thêm print
    L.control.browserPrint({position: 'topleft', title: 'Print'}).addTo(webgis);
// chen lop du lieu
var thuadat = L.tileLayer.betterWms('http://localhost:8082/geoserver/Webgis/wms',{
    layers:'Webgis:HCMC_QuanHuyen',// tên lớp dulieu
    format: 'image/png',
    transparent:true,
    tiled:true

})
webgis.addLayer(thuadat)
control_Panel.addOverlay(thuadat,'Thửa đất')