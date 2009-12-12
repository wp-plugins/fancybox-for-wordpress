��    e      D  �   l      �  �   �  �   	  �   �	  �   r
  �   +    �  y   �  �   t  �     '  �  �   �     �     �  ;   �  <     �   Y       <        \     i  (   p  '   �  (   �  	   �     �  @     �   F     ;  6   H  C        �     �     �          "  �   5     �  :   �  N   �  ;   I     �  	   �  +   �  :   �  
   �  :   
     E  +   R  ,   ~  ,   �  G   �  �        �  �  �  p  �  7   �     -  K   <  "   �     �  �  �     9  L   S  3   �  �   �  @   Y   8   �      �      �   $   �   Y   !     j!     z!     �!  -   �!  a   �!     '"  [   0"     �"     �"  
   �"  "   �"  N   �"  Z   D#  ?   �#  @   �#  6    $  T   W$  1   �$  �   �$  i   n%  �   �%     f&     t&  	   �&  )   �&  (   �&  F   �&     1'     >'  �  W'  �   �(  �   �)     �*  �   +  �   �+  �   �,  w   �-  �   8.  �   �.  +  w/  �   �0  7   �1  '   �1  A   �1  A   .2  �   p2     (3  D   83     }3     �3  :   �3  ;   �3  9   
4     D4     R4  A   j4    �4     �5  F   �5  S   6     i6     �6     �6  -   �6     �6  �   �6     �7  B   �7  L   �7  B   I8     �8  	   �8  0   �8  F   �8     9  >   ,9     k9  +   |9  -   �9  ,   �9  R   :  �   V:  ,  	;  �  6<  �  �=  B   ?     �?  b   �?  A   4@  	   v@  �  �@  '   B  `   ;B  V   �B  �   �B  F   �C  8   �C     D     ,D  0   3D  p   dD     �D     �D     �D  T   E     bE     �E  X   �E  (   DF  3   mF     �F  7   �F  {   �F  l   eG  B   �G  C   H  L   YH  T   �H  4   �H  �   0I  l   �I  �   KJ     �J     �J     	K  1   K  <   GK  S   �K     �K     �K             8   S   J   O   7                 9   \   ]      $             2   '   d   Y              <   a                   *   F              3       [          	             ?            &       G       0              V   Q   ^   `   N          T      b       !          :   "            
         #   4       W           )              A          U   e   _   K   R   =   >      C   +   P   /   1   ;   Z   5   M   .                   L   @   6   B   %   X   ,         E   c       D           (   H       I      -    &middot; If you want to do it manually you can use something like <code>jQuery("a:has(img)[href$='.jpg']")</code> or whatever works for you. &middot; The custom expression has to apply <code>class="fancybox"</code> to the links where you want to use FancyBox. Do not call the <code>fancybox()</code> function here, the plugin does this for you. &middot; The jQuery <code>addClass()</code> function is a good way to add the class to the desired links conserving any existing class. &middot; You can use <code>getTitle()</code> in your expression to copy the title attribute from the <code>IMG</code> tag to the <code>A</code> tag, so that FancyBox can show captions. &middot; You can use <code>jQuery(thumbnails)</code> like in the example expression to apply FancyBox to thumbnails that link to these extensions: BMP, GIF, JPG, JPEG, PNG (both lowercase and uppercase). (There are 30 different easing methods, the first ones are the most boring. You can test them <a href="http://commadot.com/jquery/easing.php" target="_blank">here</a> or <a href="http://hosted.zeh.com.br/mctween/animationtypes.html" target="_blank">here</a>) (This should be left on #FFFFFF (white) if you want to display anything other than images, like inline or framed content) (Turning this off may cause problems if there are plugins activated that use other js framework like mootools, prototype, scriptaculous, etc.) (You may want to leave this off if you display iframed or inline content that containts clickable elements - for example: play buttons for movies, links to other pages) <a href="http://fancy.klade.lv/home">FancyBox</a> developed by <a href="http://kac.klade.lv/">Janis Skarnelis</a>, ported to WordPress by <a href="http://moskis.net/">Jos&eacute; Pardilla</a>. Licensed under the <a target="_blank" href="http://en.wikipedia.org/wiki/MIT_License">MIT License</a>. <strong>Note:</strong> Having a cache plugin may prevent changes from taking effect immidiately, if this happens clear cache after saving changes here or deactivate cache until you finish editing these options. Activate easing (default: off) Add overlay (default: on) Animation Settings <span style="color:green">(basic)</span> Appearance Settings <span style="color:green">(basic)</span> As you can see, this plugin has many options you can edit, but have no fear, you can leave everything as it is if you want, since the default options should be a good start... :) Auto Resize to Fit Behavior Settings <span style="color:orange">(medium)</span> Border Color Bottom Callback on Close event (default: empty) Callback on Show event (default: empty) Callback on Start event (default: empty) Callbacks Center on Scroll Change content transparency during zoom animations (default: on) Change them one at a time and test to see if they help. Remember that having a cache plugin may prevent changes from taking effect immidiately, so clear cache after saving changes here or deactivate cache until you finish editing these options. Close Button Close FancyBox by clicking on the image (default: off) Close FancyBox when &quot;Escape&quot; key is pressed (default: on) Close button position: Close on Click Close with &quot;Esc&quot; Custom expression guidelines: Do not call jQuery Do not group images in gallery automatically (use this if you want to make galleries manually with the <code>REL</code> attribute) Easing Easing method when closing FancyBox. (default: easeInBack) Easing method when navigating through gallery items. (default: easeInOutQuart) Easing method when opening FancyBox. (default: easeOutBack) Example: Examples: Fancybox for WordPress Options (version %s) Follow me on Twitter for more WordPress Plugins and Themes Frame Size Gallery Settings <span style="color:red">(advanced)</span> Gallery Type HTML color of the border (default: #BBBBBB) HTML color of the overlay (default: #666666) HTML color of the padding (default: #FFFFFF) Height in pixels of FancyBox when showing iframe content (default: 340) Here you can choose if you want the plugin to group all images into a gallery, or make a gallery for each post. You can also define you own jQuery expression if you like. If the plugin doesn't seem to work, first you should check for other plugins that may be conflicting with this one, especially other Lightbox, Slimbox, etc. Make sure all your plugins and WordPress itself are up to date (this plugin has only been tested in WordPress 2.7 and above). If you are having trouble with this plugin try to localize the problem (switch your theme and/or deactivate plugins until you find the source of the problem). You can also try the Troubleshooting settings at the bottom of this page if necesary. If you still can not get the plugin to work, <a href="http://blog.moskis.net/downloads/plugins/fancybox-for-wordpress/">leave a comment here</a> explaining the problem. If you have problems or questions about FancyBox, please start with these links: <a href="http://fancy.klade.lv/howto">How-To</a> & <a href="http://fancy.klade.lv/faq">FAQ</a>.<br />If that does not help, go to <a href="http://groups.google.com/group/fancybox">the FancyBox Google Group</a>, use the <strong>Search</strong> option, and if necesary, post your question. If you use FancyBox and like it, buy the author a beer! Info & Support Keep image in the center of the browser window when scrolling (default: on) Leave the fields empty to disable. Left Like many other plugins, FancyBox for WordPress stores its settings on your WordPress' options database table. Actually, these settings are not using more than a couple of kilobytes of space, but if you want to completely uninstall this plugin, check the option below, then save changes, and <strong>when you deactivate the plugin</strong>, all its settings will be removed from the database. Load JavaScript in Footer Loads JavaScript at the end of the blog's HTML (experimental) (default: off) Make a gallery for all images on the page (default) Make a gallery for each post (will only work if your theme uses <code>class="post"</code> on each post, which is common in WordPress Opacity of overlay. 0 is transparent, 1 is opaque (default: 0.3) Other Settings <span style="color:red">(advanced)</span> Overlay Options Padding Padding size in pixels (default: 10) Remove Settings when plugin is deactivated from the "Manage Plugins" page. (default: off) Remove settings Right (default) Save Changes Scale images to fit in viewport (default: on) See the <a href="http://docs.jquery.com/" target="_blank">jQuery Documentation</a> for more help. Settings Settings in this section should only be changed if you are having problems with the plugin! Show Border (default: off) Show Close button (default: on) Show Title Show the image title (default: on) Skip jQuery call. Use this only if jQuery is being loaded twice (default: off) Speed in miliseconds of the animation when navigating thorugh gallery items (default: 300) Speed in miliseconds of the zooming-in animation (default: 500) Speed in miliseconds of the zooming-out animation (default: 500) The author of this WordPress Plugin also likes beer :P The following settings should be left on default unless you know what you are doing. These are additional settings for advanced users. These setting control how Fancybox looks, they let you tweak color, borders and position of elements, like the image title and closing buttons. These settings control the animations when opening and closing Fancybox, and the optional easing effects. This option won't be recognized if you use <strong>Parallel Load</strong> plugin. In that case, you can do this from Parallel Load's options. Top (default) Troubleshooting Settings Uninstall Use a custom expression to apply FancyBox Use jQuery noConflict mode (default: on) Width in pixels of FancyBox when showing iframe content (default: 560) Zoom Options jQuery "noConflict" Mode Project-Id-Version: FancyBox for WordPress Español
Report-Msgid-Bugs-To: http://wordpress.org/tag/fancybox-for-wordpress
POT-Creation-Date: 2009-12-12 21:30+0000
PO-Revision-Date: 
Last-Translator: Jose Pardilla <jose@moskis.net>
Language-Team: Moskis <jose@moskis.net>
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
X-Poedit-Language: Spanish
X-Poedit-Country: SPAIN
 &middot; Si prefieres hacerlo manualmente puedes usar algo como <code>jQuery("a:has(img)[href$='.jpg']")</code> o lo que m&aacute;s se ajuste a tu blog. &middot; La expresión personalizada tiene que aplicar el atributo <code>class="fancybox"</code> a los enlaces en los que quieras usar FancyBox. No llames a la funci&oacute;n <code>fancybox()</code> aqu&iacute;, de eso ya se encarga el plugin. &middot; La funci&oacute;n <code>addClass()</code> de jQuery es una buena forma de a&ntilde;adir el class a los links deseados. &middot; Puedes usar <code>getTitle()</code> en tu expresi&oacute;n para copiar el atributo title desde el tag <code>IMG</code> al tag <code>A</code>, para que FancyBox pueda mostrar el t&iacute;tulo de la imagen. &middot; Puedes usar <code>jQuery(thumbnails)</code> como en el ejemplo para aplicar FancyBox a las miniaturas de im%aacute;genes que enlazen a estas extensiones: BMP, GIF, JPG, JPEG, PNG tanto en min&uacute;scula como en may&uacute;scula). (Hay 30 efectos diferentes, los primeros son los más aburridos. Puedes probarlos <a href="http://commadot.com/jquery/easing.php" target="_blank">aquí</a> o <a href="http://hosted.zeh.com.br/mctween/animationtypes.html" target="_blank">aquí</a>) (Esta opción debería dejarse en #FFFFFF (blanco) si vas a mostrar algo que no sean imágenes, como contenido anidado) (Desactivar esta opción puede causar problemas si hay plugins activadoes que usen otros frameworks javascript como Mootols, Prototype, Scriptaculous, etc.) (Puedes que quieras dejar esta opción desactivada si vas a usar contendido anidado que incluya enlaces - for ejemplo: botones de play, enlaces a otras páginas) <a href="http://fancy.klade.lv/home">FancyBox</a> desarrollado por <a href="http://kac.klade.lv/">Janis Skarnelis</a>, adaptado a WordPress por <a href="http://moskis.net/">Jos&eacute; Pardilla</a>. Licenciado bajo <a target="_blank" href="http://en.wikipedia.org/wiki/MIT_License">Licencia MIT</a>. <strong>Nota:</strong> Usar un plugin de caché puede hacer que los cambios no surjan efecto inmediatamente, si esto ocurre vacía el cache después de guardar los cambios o desactívalo hasta que termines de ajustar estas opciones. Activar efecto de animación (por defecto: desactivado) Añadir overlay (por defecto: activado) Opciones de Animación <span style="color:green">(básico)</span> Opciones de Apariencia <span style="color:green">(básico)</span> Como puedes ver, este plugin te permite editar muchas opciones, pero no te preocupes, puedes dejarlo todo como está, ya que las opciones predefinidas no están mal para empezar... :) Ajustar Tamaño Opciones de Comportamiento <span style="color:orange">(medio)</span> Color del Borde Abajo Retrollamada en el evento de Cerrado (por defecto: vacío) Retrollamada en el evento de Mostrado (por defecto: vacío) Retrollamada en el evento de Inicio (por defecto: vacío) Retrollamadas Centrar al hacer Scroll Animar opacidad durante el efecto de zoom (por defecto: activado) Cámbialas de una en una y comprueba si solucionan tu problema. Recuqerda que usar un plugin de caché puede hacer que los cambios no surjan efecto inmediatamente, vacía el cache después de guardar los cambios or desactivalo hasta que termines de ajustar estas opciones. Botón de Cerrar Cerrar FancyBox al hacer click en la imagen (por defecto: desactivado) Cerrar Fancybox cuando se pulse la tecla &quot;Escape&quot; (por defecto: activado) Posición del Botón de Cerrar: Cerrar al hacer click Cerrar con &quot;Esc&quot; Indicaciones para expresiones personalizadas: No cargar jQuery No agrupar im&aacute;genes en galer&iacute;as autom&aacute;ticamente (usa esta opci&oacute;n si quieres agrupar las imagenes manualmente con el atributo <code>REL</code>) Efecto de Animación Efecto de animación al cerrar FancyBox. (por defecto: easeInBack) Efecto de animación al navegar por galerías. (por defecto: easoInOutQuart) Efecto de animación al abrir FancyBox. (por defecto: easeOutBack) Ejemplo: Ejemplos: Opciones de Fancybox for WordPress (versión %s) S&iacute;gueme en Twitter para m&aacute;s Plugins y Temas de WordPress Tamaño del recuadro Opciones de Galería <span style="color:red">(avanzado)</span> Tipo de Galería Color HTML del borde (por defecto: #BBBBBB) Color HTML del overlay (por defecto: #666666) Color HTML del margen (por defecto: #FFFFFF) Alto en píxeles de FancyBox cuado se muestre contenido anidado (por defecto: 340) Aquí puedes elegir si quieres que el plugin agrupe las imágenes en una galería, o hacer una galería para cada entrada. También puedes definir tu propia expresión en jQuery. Si el plugin no funciona, lo primero que deberías hacer es comprobar que no haya un conflicto con otros plugins, especialmente otro tipo de Lightbox, Slimbox, etc. Asegúrate de que todos tus plugins y tu WordPress están actualizados (este plugin solo se ha testado con WordPress 2.7 y superiores). Si tienes problemas con este plugin para WordPress, intenta localizar la fuente del problema (cambia de tema y/o desactiva plugins hasta que encuentres lo que causa el problema). También puedes usar las optiones de Resolución de Errores que hay al final de esta página. Si no consigues hacer funcionar el plugin, <a href="http://blog.moskis.net/downloads/plugins/fancybox-for-wordpress/">deja un comentario aquí</a> explicando el problema. Si tienes problemas o dudas acerca de FancyBox, por favor visita estos enlaces (en inglés): <a href="http://fancy.klade.lv/howto">How-To</a> & <a href="http://fancy.klade.lv/faq">FAQ</a>.<br />Si eso no ayuda, ves al <a href="http://groups.google.com/group/fancybox">Grupo de Google de FancyBox</a>, usa la opción de <strong>Búsqueda</strong>, y si no encuentras lo que buscas, pregunta allí. Si usas FancyBox y te gusta, c&oacute;mprale una cerveza al autor! Info & Soporte Mantiene la imagen en el centro de la ventana del naegador al hacer scroll (por defecto: activado) Deja estos campos vacíos para desactivar cualqueir retrollamada. Izquierda Al igual que otros plugins, FancyBox for WordPress guarda sus opciones en la tabla de opciones de la base de datos de WordPress. En realidad, estas opcines no ocupam más que unos kilobytes de espacio, pero si quieres eliminar el plugin por completo, activa la siguiente opción, guarda los cambios, y <strong>cuando desactives el plugin</strong>, todas las opciones se eliminarán de la base de datos. Cargar JavaScript en el Pié de página Carga el JavaScript al final del código HTML del blog (experimental) (por defecto: desactivado) Incluir todas las imágenes de la página en una única galería (opción por defecto) Hacer una galer&iacute;a para cada post (solo funcionar&aacute; si el tema usa <code>class="post"</code> en cada post, que es lo m&aacute;s com&uacte;n en WordPress Opacidad del overlay. 0 es transparente, 1 es opaco (por defecto: 0.3) Otras Opciones <span style="color:red">(avanzado)</span> Opciones de Overlay Margen Tamaño del margen en píxeles (por defecto: 10) Eliminar opciones cuando se desactive el plugin desde la página "Gestionar Plugins". (por defecto: desactivado) Eliminar Opciones Derecha (por defecto) Guardar Cambios Ajusta el tamaño de las imagenes a la ventana del navegador (por defecto: activado) Visita la <a href="http://docs.jquery.com/" target="_blank">Documentaci&oacute;n de jQuery</a> para encontrar m&aacute;s ayuda. Opciones Las opciones de esta sección solo deben ser editadas si tienes problemas con el plugin! Mostrar Borde (por defecto: desactivado) Mostrar el Botón de Cerrar (por defecto: activado) Mostrar Título Mostrar el Título de la imagen (por defecto: activado) Omitir llamada a jQuery. Usa esta opción sólo si jQuery se está cargando dos veces por error. (por defecto: desactivado) Velocidad en milisegundos de la animación al navegar entre los elementos de una galería (por defecto: 300) Velocidad en milisegundos del efecto de Zoom In (por defecto: 500) Velocidad en milisegundos del efecto de Zoom Out (por defecto: 500) Al autor de este plugin para WordPress tambi&eacute;n le gusta la cerveza :P Las siguientes opciones solo deberían ser editadas si sabes lo que estás haciendo. Las siguientes opciones son para usuarios avanzados. Estas opciones controlan el aspecto general de FancyBox, te permiten ajustar los colores, bordes y posición de elementos como el título de la imagen y el botón de cerrar. Estas opciones controlan las animaciones al abrir y cerrar Fancybox, y los efectos opcionales de animación. Esta opción será ignorada si el plugin <strong>Parallel Load</strong> está instalado. Si es así, usa las opciones del plugin Parallel Load. Arriba (por defecto) Resolución de Problemas Desinstalar Aplicar FancyBox con una expresión personalizada Usar parámetro noConflict de jQuery (por defecto: activado) Ancho en píxeles de FancyBox cuado se muestre contenido anidado (por defecto: 560) Opciones de Zoom Modo jQuery "noConflict" 