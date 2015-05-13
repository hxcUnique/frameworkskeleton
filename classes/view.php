<?php
abstract class Classes_View
{
    /**
     * @param string $classname
     * @param string $functionname
     */
    public function getView($classname = '', $functionname = '')
    {
        $parsed = '';

        $folder = explode('_', $classname);
        $view = getcwd() . '/../view/' . strtolower($folder[count($folder) - 1]) . '/' . strtolower(str_replace('_', '/', $functionname)).'.phtml';

        $parsed .= $this->_getHeader();
        $parsed .= file_get_contents($view);
        $parsed .= $this->_getFooter();

        echo $parsed;
    }

    protected function _getHeader()
    {
        return file_get_contents(getcwd() . '/../layout/header.phtml');
    }

    protected function _getFooter()
    {
        return file_get_contents(getcwd() . '/../layout/footer.phtml');
    }
}