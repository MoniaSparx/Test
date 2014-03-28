<?php
/*-----------------------------*
 * SOCIAL COUNT WIDGETS
 * Facebook & Twitter
 *-----------------------------*/
$argsSidebar = array(
	'name'          => 'Facebook/Twitter Count Sidebar',
	'id'            => 'social-count-sidebar',
	'description'   => '',
        'class'         => '',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h2 style="display:none">',
	'after_title'   => '</h2>' 
    );
register_sidebar( $argsSidebar );

function register_sm_widget() {
    register_widget( 'SM_Widget_Facebook' );
    register_widget( 'SM_Widget_Twitter' );
    register_widget( 'SM_Widget_Nav' );
}
add_action( 'widgets_init', 'register_sm_widget' );


class SM_Widget_Facebook extends WP_Widget{
    private $widgetId='sm_facebook_count_widget';
    private $widgetTitle='SM Facebook Count';
    private $widgetDescription = array( 'description' => 'Facebook Count Widget');
    
    private $shareURL='http://www.facebook.com/sharer.php?s=100&p[url]=';
    private $countURL='http://graph.facebook.com/?id=';
    
    function __construct() {
            parent::__construct($this->widgetId,$this->widgetTitle,$this->widgetDescription);
    }

    public function widget( $args, $instance ) {
            echo $args['before_widget'];
            ?>
            <ul class="catagory-icon social-count-widget">
                <li class="fb-area">
                    <div class="icon">
                        <i>&nbsp;</i>
                        <strong ><?php echo $this->_getCount($this->countURL.$instance['facebookURL']); ?></strong>
                    </div>
                    <span class="follow"><?php echo $instance['facebookFollow']; ?> <a href="<?php echo $this->shareURL.$instance['facebookURL']; ?>" target="_balnk"></a> </span>
                </li>
            </ul>
            <?php
            echo $args['after_widget'];
    }
    public function form( $instance ) {
           $follow= (isset( $instance[ 'facebookFollow' ] ) )? $instance[ 'facebookFollow' ]: 'Follow';
           $url= (isset( $instance[ 'facebookURL' ] ) )? $instance[ 'facebookURL' ]: site_url();
            ?>
            <p>
               <label for="<?php echo $this->get_field_id( 'facebookFollow' ); ?>"><?php _e( 'Label:' ); ?></label> 
               <input class="widefat" id="<?php echo $this->get_field_id( 'facebookFollow' ); ?>" name="<?php echo $this->get_field_name( 'facebookFollow' ); ?>" type="text" value="<?php echo esc_attr( $follow ); ?>">
            </p>
            <p>
               <label for="<?php echo $this->get_field_id( 'facebookURL' ); ?>"><?php _e( 'URL:' ); ?></label> 
               <input class="widefat" id="<?php echo $this->get_field_id( 'facebookURL' ); ?>" name="<?php echo $this->get_field_name( 'facebookURL' ); ?>" type="text" value="<?php echo esc_attr( $url ); ?>">
            </p>
            <?php 
    }
    public function update( $new_instance, $old_instance ) {
            $instance = array();
            $instance['facebookURL'] = ( ! empty( $new_instance['facebookURL'] ) ) ? strip_tags( $new_instance['facebookURL'] ) : $old_instance;
            $instance['facebookFollow'] = ( ! empty( $new_instance['facebookFollow'] ) ) ? strip_tags( $new_instance['facebookFollow'] ) : $old_instance;
            return $instance;
    }
    
    function _getCount($url){
        $json=@file_get_contents($url);
        if(is_string($json)){
            $args=json_decode($json);
            return (isset($args->shares)) ? $args->shares : 0;
        }
    }
   
    
}

class SM_Widget_Twitter extends WP_Widget{
    private $widgetId='sm_twitter_count_widget';
    private $widgetTitle='SM Twitter Count';
    private $widgetDescription = array( 'description' => 'Twitter Count Widget');

    private $shareURL='https://twitter.com/share?url=';
    private $countURL='http://cdn.api.twitter.com/1/urls/count.json?url=';
    
    function __construct() {
            parent::__construct($this->widgetId,$this->widgetTitle,$this->widgetDescription);
    }

    public function widget( $args, $instance ) {
            echo $args['before_widget'];
            ?>
            <ul class="catagory-icon  social-count-widget">
                    <li class="twt-area">
                        <div class="icon">
                            <i>&nbsp;</i>
                            <strong ><?php echo $this->_getCount($this->countURL.$instance['twitterURL']); ?></strong>
                        </div>
                        <span class="follow"><?php echo $instance['twitterFollow']; ?> <a href="<?php echo $this->shareURL.$instance['twitterURL']; ?>" target="_balnk"></a> </span>
                    </li>
            </ul>
            <?php
            echo $args['after_widget'];
    }
    public function form( $instance ) {
           $follow= (isset( $instance['twitterFollow'] ) )? $instance['twitterFollow']: 'Following';
           $url= (isset( $instance['twitterURL'] ) )? $instance['twitterURL']: site_url();
            ?>
            <p>
               <label for="<?php echo $this->get_field_id( 'twitterFollow' ); ?>"><?php _e( 'Label:' ); ?></label> 
               <input class="widefat" id="<?php echo $this->get_field_id( 'twitterFollow' ); ?>" name="<?php echo $this->get_field_name( 'twitterFollow' ); ?>" type="text" value="<?php echo esc_attr( $follow ); ?>">
            </p>
            <p>
               <label for="<?php echo $this->get_field_id( 'twitterURL' ); ?>"><?php _e( 'URL:' ); ?></label> 
               <input class="widefat" id="<?php echo $this->get_field_id( 'twitterURL' ); ?>" name="<?php echo $this->get_field_name( 'twitterURL' ); ?>" type="text" value="<?php echo esc_attr( $url ); ?>">
            </p>
            <?php 
    }
    public function update( $new_instance, $old_instance ) {
            $instance = array();
            $instance['twitterURL'] = ( ! empty( $new_instance['twitterURL'] ) ) ? strip_tags( $new_instance['twitterURL'] ) : $old_instance;
            $instance['twitterFollow'] = ( ! empty( $new_instance['twitterFollow'] ) ) ? strip_tags( $new_instance['twitterFollow'] ) : $old_instance;
            return $instance;
    }
    function _getCount($url){
        $json=@file_get_contents($url);
        if(is_string($json)){
            $args=json_decode($json);
            $args->count;
            return "".$args->count;
        }
    }
}

class SM_Widget_Nav extends WP_Widget{
    private $widgetId='sm_custom_nav_widget';
    private $widgetTitle='SM Custom Nav';
    private $widgetDescription = array( 'description' => 'Custom Navigation');

    function __construct() {
            parent::__construct($this->widgetId,$this->widgetTitle,$this->widgetDescription);
    }

    public function widget( $args, $instance ) {
            echo $args['before_widget'];
            ?>
            <ul class="catagory custom-nav-widget">
                <li>
                    <a href="<?php echo $instance['navLink']; ?>" <?php if($instance['navTarget'] == 'blank') echo 'target="_blank"'; ?>><?php echo $instance['navLabel']; ?><i>&nbsp;</i></a>
                </li>
            </ul>
            <?php
            echo $args['after_widget'];
    }
    public function form( $instance ) {
           $label= (isset( $instance['navLabel'] ) )? $instance['navLabel']: '';
           $linknav= (isset( $instance['navLink'] ) && $instance['navLink'] !='' )? $instance['navLink']: '';
           $target= (isset( $instance['navTarget'] ) )? $instance['navTarget']: '';
            ?>
            <p>
               <label for="<?php echo $this->get_field_id( 'navLabel' ); ?>"><?php _e( 'Label:' ); ?></label> 
               <input class="widefat" id="<?php echo $this->get_field_id( 'navLabel' ); ?>" name="<?php echo $this->get_field_name( 'navLabel' ); ?>" type="text" value="<?php echo esc_attr( $label ); ?>">
            </p>
            <p>
               <label for="<?php echo $this->get_field_id( 'navLink' ); ?>"><?php _e( 'Link:' ); ?></label> 
               <input class="widefat" id="<?php echo $this->get_field_id( 'navLink' ); ?>" name="<?php echo $this->get_field_name( 'navLink' ); ?>" type="text" value="<?php echo esc_attr( $linknav ); ?>">
            </p>
            <p>
               <label for="<?php echo $this->get_field_id( 'navTarget' ); ?>"><?php _e( 'Target:' ); ?></label> 
               <input class="widefat" id="<?php echo $this->get_field_id( 'navTarget' ); ?>" name="<?php echo $this->get_field_name( 'navTarget' ); ?>" type="checkbox" <?php if($target == 'blank') echo 'checked="checked"'; ?> value="blank" > blank
            </p>
            <?php 
    }
    public function update( $new_instance, $old_instance ) {
            $instance = array();
            $instance['navLabel'] = ( ! empty( $new_instance['navLabel'] ) ) ? strip_tags( $new_instance['navLabel'] ) : '';
            $instance['navLink'] = ( ! empty( $new_instance['navLink'] ) ) ? strip_tags( $new_instance['navLink'] ) : '';
            $instance['navTarget'] = ( ! empty( $new_instance['navTarget'] ) ) ? strip_tags( $new_instance['navTarget'] ) : '';
            return $instance;
    }
}
