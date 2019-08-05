<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Community GIS</title>
        <link rel="stylesheet" href="src/leaflet.css">
        <link rel="stylesheet" href="src/css/bootstrap.css">
        <link rel="stylesheet" href="src/plugins/L.Control.Pan.css">
        <link rel="stylesheet" href="src/plugins/L.Control.Zoomslider.css">
        <link rel="stylesheet" href="src/plugins/L.Control.MousePosition.css">
        <link rel="stylesheet" href="src/plugins/L.Control.Sidebar.css">
        <link rel="stylesheet" href="src/plugins/Leaflet.PolylineMeasure.css">
        <link rel="stylesheet" href="src/plugins/easy-button.css">
        <link rel="stylesheet" href="src/css/animate.min.css">
        <link rel="stylesheet" href="src/css/bootstrap-dropdownhover.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

        <link rel="stylesheet" href="src/plugins/leaflet-opencage/src/css/L.Control.OpenCageSearch.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="src/js/bootstrap-dropdownhover.js"></script>
        <script type="text/javascript" src="get_image_exif.js"></script>

        


        <script src="src/leaflet-src.js"></script>
        <!-- <script src="src/jquery-3.2.0.min.js"></script> -->
        <script src="src/plugins/L.Control.Pan.js"></script>
        <script src="src/plugins/L.Control.Zoomslider.js"></script>
        <script src="src/plugins/L.Control.MousePosition.js"></script>
        <script src="src/plugins/L.Control.Sidebar.js"></script>
        <script src="src/plugins/Leaflet.PolylineMeasure.js"></script>
        <script src="src/plugins/easy-button.js"></script>
        <script src="src/plugins/leaflet-providers.js"></script>
        <script src="src/plugins/leaflet-opencage/src/js/L.Control.OpenCageSearch.js"></script>
        <script src="src/leaflet.wms.js"></script>
        <link rel="stylesheet" type="text/css" href="src/css/component.css" />
        <script src="src/plugins/leaflet.ajax.min.js"></script>
        <script src="src/js/modernizr-custom.js"></script>
        <script src='https://npmcdn.com/@turf/turf/turf.min.js'></script>


        <!-- Custom css -->
        <link rel="stylesheet" href="custom_css/leaflet_numbered_markers.css">

        <script src="custom_css/leaflet_numbered_markers.js"></script>


       <!--  <script type="text/javascript" src="src/credits/leaflet-control-credits.js"></script>
        <link rel="stylesheet" href="src/credits/leaflet-control-credits.css" /> -->

        <style>
            #mapdiv {
                height:100vh;
            }

            #side-bar {
                background-color: #ffffff;
                /* text-decoration-color: red; */
            }
            /* unvisited link */
            a:link {
            color: black;
            }

            /* visited link */
            a:visited {
            color: black;
            }

            /* mouse over link */
            a:hover {
            color: blue;
            }

            a:active {
            color: blue;
            }
            #menu__link{
              color: aqua;  
            }

            

            .col-xs-12, .col-xs-6, .col-xs-4 {
                padding:3px;
            }

            #divProject {
                background-color: beige;
            }
            
            #divBUOWL {
                background-color: #ffffb3;
            }
            
            #divEagle {
                background-color: #ccffb3;
                width: auto;
            }
            
            #divRaptor {
                background-color: #e6ffff;
            }
            
            .errorMsg {
                padding:0;
                text-align:center;
                background-color:darksalmon;
            }
            
        form {
  display: block;
  font-size: 13px;
  margin: 1em auto;
  max-width: 400px;
  padding: 1em;
}
form input {
  background: transparent;
  border: 0px solid #EEE;
  color: #08F;
  /*display: inline-table;*/
  margin: 5px auto;
  padding: 6px 10px;
  outline-width: 0;
  outline-color: #08F;
  /**width: calc(50% - 22px);*/
}
form label {
  color: #000;
  display: inline-block;
  padding: 5px 0;
  width: 120px
}
  

        </style>
    </head>
    <body>
        
        <div id="side-bar">
                <!-- Main container -->
                <div >
                    
                    <!-- <button class="action action--open" aria-label="Open Menu"><span class="icon icon--menu"></span></button> -->
                    <nav id="ml-menu" >
                        <!-- <button class="action action--close" aria-label="Close Menu"><span class="icon icon--cross"></span></button> -->
                        <div class="menu__wrap">
                            <ul data-menu="main" class="menu__level" tabindex="-1" role="menu" aria-label="Themes">
                                <li class="menu__item" role="menuitem"><a id="locatemumbai" class="menu__link" data-submenu="submenu-1" aria-owns="submenu-1" href="#">Mumbai<span class="glyphicon glyphicon glyphicon-menu-right"></span></a></li>
                                <!-- <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-2" aria-owns="submenu-2" href="#">Census<span class="glyphicon glyphicon glyphicon-menu-right"></span></a></li> -->
                                <!-- <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-3" aria-owns="submenu-3" href="#">Analytics</a></li> -->
                                <!-- <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-3" aria-owns="submenu-3" href="#">Education<span class="glyphicon glyphicon glyphicon-menu-right"></span></a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-4" aria-owns="submenu-4" href="#">Health<span class="glyphicon glyphicon glyphicon-menu-right"></span></a></li> -->
                                <li class="menu__item" role="menuitem"><a class="menu__link" id="locatepune" data-submenu="submenu-5" aria-owns="submenu-1" href="#">Pune<span class="glyphicon glyphicon glyphicon-menu-right"></span></a></li>
                               <!--  <li class="menu__item" role="menuitem"><a class="menu__link" id="locategoa" data-submenu="submenu-6" aria-owns="submenu-1" href="#">Goa<span class="glyphicon glyphicon glyphicon-menu-right"></span></a></li> -->
                                <li class="menu__item" role="menuitem"><a class="menu__link" id="upload_data" data-submenu="submenu-7" aria-owns="submenu-7" href="#">Upload Data<span class="glyphicon glyphicon glyphicon-menu-right"></span></a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" id="voter_list" data-submenu="submenu-8" aria-owns="submenu-8" href="#">Voter List Data<span class="glyphicon glyphicon glyphicon-menu-right"></span></a></li>
                                 <li class="menu__item" role="menuitem"><a class="menu__link" id="show_image_data" data-submenu="submenu-9" aria-owns="submenu-9" href="#">Show Image Data<span class="glyphicon glyphicon glyphicon-menu-right"></span></a></li>
                                 

                            </ul>
                            <!-- Submenu 1 -->
                            <ul data-menu="submenu-1" id="submenu-1" class="menu__level" tabindex="-1" role="menu" aria-label="Mumbai">
                                <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-1-1" aria-owns="submenu-1-1" href="#">DP Layer<span class="glyphicon glyphicon glyphicon-menu-right"></span></a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-1-2" aria-owns="submenu-1-2" href="#">Census<span class="glyphicon glyphicon glyphicon-menu-right"></span></a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-1-3" aria-owns="submenu-1-3" href="#">Analytics<span class="glyphicon glyphicon glyphicon-menu-right"></span></a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-1-4" aria-owns="submenu-1-4" href="#">SWM<span class="glyphicon glyphicon glyphicon-menu-right"></span></a></li>
                            </ul>
                            <!-- Submenu 1-1 -->
                            <ul data-menu="submenu-1-1" id="submenu-1-1" class="menu__level" tabindex="-1" role="menu" aria-label="DP Layer">
                                <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-1-1-1" aria-owns="submenu-1-1-1" href="#">Education<span class="glyphicon glyphicon glyphicon-menu-right"></span></a></li>
                                  <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Health</a></li>
                                  <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-1-1-3" aria-owns="submenu-1-1-3" id='sward' href="#">S Ward</a></li>
                                  <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-1-1-4" aria-owns="submenu-1-1-4" id='lward' href="#">L ward</a></li>
                                  <li class="menu__item" role="menuitem"><a class="menu__link" href="#">H west ward</a></li>
                                  <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-1-1-6" aria-owns="submenu-1-1-6" id ='pads' href="#">Powai Area Developoment Scheam(PADS)</a></li>

                    
                            </ul>
                            <!-- Submenu 1-1-1 -->
                            <ul data-menu="submenu-1-1-1" id="submenu-1-1-1" class="menu__level" tabindex="-1" role="menu" aria-label="Education">
                                <li class="menu__item" role="menuitem"><a id = 'primary_school' class="menu__link" href="#">Primary</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Secondary</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Primary and Secondary</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Highschool</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Tertiary school</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" href="#">University</a></li>

                            </ul>

                            

                            <!-- Submenu 1-1-3 -->
                            <ul data-menu="submenu-1-1-3" id="submenu-1-1-3" class="menu__level" tabindex="-1" role="menu" aria-label="S Ward">
                                <li class="menu__item" role="menuitem"><a id = 'bfhvl_layer' class="menu__link" href="#">Buffer for high votage line</a></li>
                                <li class="menu__item" role="menuitem"><a id = 'bfr_layer' class="menu__link" href="#">Buffer for Railway</a></li>
                                <li class="menu__item" role="menuitem"><a id = 'hvl_layer' class="menu__link" href="#">High voltage line</a></li>
                                <li class="menu__item" role="menuitem"><a id = 'mrl_layer' class="menu__link" href="#">Metro-Rail Line</a></li>
                                <li class="menu__item" role="menuitem"><a id = 'osmb_layer' class="menu__link" href="#">OSM Buildings</a></li>
                                <li class="menu__item" role="menuitem"><a id = 'poly_layer' class="menu__link" href="#">polygons</a></li>
                                <li class="menu__item" role="menuitem"><a id = 'pond_layer' class="menu__link" href="#">Ponds</a></li>
                                <li class="menu__item" role="menuitem"><a id = 'railway_layer' class="menu__link" href="#">Railway Track/station</a></li>


                            </ul>

                            
                            <!-- Submenu 1-1-4 -->
                            <ul data-menu="submenu-1-1-4" id="submenu-1-1-4" class="menu__level" tabindex="-1" role="menu" aria-label="L Ward">
                                <li class="menu__item" role="menuitem"><a id = 'lward_building_layer' class="menu__link" href="#">Building</a></li>
                            </ul>

                            <!-- Submenu 1-1-6 -->
                            <ul data-menu="submenu-1-1-6" id="submenu-1-1-6" class="menu__level" tabindex="-1" role="menu" aria-label="PADS">
                                <li class="menu__item" role="menuitem"><a id = 'pads_boundary' class="menu__link" href="#">Boundary</a></li>
                                <li class="menu__item" role="menuitem"><a id="pads_building" class="menu__link" href="#">Building</a></li>
                                <li class="menu__item" role="menuitem"><a id="pads_garden" class="menu__link" href="#">Garden</a></li>
                                <li class="menu__item" role="menuitem"><a id="pads_street" class="menu__link" href="#">Street</a></li>


                            </ul>

                            <!-- Submenu 1-2 -->
                            <ul data-menu="submenu-1-2" id="submenu-1-2" class="menu__level" tabindex="-1" role="menu" aria-label="Census">
                                <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Adminward wise</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Corporator ward wise(year)</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-1-2-3" aria-owns="submenu-1-2-3" href="#">Census 2011 wise (repeated as in census below)<span class="glyphicon glyphicon glyphicon-menu-right"></span></a></li>
                            </ul>
                            <!-- Submenu 1-2-3 -->
                            <ul data-menu="submenu-1-2-3" id="submenu-1-2-3" class="menu__level" tabindex="-1" role="menu" aria-label="Census 2011">
                                <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Demography</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Amenities</a></li>
                            </ul>
                            <!-- Submenu 1-3 -->
                            <ul data-menu="submenu-1-3" id="submenu-1-3" class="menu__level" tabindex="-1" role="menu" aria-label="Analytics">
                                <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Education</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Health</a></li>
                            </ul>
                            <!-- Submenu 1-4 -->
                            <ul data-menu="submenu-1-4" id="submenu-1-4" class="menu__level" tabindex="-1" role="menu" aria-label="SWM">
                                <li class="menu__item" role="menuitem"><a class="menu__link" id="buildingLocate" href="#">Building Layer</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Building Cluster/complex/slum boundries</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Public Building</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" id="roadLayer" href="#">Road Layer</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" id="corporatorwise" href="#">Corporator ward boundary</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Admin ward boundary</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-1-4-7" aria-owns="submenu-1-4-7" href="#">Greenness<span class="glyphicon glyphicon glyphicon-menu-right"></span></a></li>

                            </ul>
                            <!-- Submenu 1-4-7 -->
                            <ul data-menu="submenu-1-4-7" id="submenu-1-4-7" class="menu__level" tabindex="-1" role="menu" aria-label="Mylk &amp; Greenness">
                                <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-1-4-7-1" aria-owns="submenu-1-4-7-1" href="#">Building: Seggregation Wise<span class="glyphicon glyphicon glyphicon-menu-right"></span></a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-1-4-7-2" aria-owns="submenu-1-4-7-2" href="#">Building: Composting Wise<span class="glyphicon glyphicon glyphicon-menu-right"></span></a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-1-4-7-3" aria-owns="submenu-1-4-7-2" href="#">Building: Weight Wise<span class="glyphicon glyphicon glyphicon-menu-right"></span></a></li>

                                
                                <!-- <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Building: Composting wise</a></li> -->
                                <li class="menu__item" role="menuitem"><a id="compseg" class="menu__link" href="#">Corporation Ward: Seggregation wise</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Corporation Ward: Composting wise</a></li>
                            </ul>

                            <!-- Submenu 1-4-7-1 -->

                            <ul data-menu="submenu-1-4-7-1" id="submenu-1-4-7-1" class="menu__level" tabindex="-1" role="menu" aria-label="Mylk &amp; Building: Seggregation wise">
                                 <li class="menu__item" role="menuitem"><a class="menu__link"  href="#">Welcome</a></li>
                                 <li class="menu__item" role="menuitem"><a id="buildseg" style="background-color: #f44336;color: white; padding: 14px 25px;text-align: center;text-decoration: none;display: inline-block;" href="#">Show Data</a></li>
                                <!-- <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Building: Composting wise</a></li> -->
                                 <li class="menu__item" role="menuitem"><a class="menu__link"  href="#">Filter Data</a></li>
                                <div id="divFilterEagle" class="col-xs-12">
                                    <div class="col-xs-4">
                                        <input type='radio' name='fltEagle' value='ALL' checked>All
                                    </div>
                                    <div class="col-xs-4">
                                        <input type='radio' name='fltEagle' value='Yes'>Yes
                                    </div>
                                    <div class="col-xs-4">
                                        <input type='radio' name='fltEagle' value='No'>No
                                    </div>
                                </div>
                            </ul>

                            <ul data-menu="submenu-1-4-7-2" id="submenu-1-4-7-2" class="menu__level" tabindex="-1" role="menu" aria-label="Mylk &amp; Building: Composting wise">
                                 <li class="menu__item" role="menuitem"><a class="menu__link"  href="#">Welcome</a></li>
                                 <li class="menu__item" role="menuitem"><a id="buildcomp" style="background-color: #f44336;color: white; padding: 14px 25px;text-align: center;text-decoration: none;display: inline-block;" href="#">Show Data</a></li>
                                <!-- <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Building: Composting wise</a></li> -->
                                 <li class="menu__item" role="menuitem"><a class="menu__link"  href="#">Filter Data</a></li>
                                <div id="divFilterEagle" class="col-xs-12">
                                    <div class="col-xs-4">
                                        <input type='radio' name='optbcomp' value='ALL' checked>All
                                    </div>
                                    <div class="col-xs-4">
                                        <input type='radio' name='optbcomp' value='Yes'>Yes
                                    </div>
                                    <div class="col-xs-4">
                                        <input type='radio' name='optbcomp' value='No'>No
                                    </div>
                                </div>
                            </ul>

                             <ul data-menu="submenu-1-4-7-3" id="submenu-1-4-7-2" class="menu__level" tabindex="-1" role="menu" aria-label="Mylk &amp; Building: Weight Wise">
                                 <li class="menu__item" role="menuitem"><a class="menu__link"  href="#">Welcome</a></li>
                                 <li class="menu__item" role="menuitem"><a id="buildweight" style="background-color: #f44336;color: white; padding: 14px 25px;text-align: center;text-decoration: none;display: inline-block;" href="#">Show Data</a></li>
                                <!-- <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Building: Composting wise</a></li> -->
                                 <li class="menu__item" role="menuitem"><a class="menu__link"  href="#">Filter Data</a></li>
                                <div id="divFilterEagle" class="col-xs-12">
                                    <div class="col-xs-4">
                                        <input type='radio' name='optbcomp' value='ALL' checked>All
                                    </div>
                                    <div class="col-xs-4">
                                        <input type='radio' name='optbcomp' value='Yes'>Yes
                                    </div>
                                    <div class="col-xs-4">
                                        <input type='radio' name='optbcomp' value='No'>No
                                    </div>
                                </div>
                            </ul>

                                <!-- <div id="divEagle" class="col-xs-12">
                <div id="divEagleLabel" class="text-center col-xs-12">
                    <h4 id="lblEagle">Eagle Nests</h4>
                </div>
                <div id="divEagleError" class="errorMsg col-xs-12"></div>
                <div id="divFindEagle" class="form-group has-error">
                    <div class="col-xs-6">
                        <input type="text" id="txtFindEagle" class="form-control" placeholder="Eagle Nest ID">
                    </div>
                    <div class="col-xs-6">
                        <button id="btnFindEagle" class="btn btn-primary btn-block" disabled>Find Eagle Nest</button>
                    </div>
                </div>
                <div id="divFilterEagle" class="col-xs-12">
                    <div class="col-xs-4">
                        <input type='radio' name='fltEagle' value='ALL' checked>All
                    </div>
                    <div class="col-xs-4">
                        <input type='radio' name='fltEagle' value='ACTIVE NEST'>Active
                    </div>
                    <div class="col-xs-4">
                        <input type='radio' name='fltEagle' value='INACTIVE LOCATION'>Inactive
                    </div>
                </div>
                <div class="" id="divEagleData"></div>
            </div> -->
                           

                            <!-- Submenu 2 -->
                            <ul data-menu="submenu-2" id="submenu-2" class="menu__level" tabindex="-1" role="menu" aria-label="Selection">
                                <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-2-1" aria-owns="submenu-2-1" href="#">Mumbai<span class="glyphicon glyphicon glyphicon-menu-right"></span></a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-2-2" aria-owns="submenu-2-2" href="#">Maharashra<span class="glyphicon glyphicon glyphicon-menu-right"></span></a></li>
                            </ul>
                            <!-- Submenu 2-1 -->
                            <ul data-menu="submenu-2-1" id="submenu-2-1" class="menu__level" tabindex="-1" role="menu" aria-label="Mumbai">
                                    <li class="menu__item" role="menuitem"><a class="menu__link" id = 'ward_layer' href="#">Mumbai ward boundary</a></li>
                                    <li class="menu__item" role="menuitem"><a class="menu__link" id = 'roadLayer' href="#">Roads</a></li>
                            </ul>

                             <!-- Submenu 2-2 -->
                             <ul data-menu="submenu-2-2" id="submenu-2-2" class="menu__level" tabindex="-1" role="menu" aria-label="Maharashra">
                                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Admin boundries</a></li>
                                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Settelments</a></li>
                                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Demography</a></li>
                                    <li class="menu__item" role="menuitem"><a id = 'hlpca' class="menu__link" href="#">Household Amenities(HLPCA)</a></li>
                                    <li class="menu__item" role="menuitem"><a id = 'village_layer' class="menu__link" href="#">Village Amenities (2700)</a></li>
                                    <li class="menu__item" role="menuitem"><a id = 'town2700_layer' class="menu__link" href="#">Town Amenities( 2700)</a></li>
                                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Topography ( DEM, Watershed)</a></li>
                                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Waterbodies</a></li>
                                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Roads ( OSM, other)</a></li>
                                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Schools ( pointers to School data in theme School)</a></li>

                                </ul>
                              <!-- Submenu 3 -->
                            <ul data-menu="submenu-3" id="submenu-3" class="menu__level" tabindex="-1" role="menu" aria-label="Education">
                                    <li class="menu__item" role="menuitem"><a class="menu__link"  href="#">India</a></li>
                                    <li class="menu__item" role="menuitem"><a class="menu__link"  data-submenu="submenu-3-2" aria-owns="submenu-3-2" href="#">Maharashra<span class="glyphicon glyphicon glyphicon-menu-right"></span></a></li>
                            </ul> 
                            
                            <ul data-menu="submenu-3-2" id="submenu-3-2" class="menu__level" tabindex="-1" role="menu" aria-label="Maharashtra">
                                <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Basic</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Enrollment</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Facilities</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Teacher</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" href="#">RTE status</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Social Diffrence(SC/ST/OBC/General)</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Acedemic Performance</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Evluation</a></li>
                            </ul>

                            <!-- Submenu 4 -->
                            <ul data-menu="submenu-4" id="submenu-4" class="menu__level" tabindex="-1" role="menu" aria-label="Health">
                                <li class="menu__item" role="menuitem"><a class="menu__link"  href="#">India</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link"  href="#">Maharashra</a></li>
                        </ul> 
                        
                              <ul data-menu="submenu-5" id="submenu-5" class="menu__level" tabindex="-1" role="menu" aria-label="Pune">
                                <li class="menu__item" role="menuitem"><a id="punebuild" class="menu__link" data-submenu="submenu-5-1" aria-owns="submenu-5-1" href="#">Pune Building Footprints<span class="glyphicon glyphicon glyphicon-menu-right"></span></a></li>
                                <li class="menu__item" role="menuitem"><a id="puneroad" class="menu__link" data-submenu="submenu-5-2" aria-owns="submenu-5-2" href="#">Pune Road Layer<span class="glyphicon glyphicon glyphicon-menu-right"></span></a></li>
                                
                                <li class="menu__item" role="menuitem"><a id="punephotos" class="menu__link" data-submenu="submenu-5-2" aria-owns="submenu-5-2" href="#">Pune Show Photos<span class="glyphicon glyphicon glyphicon-menu-right"></span></a></li>
                                <!-- <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-1-3" aria-owns="submenu-1-3" href="#">Analytics<span class="glyphicon glyphicon glyphicon-menu-right"></span></a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-1-4" aria-owns="submenu-1-4" href="#">SWM<span class="glyphicon glyphicon glyphicon-menu-right"></span></a></li> -->
                            </ul>

                        <!-- Submenu 6 -->
                                <ul data-menu="submenu-6" id="submenu-6" class="menu__level" tabindex="-1" role="menu" aria-label="goa">
                                    <li class="menu__item" role="menuitem"><a class="menu__link"  id = 'locateponda' data-submenu="submenu-6-1" aria-owns="submenu-6-1" href="#">Ponda</a></li>
                            </ul> 
                            <!-- Submenu 6-1 -->
                            <ul data-menu="submenu-6-1" id="submenu-4" class="menu__level" tabindex="-1" role="menu" aria-label="Health">
                                <li class="menu__item" role="menuitem"><a class="menu__link" id = 'ponda_points' href="#">points</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" id = 'ponda_polygons' href="#">polygons</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" id = 'ponda_lines' href="#">polylines</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" id = 'ponda_hospital' href="#">Hospitals</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" id = 'ponda_school' href="#">School</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" id = 'ponda_worship' href="#">Worship</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" id = 'ponda_food' href="#">Food</a></li>
                                <li class="menu__item" role="menuitem"><a class="menu__link" id = 'ponda_other' href="#">Other</a></li>
                            </ul>
                            <!-- Submenu 7 -->
                                <ul data-menu="submenu-7" id="submenu-7" class="menu__level" tabindex="-1" role="menu" aria-label="upload_data">

                                     <li class="menu__item" role="menuitem"><a class="menu__link" id = '' href="#">Welcome</a></li>

                                    <!-- <li class="menu__item" role="menuitem"><a class="menu__link"  id = 'locateponda' data-submenu="submenu-7-1" aria-owns="submenu-6-1" href="#">Ponda</a></li> -->
                                <li  ><a style="background-color: #f44336;color: white; padding: 10px 25px;text-align: center;text-decoration: none;display: inline-block; margin-bottom: 2%" target="_blank" href="http://13.82.229.27/account/login/?next=/layers/upload">Upload Data on Geonde</a></li>
                                <li><a style="background-color: #f44336;color: white; padding: 10px 25px;text-align: center;text-decoration: none;display: inline-block;" id="driver">Upload Data on Server</a></li>
                                <div id="text">
                                <!-- <form action="upload.php" method="post" enctype="multipart/form-data"> -->
    Select image to upload:
    <input type="file" name="fileToUpload" id="file">
    <input type="submit" id="upload" value="Upload Image" name="submit">
        <form >
                                      <!-- <input type="file" id="file" /><br> -->
                                    <label>Camera Model</label>
                                    <input type="text" name="cameraModel" id="cameraModel" /><br>
                                    <label>Latitude</label>
                                    <input type="text" name="lat" id="lat" /><br>
                                    <label>Longitude</label>
                                    <input type="text" name="lat" id="lon" /><br>
                                    <label>Version</label>
                                    <input type="text" name="version" id="version" /><br>
                                    <label>Exposure Time</label>
                                    <input type="text" name="exposureTime" id="exposureTime" /><br>
                                    <label>Aperture</label>
                                    <input type="text" name="aperture" id="aperture" /><br>
                                    <label>Flash</label>
                                    <input type="text" name="flash" id="flash" /><br>
                                    <label>Focal distance</label>
                                    <input type="text" name="focalDistance" id="focalDistance" /><br>
                                    <label>ISO/Pelicula</label>
                                    <input type="text" name="iso" id="ISO" />
                                  <!-- <input type="submit" id="savelatlon" name="Save" value="save"> -->
                                      </form></a>
<!-- </form> -->
                                </div>

                            </ul>

                            <ul data-menu="submenu-8" id="submenu-8" class="menu__level" tabindex="-1" role="menu" aria-label="Mylk &amp; Voter List Data">
                                
                                <!-- <ul data-menu="submenu-8" id="submenu-8" class="menu__level" tabindex="-1" role="menu" aria-label="voter_list"> -->
                                    <!-- <li class="menu__item" role="menuitem"><a class="menu__link"   data-submenu="submenu-8-1" aria-owns="submenu-8-1" href="#">Voter List Data</a></li> -->

                                    <li class="menu__item" role="menuitem"><a class="menu__link" id = '' href="#"> 
                                        <input type="button" name="Add Marker" value="Add Marker" id="add_marker">
                                    </a></li>
                                    <li>
                                        <div id="create_marker_id">
                                    <input type="text" placeholder="Enter id" id="marker_id">
                                    <br />
                                    <input type="submit" name="Ok" value="ok" id="ok">
                                    <li class="menu__item" role="menuitem"><a class="menu__link" id = '' href="#"> 
                                        <input type="text" name="latitude" id="latitude">
                                        <input type="text" name="longitude" id="longitude">
                                        <input type="submit" name="save" value="save" id="save">
                                        </a></li>
                                    <li class="menu__item" role="menuitem"><a class="menu__link" id = 'voter_addr' href="#"> 

                                    </a></li>    
                                   

                                </ul>

                                <ul data-menu="submenu-9" id="submenu-9" class="menu__level" tabindex="-1" id="display_image_data" role="menu" aria-label="Mylk &amp; Show Image Data">
                                 <li class="menu__item" role="menuitem"><a class="menu__link"  href="#">Welcome</a></li>
                                    <li id="show_here"></li>
                                    <li><a class='markerrr' id='markerrr_2' data-lat='18.5929' data-name='2019-04-10_IMG-8600.JPG' data-lon=73.791244444444 href='#' onclick=theFunction(`markerrr_2`);>2019-04-10_IMG-8600.JPG</a></li><li><a class='markerrr' id='markerrr_3' data-lat='18.5929' data-name='2019-04-10_IMG-8600.JPG' data-lon=73.791244444444 href='#' onclick=theFunction(`markerrr_3`);>2019-04-10_IMG-8600.JPG</a></li><li><a class='markerrr' id='markerrr_4' data-lat='18.593591666667' data-name='2019-04-15_IMG-8603.JPG' data-lon=73.791113888889 href='#' onclick=theFunction(`markerrr_4`);>2019-04-15_IMG-8603.JPG</a></li><li><a class='markerrr' id='markerrr_5' data-lat='18.593769444444' data-name='2019-04-15_IMG-8614.JPG' data-lon=73.793655555556 href='#' onclick=theFunction(`markerrr_5`);>2019-04-15_IMG-8614.JPG</a></li>                                </ul>

                        </ul> 
                        </div>
                    </nav>
                    
                </div>
                <!-- /view -->
                <script src="src/js/classie.js"></script>
                <!-- <script src="js/dummydata.js"></script> -->
                <script src="src/js/main.js"></script>
                <script>
                (function() {
                    var menuEl = document.getElementById('ml-menu'),
                        mlmenu = new MLMenu(menuEl, {
                            // breadcrumbsCtrl : true, // show breadcrumbs
                            // initialBreadcrumb : 'all', // initial breadcrumb text
                            backCtrl : false, // show back button
                            // itemsDelayInterval : 60, // delay between each menu item sliding animation
                            onItemClick: loadDummyData // callback: item that doesn´t have a submenu gets clicked - onItemClick([event], [inner HTML of the clicked item])
                        });
            
                    // mobile menu toggle
                    var openMenuCtrl = document.querySelector('.action--open'),
                        closeMenuCtrl = document.querySelector('.action--close');
            
                    // openMenuCtrl.addEventListener('click', openMenu);
                    // closeMenuCtrl.addEventListener('click', closeMenu);
            
                    function openMenu() {
                        classie.add(menuEl, 'menu--open');
                        closeMenuCtrl.focus();
                    }
            
                    // function closeMenu() {
                    //     classie.remove(menuEl, 'menu--open');
                    //     openMenuCtrl.focus();
                    // }
            
                    // simulate grid content loading
                    var gridWrapper = document.querySelector('.content');
            
                    function loadDummyData(ev, itemName) {
                        ev.preventDefault();
            
                        // closeMenu();
                        // gridWrapper.innerHTML = '';
                        // classie.add(gridWrapper, 'content--loading');
                        // setTimeout(function() {
                        //     classie.remove(gridWrapper, 'content--loading');
                        //     gridWrapper.innerHTML = '<ul class="products">' + dummyData[itemName] + '<ul>';
                        // }, 700);
                    }
                })();
                </script>
                </div>
        <div id="mapdiv" class="col-md-12"></div>
        <div id="side-bar1" class="" >

       <div class="leaflet-bottom leaflet-right">
        <input type="image" onclick="location.href = 'www.makerghat.org';" src="img/logo.png" alt="MakerGHAT" width="150" height="100"> 
    </div>

    




        <script>
            
            var mymap;
            var lyrOSM;
            var lyrWatercolor;
            var lyrTopo;
            var lyrImagery;
            var lyrOutdoors;
            // var lyrChapultepec;
            var mrkCurrentLocation;
            var popZocalo;
            var ctlAttribute;
            var ctlScale;
            var ctlPan;
            var ctlZoomslider;
            var ctlMouseposition;
            var ctlMeasure;
            var ctlEasybutton;
            var ctlSidebar;
            var ctlSidebar1;
            var ctlSearch;
            var ctlLayers;
            var objBasemaps;
            var objOverlays,voter_marker,position,mulund_marker,custom_marker,custom_marker1;
            var building, roads,primarys,districtL,wardl,ddwl,buildseg,corporatorwise,buildcomp,buildweight,compseg,punebuild,puneroad,punephotos;
            var pondahl,pondasl,pondawl,pondafl,pondaol,pondalinelyr,pondapointlyr,pondapolygonlyr,voter_list;
            var psl,pgl,pbul,pbl,lwardbl,raill,pondl,polyl,osmbl,mrll,hvll,bfrl,bfhvll,villagel,hlpcal,townl;
            var source = L.wms.source(
                "http://13.82.229.27/geoserver/wfs",
                {
                    "format": "image/png",
                    "transparent": "true"
                }        
                );
            
            $(document).ready(function(){

                $('#show_image_data').on('click', function() {

                 $.ajax({
        url: 'get_image_data.php', // point to server-side PHP script 
        dataType: 'json',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        // data: form_data,                         
        type: 'post',
        success: function(data){
           var htmlstring='';
    $.each(data,function(i,e) {htmlstring+=e+'<br/>';});
    $('#show_here').text(htmlstring);    
        }
        
     });
});

                $('#text').hide();
                 $('#create_marker_id').hide();

                $("#add_marker").click(function() {
                    $('#create_marker_id').toggle();
                    
                    });

                    $("#save").click(function() {
                        alert("Lat lon successfully saved into database")
                    });
                    $("#ok").click(function() {
                        var custom_id = document.getElementById('marker_id').value;
                        // alert(custom_id);

                    custom_marker = new L.marker([19.1716739,72.9304325], {id:custom_id, draggable:'true', 
                        icon:    new L.NumberedDivIcon({number: custom_id})}).addTo(mymap);

                    custom_marker.on('dragend', function (e) {
                document.getElementById('latitude').value = custom_marker.getLatLng().lat;
                document.getElementById('longitude').value = custom_marker.getLatLng().lng;
               });

                // custom_marker = new L.marker(setLatLng(map.getCenter())).addTo(mymap);

                  // helloPopup.setLatLng(map.getCenter()).openOn(mymap);
              });



                 // function theFunction(){


                 //    var c_lat = document.getElementsById(mymarker).getAttribute("data-lat");


                 //    var c_lon = document.getElementsById(mymarker).getAttribute("data-lon");

                    
                 //    custom_marker1 = new L.marker([c_lat,c_lon], {id:'10', draggable:'false'}).addTo(mymap);

                 //     mymap.setView([c_lat,c_lon], 17);
                 //    console.log('theFunction')
            
                 // }
                 


    
                     $("#driver").click(function() {
                     $('#text').toggle();
                     });

                     $('#upload').on('click', function() {
    var file_data = $('#file').prop('files')[0];  
      var lat = $('#lat').val();
      var lon = $('#lon').val(); 
    var form_data = new FormData();                  
    form_data.append('file', file_data);
    form_data.append('lat', lat);
    form_data.append('lon', lon);
    // alert(form_data);                             
    $.ajax({
        url: 'upload.php', // point to server-side PHP script 
        dataType: 'text',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(php_script_response){
            alert(php_script_response); // display response from the PHP script, if any
        }
        
     });
});
                mymap = L.map('mapdiv', {center:[19.0760, 72.8777], zoom:13, zoomControl:false, attributionControl:false});
                lyrOSM = L.tileLayer.provider('OpenStreetMap.Mapnik');
                // lyrTopo = L.tileLayer.provider('OpenTopoMap');
                lyrImagery = L.tileLayer.provider('Esri.WorldImagery');
                // lyrOutdoors = L.tileLayer.provider('Thunderforest.Outdoors');
                // lyrWatercolor = L.tileLayer.provider('Stamen.Watercolor');
                mymap.addLayer(lyrOSM);
                
                // lyrChapultepec = L.imageOverlay('img/chapultepec.png', [[19.42993,-99.20843],[19.40621,-99.17453]], {opacity:0.5}).addTo(mymap);
                
                objBasemaps = {
                    "Open Street Maps": lyrOSM,
                    // "Topo Map":lyrTopo,
                    "Imagery":lyrImagery
                    // "Outdoors":lyrOutdoors,
                    // "Watercolor":lyrWatercolor
                };
                
                objOverlays = {
                    // "Chapultepec Image":lyrChapultepec
                };
                
                ctlLayers = L.control.layers(objBasemaps, objOverlays).addTo(mymap);
                
                ctlPan = L.control.pan().addTo(mymap);
                ctlZoomslider = L.control.zoomslider({position:'topright'}).addTo(mymap);
                
                // ctlMeasure = L.control.polylineMeasure().addTo(mymap);
                ctlSidebar = L.control.sidebar('side-bar').addTo(mymap);
                ctlSidebar1 = L.control.sidebar('side-bar1').addTo(mymap);
                
                ctlEasybutton = L.easyButton('glyphicon-transfer', function(){
                   ctlSidebar.toggle(); 
                }).addTo(mymap);

                var helloPopup = L.popup().setContent('<h1>About US</h1><br><i>Primary objective of communitygis is to provide educational platform for learners to learn about spatial information and learn how these  modern tools can be used to solve real life problems. <br/><br/>It creates a platform for people who range from those who can contribute data ( mobile based point data collection to digitization of published maps) to those who can analyse the data to infer useful social knowledge.                    <br/><br/>It is a digital contraption needed to collect, aggregate , access and analyse data  finally provide decision support for to manipulate reality.                    <br/><br/>Since all source code is published , under GPL, any one can reproduce the technology , without any permission from makerGHAT.This has been created by volunteers and coordinated by www.makerghat.org<i>');

                L.easyButton('glyphicon glyphicon-question-sign', function(btn, map){
                    helloPopup.setLatLng(map.getCenter()).openOn(mymap);
                }).addTo(mymap);

                
                ctlSearch = L.Control.openCageSearch({key: '3c38d15e76c02545181b07d3f8cfccf0',limit: 10}).addTo(mymap);
                
                ctlAttribute = L.control.attribution({position:'bottomleft'}).addTo(mymap);
                ctlAttribute.addAttribution('OSM');
                ctlAttribute.addAttribution('&copy; <a href="http://www.makerghat.org">makerGHAT</a>');

                // ctlLogo = L.control.attribution({position:'bottomright'}).addTo(mymap);
                
                ctlScale = L.control.scale({position:'bottomleft', metric:false, maxWidth:200}).addTo(mymap);
                ctlMouseposition = L.control.mousePosition().addTo(mymap);
                
                popZocalo = L.popup({maxWidth:200,keepInView:true});
                popZocalo.setLatLng([19.43262, -99.13325]);
                popZocalo.setContent("<h2>Zocalo</h2><img src='img/zocalo.jpg' width='200px'>");
                
                mymap.on('contextmenu', function(e) {
                    var dtCurrentTime = new Date();
                    L.marker(e.latlng).addTo(mymap).bindPopup(e.latlng.toString()+"<br>"+dtCurrentTime.toString());
                });
                
                mymap.on('keypress', function(e) {
                    if (e.originalEvent.key=="l") {
                        mymap.locate();
                    }
                });

                // var credctrl = L.controlCredits({
                //     image: "img/logo.png",
                //     link: "http://www.makerghat.org/",
                //     text: "Interactive mapping<br/>by makerGhat"
                // }).addTo(mymap);


                // var myIcon = L.icon({
                //     iconUrl: 'img/logo.png',
                //     iconSize: [38, 95],
                //     iconAnchor: [22, 94],
                //     popupAnchor: [-3, -76],
                    
                // });
                // L.marker([50.505, 30.57], {icon: myIcon}).addTo(mymap);

                setTimeout(function () {
                    credctrl.setText("Interactive mapping<br/>by GreenInfo Network");
                }, 5000);
                mymap.on('locationfound', function(e) {
                    console.log('buildin');
                    // if (mrkCurrentLocation) {
                    //     mrkCurrentLocation.remove();
                    // }
                    // mrkCurrentLocation = L.circle(e.latlng, {radius:e.accuracy/2}).addTo(mymap);
                    // mymap.setView(e.latlng, 14);
                });

                //moving marker

                mulund_marker = new L.marker([19.173336549922784,72.93380448118242]).addTo(mymap);
                mulund_marker.on("click", function (e) {
                     $("#voter_addr").append("Building Name: प्रभागाचा परिसर : <br/>यादी भाग क्र.२ ६ १ : १ … पुष्पलोक ड्रीमलेंड, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, <br/>यादी भाग क्र.२ ६ १ : १० … स्नेहा ड्रीमलेंड, गुरु गोविंद सिंगमार्ग, मुलुड पश्चिम, <br/>यादी भाग क्र.२ ६ १ : १ १ … पुष्पा कुटीर, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, <br/>यादी भाग क्र.२ ६ १ : १२ … कृष्णा निवास, गुरुगोविंद सिंग मानी मुलुड पश्चिम, <br/>यादी भाग क्र.२ ६ १ : १३ … विक्रम, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, <br/>यादी भाग क्र.२ ६ १ : १४ … अशियाना,गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, यादी भाग क्र की ६ १ : १ ५ … गणेश बाग, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, यादी भाग क्र की ६ १ : १६ …रवीकुंजन, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, <br/>यादी भाग क्र.२ ६ १ : १७ … यशीधन, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, <br/>यादी भाग क्र.२ ६ १ :१ ८ … अमर निवास, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, <br/>यादी भाग क्र.२ ६ १ : १९ … छोकरा निवास, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, यादीभाग क्र की ६ १ : २ … ड्रीमलेंड, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, <br/>यादी भाग क्र.२ ६ १ : २० … आशिर्वाद, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम,<br/>यादी भाग क्र.२ ६ १ : २१ … सिंग निवास, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, यादी भाग क्र की ६ १ : २२ … पितृछाया, गुरु गोविंद सिंग मार्ग, मुलुडपश्चिम, यादी भाग क्र की ६ १ : २३ … मातृछाया ड्रीमलेंड, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, <br/>यादी भाग क्र.२ ६ १ : २४ … केंद्रीय कर्मचारीसोसायटी ड्रीमलेंडच्या बाजुला, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, यादी भाग क्र की ६ १ : २५ … हायलेंड पली, गुरु गोविंद सिंग मार्ग, मुलुडपश्चिम, यादी भाग क्र की ६ १ : २६ … बी… १ हायलेंड अपार्टमेंट, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, यादी भाग क्र की ६ १ : २७ … सी… १ हायलेंडअपार्टमेंट, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, <br/>यादी भाग क्र.२ ६ १ : २८ … रचना गार्डन डेंफोडील सोसायटी, गुरु गोविंद सिंग मार्ग, मुलुडपश्चिम, यादी भाग क्र की ६ १ : २९ … अमरनगर मुलुड कॉलनी, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, यादी भाग क्र की ६ १ : में … अंबे निवास, गुरुगोविंद सिंग मानी मुलुड पश्चिम, <br/>यादी भाग क्र.२ ६ १ : ३० … एफ हायलेंड पाती, दर्गा रोड, मुलुड पश्चिम, यादी भाग क्र की ६ १ : में १ … सी… १");
        // ctlSidebar1.setContent("hello");
        // $("#td_id").attr('class', 'col-md-9');
        // $("#td_id").attr('class', 'col-md-3');
    });
               //  voter_marker = new L.marker([19.1731725,72.9330796], {id:'1', draggable:'true'}).addTo(mymap);
                


               //  voter_marker.on('dragend', function (e) {
               //  document.getElementById('latitude').value = voter_marker.getLatLng().lat;
               //  document.getElementById('longitude').value = voter_marker.getLatLng().lng;
               // });

                
                mymap.on('locationerror', function(e) {
                    console.log(e);
                    alert("Location was not found");
                })
                
                mymap.on('zoomend', function(){
                    $("#zoom-level").html(mymap.getZoom());
                });
                
                mymap.on('moveend', function(){
                    $("#map-center").html(LatLngToArrayString(mymap.getCenter()));
                });
                
                mymap.on('mousemove', function(e){
                    $("#mouse-location").html(LatLngToArrayString(e.latlng));
                });
                
                $("#buildingLocate").click(function(){
                    addBuildingLayer();
                });

                $("#buildseg").click(function(){
                    addBuildsegLayer();
                });

                 $("#buildcomp").click(function(){
                    addBuildcompLayer();
                });

                 $("#buildweight").click(function(){
                    addBuildweightLayer();
                });

                 $("#corporatorwise").click(function(){
                    addCorporatorLayer();
                });

                 $("#compseg").click(function(){
                    addCorporatorSegLayer();
                });

                $("#roadLayer").click(function(){
                    addRoadLayer();
                });
                
                $("#punebuild").click(function(){
                    addPuneBuild();
                });

                $("#puneroad").click(function(){
                    addPuneRoad();
                });
                 $("#punephotos").click(function(){
                    addPunePhotos();
                });
                
                $("#primary_school").click(function(){
                    addPrimaryLayer();
                });

                $("#district_layer").click(function(){
                    addDistrictLayer();
                });

                $("#ward_layer").click(function(){
                    addWardLayer();
                });

                $("#village_layer").click(function(){
                    addVillageLayer();
                });

                $("#hlpca").click(function(){
                    addHLPCALayer();
                });

                $("#town2700_layer").click(function(){
                    addTown2700Layer();
                });

                $("#bfhvl_layer").click(function(){
                    addBFHVLLayer();
                });

                $("#bfr_layer").click(function(){
                    addBFRLayer();
                });

                $("#hvl_layer").click(function(){
                    addHVLLayer();
                });

                $("#mrl_layer").click(function(){
                    addMRLLayer();
                });

                 $("#voter_list").click(function(){
                    addVoterList();
                });

                $("#osmb_layer").click(function(){
                    addOSMBLayer();
                });

                $("#poly_layer").click(function(){
                    addPolyLayer();
                });

                $("#pond_layer").click(function(){
                    addPondLayer();
                });

                $("#railway_layer").click(function(){
                    addRailLayer();
                });

                $("#lward_building_layer").click(function(){
                    addLWardBuildingLayer();
                });

                $("#pads_boundary").click(function(){
                    addPadsBoundaryLayer();
                });

                $("#pads_building").click(function(){
                    addPadsBuildingLayer();
                });

                $("#pads_garden").click(function(){
                    addPadsGardenLayer();
                });

                $("#pads_street").click(function(){
                    addPadsStreetLayer();
                });


                $("#locatemumbai").click(function(){
                    mymap.setView([19.0607, 72.8362], 13);
                    // mymap.openPopup(popZocalo);
                });

                $("#voter_list").click(function(){
                    mymap.setView([19.1733144,72.9337851], 17);
                    // mymap.openPopup(popZocalo);
                });

                 $("#locatepune").click(function(){
                    mymap.setView([18.5938053,73.7911109], 17);
                    // mymap.openPopup(popZocalo);
                });

                $("#locategoa").click(function(){
                    mymap.setView([15.2993, 74.1240], 11);
                    // mymap.openPopup(popZocalo);
                });

                $("#locateponda").click(function(){
                    mymap.setView([15.3991, 74.0124], 15);
                    // mymap.openPopup(popZocalo);
                });

                $("#sward").click(function(){
                    mymap.setView([19.1197, 72.9051], 15);
                    // mymap.openPopup(popZocalo);
                });

                $("#lward").click(function(){
                    mymap.setView([19.08799, 72.88656], 15);
                    // mymap.openPopup(popZocalo);
                });

                $("#pads").click(function(){
                    mymap.setView([19.1197, 72.9051], 15);
                    // mymap.openPopup(popZocalo);
                });

                $("#ponda_lines").click(function(){
                    addPondaLinesLayer();
                });

                $("#ponda_polygons").click(function(){
                    addPondaPolygonsLayer();
                });

                $("#ponda_points").click(function(){
                    addPondaPointsLayer();
                });

                $("#ponda_hospital").click(function(){
                    addPondaHospitalLayer();
                });
                $("#ponda_school").click(function(){
                    addPondaSchoolLayer();
                });
                $("#ponda_worship").click(function(){
                    addPondaWorshipLayer();
                });
                $("#ponda_food").click(function(){
                    addPondaFoodLayer();
                });
                $("#ponda_other").click(function(){
                    addPondaOtherLayer();
                });
                
                $("#sldOpacity").on('change', function(){
                    $("#image-opacity").html(this.value);
                    lyrChapultepec.setOpacity(this.value);
                });
            }); //end of ready function
           

            function LatLngToArrayString(ll) {
//                console.log(ll);
                return "["+ll.lat.toFixed(5)+", "+ll.lng.toFixed(5)+"]";
            }

            function theFunction(mymarker){
                    var c_lat = document.getElementById(mymarker).getAttribute("data-lat");


                    var c_lon = document.getElementById(mymarker).getAttribute("data-lon");
                    
                    var c_name = document.getElementById(mymarker).getAttribute("data-name");

                    
                    custom_marker1 = new L.marker([c_lat,c_lon], {id:'10', draggable:'false'}).bindPopup("<img width=100 height=100 src='uploads/"+c_name+"'/>").addTo(mymap);

                     mymap.setView([c_lat,c_lon], 17);
                    console.log('theFunction')
            
            }

            function addPondaLinesLayer(){
                console.log('this is pondalines');
                if(pondalinelyr){
                    pondalinelyr.remove(mymap);
                    pondalinelyr = 0;
                }else{
                    pondalinelyr = source.getLayer("geonode:ponda_goa_polylines").addTo(mymap);
                }
                
            }

            function addPondaPolygonsLayer(){
                console.log('this is pondapolygon');
                if(pondapolygonlyr){
                    pondapolygonlyr.remove(mymap);
                    pondapolygonlyr = 0;
                }else{
                    pondapolygonlyr = source.getLayer("geonode:ponda_goa_polygons_1").addTo(mymap);
                }
                
            }

            function addPondaPointsLayer(){
                console.log('this is pondapoint');
                if(pondapointlyr){
                    pondapointlyr.remove(mymap);
                    pondapointlyr = 0;
                }else{
                    pondapointlyr = source.getLayer("geonode:ponda_goa_points").addTo(mymap);
                }
                
            }

            function addBuildingLayer(){
                console.log('this is building');
                if(building){
                    building.remove(mymap);
                    building = 0;
                }else{
                    building = source.getLayer("geonode:buildings_in_hwest").addTo(mymap);
                }
                
            }

            function addCorporatorLayer(){
                console.log('this is corporatorwise ');
                if(corporatorwise){
                    corporatorwise.remove(mymap);
                    corporatorwise = 0;
                }else{
                    corporatorwise = L.geoJSON.ajax('data/corporator_boundries.geojson', {
                     //pointToLayer: returnCompMarker, filter:filterComp
                     // filter: function(feature, layer) {   
                     //     return (feature.properties.society_name === "Amber");
                     //   }
                  }).addTo(mymap);
                }
                
            }
            function addCorporatorSegLayer(){
                console.log('this is corporator Segeregation');
                if(compseg){
                    compseg.remove(mymap);
                    compseg = 0;
                }else{
                    compseg = L.geoJSON.ajax('data/corporator_boundries.geojson', {
                     pointToLayer: returnCorpsegMarker
                     // filter: function(feature, layer) {   
                     //     return (feature.properties.society_name === "Amber");
                     //   }
                  }).addTo(mymap);
                }
                
            }

            function addBuildsegLayer(){
                console.log('this is fulcrum data ');
                if(buildseg){
                    buildseg.remove(mymap);
                    buildseg = 0;
                }else{
                   buildseg = L.geoJSON.ajax('data/swm_hwest/swm_hwest.geojson', {
                     pointToLayer: returnEagleMarker, filter:filterEagle
                     // filter: function(feature, layer) {   
                     //     return (feature.properties.society_name === "Amber");
                     //   }
                  }).addTo(mymap);

                }
                
            }

            function addBuildcompLayer(){
                console.log('this is fulcrum data ');
                if(buildcomp){
                    buildcomp.remove(mymap);
                    buildcomp = 0;
                }else{
                   buildcomp = L.geoJSON.ajax('data/swm_hwest/swm_hwest.geojson', {
                     pointToLayer: returnCompMarker, filter:filterComp
                     // filter: function(feature, layer) {   
                     //     return (feature.properties.society_name === "Amber");
                     //   }
                  }).addTo(mymap);

                }
                
            }

            function addBuildweightLayer(){
                console.log('this is fulcrum data ');
                if(buildweight){
                    buildweight.remove(mymap);
                    buildweight = 0;
                }else{
                   buildweight = L.geoJSON.ajax('data/swm_hwest/swm_hwest.geojson', {
                     pointToLayer: returnWeightMarker
                     // filter: function(feature, layer) {   
                     //     return (feature.properties.society_name === "Amber");
                     //   }
                  }).addTo(mymap);

                }
                
            }

            function polystyle(feature) {
    return {
        fillColor: 'red',
        weight: 2,
        opacity: 1,
        color: 'white',  //Outline color
        fillOpacity: 0.7
    };
}

            function addPuneBuild(){
                console.log('this is pune building data ');
                if(punebuild){
                    punebuild.remove(mymap);
                    punebuild = 0;
                }else{
                   punebuild = L.geoJSON.ajax('data/pune_buildings_new.geojson', {
                     style: polystyle,

                    onEachFeature: function (feature, layer) {
                        layer.bindPopup('Building Name: '+feature.properties.bldg_name+ "<br />No. of Buildings: "+feature.properties.flats+"<br/>No. of Rowhouses: "+feature.properties.rowhouses+"<br/>Levels of Segregation: "+feature.properties.level_seg+"(Dry/Wet)<br/><b>Are there any locations inside the society for disposing other types of waste</b><br/>Ewaste: "+feature.properties.ewaste+"<br/>Glass: "+feature.properties.glass+"<br/>Plastic: "+feature.properties.plastic+"<br/>Sanitary Waste: "+feature.properties.sanitary+"<br/>Coconut Waste: "+feature.properties.coconut+"<br/>In-house Composting: "+feature.properties.composting+"<br/>N P K H Values: "+feature.properties.n_p_k_h+"<br/>Approx Trees in Society: "+feature.properties.trees+"<br/>No of Gardens / Play / Open Spaces in Society: "+feature.properties.open_space+"<br/>Is Compost Available for Sale: "+feature.properties.comp_sale+"<br/>Bird Conservation: "+feature.properties.b_consrv+"<br/>Tree Conservation: "+feature.properties.t_consrv+"<br/>STP Plant: "+feature.properties.stp_plant);
                      }
                     // pointToLayer: returnPuneBuildMarker
                     // filter: function(feature, layer) {   
                     //     return (feature.properties.society_name === "Amber");
                     //   }
                  }).addTo(mymap);

                }
                
            }

            function addVoterList(){
                console.log('this is voter list data ');
            }

            // function addVoterList(){
            //     console.log('this is voter list data ');
            //     if(punebuild){
            //         punebuild.remove(mymap);
            //         punebuild = 0;
            //     }else{
            //        punebuild = L.geoJSON.ajax('voter_list/mulund_geo.geojson', {
            //          //style: polystyle,

            //         onEachFeature: function (feature, layer) {
            //             layer.bindPopup('Building Name: प्रभागाचा परिसर : <br/>यादी भाग क्र.२ ६ १ : १ … पुष्पलोक ड्रीमलेंड, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, <br/>यादी भाग क्र.२ ६ १ : १० … स्नेहा ड्रीमलेंड, गुरु गोविंद सिंगमार्ग, मुलुड पश्चिम, <br/>यादी भाग क्र.२ ६ १ : १ १ … पुष्पा कुटीर, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, <br/>यादी भाग क्र.२ ६ १ : १२ … कृष्णा निवास, गुरुगोविंद सिंग मानी मुलुड पश्चिम, <br/>यादी भाग क्र.२ ६ १ : १३ … विक्रम, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, <br/>यादी भाग क्र.२ ६ १ : १४ … अशियाना,गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, यादी भाग क्र की ६ १ : १ ५ … गणेश बाग, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, यादी भाग क्र की ६ १ : १६ …रवीकुंजन, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, <br/>यादी भाग क्र.२ ६ १ : १७ … यशीधन, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, <br/>यादी भाग क्र.२ ६ १ :१ ८ … अमर निवास, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, <br/>यादी भाग क्र.२ ६ १ : १९ … छोकरा निवास, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, यादीभाग क्र की ६ १ : २ … ड्रीमलेंड, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, <br/>यादी भाग क्र.२ ६ १ : २० … आशिर्वाद, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम,<br/>यादी भाग क्र.२ ६ १ : २१ … सिंग निवास, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, यादी भाग क्र की ६ १ : २२ … पितृछाया, गुरु गोविंद सिंग मार्ग, मुलुडपश्चिम, यादी भाग क्र की ६ १ : २३ … मातृछाया ड्रीमलेंड, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, <br/>यादी भाग क्र.२ ६ १ : २४ … केंद्रीय कर्मचारीसोसायटी ड्रीमलेंडच्या बाजुला, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, यादी भाग क्र की ६ १ : २५ … हायलेंड पली, गुरु गोविंद सिंग मार्ग, मुलुडपश्चिम, यादी भाग क्र की ६ १ : २६ … बी… १ हायलेंड अपार्टमेंट, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, यादी भाग क्र की ६ १ : २७ … सी… १ हायलेंडअपार्टमेंट, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, <br/>यादी भाग क्र.२ ६ १ : २८ … रचना गार्डन डेंफोडील सोसायटी, गुरु गोविंद सिंग मार्ग, मुलुडपश्चिम, यादी भाग क्र की ६ १ : २९ … अमरनगर मुलुड कॉलनी, गुरु गोविंद सिंग मार्ग, मुलुड पश्चिम, यादी भाग क्र की ६ १ : में … अंबे निवास, गुरुगोविंद सिंग मानी मुलुड पश्चिम, <br/>यादी भाग क्र.२ ६ १ : ३० … एफ हायलेंड पाती, दर्गा रोड, मुलुड पश्चिम, यादी भाग क्र की ६ १ : में १ … सी… १');
            //           }
            //          // pointToLayer: returnPuneBuildMarker
            //          // filter: function(feature, layer) {   
            //          //     return (feature.properties.society_name === "Amber");
            //          //   }
            //       }).addTo(mymap);

            //     }
                
            // }

            function addPuneRoad(){
                console.log('this is fulcrum data ');
                if(puneroad){
                    puneroad.remove(mymap);
                    puneroad = 0;
                }else{
                   puneroad = L.geoJSON.ajax('data/pune_roads_geo.geojson', {
                     pointToLayer: returnPuneRoadMarker
                     // filter: function(feature, layer) {   
                     //     return (feature.properties.society_name === "Amber");
                     //   }
                  }).addTo(mymap);

                }
                
            }
            function addPunePhotos(){
                console.log('this is pune photos ');
                if(punephotos){
                    punephotos.remove(mymap);
                    punephotos = 0;
                }else{
                   punephotos = L.geoJSON.ajax('data/latest_pune_photos.geojson', {
                     pointToLayer: returnPunePhotosMarker
                     // filter: function(feature, layer) {   
                     //     return (feature.properties.society_name === "Amber");
                     //   }
                  }).addTo(mymap);

                }
                
            }
            

            function addRoadLayer(){
                console.log('Road');
                if(roads){
                    roads.remove(mymap);
                    roads =0;
                }else{
                    roads = source.getLayer("geonode:road_in_grid").addTo(mymap);
                }
               
                
            }

            function addPrimaryLayer(){
                console.log('primary layer');
                if(primarys){
                    primarys.remove(mymap);
                    primarys =0;
                }else{
                    primarys = source.getLayer("geonode:school_may310").addTo(mymap);
                }  
            }

            function addDistrictLayer(){
                console.log('District layer');
                mymap.setZoom(7);
                if(districtL){
                    districtL.remove(mymap);
                    districtL =0;
                }else{
                    districtL = source.getLayer("geonode:district_boundaries_of_maharashtra").addTo(mymap);
                }  
            }

            function addWardLayer(){
                console.log('Ward layer');
                mymap.setZoom(10);
                if(wardl){
                    wardl.remove(mymap);
                    wardl =0;
                }else{
                    wardl = source.getLayer("geonode:mumbai_ward_boundary").addTo(mymap);
                }  
            }
            

            function addVillageLayer(){
                console.log('Village layer');
                mymap.setZoom(7);
                if(villagel){
                    villagel.remove(mymap);
                    villagel =0;
                }else{
                    villagel = source.getLayer("geonode:village_2700").addTo(mymap);
                }  
            }

            
            function addHLPCALayer(){
                console.log('HLPCA layer');
                mymap.setZoom(7);
                if(hlpcal){
                    hlpcal.remove(mymap);
                    hlpcal =0;
                }else{
                    hlpcal = source.getLayer("geonode:hlpca").addTo(mymap);
                }  
            }

            function addTown2700Layer(){
                console.log('Town 2700 layer');
                mymap.setZoom(7);
                if(townl){
                    townl.remove(mymap);
                    townl =0;
                }else{
                    townl = source.getLayer("geonode:town_2700").addTo(mymap);
                }  
            }

            function addBFHVLLayer(){
                console.log('BFHVL layer');
                if(bfhvll){
                    bfhvll.remove(mymap);
                    bfhvll =0;
                }else{
                    bfhvll = source.getLayer("geonode:s_ward_buffer_for_high_voltage_line_2").addTo(mymap);
                }  
            }

            function addBFRLayer(){
                console.log('BFR layer');
                if(bfrl){
                    bfrl.remove(mymap);
                    bfrl =0;
                }else{
                    bfrl = source.getLayer("geonode:s_ward_bufferforrailway").addTo(mymap);
                }  
            }

            function addHVLLayer(){
                console.log('HVL layer');
                if(hvll){
                    hvll.remove(mymap);
                    hvll =0;
                }else{
                    hvll = source.getLayer("geonode:s_ward_high_voltage_line").addTo(mymap);
                }  
            }

            function addMRLLayer(){
                console.log('MRLlayer');
                if(mrll){
                    mrll.remove(mymap);
                    mrll =0;
                }else{
                    mrll = source.getLayer("geonode:s_ward_metrorailline1_station").addTo(mymap);
                }  
            }

            function addOSMBLayer(){
                console.log('OSMB layer');
                if(osmbl){
                    osmbl.remove(mymap);
                    osmbl =0;
                }else{
                    osmbl = source.getLayer("geonode:osm_building_s_ward").addTo(mymap);
                }  
            }

            function addPolyLayer(){
                console.log('Polygon layer');
                if(polyl){
                    polyl.remove(mymap);
                    polyl =0;
                }else{
                    polyl = source.getLayer("geonode:s_ward_all_polygone").addTo(mymap);
                }  
            }

            function addPondLayer(){
                console.log('Pond layer');
                if(pondl){
                    pondl.remove(mymap);
                    pondl =0;
                }else{
                    pondl = source.getLayer("geonode:s_ward_pond").addTo(mymap);
                }  
            }

            function addRailLayer(){
                console.log('rail layer');
                if(raill){
                    raill.remove(mymap);
                    raill =0;
                }else{
                    raill = source.getLayer("geonode:s_ward_railwaytrack_station").addTo(mymap);
                }  
            }

            
            function addLWardBuildingLayer(){
                console.log('l ward building');
                if(lwardbl){
                    lwardbl.remove(mymap);
                    lwardbl =0;
                }else{
                    lwardbl = source.getLayer("geonode:l_ward_osm_building").addTo(mymap);
                }  
            }

            function addPadsBoundaryLayer(){
                console.log('pads boundary building');
                if(pbl){
                    pbl.remove(mymap);
                    pbl =0;
                }else{
                    pbl = source.getLayer("geonode:pads_bondry").addTo(mymap);
                }  
            }

            function addPadsBuildingLayer(){
                console.log('pads building');
                if(pbul){
                    pbul.remove(mymap);
                    pbul =0;
                }else{
                    pbul = source.getLayer("geonode:pads_all_buildingfootprint").addTo(mymap);
                }  
            }

            function addPadsGardenLayer(){
                console.log('pads garden');
                if(pgl){
                    pgl.remove(mymap);
                    pgl =0;
                }else{
                    pgl = source.getLayer("geonode:pads_garden").addTo(mymap);
                }  
            }

            function addPadsStreetLayer(){
                console.log('pads street');
                if(psl){
                    psl.remove(mymap);
                    psl =0;
                }else{
                    psl = source.getLayer("geonode:pads_street").addTo(mymap);
                }  
            }

            function addPondaHospitalLayer(){
                console.log('ponda hospital');
                if(pondahl){
                    pondahl.remove(mymap);
                    pondahl =0;
                }else{
                    pondahl = source.getLayer("geonode:ponda_pt_hospital").addTo(mymap);
                }  
            }

            function addPondaSchoolLayer(){
                console.log('ponda school');
                if(pondasl){
                    pondasl.remove(mymap);
                    pondasl =0;
                }else{
                    pondasl = source.getLayer("geonode:ponda_pt_school").addTo(mymap);
                }  
            }

            function addPondaWorshipLayer(){
                console.log('ponda worship');
                if(pondawl){
                    pondawl.remove(mymap);
                    pondawl =0;
                }else{
                    pondawl = source.getLayer("geonode:ponda_pt_worship").addTo(mymap);
                }  
            }

            function addPondaFoodLayer(){
                console.log('ponda food');
                if(pondafl){
                    pondafl.remove(mymap);
                    pondafl =0;
                }else{
                    pondafl = source.getLayer("geonode:ponda_pt_food_1").addTo(mymap);
                }  
            }

            function addPondaOtherLayer(){
                console.log('ponda other');
                if(pondaol){
                    pondaol.remove(mymap);
                    pondaol =0;
                }else{
                    pondaol = source.getLayer("geonode:ponda_pt_others").addTo(mymap);
                }  
            }

            //filter functions

            function returnEagleMarker(json, latlng){
                var att = json.properties;
                if (att.is_the_segregation_at_source_adequate=='Yes') {
                    var clrNest = 'chartreuse';
                } else {
                    var clrNest = 'deeppink';
                }
                // arEagleIDs.push(att.nest_id.toString());
                return L.circle(latlng, {radius:10, color:clrNest}).bindTooltip("<img width=100 height=100 src='data/swm_hwest/"+att.society_photo+".jpg'/><h4>Society Name: "+att.society_name+"</h4>Segeregation at source: "+att.is_the_segregation_at_source_adequate);
            }

            function filterEagle(json) {
                var att=json.properties;
                var optFilter = $("input[name=fltEagle]:checked").val();
                if (optFilter=='ALL') {
                    return true;
                } else {
                    return (att.is_the_segregation_at_source_adequate==optFilter);
                }
            }

            $("input[name=fltEagle]").click(function(){
                //arEagleIDs=[];
                buildseg.refresh();
            });

            function returnCompMarker(json, latlng){
                var att = json.properties;
                if (att.do_you_have_any_in_house_composting_facility=='Yes') {
                    var clrNest = 'chartreuse';
                } else {
                    var clrNest = 'deeppink';
                }
                // arEagleIDs.push(att.nest_id.toString());
                return L.circle(latlng, {radius:10, color:clrNest}).bindTooltip("<img width=100 height=100 src='data/swm_hwest/"+att.society_photo+".jpg'/><h4>Society Name: "+att.society_name+"</h4>Composting at source: "+att.do_you_have_any_in_house_composting_facility);
            }

            function filterComp(json) {
                var att=json.properties;
                var optFilter = $("input[name=optbcomp]:checked").val();
                if (optFilter=='ALL') {
                    return true;
                } else {
                    return (att.do_you_have_any_in_house_composting_facility==optFilter);
                }
            }

            $("input[name=optbcomp]").click(function(){
                //arEagleIDs=[];
                buildcomp.refresh();
            });

            function returnWeightMarker(json, latlng){
                var att = json.properties;
                // if (att.do_you_have_any_in_house_composting_facility=='Yes') {
                //     var clrNest = 'chartreuse';
                // } else {
                //     var clrNest = 'deeppink';
                // }
                // arEagleIDs.push(att.nest_id.toString());
                var new_popu = att.flats * 2;
                var new_weight = att.weight/new_popu;
                return L.circle(latlng, {radius:10, color:"chartreuse"}).bindPopup("<img width=100 height=100 src='data/swm_hwest/"+att.society_photo+".jpg'/><h4>Society Name: "+att.society_name+"</h4>Weight: "+new_weight);
            }

            function returnCorpsegMarker(json, latlng){
                var att = json.properties;
                var att1 =  L.geoJSON.ajax('data/swm_hwest/swm_hwest.geojson');
                if (turf.pointsWithinPolygon(att1, att)) {
                    var clrNest = 'chartreuse';
                } else {
                    var clrNest = 'deeppink';
                }
                // arEagleIDs.push(att.nest_id.toString());
                // return L.circle(latlng, {radius:10, color:clrNest}).bindTooltip("<img width=100 height=100 src='data/swm_hwest/"+att.society_photo+".jpg'/><h4>Society Name: "+att.society_name+"</h4>Composting at source: "+att.do_you_have_any_in_house_composting_facility);
                return L.circle(latlng, {radius:10, color:clrNest});
            }

            function returnPuneBuildMarker(json, latlng){
                var att = json.properties;
                // if (att.do_you_have_any_in_house_composting_facility=='Yes') {
                //     var clrNest = 'chartreuse';
                // } else {
                //     var clrNest = 'deeppink';
                // }
                // arEagleIDs.push(att.nest_id.toString());
                // var new_popu = att.flats * 2;
                // var new_weight = att.weight/new_popu;
                return L.circle(latlng, {radius:10, color:"chartreuse"}).bindTooltip("OSM id: "+att.name);
            }

            function returnPuneRoadMarker(json, latlng){
                var att = json.properties;
                // if (att.do_you_have_any_in_house_composting_facility=='Yes') {
                //     var clrNest = 'chartreuse';
                // } else {
                //     var clrNest = 'deeppink';
                // }
                // arEagleIDs.push(att.nest_id.toString());
                // var new_popu = att.flats * 2;
                // var new_weight = att.weight/new_popu;
                return L.circle(latlng, {radius:10, color:"chartreuse"}).bindTooltip();
            }
        function returnPunePhotosMarker(json, latlng){
                var att = json.properties;
                // if (att.do_you_have_any_in_house_composting_facility=='Yes') {
                //     var clrNest = 'chartreuse';
                // } else {
                //     var clrNest = 'deeppink';
                // }
                // arEagleIDs.push(att.nest_id.toString());
                // var new_popu = att.flats * 2;
                // var new_weight = att.weight/new_popu;
                return L.circle(latlng, {radius:10, color:"chartreuse"}).bindPopup("<img width=100 height=100 src='data"+att.Path+"'/>");
            }
        </script>
    </body>
</html>

