<?php
class block_samblock extends block_base {
    public function init() {
        $this->title = get_string('samblock', 'block_samblock');
    }
    // The PHP tag and the curly bracket for the class definition 
    // will only be closed after there is another function added in the next section.

    function get_content() {
        if ($this->content !== null) {
          return $this->content;
        }

        $this->content         =  new stdClass;
        $this->content->text   = 'This is the content of the samblock!!!';
        $this->content->footer = '<code>Footer here...</code>';

        return $this->content;
    }


}
