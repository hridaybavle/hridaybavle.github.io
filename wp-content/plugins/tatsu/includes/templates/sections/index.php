<?php

add_action( 'tatsu_register_templates', 'tatsu_register_builtin_section_templates' );
function tatsu_register_builtin_section_templates() {
    if(!is_tatsu_pro_active()){
        $templates_order = array( 'hero', 'content', 'features', 'team', 'testimonials', 'clients', 'pricing', 'cta', 'contact' );
        foreach( $templates_order as $category_name ) {
            $category = TATSU_PLUGIN_DIR . 'includes/templates/website-templates/'.$category_name;
            foreach( glob( $category . '/*.jpg' ) as $key => $template ) {
                $template_name = basename( $template, '.jpg' );
                $img = TATSU_PLUGIN_URL . '/includes/templates/website-templates/' . $category_name . '/' . $template_name . '.jpg';
                $exclude_category = array('contact','pricing');
                tatsu_register_template( array(
                    'title' => $template_name,
                    'name'  => $template_name, 
                    'category' => array( $category_name ),
                    'type' => 'sections',
                    'img' => $img,
                    'src' => ($key||!in_array($category_name,$exclude_category))?TATSU_PLUGIN_DIR . 'includes/templates/website-templates/template.txt':TATSU_PLUGIN_DIR . 'includes/templates/website-templates/'.$template_name. '.txt'
                ) );
            }
        }
    }
}
?>