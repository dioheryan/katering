<?php

function is_logged_in(){
    $ci = get_instance();
    if(!$ci->session->userdata('email')){
        redirect('auth');
    } else {
        $id_role = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(1);

        $query = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menu_id = $query['id_menu'];

        $userAccess = $ci->db->get_where('user_access_menu', [
            'id_role' => $id_role,
            'id_menu' => $menu_id
        ]);

        if($userAccess->num_rows() < 1){
            redirect('auth/blocked');
        }
    }
}
?>