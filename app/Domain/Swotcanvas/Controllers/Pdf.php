<?php

/**
 * HTML code for PDF report
 */

namespace Leantime\Domain\Swotcanvas\Controllers {

    use Leantime\Domain\Canvas\Controllers\Pdf as PdfController;

    /**
     *
     */
    class Pdf extends PdfController
    {
        protected const CANVAS_NAME = 'swot';

        /**
         * htmlCanvas -  Layout canvas (must be implemented)
         *
         * @access public
         * @param  array $recordsAry Array of canvas data records
         * @return string HTML code
         */
        protected function htmlCanvas(array $recordsAry): string
        {

            $html = '<table class="canvas" style="width: 100%"><tbody><tr>';

            $html .= '<td class="canvas-elt-title" style="width: 50%;">' . $this->htmlCanvasTitle($this->canvasTypes['swot_strengths']['title'], $this->canvasTypes['swot_strengths']['icon']) . '</td>';
            $html .= '<td class="canvas-elt-title" style="width: 50%;">' . $this->htmlCanvasTitle($this->canvasTypes['swot_weaknesses']['title'], $this->canvasTypes['swot_weaknesses']['icon']) . '</td>';
            $html .= '</tr><tr>';
            $html .= '<td class="canvas-elt-box" style="height: 290px;">' . $this->htmlCanvasElements($recordsAry, 'swot_strengths') . '</td>';
            $html .= '<td class="canvas-elt-box" style="height: 290px;">' . $this->htmlCanvasElements($recordsAry, 'swot_weaknesses') . '</td>';

            $html .= '</tr><tr>';

            $html .= '<td class="canvas-elt-title" style="width: 50%;">' . $this->htmlCanvasTitle($this->canvasTypes['swot_opportunities']['title'], $this->canvasTypes['swot_opportunities']['icon']) . '</td>';
            $html .= '<td class="canvas-elt-title" style="width: 50%;">' . $this->htmlCanvasTitle($this->canvasTypes['swot_threats']['title'], $this->canvasTypes['swot_threats']['icon']) . '</td>';
            $html .= '</tr><tr>';
            $html .= '<td class="canvas-elt-box" style="height: 290px;">' . $this->htmlCanvasElements($recordsAry, 'swot_opportunities') . '</td>';
            $html .= '<td class="canvas-elt-box" style="height: 290px;">' . $this->htmlCanvasElements($recordsAry, 'swot_threats') . '</td>';

            $html .= '</tr></tbody></table>';

            return $html;
        }

        /***
         * reportGenerate - Generate report for module
         *
         * @access public
         * @param int   $id      Canvas identifier
         * @param array $filter  Filter value
         * @param array $options
         * @return string PDF filename
         */
        public function reportGenerate(int $id, array $filter = [], array $options = []): string
        {

            return parent::reportGenerate($id, $filter, []);
        }
    }
}
