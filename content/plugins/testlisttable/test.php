<?php
/*
 * Plugin Name: Inscrition évènement DLHL
 * Description: Un plugin qui affiche les inscritions aux évènements
 * Plugin URI: http://www.paulund.co.uk
 * Author: Paul Underwood
 * Author URI: http://www.paulund.co.uk
 * Version: 1.0
 * License: GPL2
 */
if(is_admin())
{
    new DLHL_Wp_List_Table();
}
/**
 * Paulund_Wp_List_Table class will create the page to load the table
 */
class DLHL_Wp_List_Table
{
    /**
     * Constructor will create the menu item
     */
    public function __construct()
    {
        add_action( 'admin_menu', array($this, 'add_menu_example_list_table_page' ));
    }
    /**
     * Menu item will allow us to load the page to display the table
     */
    public function add_menu_example_list_table_page()
    {
        add_menu_page( 'Inscritions évènements', 'Inscritions évènements', 'manage_options', 'example-list-table.php', array($this, 'list_table_page') );
    }
    /**
     * Display the list table page
     *
     * @return Void
     */
    public function list_table_page()
    {
        $exampleListTable = new Example_List_Table();
        $exampleListTable->prepare_items();
        ?>
            <div class="wrap">
                <div id="icon-users" class="icon32"></div>
                <h2>Inscritions évènements</h2>
                <?php $exampleListTable->display(); ?>
            </div>
        <?php
    }
}
// WP_List_Table is not loaded automatically so we need to load it in our application
if( ! class_exists( 'WP_List_Table' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}
/**
 * Create a new table class that will extend the WP_List_Table
 */
class Example_List_Table extends WP_List_Table
{
    /**
     * Prepare the items for the table to process
     *
     * @return Void
     */
    public function prepare_items()
    {
        $columns = $this->get_columns();
        $hidden = $this->get_hidden_columns();
        $sortable = $this->get_sortable_columns();
        $data = $this->table_data();
        usort( $data, array( &$this, 'sort_data' ) );
        $perPage = 10;
        $currentPage = $this->get_pagenum();
        $totalItems = count($data);
        $this->set_pagination_args( array(
            'total_items' => $totalItems,
            'per_page'    => $perPage
        ) );
        $data = array_slice($data,(($currentPage-1)*$perPage),$perPage);
        $this->_column_headers = array($columns, $hidden, $sortable);
        $this->items = $data;
    }
    /**
     * Override the parent columns method. Defines the columns to use in your listing table
     *
     * @return Array
     */
    public function get_columns()
    {
        $columns = array(
            'id'          => 'ID',
            'type'        => 'type',
            'name'        =>'nom',
            'address'     => 'Adresse',
            'date'        => 'Date',
            'count'    => 'Nombre d\'inscrit',
            
        );
        return $columns;
    }
    /**
     * Define which columns are hidden
     *
     * @return Array
     */
    public function get_hidden_columns()
    {
        return array();
    }
    /**
     * Define the sortable columns
     *
     * @return Array
     */
    public function get_sortable_columns()
    {
        return array('title' => array('title', false));
    }
    /**
     * Get the table data
     *
     * @return Array
     */
    private function table_data()
    {

        
            
        
      


        global $wpdb;
        $table_name = $wpdb->prefix . 'inscriptions';
         $results = $GLOBALS['wpdb']->get_results( "SELECT * FROM {$table_name} ", OBJECT);
         
         $data = array();
         foreach ($results as $post) {
            //var_dump($post->name) ;
            //var_dump($post->id) ;
             $monnom=$post->name;
             $postid=$post->id;
             $posttype=$post->type;
             $postadress=$post->address;
             $postdate=$post->time;
            
           $count= $GLOBALS['wpdb']->get_var( "SELECT COUNT(*) FROM {$table_name} WHERE type= '$posttype'");
            var_dump($count);
                
                $data[] = array(
                         'id'          =>$postid ,
                         'type'        => $posttype,
                         'name'       => $monnom,
                         'address' => $postadress,
                         'date'        => $postdate,
                         'count'    => $count,
                         
                         );
                        }
                       
                        return $data;
                        
                        

                       

        
       
       
    }
    /**
     * Define what data to show on each column of the table
     *
     * @param  Array $item        Data
     * @param  String $column_name - Current column name
     *
     * @return Mixed
     */
    public function column_default( $item, $column_name )
    {
        switch( $column_name ) {
            case 'id':
            case 'type':
            case 'name':
            case 'address':
            case 'date':
            case 'count':
            
                return $item[ $column_name ];
            default:
                return print_r( $item, true ) ;
        }
    }
    /**
     * Allows you to sort the data by the variables set in the $_GET
     *
     * @return Mixed
     */
    private function sort_data( $a, $b )
    {
        // Set defaults
        $orderby = 'title';
        $order = 'asc';
        // If orderby is set, use this as the sort column
        if(!empty($_GET['orderby']))
        {
            $orderby = $_GET['orderby'];
        }
        // If order is set use this as the order
        if(!empty($_GET['order']))
        {
            $order = $_GET['order'];
        }
        $result = strcmp( $a[$orderby], $b[$orderby] );
        if($order === 'asc')
        {
            return $result;
        }
        return -$result;
    }
}
?>