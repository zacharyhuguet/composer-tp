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

/* user/index.html.twig */
class __TwigTemplate_799f8f445c564ba61e7b7401c60c843f3abfcfeeb52600be04a774c093b203e5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 7
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
</head>
<body>
<h1>Connexion</h1>
<form  method=\"POST\" class=\"form-signin\">
        <input type=\"emai\" name=\"email\" id=\"inputEmail\" class=\"form-control form-group\" placeholder=\"email\" required autofocus>
        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control form-group\" placeholder=\"password\" required autofocus>
        <button class=\"btn btn-lg btn-primary btn-block btn-signin\" type=\"submit\">Sign in</button>
        <a class=\"btn btn-lg btn-primary btn-block btn-signin\" href = Add.php>Add user</a>
    </form></br></br>

<h1>Liste des utilisateurs</h1>
<table class=\"table\">
<thead>
    <th>Id</th>
    <th>Email</th>
    <th>Role</th>
    <th>Actions</th>
</thead>

";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 28
            echo "    <tr>
        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
        <td><a href=\"details.php?id=";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\">Voir</a> <a href=\"edit.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\">Modifier</a> <a href=\"remove.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\">Supprimer</a></td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
    

</tr> 
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 35,  87 => 32,  83 => 31,  79 => 30,  75 => 29,  72 => 28,  68 => 27,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/index.html.twig", "C:\\Users\\huguzac\\Documents\\composer-tp\\templates\\user\\index.html.twig");
    }
}
