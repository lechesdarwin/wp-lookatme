 /**
 * Este archivo debe estar un nivel arrba o considerar la ruta donde se trabajara los demas
 * componentes para que asi no haiga problemas de encontrar los archivos respectivamente.
 */
var PATH;
var VALUES;  
var ICON;    
var LAYOUT;  
var TOOLBAR; 
var WIDGETS; 
var DRAWABLE;
function initPath(rou) {
  PATH=rou;
  VALUES  =PATH+"values/";
  ICON    =PATH+"mipmap/";
  LAYOUT  =PATH+"layout/";
  TOOLBAR =PATH+LAYOUT+"widgets/";
  WIDGETS =PATH+"widgets/";
  DRAWABLE=PATH+"drawable/";
}
