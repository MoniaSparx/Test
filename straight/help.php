<?php

class Help_View{
    
    private $post_id;
    
    public function __construct(){
        if(is_home() || is_search() || is_archive() ){
            $this->post_id=of_get_option('help_page_link');
           
            if(isset($this->post_id) && $this->post_id !='')
            $this->_indexNArchive();
        }
        else{
            $this->post_id=get_the_ID();
            if(get_field("show_hide", $this->post_id) !='Hide' && get_field("title", $this->post_id)!='' )
                $this->_postNPage();
        }
    } 
    
    function _postNPage(){
        ?>
            <h3><?php echo get_field("title", $this->post_id); ?></h3>
            <p><?php echo get_field("description", $this->post_id); ?></p>
            <a class="more-btn" href="<?php echo get_field("button_link", $this->post_id); ?>" target="_blank"><?php echo get_field("button_text", $this->post_id); ?></a>
        <?php
    }
    function _indexNArchive(){
      ?>
        <?php echo get_field('help_content_for_footer', $this->post_id); ?>
	<a class="more-btn" href="<?php echo get_permalink($this->post_id); ?>" target="_blank">more</a>
      <?php
    }
    
}
?>
<div class="help-us">
	<div class="page clearfix">
		<div class="inner">
                    <?php new Help_View(); ?>
		</div>
	</div>
</div>
