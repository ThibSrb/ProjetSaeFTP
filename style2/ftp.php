<?php
//A DEFINIR PAR L'ADMIN DU FTP
  $user = "admin";
  $pass = "pepere";
//A DEFINIR PAR L'ADMIN DU FTP

$root = getcwd();

$phpSelf = $_SERVER['PHP_SELF'];

$explodedPhpSelf = explode('/',$phpSelf);

$pageName = $explodedPhpSelf[count($explodedPhpSelf) - 1];

$phpHostName = $_SERVER['SERVER_NAME'];

if ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443) {
  $prot = "https://";
}
else {
  $prot = "http://";
}


$linkRoot = $prot.$phpHostName.str_replace('/'.$pageName,'',$phpSelf);

//print($linkRoot);

$SVGfichier = '<svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   width="1000"
   height="1000"
   viewBox="0 0 264.58333 264.58334"
   version="1.1"
   id="svg8"
   inkscape:version="1.0 (4035a4fb49, 2020-05-01)"
   sodipodi:docname="fichier.svg">
  <defs
     id="defs2">
    <inkscape:path-effect
       effect="fillet_chamfer"
       id="path-effect921"
       is_visible="true"
       lpeversion="1"
       satellites_param="F,0,0,1,0,11.898422,0,1 @ F,0,0,1,0,10,0,1 @ F,0,0,1,0,10,0,1 @ F,0,0,1,0,10,0,1"
       unit="px"
       method="auto"
       mode="F"
       radius="10"
       chamfer_steps="1"
       flexible="false"
       use_knot_distance="true"
       apply_no_radius="true"
       apply_with_radius="true"
       only_selected="false"
       hide_knots="false" />
    <inkscape:path-effect
       effect="fillet_chamfer"
       id="path-effect902"
       is_visible="true"
       lpeversion="1"
       satellites_param="F,0,0,1,0,11.898422,0,1 @ F,0,0,1,0,10,0,1 @ F,0,0,1,0,10,0,1 @ F,0,0,1,0,10,0,1"
       unit="px"
       method="auto"
       mode="F"
       radius="10"
       chamfer_steps="1"
       flexible="false"
       use_knot_distance="true"
       apply_no_radius="true"
       apply_with_radius="true"
       only_selected="false"
       hide_knots="false" />
    <inkscape:path-effect
       hide_knots="false"
       only_selected="false"
       apply_with_radius="true"
       apply_no_radius="true"
       use_knot_distance="true"
       flexible="false"
       chamfer_steps="1"
       radius="10"
       mode="F"
       method="auto"
       unit="px"
       satellites_param="F,0,0,1,0,11.898422,0,1 @ F,0,0,1,0,10,0,1 @ F,0,0,1,0,10,0,1 @ F,0,0,1,0,10,0,1"
       lpeversion="1"
       is_visible="true"
       id="path-effect883"
       effect="fillet_chamfer" />
    <inkscape:path-effect
       hide_knots="false"
       only_selected="false"
       apply_with_radius="true"
       apply_no_radius="true"
       use_knot_distance="true"
       flexible="false"
       chamfer_steps="1"
       radius="0"
       mode="F"
       method="auto"
       unit="px"
       satellites_param="F,0,0,1,0,0,0,1 @ F,0,0,1,0,0,0,1 @ F,0,0,1,0,10,0,1"
       lpeversion="1"
       is_visible="true"
       id="path-effect838"
       effect="fillet_chamfer" />
    <inkscape:path-effect
       effect="fillet_chamfer"
       id="path-effect887"
       is_visible="true"
       lpeversion="1"
       satellites_param="IC,0,0,1,0,0,0,1 @ IC,0,0,1,0,40,0,1 @ IC,0,0,1,0,0,0,1 @ IC,0,0,1,0,0,0,1"
       unit="px"
       method="auto"
       mode="IC"
       radius="0"
       chamfer_steps="1"
       flexible="false"
       use_knot_distance="true"
       apply_no_radius="true"
       apply_with_radius="true"
       only_selected="false"
       hide_knots="false" />
    <inkscape:path-effect
       effect="fillet_chamfer"
       id="path-effect877"
       is_visible="true"
       lpeversion="1"
       satellites_param="IC,0,0,1,0,0,0,1 @ IC,0,0,1,0,39.797089,0,1 @ IC,0,0,1,0,0.019569773,0,1 @ IC,0,0,1,0,0,0,1"
       unit="px"
       method="auto"
       mode="IC"
       radius="0"
       chamfer_steps="1"
       flexible="false"
       use_knot_distance="true"
       apply_no_radius="true"
       apply_with_radius="true"
       only_selected="false"
       hide_knots="false" />
    <inkscape:path-effect
       effect="fillet_chamfer"
       id="path-effect851"
       is_visible="true"
       lpeversion="1"
       satellites_param="F,0,0,1,0,0,0,1 @ F,0,0,1,0,0,0,1 @ F,0,0,1,0,0,0,1 @ F,0,0,1,0,0,0,1"
       unit="px"
       method="auto"
       mode="F"
       radius="70"
       chamfer_steps="1"
       flexible="false"
       use_knot_distance="true"
       apply_no_radius="true"
       apply_with_radius="true"
       only_selected="false"
       hide_knots="false" />
    <inkscape:path-effect
       effect="fillet_chamfer"
       id="path-effect845"
       is_visible="true"
       lpeversion="1"
       satellites_param="F,0,0,1,0,10,0,1 @ F,0,0,1,0,0,0,1 @ F,0,0,1,0,0,0,1 @ F,0,0,1,0,10,0,1 @ F,0,0,1,0,10,0,1"
       unit="px"
       method="auto"
       mode="F"
       radius="0"
       chamfer_steps="1"
       flexible="false"
       use_knot_distance="true"
       apply_no_radius="true"
       apply_with_radius="true"
       only_selected="true"
       hide_knots="false" />
    <inkscape:path-effect
       effect="fillet_chamfer"
       id="path-effect843"
       is_visible="true"
       lpeversion="1"
       satellites_param="IC,0,0,1,0,0,0,1 @ IC,0,0,1,0,40,0,1 @ IC,0,0,1,0,0,0,1 @ IC,0,0,1,0,0,0,1"
       unit="px"
       method="auto"
       mode="IC"
       radius="70"
       chamfer_steps="1"
       flexible="false"
       use_knot_distance="true"
       apply_no_radius="true"
       apply_with_radius="true"
       only_selected="false"
       hide_knots="false" />
    <inkscape:path-effect
       effect="fillet_chamfer"
       id="path-effect841"
       is_visible="true"
       lpeversion="1"
       satellites_param="IF,0,0,1,0,0,0,1 @ IF,0,0,1,0,0,0,1 @ IF,0,0,1,0,0,0,1 @ IF,0,0,1,0,0,0,1"
       unit="px"
       method="auto"
       mode="F"
       radius="50"
       chamfer_steps="1"
       flexible="false"
       use_knot_distance="true"
       apply_no_radius="true"
       apply_with_radius="true"
       only_selected="false"
       hide_knots="false" />
  </defs>
  <sodipodi:namedview
     id="base"
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1.0"
     inkscape:pageopacity="0.0"
     inkscape:pageshadow="2"
     inkscape:zoom="0.42250001"
     inkscape:cx="-359.46807"
     inkscape:cy="488.70735"
     inkscape:document-units="mm"
     inkscape:current-layer="layer1"
     inkscape:document-rotation="0"
     showgrid="false"
     units="px"
     inkscape:window-width="1920"
     inkscape:window-height="1017"
     inkscape:window-x="-8"
     inkscape:window-y="-8"
     inkscape:window-maximized="1" />
  <metadata
     id="metadata5">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title></dc:title>
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <g
     inkscape:label="Calque 1"
     inkscape:groupmode="layer"
     id="layer1">
    <g
       transform="matrix(1.4841804,0,0,1.4841804,-64.053032,-64.053028)"
       id="g928">
      <g
         id="g854"
         transform="translate(-11.52828)">
        <path
           inkscape:path-effect="#path-effect843;#path-effect845"
           d="m 91.264885,49.514877 h 75.110125 l 40,40 V 205.06845 a 10,10 135 0 1 -10,10 H 91.264885 a 10,10 45 0 1 -10,-10 V 59.514877 a 10,10 135 0 1 10,-10 z"
           style="fill:#ff8aff;fill-opacity:1;stroke-width:0.264583"
           id="rect833"
           width="125.11012"
           height="165.55357"
           x="81.264885"
           y="49.514877"
           sodipodi:type="rect" />
        <path
           inkscape:path-effect="#path-effect887;#path-effect838"
           style="fill:#c46ac4;fill-opacity:1;stroke-width:0.252493"
           id="rect885"
           width="40"
           height="40"
           x="166.375"
           y="49.514877"
           d="m 166.375,49.514877 40,40 h -30 a 10,10 45 0 1 -10,-10 z"
           sodipodi:type="rect" />
      </g>
      <path
         style="fill:#c46ac4;fill-opacity:1;stroke-width:0.264583"
         id="rect858"
         width="77.523804"
         height="20.136099"
         x="93.529762"
         y="117.03185"
         inkscape:path-effect="#path-effect883"
         d="m 105.42818,117.03185 h 55.62539 a 10,10 45 0 1 10,10 v 0.1361 a 10,10 135 0 1 -10,10 h -57.52381 a 10,10 45 0 1 -9.999998,-10 11.052442,11.052442 139.57279 0 1 11.898418,-10.1361 z"
         sodipodi:type="rect" />
      <path
         sodipodi:type="rect"
         inkscape:path-effect="#path-effect921"
         y="154.64876"
         x="93.529762"
         height="20.136099"
         width="77.523804"
         id="rect858-1"
         style="fill:#c46ac4;fill-opacity:1;stroke-width:0.264583"
         d="m 105.42818,154.64876 h 55.62539 a 10,10 45 0 1 10,10 v 0.1361 a 10,10 135 0 1 -10,10 h -57.52381 a 10,10 45 0 1 -9.999998,-10 11.052442,11.052442 139.57279 0 1 11.898418,-10.1361 z" />
    </g>
  </g>
</svg>';
$SVGdossier = '<svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   width="2267.7166"
   height="2267.7166"
   viewBox="0 0 600 600"
   version="1.1"
   id="svg8"
   inkscape:version="1.0 (4035a4fb49, 2020-05-01)"
   sodipodi:docname="dossier.svg">
  <defs
     id="defs2" />
  <sodipodi:namedview
     id="base"
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1.0"
     inkscape:pageopacity="0.0"
     inkscape:pageshadow="2"
     inkscape:zoom="0.12374369"
     inkscape:cx="-1720.9559"
     inkscape:cy="1592.4602"
     inkscape:document-units="mm"
     inkscape:current-layer="layer1"
     inkscape:document-rotation="0"
     showgrid="false"
     units="px"
     inkscape:window-width="1920"
     inkscape:window-height="1017"
     inkscape:window-x="-8"
     inkscape:window-y="-8"
     inkscape:window-maximized="1" />
  <metadata
     id="metadata5">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title />
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <g
     inkscape:label="Calque 1"
     inkscape:groupmode="layer"
     id="layer1">
    <g
       id="g853"
       transform="matrix(16.218009,0,0,16.104366,-2065.0023,-601.178)">
      <path
         style="fill:#ff8aff;stroke-width:0.264583;fill-opacity:1"
         d="m 129.4285,69.413034 c -0.43117,-0.251132 -0.46302,-1.176602 -0.46302,-13.453307 0,-10.874272 0.0638,-13.236601 0.36443,-13.486069 0.25406,-0.210857 2.03578,-0.28076 5.88358,-0.230834 l 5.51916,0.07161 1.4227,1.918229 1.42269,1.918229 h 7.46938 c 8.87872,0 8.34514,-0.1983 8.34514,3.10138 0,2.397524 0.0464,2.454869 1.98819,2.454869 0.87261,0 1.18743,0.11429 1.30107,0.472337 0.18112,0.570672 -5.74396,16.970668 -6.24634,17.289184 -0.51828,0.328602 -26.43896,0.275206 -27.00698,-0.05563 z"
         id="path857" />
      <path
         style="fill:#c46ac4;stroke-width:0.264583;fill-opacity:1"
         d="m 128.98637,55.631388 c -0.0115,-6.791197 0.0398,-12.506197 0.11396,-12.7 0.1087,-0.284064 1.23527,-0.326724 5.81178,-0.220077 l 5.67695,0.132292 1.23821,1.719792 c 0.68102,0.945885 1.29014,1.779323 1.35359,1.852083 0.0635,0.07276 3.58821,0.191823 7.8328,0.264583 l 7.71744,0.132292 v 2.248958 2.248958 l -11.67768,0.06888 c -9.08183,0.05357 -11.74,0.143964 -11.95802,0.406666 -0.15419,0.185785 -1.52164,3.726665 -3.03878,7.868624 -1.51715,4.141958 -2.8239,7.709426 -2.90391,7.927708 -0.08,0.218281 -0.15485,-5.159559 -0.16634,-11.950756 z"
         id="path855" />
    </g>
  </g>
</svg>';
$SVGimage = '<svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   sodipodi:docname="image.svg"
   inkscape:version="1.0 (4035a4fb49, 2020-05-01)"
   id="svg8"
   version="1.1"
   viewBox="0 0 1000 1000"
   height="1000mm"
   width="1000mm">
  <defs
     id="defs2">
    <inkscape:path-effect
       hide_knots="false"
       only_selected="false"
       apply_with_radius="true"
       apply_no_radius="true"
       use_knot_distance="true"
       flexible="false"
       chamfer_steps="1"
       radius="10"
       mode="F"
       method="auto"
       unit="pc"
       satellites_param="F,0,0,1,0,42.333333,0,1 @ F,0,0,1,0,42.333333,0,1 @ F,0,0,1,0,42.333333,0,1 @ F,0,0,1,0,42.333333,0,1"
       lpeversion="1"
       is_visible="true"
       id="path-effect835"
       effect="fillet_chamfer" />
  </defs>
  <sodipodi:namedview
     inkscape:window-maximized="1"
     inkscape:window-y="-8"
     inkscape:window-x="-8"
     inkscape:window-height="1017"
     inkscape:window-width="1920"
     showgrid="false"
     inkscape:document-rotation="0"
     inkscape:current-layer="layer1"
     inkscape:document-units="mm"
     inkscape:cy="3471.2494"
     inkscape:cx="-1594.5755"
     inkscape:zoom="0.08"
     inkscape:pageshadow="2"
     inkscape:pageopacity="0.0"
     borderopacity="1.0"
     bordercolor="#666666"
     pagecolor="#ffffff"
     id="base" />
  <metadata
     id="metadata5">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title></dc:title>
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <g
     id="layer1"
     inkscape:groupmode="layer"
     inkscape:label="Calque 1">
    <g
       transform="translate(1.1444092e-5)"
       id="g919">
      <circle
         style="fill:#ff8aff;fill-opacity:1;stroke:none;stroke-width:0;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
         id="path858"
         cx="807.17505"
         cy="325.15344"
         r="86.746277" />
      <path
         id="path841-2"
         style="fill:#ff8aff;fill-opacity:1;stroke:none;stroke-width:0;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
         inkscape:transform-center-x="3.8441693e-06"
         inkscape:transform-center-y="-58.611931"
         d="M 2608.9473,1676.8887 1706.25,2802.3262 v 286.8476 h 1896.957 v -172.6933 z"
         transform="scale(0.26458333)" />
      <path
         id="path841"
         style="fill:#ff8aff;fill-opacity:1;stroke:none;stroke-width:0;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
         inkscape:transform-center-x="3.1883257e-05"
         inkscape:transform-center-y="-73.42402"
         d="M 285.19225,350.95894 42.167967,612.24117 V 817.72785 H 589.76526 V 678.41388 Z" />
      <path
         d="M 88.984841,182.65604 H 911.01514 a 42.333333,42.333333 45 0 1 42.33333,42.33333 l 0,550.02126 a 42.333333,42.333333 135 0 1 -42.33333,42.33333 H 88.984841 A 42.333333,42.333333 45 0 1 46.651508,775.01063 V 224.98937 a 42.333333,42.333333 135 0 1 42.333333,-42.33333 z"
         style="fill:none;fill-opacity:1;stroke:#c46ac4;stroke-width:57.5375;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
         id="rect833"
         width="906.69696"
         height="634.68793"
         x="46.651508"
         y="182.65604"
         sodipodi:type="rect"
         inkscape:path-effect="#path-effect835" />
    </g>
  </g>
</svg>
';
$SVGupload = '<svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   sodipodi:docname="upload.svg"
   inkscape:version="1.0 (4035a4fb49, 2020-05-01)"
   id="svg8"
   version="1.1"
   viewBox="0 0 264.58333 264.58334"
   height="1000"
   width="1000">
  <defs
     id="defs2" />
  <sodipodi:namedview
     inkscape:window-maximized="1"
     inkscape:window-y="-8"
     inkscape:window-x="-8"
     inkscape:window-height="1017"
     inkscape:window-width="1920"
     units="px"
     showgrid="false"
     inkscape:document-rotation="0"
     inkscape:current-layer="layer1"
     inkscape:document-units="mm"
     inkscape:cy="787.51367"
     inkscape:cx="616.54174"
     inkscape:zoom="0.5"
     inkscape:pageshadow="2"
     inkscape:pageopacity="0.0"
     borderopacity="1.0"
     bordercolor="#666666"
     pagecolor="#ffffff"
     id="base" />
  <metadata
     id="metadata5">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title></dc:title>
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <g
     id="layer1"
     inkscape:groupmode="layer"
     inkscape:label="Calque 1">
    <g
       transform="matrix(1.0851319,0,0,1.0851319,-11.262246,-17.695597)"
       style="fill:#000000"
       id="g919">
      <rect
         style="fill:#000000;stroke:#c46ac4;stroke-width:0"
         id="rect900"
         width="50.985088"
         height="74.426498"
         x="106.79913"
         y="124.31367" />
      <path
         sodipodi:type="star"
         style="fill:#000000;stroke:#c46ac4;stroke-width:0"
         id="path902"
         sodipodi:sides="3"
         sodipodi:cx="132.29167"
         sodipodi:cy="96.399963"
         sodipodi:r1="56.999512"
         sodipodi:r2="28.499758"
         sodipodi:arg1="-1.5707963"
         sodipodi:arg2="-0.52359878"
         inkscape:flatsided="true"
         inkscape:rounded="0"
         inkscape:randomized="0"
         inkscape:transform-center-y="-14.249885"
         inkscape:transform-center-x="2.075927e-06"
         d="m 132.29167,39.400452 49.36303,85.499268 -98.726054,0 z" />
    </g>
    <g
       style="fill:#000000"
       transform="matrix(1.0851319,0,0,1.0851319,-10.950463,-17.695597)"
       id="g915">
      <rect
         style="fill:#000000;stroke:#c46ac4;stroke-width:0"
         id="rect883"
         width="26.579247"
         height="89.077408"
         x="210.91148"
         y="147.96275" />
      <rect
         y="147.96275"
         x="26.517967"
         height="89.077408"
         width="26.579247"
         id="rect883-6"
         style="fill:#000000;stroke:#c46ac4;stroke-width:0" />
      <rect
         style="fill:#000000;stroke:#c46ac4;stroke-width:0"
         id="rect908"
         width="210.97275"
         height="26.579247"
         x="26.517967"
         y="210.46091" />
    </g>
  </g>
</svg>';
$SVGdownload = '<svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   sodipodi:docname="download.svg"
   inkscape:version="1.0 (4035a4fb49, 2020-05-01)"
   id="svg8"
   version="1.1"
   viewBox="0 0 264.58333 264.58334"
   height="1000"
   width="1000">
  <defs
     id="defs2" />
  <sodipodi:namedview
     inkscape:window-maximized="1"
     inkscape:window-y="-8"
     inkscape:window-x="-8"
     inkscape:window-height="1017"
     inkscape:window-width="1920"
     units="px"
     showgrid="false"
     inkscape:document-rotation="0"
     inkscape:current-layer="layer1"
     inkscape:document-units="mm"
     inkscape:cy="899.14988"
     inkscape:cx="741.03021"
     inkscape:zoom="0.35355339"
     inkscape:pageshadow="2"
     inkscape:pageopacity="0.0"
     borderopacity="1.0"
     bordercolor="#666666"
     pagecolor="#ffffff"
     id="base" />
  <metadata
     id="metadata5">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title></dc:title>
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <g
     id="layer1"
     inkscape:groupmode="layer"
     inkscape:label="Calque 1">
    <g
       transform="matrix(1.0851319,0,0,-1.0851319,-11.262246,240.71838)"
       style="fill:#000000"
       id="g919">
      <rect
         style="fill:#000000;stroke:#c46ac4;stroke-width:0"
         id="rect900"
         width="50.985088"
         height="74.426498"
         x="106.79913"
         y="124.31367" />
      <path
         sodipodi:type="star"
         style="fill:#000000;stroke:#c46ac4;stroke-width:0"
         id="path902"
         sodipodi:sides="3"
         sodipodi:cx="132.29167"
         sodipodi:cy="96.399963"
         sodipodi:r1="56.999512"
         sodipodi:r2="28.499758"
         sodipodi:arg1="-1.5707963"
         sodipodi:arg2="-0.52359878"
         inkscape:flatsided="true"
         inkscape:rounded="0"
         inkscape:randomized="0"
         inkscape:transform-center-y="-14.249885"
         inkscape:transform-center-x="2.075927e-06"
         d="m 132.29167,39.400452 49.36303,85.499268 -98.726054,0 z" />
    </g>
    <g
       style="fill:#000000"
       transform="matrix(1.0851319,0,0,1.0851319,-10.950463,-17.695597)"
       id="g915">
      <rect
         style="fill:#000000;stroke:#c46ac4;stroke-width:0"
         id="rect883"
         width="26.579247"
         height="89.077408"
         x="210.91148"
         y="147.96275" />
      <rect
         y="147.96275"
         x="26.517967"
         height="89.077408"
         width="26.579247"
         id="rect883-6"
         style="fill:#000000;stroke:#c46ac4;stroke-width:0" />
      <rect
         style="fill:#000000;stroke:#c46ac4;stroke-width:0"
         id="rect908"
         width="210.97275"
         height="26.579247"
         x="26.517967"
         y="210.46091" />
    </g>
  </g>
</svg>';

  session_start();
  //session_destroy();
  ob_start();


  $logged = "MmmhNoNoNo";

  if (!empty($_POST['username']) && !empty($_POST['password'])) {
    if ($_POST['username'] == $user && $_POST['password'] == $pass) {
      $_SESSION['GHBLKJIMPQRTS'] = "YouAreLogged";
      print('<script> window.location.href = window.location.href </script>');
    }
  }

  if (!empty($_SESSION['GHBLKJIMPQRTS'])) {
    $logged = $_SESSION['GHBLKJIMPQRTS'];
  }

  $notFound = false;
  $xhrReq = false;
  $reqType = "none";
  if (!empty($_POST['xhrReq'])) {
      $xhrReq = true;
      $reqType = $_POST['xhrReq'];
  }

  //$root = getcwd();
  $explore = "/";
  //print($root);
  if (!empty($_GET['dir'])) {
    $explore = $_GET['dir']."/";
    $explore = str_replace("../",'/',$explore);
  }
  //print($explore);

  $currentDir = $root.$explore;

  if (is_dir($currentDir)) {
    $allDir = scandir($currentDir);
  }
  else {
    $allDir = $root;
    $notFound = true;
  }

//TRI ENTRE DOSSIER ET FICHIERS
$notSorted = true;
  while ($notSorted) {
    $notSorted = false;

    for ($i=0; $i < count($allDir) - 1; $i++) {
      if (!is_dir($currentDir.$allDir[$i]) && is_dir($currentDir.$allDir[$i+1])) {
        $temp = $allDir[$i];
        $allDir[$i] = $allDir[$i+1];
        $allDir[$i+1] = $temp;

        $notSorted = true;
      }
    }
  }
//FIN DU TRI

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SaeFTP</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  </head>
  <style media="screen">
  body {
    margin: 0px;
    text-align: center;
    font-family: 'Roboto', sans-serif;
    color:black;
    /*filter: hue-rotate(280deg);*/
  }
  * {
    outline: none;
  }
  .currentPath{
    display: inline-flex;
    justify-content: flex-start;
    align-items: center;
    padding: 20px;
    box-sizing: border-box;
    height:90px;
    width:calc(100% - 40px);
    box-sizing: border-box;
    overflow: hidden;
    background-color: white;
    margin: 20px;
    margin-bottom: 0px;
    border-radius: 20px;
    overflow: auto;
    overflow-y: hidden;
  }

  .pathLi {
    color:black;
    text-decoration: none;
    background-color: #efefef;
    height: 50%;
    width: auto;
    padding: 20px;
    box-sizing: border-box;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    border-radius: 20px;
    margin: 5px;
  }

  .pathLi p {

  }

  .currentRepo {
    height:calc(100% - 150px);
    width: calc(100% - 310px);
    margin: 20px;
    background-color: #fff;
    display: inline-block;
    border-radius: 20px;
    vertical-align: top;
    overflow: hidden;
    overflow: auto;
    overflow-x: hidden;
    transition: .3s;
  }

  .addToCurrent {
    width:100%;
    min-height: 40px;
    height: calc(100vh - 330px);
    display: inline-block;
    background-color: white;
    border-radius: 20px;
    vertical-align: top;
    margin-top: 20px;
    overflow: hidden;
  }

  .createDir {
  width:100%;
  height: 160px;
  display: inline-flex;
  background-color: white;
  border-radius: 20px;
  vertical-align: top;
  margin-top: 20px;
  overflow: hidden;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  }

  .createDir input {
    width:80%;
    border: 3px solid #dedede;
    height : 40px;
    border-radius: 20px;
    padding-left: 20px;
    box-sizing: border-box;
    margin-bottom: 20px;
    margin-top: 20px;
    font-size: 100%;
    font-family: 'Roboto', sans-serif;
  }

  .createDir button {
    width:80%;
    height:40px;
    border:0px solid white;
    border-radius: 20px;
    background-color: #c46ac4;
    margin-bottom: 20px;
    color:white;
    font-size: 100%;
    font-family: 'Roboto', sans-serif;
    transition: .3s;
  }

  .createDir button:hover {
    background-color: #804580;
  }

  .AddThings {
    width:250px;
    height:100%;
    display: inline-block;
    margin-right: 20px;
  }

  .addToCurrent .fileInput {
    display: none;
  }

  .fileInput + .fileButton {
    background-color: #ddffdd;
  }

  .addToCurrent .fileButton{
    width:100%;
    height:100%;
    background-color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: .3s;
    box-sizing: border-box;
  }

  .addToCurrent .fileButton:hover{
    background-color: #efefef77;
  }

  .main {
    height:100vh;
    max-height: 100vh;
    width: 100%;
    overflow: hidden;
    background: rgb(255,186,255);
    background: linear-gradient(135deg, rgba(255,186,255,1) 0%, rgba(138,200,255,1) 100%);
  }

/*DIR*/
.dir{
  width: 100%;
  box-sizing: border-box;
  border : 0px solid white;
  border-bottom: 2px solid #dedede;
  height:70px;
  overflow: hidden;
  background-color: white;
  display: flex;
  padding: 0px;
  align-items: center;
  transition: .3s;
}

.dir button {
  box-sizing: border-box;
  font-family: 'Roboto', sans-serif;
  color:#c46ac4;
  text-decoration: underline;
  font-size: 100%;
  display: inline-block;
  border: 0px;
  background-color: #fff0;
  border-radius: 20px;
  margin: 20px;
  box-sizing: border-box;
  transition: .3s;
}
.dir button:hover {
  color: #804580;
  cursor: pointer;
}

.inDir {
  width:100%;
  height: 100%;
  overflow: hidden;
  box-sizing: border-box;
  text-align: left;
  display: inline-flex;
  align-items: center;
  text-decoration: none;
  color:black;
}

.dir:hover {
  background-color: #efefef77;
}
/*DIR*/



/*FILE*/
  .file{
    width: 100%;
    box-sizing: border-box;
    border : 0px solid white;
    border-bottom: 2px solid #dedede;
    height:70px;
    overflow: hidden;
    background-color: white;
    display: flex;
    padding: 0px;
    align-items: center;
    transition: .3s;
  }

  .file button {
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
    color:#c46ac4;
    text-decoration: underline;
    font-size: 100%;
    display: inline-block;
    border: 0px;
    background-color: #fff0;
    border-radius: 20px;
    margin: 20px;
    box-sizing: border-box;
    transition: .3s;
  }
  .file button:hover {
    color: #804580;
    cursor: pointer;
  }

  .inFile {
    width:100%;
    height: 100%;
    overflow: hidden;
    box-sizing: border-box;
    text-align: left;
    display: inline-flex;
    align-items: center;
    text-decoration: none;
    color:black;
  }

  .file:hover {
    background-color: #efefef77;
  }
/*FILE*/



  .zoneHighlight > * {
    background-color: #ffdbff !important;
  }

  .zoneHighlight {
    background-color: #ffdbff !important;
  }

  #alert {
    display: block;
    height: 0px;
    overflow: visible;
    transform: translateY(-20px);
    color:red;
  }

  .ftpIcon {
    overflow: hidden;
    box-sizing: border-box;
  }

  .ftpIcon svg{
    height: 35px;
    width: 35px;
  }

  .uploadIcon svg {
    height: 20px;
    width:20px;
  }

  @media only screen and (max-width: 600px) {
    .AddThings {
      width: 100%;
      display: flex;
      height:150px;
      margin: 20px;
      margin-top: 0px;
    }

    .addToCurrent {
      height: calc(100% - 40px);
      width: calc(50% - 30px);
      margin-top: 0px;
      margin-right: 20px;
    }
    .currentRepo {
      margin-top: 20px;
      width: calc(100% - 40px);
      height:calc(100vh - 280px);
    }
    .createDir {
      width : calc(50% - 30px);
      height: calc(100% - 40px);
      margin-right: 20px;
      margin-top: 0px;
      box-sizing: border-box;
    }

    .createDir button {
      height:25px;
    }

    .createDir input {
      height:25px;
    }
  }


  </style>
  <body>
    <div class="main">
      <div class="currentPath">
        <a href="?dir=" class="pathLi"><p>root</p></a>
        <?php
        $explodedExplore = explode('/',$explore);
        $tampDir = "?dir=";
        for ($r=0; $r < count($explodedExplore) - 1; $r++) {
          if ($explodedExplore[$r] != "") {
            $tampDir .="/".$explodedExplore[$r];
            print('/<a href="'.$tampDir.'" class="pathLi"><p>'.$explodedExplore[$r].'</p></a>');
          }
        }
        //print('test')
         ?>
      </div>
      <br>
      <div class="currentRepo" method="post">
        <!--<button class="dir" name="1">
          <div class="inDir">
            <img src="../data/images/dossier.svg" alt="" height="50%" style="margin-top:2px;margin-left:20px;margin-right:15px;">
            <p>test</p>
          </div>
        </button>-->

        <?php
        $i = 2;
        while ($i < count($allDir)) {
          $tf = $allDir[$i];

          if (is_dir($currentDir.$tf)) {
            print('<div class="dir">
              <a class="inDir" href="?dir='.$explore.$tf.'">
                <div class="ftpIcon" style="margin-top:2px;margin-left:20px;margin-right:15px;">'.$SVGdossier.'</div>
                <p>'.$tf.'</p>
              </a>
              <button type="button" onclick="del(\''.str_replace('/','//',$tf).'\')">Delete</button>
            </div>');
          }
          else {

            $splitedFileName = explode(".",$tf);
            $fileExt = $splitedFileName[count($splitedFileName) - 1];

            if ($fileExt == "jpg" || $fileExt == "jpeg" || $fileExt == "png" || $fileExt == "svg" || $fileExt == "gif") {
              $type = $SVGimage;
            }
            else {
              $type = $SVGfichier;
            }

            if (!($tf == "ftp.php" && str_replace('/','',str_replace('.','',$explore)) == "")) {
              print('<div class="file">
                <a class="inFile" href="'.$linkRoot.$explore.$tf.'">
                  <div class="ftpIcon" style="margin-top:2px;margin-left:20px;margin-right:15px;">'.$type.'</div>
                  <p>'.$tf.'</p>
                </a>
                <button type="button" onclick="del(\''.str_replace('/','//',$tf).'\')">Delete</button>
              </div>');
            }

          }



          $i+=1;
        }

         ?>
      </div><div class="AddThings">
        <div class="addToCurrent">
          <input id="addToCurrentFileInput" class="fileInput" type="file" multiple name="" value="" onchange="processAddingFiles(this.files)">
          <label for="addToCurrentFileInput" class="fileButton"><div class="uploadIcon"><?php print($SVGupload) ?></div>&nbsp;&nbsp;Select or Drag files</label>
        </div>
        <div class="createDir">
          <div class="">
            <input id="dirName" type="text" name="dirName" value="" placeholder="Directory name">
            <small id="alert" class="createDirAlert"><!--Directory name is necessary--></small>
            <button type="button" name="button" onclick="createDir()">Create directory</button>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">

    document.addEventListener('dragenter', dontCare, false)
    document.addEventListener('dragleave', dontCare, false)
    document.addEventListener('dragover', dontCare, false)
    document.addEventListener('drop', dontCare, false)

    let dropzone = document.querySelector('.addToCurrent')

    dropzone.addEventListener('dragenter', zoneEnter, false)
    dropzone.addEventListener('dragleave', zoneLeave, false)
    dropzone.addEventListener('dragover', zoneEnter, false)
    dropzone.addEventListener('drop', dropOnZone, false)

    let curRep = document.querySelector('.currentRepo')

    curRep.addEventListener('dragenter', zone2Enter, false)
    curRep.addEventListener('dragleave', zone2Leave, false)
    curRep.addEventListener('dragover', zone2Enter, false)
    curRep.addEventListener('drop', dropOnZone2, false)


    function dontCare(e){
      e.preventDefault();
      e.stopPropagation();
    }

    function zoneEnter(e){
      e.preventDefault();
      e.stopPropagation();
      dropzone.classList.add("zoneHighlight");
    }

    function zoneLeave(e){
      e.preventDefault();
      e.stopPropagation();
      dropzone.classList.remove("zoneHighlight");
    }

    function dropOnZone(e){
      zoneLeave(e);
      e.preventDefault();
      e.stopPropagation();

      let data = e.dataTransfer;
      let files = data.files;

      //console.log(files);

      processAddingFiles(files);
    }

    //drop 2

    function zone2Enter(e){
      e.preventDefault();
      e.stopPropagation();
      curRep.classList.add("zoneHighlight");
    }

    function zone2Leave(e){
      e.preventDefault();
      e.stopPropagation();
      curRep.classList.remove("zoneHighlight");
    }

    function dropOnZone2(e){
      zoneLeave(e);
      e.preventDefault();
      e.stopPropagation();

      let data = e.dataTransfer;
      let files = data.files;

      //console.log(files);

      processAddingFiles(files);
    }

    //drop2

    var wait
    function processAddingFiles(files){
      wait = 0
      var  nb = files.length;
      for (var i = 0; i < files.length; i++) {
        //console.log(files[i])
        uploadFile(files[i],nb);
      }
      //document.location.reload(true)
    }

    function uploadFile(file,nb) {
      //console.log(file)
      var url = window.location
      var xhr = new XMLHttpRequest()
      var formData = new FormData()
      var xhr = new XMLHttpRequest();
      xhr.open("POST", url, true);

      //Envoie les informations du header adaptées avec la requête
      //xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

      xhr.onreadystatechange = function() { //Appelle une fonction au changement d'état.
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
          console.log(this.responseText)
          wait += 1;
          if (wait == nb) {


            window.location.href = window.location.href
          }
          //document.location.reload(true)
        }
      }
      formData.append('file',file)
      formData.append('xhrReq',"addFile")
      xhr.send(formData);
    }




    function createDir(){
      var name = document.querySelector('#dirName').value;
      console.log(name);

      var url = window.location
      var xhr = new XMLHttpRequest()
      var formData = new FormData()

      xhr.open("POST", url, true);

      //Envoie les informations du header adaptées avec la requête
      //xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

      xhr.onreadystatechange = function() { //Appelle une fonction au changement d'état.
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
          if (this.responseText == "1") {
            window.location.href = window.location.href
          }
          else{
            document.querySelector('.createDirAlert').innerHTML = this.responseText;
          }
        }
      }

      formData.append('dirName',name)
      formData.append('xhrReq',"addDir")

      xhr.send(formData);
    }



    function del(path){

      var url = window.location
      var xhr = new XMLHttpRequest()
      var formData = new FormData()

      xhr.open("POST", url, true);

      //Envoie les informations du header adaptées avec la requête
      //xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

      xhr.onreadystatechange = function() { //Appelle une fonction au changement d'état.
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
          if (this.responseText == "1") {
            window.location.href = window.location.href
          }
          else{
            console.log(this.responseText)
          }
        }
      }

      formData.append('delName',path)
      formData.append('xhrReq',"delete")

      xhr.send(formData);


    }




    </script>

  </body>
</html>


<?php if ($notFound) {
  ob_end_clean();
  print('"'.$currentDir.'" does not exist as a directory');
} ?>





<?php
if ($logged != "YouAreLogged") {
  ob_end_clean();
  print('<html style="padding:0;margin:0;border:0;">
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="UTF-8">
      <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
      <title>
        Formulaire
      </title>
    </head>
    <body>

      <style>

        body {
          text-align:center;
          padding:0;
          margin:0;
          border:0;
        }

        .container{
          width: 100%;
          height:100%;
          background: rgb(255,186,255);
          background: linear-gradient(135deg, rgba(255,186,255,1) 0%, rgba(138,200,255,1) 100%);
          display: flex;
          align-items: center;
          justify-content: center;
        }

        .form {
          padding-top: 60px;
          display:inline-flex;
          align-items: center;
          justify-content: center;
          flex-wrap: wrap;
          max-width: 580px;
          width:95%;
          background-color: #fdfdfd;
          border: solid 0px #dedede;
          font-family: "Roboto", sans-serif;
          border-radius: 20px;
      }

    .form .button {
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0px 40px 20px 40px;
      font-size:100%;
      color:white;
      width: 100px;
      height: 45px;
      background-color:#8bc8ff;
      border:none;
      border-radius: 50px;
      cursor: pointer;
      transition: .3s;
      filter:hue-rotate(0deg);
    }

    .form .button:hover {
      background-color: #febaff;
    }

    .form input {
      display: block;
      width: 100%;
      margin: 0px 40px 20px 40px;
      height: 40px;
      border-radius:50px;
      background-color:#eee;
      border:0px solid #0000;
      box-sizing: border-box;
      padding-left: 20px;
      padding-right: 20px;
    }

    .form p {
      min-width: 90%;
      margin: auto 0px 10px 15px;
      box-sizing: border-box;
      padding-left: 10px;
      text-align: left;
    }

    @media screen and (max-width: 610px) {

      .form {
        width: 95%;
        min-width: 0px;
      }

    }

      </style>
      <div class="container">
          <form class="form" method="post">
            <p>Username&nbsp;&nbsp;</p>
              <input type="text" placeholder="User name" name="username" value="" required></input>
            <p>Password&nbsp:&nbsp</p>
              <input type="password" placeholder="Password" name="password" value=""></input>
              <button type="submit" class="button" name="button">Login</button>
          </form>
      </div>

    </body>
  </html>');
}
 ?>





<?php

 if ($xhrReq == true && $logged == "YouAreLogged") {
  ob_end_clean();
  //print_r($_POST);
  //print_r($_FILES);

  //ADD FILE
if ($reqType == "addFile") {
  $file = $_FILES['file']['tmp_name'];
  $filename = $_FILES['file']['name'];

  //print_r($file."\n");
  //print_r($filename."\n");

  if (!file_exists($currentDir.$filename)) {
    move_uploaded_file($file,$currentDir.$filename);
  }
  else {
    print("file ".$filename." already exists");
  }
}


//ADD DIR
if ($reqType == "addDir") {

  $dirName = $_POST['dirName'];

  $forbidden = array("/", "/", "<", ">", "?", "*", ":", "|", '"', " ", ".","$");

  if (str_replace($forbidden,"",$dirName) == "" || str_replace($forbidden,"",$dirName) != $dirName) {
    print("Invalid directory name");
  }
  else if (is_dir($currentDir.'/'.$dirName)) {
    print("This directory already exists");
    //print($currentDir.$dirName);
  }
  else {
    mkdir($currentDir.'/'.$dirName);
    print("1");
  }
}


//DELETE

  if ($reqType == "delete") {

    function deleteDirectory($direct) {
      if (!file_exists($direct)) {
        return true;
        }

        if (!is_dir($direct)) {
          return unlink($direct);
        }

        foreach (scandir($direct) as $item) {
          if ($item == '.' || $item == '..') {
              continue;
            }

            if (!deleteDirectory($direct . DIRECTORY_SEPARATOR . $item)) {
              return false;
            }
          }

      return rmdir($direct);
    }

    $delName = $_POST['delName'];
    $delPath = $root.$explore.$delName;

    if ($delPath != $root."/ftp.php") {
      if (file_exists($delPath)){

        if (!is_dir($delPath)) {
          unlink($delPath);
        }
        else {
          deleteDirectory($delPath);
        }

        print("1");
      }
      else{
        print("File does not exists");
      }
    }
    else {
      print("You don't have the permmission to delete that file");
    }


  }

}
else if ($logged == "MmmhNoNoNo" && $xhrReq == true) {
  ob_end_clean();
  print("You don't have the permission to do this.");
}
?>
