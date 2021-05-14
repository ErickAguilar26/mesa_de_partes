//creamos variableas array para cada departamento
var departamentos_AMAZONAS = ["CHACHAPOYAS","BAGUA","BONGARA","CONDORCANQUI","LUYA","RODRIGUEZ DE MENDOZA","UYCUBAMBA"];
var departamentos_ANCASH=["HUARAZ","AIJA","ANTONIO RAYMONDI","ASUNCION","BOLOGNESI","CARHUAZ","CARLOS F FITZCARRALD","CASMA","CORONGO","HUARI","HUARMEY","HUAYLAS","MARISCAL LUZURIAGA","OCROS","PALLASCA","POMABMBA","RECUAY","SANTA","SIHUAS","YUNGAY"];
var departamentos_APURIMAC=["ABANCAY","ANTABAMBA","AYMARAES","COTABAMBAS","GRAU","CHINCHEROS","ANDAHUAYLAS"];
var departamentos_AREQUIPA=["AREQUIPA","CAMANA","CARAVELI","CASTILLA","CAYLLOMA","CONDESUYOS","ISLAY","LA UNION"];
var departamentos_AYACUCHO=["CANGALLO","HUANTA","HUANCASANCOS","HUAMANGA","LA MAR","LUCANAS","PARINACOCHAS","PAUCAR DEL SARA SARA","SUCRE","VICTOR FAJARDO","VILCAS HUAMAN"];
var departamentos_CAJAMARCA=["CAJABAMBA","CAJAMARCA","CELENDIN","CHOTA","CONTUMAZA","CUTERVO","HUALGAYOC","JAEN","SAN IGNACIO","SAN MARCOS","SAN MIGUEL","SAN PABLO","SANTA CRUZ"];
var departamentos_CUSCO=["ACOMAYO","ANTA","CALCA","CANAS","CANCHIS","LA CONVENCION","LA CUSCO","CHUMBIVILCAS","ESPINAR", "PARURO","PAUCARTAMBO","QUISPICANCHIS","URUBAMBA"];
var departamentos_HUANCAVELICA=["ACOBAMBA","ANGARAES","CASTROVIRREYNA","CHURCAMPA","HUANCAVELICA","HUAYTARA","TAYACAJA"];
var departamentos_HUANUCO=["HUANUCO","AMBO","DOS DE MAYO","HUACAYBAMBA","HUAMALIES","LEONCIO PRADO","MARAÑON"
,"PACHITEA","PUERTO INCA","LAURICOCHA","YAROWILCA"];
var departamentos_ICA=["CHINCHA","ICA","NAZCA","PALPA","PISCO"];
var departamentos_JUNIN=["CHANCHAMAYO","CHUPACA","CONCEPCION","HUANCAYO","JAUJA","JUNIN","SATIPO","TARMA","YAULI"];
var departamentos_LA_LIBERTAD=["ASCOPE","BOLIVAR","CHEPEN","GRAN CHIMU","JULCAN	","OTUZCO"
,"PACASMAYO","PATAZ","SANCHEZ CARRION","SANTIAGO DE CHUCO","TRUJILLO","VIRU"];
var departamentos_LAMBAYEQUE=["CHICLAYO","FERREÑAFE","LAMBAYEQUE"];
var departamentos_LIMA=["BARRANCA","CAJATAMBO","CANTA","CAÑETE","HUARAL","HUAROCHIRI","HUAURA","LIMA"
,"OYON","YAUYOS"];
var departamentos_LORETO=["ALTO AMAZONAS","DATEM DEL MARAÑON","LORETO","MCAL. RAMON CASTILLA","LA MAYNAS","REQUENA","UCAYALI"];
var departamentos_MADRE_DE_DIOS=["MANU","TAHUAMANU","TAMBOPATA"];
var departamentos_MOQUEGUA=["GENERAL SANCHEZ CERRO","ILO","MARISCAL NIETO"];
var departamentos_PASCO=["DANIEL A. CARRION","OXAPAMPA","PASCO"];
var departamentos_PIURA=["AYABACA","HUANCABAMBA","MORROPON","PAITA","PIURA","SECHURA","SULLANA","TALARA"];
var departamentos_PUNO=["AZANGARO","CARABAYA","CHUCUITO","EL COLLAO","HUANCANE","LAMPA",
"MELGAR","MOHO","PUNO","SAN ANTONIO DE PUTINA","SAN ROMAN","SANDIA","YUNGUYO"];
var departamentos_SAN_MARTIN=["BELLAVISTA","EL DORADO","HUALLAGA","LAMAS","MARISCAL CACERES","MOYOBAMBA",
"PICOTA","RIOJA","SAN MARTIN","TOCACHE"];
var departamentos_TACNA=["CANDARAVE","JORGE BASADRE","TACNA","TARATA"];
var departamentos_TUMBES=["CONTRALMIERANTE VILLAR","TUMBES","ZARUMILLA"];
var departamentos_UCAYALI=["ATALAYA","CORONEL PORTILLO","PADRE ABAD","PURUS"];

function loader(e){
    let file = e.target.files;
    let show = "<span>Archivo: </span>" + file[0].name;
    let output = document.getElementById("selector");
    output.innerHTML = show;
    output.classList.add("active");
}

function cambia_departamento(){
    //tomamos el valor del select departamento elegido
    var dpt
    dpt = document.getElementById('cbxDepartamento').value;
    provincia = document.getElementById('cbxProvincia');
    distritoo = document.getElementById('cbxDistrito');	
        mis_dptos = acentosDepa(dpt);
        // verificamos si el Departamento está definido
   
   if (mis_dptos!=0) { 
              //si estaba definido, entonces coloco las opciones del Departamento correspondiente. 
              //selecciono el array del departamento adecuado 
              provincias=eval("departamentos_"+mis_dptos) ;
               //calculo el numero de municipios 
              num_provincia = provincias.length;
              //marco el número de municipios en el select 
              provincia.length = num_provincia;
              //para cada municipio del array, lo introduzco en el select 
              for(i=0;i<num_provincia;i++){ 
                provincia.options[i].value=provincias[i]; 
                provincia.options[i].text=provincias[i];
                distritoo.length = 1 
                distritoo.options[0].value="0";
                distritoo.options[0].text= "Seleccione...";
              }	
                
              }else{ 
              //si no había municipio seleccionado, elimino los municipios del select 
              provincia.length = 1 
              //coloco un guión en la única opción que he dejado 
              provincia.options[0].value = "0" ;
              provincia.options[0].text = "Seleccione..."; 
              distritoo.length = 1 
                distritoo.options[0].value="0";
                distritoo.options[0].text= "Seleccione...";
             } 
}// FIN DE FUNCIONcambia_departamento
   
function acentosDepa(dpt){
var acentuada
if(dpt=="APURÍMAC"){ acentuada="APURIMAC";}
else{
    if(dpt=="HUÁNUCO"){ acentuada="HUANUCO"; }
    else{
        if(dpt=="LA LIBERTAD"){ acentuada="LA_LIBERTAD"; }
        else{
            if(dpt=="MADRE DE DIOS"){ acentuada="MADRE_DE_DIOS"; }
            else{
                if(dpt=="SAN MARTÍN"){ acentuada="SAN_MARTIN"; }
                else{   
                    acentuada=dpt;
                    }
                }
            }
        }
    }       
return  acentuada
   
}// fin funcion acentos
   
