<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* template.html.twig */
class __TwigTemplate_c7312ea492f61964973223c9d74a63a45ff66f3ee723b40d80929f7d6b19739e extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "        <link rel=\"shortcut icon\" href=\"img/favicon.ico\">
        <!--STYLESHEET-->
        <!--=================================================-->
        <!--Roboto Slab Font [ OPTIONAL ] -->
        <link href=\"http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700\" rel=\"stylesheet\">
        <link href=\"http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400\" rel=\"stylesheet\">
        <!--Bootstrap Stylesheet [ REQUIRED ]-->
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--Jasmine Stylesheet [ REQUIRED ]-->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--Font Awesome [ OPTIONAL ]-->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--Switchery [ OPTIONAL ]-->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/switchery/switchery.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--Bootstrap Select [ OPTIONAL ]-->
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap-select/bootstrap-select.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--Bootstrap Validator [ OPTIONAL ]-->
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap-validator/bootstrapValidator.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--jVector Map [ OPTIONAL ]-->
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/jvectormap/jquery-jvectormap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--Demo [ DEMONSTRATION ]-->
        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/demo/jquery-steps.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--Demo [ DEMONSTRATION ]-->
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/demo/jasmine.css\" rel=\"stylesheet"), "html", null, true);
        echo "\">
        <!--SCRIPT-->
        <!--=================================================-->
        <!--Page Load Progress Bar [ OPTIONAL ]-->
        <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/pace/pace.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/pace/pace.min.js"), "html", null, true);
        echo "\"></script>
       
        <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--Jquery Tag It [ OPTIONAL ]-->
        <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/tag-it/jquery.tagit.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--Ion.RangeSlider [ OPTIONAL ]-->
        <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/ion-rangeslider/ion.rangeSlider.css\" rel=\"stylesheet\">
        <link href=\"plugins/ion-rangeslider/ion.rangeSlider.skinNice.css"), "html", null, true);
        // line 43
        echo "\" rel=\"stylesheet\">
        <!--Chosen [ OPTIONAL ]-->
        <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/chosen/chosen.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--noUiSlider [ OPTIONAL ]-->
        <link href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/noUiSlider/jquery.nouislider.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/noUiSlider/jquery.nouislider.pips.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--Bootstrap Timepicker [ OPTIONAL ]-->
        <link href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--Bootstrap Datepicker [ OPTIONAL ]-->
        <link href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap-datepicker/bootstrap-datepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--Dropzone [ OPTIONAL ]-->
        <link href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/dropzone/dropzone.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--Summernote [ OPTIONAL ]-->
        <link href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/summernote/summernote.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatables/media/css/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    
    </head>
   <body>
        <div id=\"container\" class=\"effect mainnav-lg navbar-fixed mainnav-fixed\">
           
            <header id=\"navbar\">
                <div id=\"navbar-container\" class=\"boxed\">
                   
                    <div class=\"navbar-header\">
                        <a href=\"index.html\" class=\"navbar-brand\">
                            <i class=\"fa fa-cube brand-icon\"></i>
                            <div class=\"brand-title\">
                                <span class=\"brand-text\">SensationApp</span>
                            </div>
                        </a>
                    </div>

                    <div class=\"navbar-content clearfix\">
                        <ul class=\"nav navbar-top-links pull-left\">
                            
                            <li class=\"tgl-menu-btn\">
                                <a class=\"mainnav-toggle\" href=\"#\"> <i class=\"fa fa-navicon fa-lg\"></i> </a>
                            </li>
                            
                        </ul>
                    </div>
                   
                </div>
            </header>
            
            <div class=\"boxed\">
               <div id=\"content-container\">
             
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div class=\"pageheader\">
                        <h3><i class=\"fa fa-home\"></i> Dashboard </h3>
                        <div class=\"breadcrumb-wrapper\">
                            <span class=\"label\">You are here:</span>
                            <ol class=\"breadcrumb\">
                                <li> <a href=\"#\"> Home </a> </li>
                                <li class=\"active\"> Dashboard </li>
                            </ol>
                        </div>
                    </div>
                 <div id=\"page-content\">
                    <!--End page title-->
                   ";
        // line 107
        $this->displayBlock('body', $context, $blocks);
        // line 109
        echo "    </div>
                </div>
                <!--===================================================-->
                <!--END CONTENT CONTAINER-->
                <!--MAIN NAVIGATION-->
                <!--===================================================-->
                <nav id=\"mainnav-container\">
                    <div id=\"mainnav\">
                        <!--Menu-->
                        <!--================================-->
                        <div id=\"mainnav-menu-wrap\" >
                            <div class=\"nano\">
                                <div class=\"nano-content\">
                                    <ul id=\"mainnav-menu\" class=\"list-group\">
                                       
                                        <li>
                                            <a href=\"\">
                                            <i class=\"fa fa-home\"></i>
                                            <span class=\"menu-title\">Accueil</span>
                                            <i class=\"arrow\"></i>
                                            </a>
                                          
                                        </li>
                                       
                                        <li class=\"list-divider\"></li>
                                        
                                        <li>
                                            <a href=\"#\">
                                            <i class=\"fa fa-th\"></i>
                                            <span class=\"menu-title\">
                                            <strong>Classes</strong>
                                            </span>
                                            <i class=\"arrow\"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class=\"collapse\">
                                                <li><a href=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("classe_index");
        echo "\"><i class=\"fa fa-caret-right\"></i>Liste des classes </a></li>
                                                <li><a href=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("classe_new");
        echo "\"><i class=\"fa fa-caret-right\"></i> Ajouter une classe </a></li>
                                            </ul>
                                        </li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href=\"#\">
                                            <i class=\"fa fa-briefcase\"></i>
                                            <span class=\"menu-title\">Salles</span>
                                            <i class=\"arrow\"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class=\"collapse\">
                                                <li><a href=\"";
        // line 158
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salle_index");
        echo "\"><i class=\"fa fa-caret-right\"></i> Liste des salles </a></li>
                                                <li><a href=\"";
        // line 159
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salle_new");
        echo "\"><i class=\"fa fa-caret-right\"></i> Ajouter une salle </a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                            <i class=\"fa fa-briefcase\"></i>
                                            <span class=\"menu-title\">Salles par section</span>
                                            <i class=\"arrow\"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class=\"collapse\">
                                                <li><a href=\"";
        // line 170
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sectiona");
        echo "\"><i class=\"fa fa-caret-right\"></i> Liste des salles </a></li>
                                                <li><a href=\"";
        // line 171
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sectionf");
        echo "\"><i class=\"fa fa-caret-right\"></i> Ajouter une salle </a></li>
                                                <li><a href=\"";
        // line 172
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sectionb");
        echo "\"><i class=\"fa fa-caret-right\"></i> Ajouter une salle </a></li>
                                            </ul>
                                        </li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href=\"#\">
                                            <i class=\"fa fa-file\"></i>
                                            <span class=\"menu-title\">Élèves</span>
                                            <i class=\"arrow\"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class=\"collapse\">
                                                <li><a href=\"";
        // line 184
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eleve_index");
        echo "\"><i class=\"fa fa-caret-right\"></i> Liste des élèves </a></li>
                                                <li><a href=\"";
        // line 185
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eleve_new");
        echo "\"><i class=\"fa fa-caret-right\"></i> Ajouter un élève </a></li>
                                            </ul>
                                        </li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href=\"#\">
                                            <i class=\"fa fa-table\"></i>
                                            <span class=\"menu-title\">Section</span>
                                            <i class=\"arrow\"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class=\"collapse\">
                                                <li><a href=\"table-static.html\"><i class=\"fa fa-caret-right\"></i> Liste des sections  <span class=\"label label-info pull-right\">New</span></a></li>
                                                <li><a href=\"table-footable.html\"><i class=\"fa fa-caret-right\"></i> Ajouter une section </a></li>
                                            </ul>
                                        </li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href=\"";
        // line 203
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametre");
        echo "\">
                                            <i class=\"fa fa-seting\"></i>
                                            <span class=\"menu-title\">Paramètres</span>
                                           
                                            </a>
                                            
                                        </li>
                                        <!--Menu list item-->
                                       
                                        <li class=\"list-divider\"></li>
                                        <li>
                                            <a href=\"#\">
                                            <i class=\"fa fa-line-chart\"></i>
                                            <span class=\"menu-title\">Déconnexion</span>
                                            <i class=\"arrow\"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class=\"collapse\">
                                                <li><a href=\"charts-flot.html\"><i class=\"fa fa-caret-right\"></i> Flot Chart </a></li>
                                                <li><a href=\"charts-morris.html\"><i class=\"fa fa-caret-right\"></i> Morris Chart </a></li>
                                            </ul>
                                        </li>
                                        <!--Menu list item-->
                                        
                                       
                                    </ul>
                                   
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </nav>
                <!--===================================================-->
                <!--END MAIN NAVIGATION-->

               
            </div>
            <!-- FOOTER -->
            <!--===================================================-->
           
            <!--===================================================-->
            <!-- END FOOTER -->
            <!-- SCROLL TOP BUTTON -->
            <!--===================================================-->
            <button id=\"scroll-top\" class=\"btn\"><i class=\"fa fa-chevron-up\"></i></button>
            <!--===================================================-->
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!--JAVASCRIPT-->
        <!--=================================================-->
        <!--jQuery [ REQUIRED ]-->
        <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\"></script>
        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!--Fast Click [ OPTIONAL ]-->
        <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/fast-click/fastclick.min.js"), "html", null, true);
        echo "\"></script>
        <!--Jasmine Admin [ RECOMMENDED ]-->
        <script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        echo "\"></script>
        <!--Switchery [ OPTIONAL ]-->
        <script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/switchery/switchery.min.js"), "html", null, true);
        echo "\"></script>
        <!--Jquery Steps [ OPTIONAL ]-->
        <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/parsley/parsley.min.js"), "html", null, true);
        echo "\"></script>
        <!--Jquery Steps [ OPTIONAL ]-->
        <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/jquery-steps/jquery-steps.min.js"), "html", null, true);
        echo "\"></script>
        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap-select/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
        <!--Bootstrap Wizard [ OPTIONAL ]-->
        <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"), "html", null, true);
        echo "\"></script>
        <!--Masked Input [ OPTIONAL ]-->
        <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/masked-input/bootstrap-inputmask.min.js"), "html", null, true);
        echo "\"></script>
        <!--Bootstrap Validator [ OPTIONAL ]-->
        <script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap-validator/bootstrapValidator.min.js"), "html", null, true);
        echo "\"></script>
        <!--Flot Chart [ OPTIONAL ]-->
        <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/flot-charts/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/flot-charts/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>
        <!--Flot Order Bars Chart [ OPTIONAL ]-->
        <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/flot-charts/jquery.flot.categories.js"), "html", null, true);
        echo "\"></script>
        <!--jvectormap [ OPTIONAL ]-->
        <script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/jvectormap/jquery-jvectormap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"), "html", null, true);
        echo "\"></script>
        <!--Easy Pie Chart [ OPTIONAL ]-->
        <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/easy-pie-chart/jquery.easypiechart.min.js"), "html", null, true);
        echo "\"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->

        <!--Form Wizard [ SAMPLE ]-->
        <script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/demo/index.js"), "html", null, true);
        echo "\"></script>
        <!--Form Wizard [ SAMPLE ]-->
        <script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/demo/wizard.js"), "html", null, true);
        echo "\"></script>
        <!--Demo script [ DEMONSTRATION ]-->
        <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/demo/jasmine.js"), "html", null, true);
        echo "\"></script>
        <!--Form Wizard [ SAMPLE ]-->
        <script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/demo/form-wizard.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatables/media/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatables/media/js/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/demo/tables-datatables.js"), "html", null, true);
        echo "\"></script>
        
        <!--jQuery UI [ REQUIRED ]-->
        <script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
     
        <!--Bootstrap Tags Input [ OPTIONAL ]-->
        <script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"), "html", null, true);
        echo "\"></script>
        <!--Bootstrap Tags Input [ OPTIONAL ]-->
        <script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/tag-it/tag-it.min.js"), "html", null, true);
        echo "\"></script>
        <!--Chosen [ OPTIONAL ]-->
        <script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
        <!--noUiSlider [ OPTIONAL ]-->
        <script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/noUiSlider/jquery.nouislider.all.min.js"), "html", null, true);
        echo "\"></script>
        <!--Bootstrap Timepicker [ OPTIONAL ]-->
        <script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
        <!--Bootstrap Datepicker [ OPTIONAL ]-->
        <script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
        <!--Dropzone [ OPTIONAL ]-->
        <script src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/dropzone/dropzone.min.js"), "html", null, true);
        echo "\"></script>
        <!--Dropzone [ OPTIONAL ]-->
        <script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/ion-rangeslider/ion.rangeSlider.min.js"), "html", null, true);
        echo "\"></script>
        <!--Masked Input [ OPTIONAL ]-->
        <script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/masked-input/jquery.maskedinput.min.js"), "html", null, true);
        echo "\"></script>
        <!--Summernote [ OPTIONAL ]-->
        <script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/summernote/summernote.min.js"), "html", null, true);
        echo "\"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/screenfull/screenfull.js"), "html", null, true);
        echo "\"></script>
        <!--Form Component [ SAMPLE ]-->
        <script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/demo/form-component.js"), "html", null, true);
        echo "\"></script>
        
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 107
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 108
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  629 => 108,  620 => 107,  602 => 7,  588 => 328,  583 => 326,  578 => 324,  573 => 322,  568 => 320,  563 => 318,  558 => 316,  553 => 314,  548 => 312,  543 => 310,  538 => 308,  533 => 306,  527 => 303,  521 => 300,  517 => 299,  513 => 298,  509 => 297,  505 => 296,  500 => 294,  495 => 292,  490 => 290,  483 => 286,  478 => 284,  474 => 283,  469 => 281,  464 => 279,  460 => 278,  455 => 276,  450 => 274,  445 => 272,  440 => 270,  435 => 268,  430 => 266,  425 => 264,  420 => 262,  415 => 260,  410 => 258,  405 => 256,  349 => 203,  328 => 185,  324 => 184,  309 => 172,  305 => 171,  301 => 170,  287 => 159,  283 => 158,  268 => 146,  264 => 145,  226 => 109,  224 => 107,  172 => 58,  168 => 57,  164 => 56,  159 => 54,  154 => 52,  149 => 50,  144 => 48,  140 => 47,  135 => 45,  131 => 43,  128 => 42,  123 => 40,  118 => 38,  113 => 36,  109 => 35,  102 => 31,  97 => 29,  92 => 27,  87 => 25,  82 => 23,  77 => 21,  72 => 19,  67 => 17,  62 => 15,  53 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        {% block title %} {% endblock %}
        <link rel=\"shortcut icon\" href=\"img/favicon.ico\">
        <!--STYLESHEET-->
        <!--=================================================-->
        <!--Roboto Slab Font [ OPTIONAL ] -->
        <link href=\"http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700\" rel=\"stylesheet\">
        <link href=\"http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400\" rel=\"stylesheet\">
        <!--Bootstrap Stylesheet [ REQUIRED ]-->
        <link href=\"{{asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
        <!--Jasmine Stylesheet [ REQUIRED ]-->
        <link href=\"{{asset('assets/css/style.css')}}\" rel=\"stylesheet\">
        <!--Font Awesome [ OPTIONAL ]-->
        <link href=\"{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
        <!--Switchery [ OPTIONAL ]-->
        <link href=\"{{asset('assets/plugins/switchery/switchery.min.css')}}\" rel=\"stylesheet\">
        <!--Bootstrap Select [ OPTIONAL ]-->
        <link href=\"{{asset('assets/plugins/bootstrap-select/bootstrap-select.min.css')}}\" rel=\"stylesheet\">
        <!--Bootstrap Validator [ OPTIONAL ]-->
        <link href=\"{{asset('assets/plugins/bootstrap-validator/bootstrapValidator.min.css')}}\" rel=\"stylesheet\">
        <!--jVector Map [ OPTIONAL ]-->
        <link href=\"{{asset('assets/plugins/jvectormap/jquery-jvectormap.css')}}\" rel=\"stylesheet\">
        <!--Demo [ DEMONSTRATION ]-->
        <link href=\"{{asset('assets/css/demo/jquery-steps.min.css')}}\" rel=\"stylesheet\">
        <!--Demo [ DEMONSTRATION ]-->
        <link href=\"{{asset('assets/css/demo/jasmine.css\" rel=\"stylesheet')}}\">
        <!--SCRIPT-->
        <!--=================================================-->
        <!--Page Load Progress Bar [ OPTIONAL ]-->
        <link href=\"{{asset('assets/plugins/pace/pace.min.css')}}\" rel=\"stylesheet\">
        <script src=\"{{asset('assets/plugins/pace/pace.min.js')}}\"></script>
       
        <link href=\"{{asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}\" rel=\"stylesheet\">
        <!--Jquery Tag It [ OPTIONAL ]-->
        <link href=\"{{asset('assets/plugins/tag-it/jquery.tagit.css')}}\" rel=\"stylesheet\">
        <!--Ion.RangeSlider [ OPTIONAL ]-->
        <link href=\"{{asset('assets/plugins/ion-rangeslider/ion.rangeSlider.css\" rel=\"stylesheet\">
        <link href=\"plugins/ion-rangeslider/ion.rangeSlider.skinNice.css')}}\" rel=\"stylesheet\">
        <!--Chosen [ OPTIONAL ]-->
        <link href=\"{{asset('assets/plugins/chosen/chosen.min.css')}}\" rel=\"stylesheet\">
        <!--noUiSlider [ OPTIONAL ]-->
        <link href=\"{{asset('assets/plugins/noUiSlider/jquery.nouislider.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('assets/plugins/noUiSlider/jquery.nouislider.pips.min.css')}}\" rel=\"stylesheet\">
        <!--Bootstrap Timepicker [ OPTIONAL ]-->
        <link href=\"{{asset('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css')}}\" rel=\"stylesheet\">
        <!--Bootstrap Datepicker [ OPTIONAL ]-->
        <link href=\"{{asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.css')}}\" rel=\"stylesheet\">
        <!--Dropzone [ OPTIONAL ]-->
        <link href=\"{{asset('assets/plugins/dropzone/dropzone.css')}}\" rel=\"stylesheet\">
        <!--Summernote [ OPTIONAL ]-->
        <link href=\"{{asset('assets/plugins/summernote/summernote.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('assets/plugins/datatables/media/css/dataTables.bootstrap.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css')}}\" rel=\"stylesheet\">

    
    </head>
   <body>
        <div id=\"container\" class=\"effect mainnav-lg navbar-fixed mainnav-fixed\">
           
            <header id=\"navbar\">
                <div id=\"navbar-container\" class=\"boxed\">
                   
                    <div class=\"navbar-header\">
                        <a href=\"index.html\" class=\"navbar-brand\">
                            <i class=\"fa fa-cube brand-icon\"></i>
                            <div class=\"brand-title\">
                                <span class=\"brand-text\">SensationApp</span>
                            </div>
                        </a>
                    </div>

                    <div class=\"navbar-content clearfix\">
                        <ul class=\"nav navbar-top-links pull-left\">
                            
                            <li class=\"tgl-menu-btn\">
                                <a class=\"mainnav-toggle\" href=\"#\"> <i class=\"fa fa-navicon fa-lg\"></i> </a>
                            </li>
                            
                        </ul>
                    </div>
                   
                </div>
            </header>
            
            <div class=\"boxed\">
               <div id=\"content-container\">
             
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div class=\"pageheader\">
                        <h3><i class=\"fa fa-home\"></i> Dashboard </h3>
                        <div class=\"breadcrumb-wrapper\">
                            <span class=\"label\">You are here:</span>
                            <ol class=\"breadcrumb\">
                                <li> <a href=\"#\"> Home </a> </li>
                                <li class=\"active\"> Dashboard </li>
                            </ol>
                        </div>
                    </div>
                 <div id=\"page-content\">
                    <!--End page title-->
                   {% block body %}
    {% endblock %}
    </div>
                </div>
                <!--===================================================-->
                <!--END CONTENT CONTAINER-->
                <!--MAIN NAVIGATION-->
                <!--===================================================-->
                <nav id=\"mainnav-container\">
                    <div id=\"mainnav\">
                        <!--Menu-->
                        <!--================================-->
                        <div id=\"mainnav-menu-wrap\" >
                            <div class=\"nano\">
                                <div class=\"nano-content\">
                                    <ul id=\"mainnav-menu\" class=\"list-group\">
                                       
                                        <li>
                                            <a href=\"\">
                                            <i class=\"fa fa-home\"></i>
                                            <span class=\"menu-title\">Accueil</span>
                                            <i class=\"arrow\"></i>
                                            </a>
                                          
                                        </li>
                                       
                                        <li class=\"list-divider\"></li>
                                        
                                        <li>
                                            <a href=\"#\">
                                            <i class=\"fa fa-th\"></i>
                                            <span class=\"menu-title\">
                                            <strong>Classes</strong>
                                            </span>
                                            <i class=\"arrow\"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class=\"collapse\">
                                                <li><a href=\"{{path('classe_index')}}\"><i class=\"fa fa-caret-right\"></i>Liste des classes </a></li>
                                                <li><a href=\"{{path('classe_new')}}\"><i class=\"fa fa-caret-right\"></i> Ajouter une classe </a></li>
                                            </ul>
                                        </li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href=\"#\">
                                            <i class=\"fa fa-briefcase\"></i>
                                            <span class=\"menu-title\">Salles</span>
                                            <i class=\"arrow\"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class=\"collapse\">
                                                <li><a href=\"{{path('salle_index')}}\"><i class=\"fa fa-caret-right\"></i> Liste des salles </a></li>
                                                <li><a href=\"{{path('salle_new')}}\"><i class=\"fa fa-caret-right\"></i> Ajouter une salle </a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                            <i class=\"fa fa-briefcase\"></i>
                                            <span class=\"menu-title\">Salles par section</span>
                                            <i class=\"arrow\"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class=\"collapse\">
                                                <li><a href=\"{{path('sectiona')}}\"><i class=\"fa fa-caret-right\"></i> Liste des salles </a></li>
                                                <li><a href=\"{{path('sectionf')}}\"><i class=\"fa fa-caret-right\"></i> Ajouter une salle </a></li>
                                                <li><a href=\"{{path('sectionb')}}\"><i class=\"fa fa-caret-right\"></i> Ajouter une salle </a></li>
                                            </ul>
                                        </li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href=\"#\">
                                            <i class=\"fa fa-file\"></i>
                                            <span class=\"menu-title\">Élèves</span>
                                            <i class=\"arrow\"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class=\"collapse\">
                                                <li><a href=\"{{path('eleve_index')}}\"><i class=\"fa fa-caret-right\"></i> Liste des élèves </a></li>
                                                <li><a href=\"{{path('eleve_new')}}\"><i class=\"fa fa-caret-right\"></i> Ajouter un élève </a></li>
                                            </ul>
                                        </li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href=\"#\">
                                            <i class=\"fa fa-table\"></i>
                                            <span class=\"menu-title\">Section</span>
                                            <i class=\"arrow\"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class=\"collapse\">
                                                <li><a href=\"table-static.html\"><i class=\"fa fa-caret-right\"></i> Liste des sections  <span class=\"label label-info pull-right\">New</span></a></li>
                                                <li><a href=\"table-footable.html\"><i class=\"fa fa-caret-right\"></i> Ajouter une section </a></li>
                                            </ul>
                                        </li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href=\"{{path('parametre')}}\">
                                            <i class=\"fa fa-seting\"></i>
                                            <span class=\"menu-title\">Paramètres</span>
                                           
                                            </a>
                                            
                                        </li>
                                        <!--Menu list item-->
                                       
                                        <li class=\"list-divider\"></li>
                                        <li>
                                            <a href=\"#\">
                                            <i class=\"fa fa-line-chart\"></i>
                                            <span class=\"menu-title\">Déconnexion</span>
                                            <i class=\"arrow\"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class=\"collapse\">
                                                <li><a href=\"charts-flot.html\"><i class=\"fa fa-caret-right\"></i> Flot Chart </a></li>
                                                <li><a href=\"charts-morris.html\"><i class=\"fa fa-caret-right\"></i> Morris Chart </a></li>
                                            </ul>
                                        </li>
                                        <!--Menu list item-->
                                        
                                       
                                    </ul>
                                   
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </nav>
                <!--===================================================-->
                <!--END MAIN NAVIGATION-->

               
            </div>
            <!-- FOOTER -->
            <!--===================================================-->
           
            <!--===================================================-->
            <!-- END FOOTER -->
            <!-- SCROLL TOP BUTTON -->
            <!--===================================================-->
            <button id=\"scroll-top\" class=\"btn\"><i class=\"fa fa-chevron-up\"></i></button>
            <!--===================================================-->
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!--JAVASCRIPT-->
        <!--=================================================-->
        <!--jQuery [ REQUIRED ]-->
        <script src=\"{{asset('assets/js/jquery-2.1.1.min.js')}}\"></script>
        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src=\"{{asset('assets/js/bootstrap.min.js')}}\"></script>
        <!--Fast Click [ OPTIONAL ]-->
        <script src=\"{{asset('assets/plugins/fast-click/fastclick.min.js')}}\"></script>
        <!--Jasmine Admin [ RECOMMENDED ]-->
        <script src=\"{{asset('assets/js/scripts.js')}}\"></script>
        <!--Switchery [ OPTIONAL ]-->
        <script src=\"{{asset('assets/plugins/switchery/switchery.min.js')}}\"></script>
        <!--Jquery Steps [ OPTIONAL ]-->
        <script src=\"{{asset('assets/plugins/parsley/parsley.min.js')}}\"></script>
        <!--Jquery Steps [ OPTIONAL ]-->
        <script src=\"{{asset('assets/plugins/jquery-steps/jquery-steps.min.js')}}\"></script>
        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src=\"{{asset('assets/plugins/bootstrap-select/bootstrap-select.min.js')}}\"></script>
        <!--Bootstrap Wizard [ OPTIONAL ]-->
        <script src=\"{{asset('assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}\"></script>
        <!--Masked Input [ OPTIONAL ]-->
        <script src=\"{{asset('assets/plugins/masked-input/bootstrap-inputmask.min.js')}}\"></script>
        <!--Bootstrap Validator [ OPTIONAL ]-->
        <script src=\"{{asset('assets/plugins/bootstrap-validator/bootstrapValidator.min.js')}}\"></script>
        <!--Flot Chart [ OPTIONAL ]-->
        <script src=\"{{asset('assets/plugins/flot-charts/jquery.flot.min.js')}}\"></script>
        <script src=\"{{asset('assets/plugins/flot-charts/jquery.flot.resize.min.js')}}\"></script>
        <!--Flot Order Bars Chart [ OPTIONAL ]-->
        <script src=\"{{asset('assets/plugins/flot-charts/jquery.flot.categories.js')}}\"></script>
        <!--jvectormap [ OPTIONAL ]-->
        <script src=\"{{asset('assets/plugins/jvectormap/jquery-jvectormap.min.js')}}\"></script>
        <script src=\"{{asset('assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js')}}\"></script>
        <!--Easy Pie Chart [ OPTIONAL ]-->
        <script src=\"{{asset('assets/plugins/easy-pie-chart/jquery.easypiechart.min.js')}}\"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->

        <!--Form Wizard [ SAMPLE ]-->
        <script src=\"{{asset('assets/js/demo/index.js')}}\"></script>
        <!--Form Wizard [ SAMPLE ]-->
        <script src=\"{{asset('assets/js/demo/wizard.js')}}\"></script>
        <!--Demo script [ DEMONSTRATION ]-->
        <script src=\"{{asset('assets/js/demo/jasmine.js')}}\"></script>
        <!--Form Wizard [ SAMPLE ]-->
        <script src=\"{{asset('assets/js/demo/form-wizard.js')}}\"></script>
         <script src=\"{{asset('assets/plugins/datatables/media/js/jquery.dataTables.js')}}\"></script>
        <script src=\"{{asset('assets/plugins/datatables/media/js/dataTables.bootstrap.js')}}\"></script>
        <script src=\"{{asset('assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/demo/tables-datatables.js')}}\"></script>
        
        <!--jQuery UI [ REQUIRED ]-->
        <script src=\"{{asset('assets/js/jquery-ui.min.js')}}\"></script>
     
        <!--Bootstrap Tags Input [ OPTIONAL ]-->
        <script src=\"{{asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}\"></script>
        <!--Bootstrap Tags Input [ OPTIONAL ]-->
        <script src=\"{{asset('assets/plugins/tag-it/tag-it.min.js')}}\"></script>
        <!--Chosen [ OPTIONAL ]-->
        <script src=\"{{asset('assets/plugins/chosen/chosen.jquery.min.js')}}\"></script>
        <!--noUiSlider [ OPTIONAL ]-->
        <script src=\"{{asset('assets/plugins/noUiSlider/jquery.nouislider.all.min.js')}}\"></script>
        <!--Bootstrap Timepicker [ OPTIONAL ]-->
        <script src=\"{{asset('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js')}}\"></script>
        <!--Bootstrap Datepicker [ OPTIONAL ]-->
        <script src=\"{{asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js')}}\"></script>
        <!--Dropzone [ OPTIONAL ]-->
        <script src=\"{{asset('assets/plugins/dropzone/dropzone.min.js')}}\"></script>
        <!--Dropzone [ OPTIONAL ]-->
        <script src=\"{{asset('assets/plugins/ion-rangeslider/ion.rangeSlider.min.js')}}\"></script>
        <!--Masked Input [ OPTIONAL ]-->
        <script src=\"{{asset('assets/plugins/masked-input/jquery.maskedinput.min.js')}}\"></script>
        <!--Summernote [ OPTIONAL ]-->
        <script src=\"{{asset('assets/plugins/summernote/summernote.min.js')}}\"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src=\"{{asset('assets/plugins/screenfull/screenfull.js')}}\"></script>
        <!--Form Component [ SAMPLE ]-->
        <script src=\"{{asset('assets/js/demo/form-component.js')}}\"></script>
        
    </body>
</html>", "template.html.twig", "/var/www/html/gesco/templates/template.html.twig");
    }
}
