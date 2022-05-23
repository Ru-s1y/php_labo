<?php
/**
 * interface
 */
interface Template
{
    public function setVariable($name);
    public function getVariable();
}

/**
 * DefaultTemplate
 */
class DefaultTemplate implements Template
{
    public $vars = '';

    public function setVariable($name)
    {
        $this->vars = $name;
    }

    public function getVariable()
    {
        echo "DefaultTemplate -> ".$this->vars;
    }
}

/**
 * ExampleTemplate
 */
class ExampleTemplate implements Template
{
    public $vars = 'A';

    public function setVariable($name)
    {
        $this->vars = $name;
    }

    public function getVariable()
    {
        echo "WorkingTemplate -> ".$this->vars;
    }
}

/**
 * TestTemplate
 */
class TestTemplate implements Template
{
    public $vars = 'B';

    public function setVariable($name)
    {
        $this->vars = $name;
    }

    public function getVariable()
    {
        echo "TestTemplate -> ".$this->vars;
    }
}

/**
 * gettingTemplate
 */
class gettingTemplate
{
    /**
     * @param string $type
     */
    private $type;

    /**
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return Template
     */
    public function getTemplate(): Template
    {
        if ($this->type == 'A') {
            return new ExampleTemplate();
        } elseif ($this->type == 'B') {
            return new TestTemplate();
        } else {
            return new DefaultTemplate();
        }
    }
}

/**
 * @param Template
 * @return string
 */
function callTemplate(Template $template)
{
    $template->setVariable('aaa');
    $template->getVariable();
}

$getting = new gettingTemplate('A');    // ここの引数切り替えだけで呼ばれる中身を変えれる
callTemplate($getting->getTemplate());

