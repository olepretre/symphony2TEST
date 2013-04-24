<?php

/* olivierBlogBundle:Blog:ajout.html.twig */
class __TwigTemplate_5192e50f50a8059be796985138d9ae6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <!-- meta -->
        <meta charset=\"utf-8\" />
        <meta name=\"keywords\" content=\"mots-clés\" />
        <meta name=\"description\" content=\"description\" />
        <meta name=\"author\" content=\"auteur\">
        <meta name=\"viewport\" content=\"width-device-width, initial-scale-1.0\">

        <!-- include -->
         <link rel=\"stylesheet\" href=\"../css/style.css\" type=\"text/css\" /> 
        <link rel=\"icon\" href=\"../images/favicon/favicon.gif\" type=\"image/x-icon\" />  

        <title>test ";
        // line 15
        echo twig_escape_filter($this->env, $this->getContext($context, "nom"), "html", null, true);
        echo "</title>
    </head>
    <body>
        <header>
            <h1>Hello world je suis ";
        // line 19
        echo twig_escape_filter($this->env, $this->getContext($context, "nom"), "html", null, true);
        echo " page ajout</h1>
        </header>

        <nav>
            <img src=\"../images/icones/annuler.png\"/>
            <img src=\"../images/icones/valider.png\"/>
        </nav>

        <article>
            <section>
                <p>Lorem ipsum dolor sit amet, eu nibh appetere ius, eos reque ipsum cu. Graeco equidem copiosae no mea. Partiendo dissentias id pro, vel no epicurei menandri mediocritatem. Mei ne efficiendi appellantur. Unum exerci democritum ad has, malorum probatus eos te. No vix nullam volumus moderatius, at scaevola iudicabit efficiantur eum.

Causae ornatus mnesarchum usu ei, has audire labores sententiae at, vis ne habeo fugit simul. Et eos adhuc ridens prompta, clita scaevola qui eu. Vix an clita tamquam invenire, sed erant iisque at. Vix id quem rebum utinam. Cum et minimum maiestatis reprehendunt, quodsi option laboramus cu nec, sea tation tempor hendrerit ad.

Probo populo mei et, duo et deseruisse referrentur. Eum repudiare omittantur no, choro menandri ad mel. Eam nusquam officiis scriptorem ea. Simul fabulas an sit, no mea facete utamur placerat.

Eu elit vulputate vel, vel an amet primis reprimique. Eu vis graeci petentium comprehensam, stet tamquam quo ex, pri an idque timeam. Labores consulatu mei ei, iriure singulis in nam. Qui ad soluta ponderum philosophia, ea quo dicta fierent concludaturque. Sed in exerci tempor ullamcorper, consequuntur reprehendunt an usu.

His quando noluisse reformidans cu, inermis molestiae usu cu. Eam te ludus urbanitas, ne nec legendos senserit voluptatibus. Noster ancillae vulputate vim ut, mel eros eius dolorum id. Dicat inani eirmod in qui. Te sea mazim debitis, movet conclusionemque vituperatoribus ex eum. Minim viris aliquid vim et, et eros iisque his. Eum cu atomorum conceptam cotidieque.</p>
            </section>
        </article>

        <footer>

        </footer>

    </body>
</html>




";
    }

    public function getTemplateName()
    {
        return "olivierBlogBundle:Blog:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 19,  35 => 15,  19 => 1,);
    }
}
