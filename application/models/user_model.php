<?php

Class User_model extends CI_Model
{
    public function User_model()
    {
      parent::__construct();
    }
	
    public function category()
    {
        $sql="select * from tab_catagories where int_sub_catagory=0";
        $query=$this->db->query($sql);
        
        $sql1="select * from tab_catagories where int_sub_catagory!=0";
        $query1=$this->db->query($sql1);
        $result['category']=$query->result_array();  
        $result['sub_category']=$query1->result_array();
        
         
        //print_r($result);die;
        return $result;
    }
    public function sub_category($id)
    {
        $sql1="select * from tab_catagories where int_sub_catagory!=0";
        $query1=$this->db->query($sql1);
        return  $result=$query1->result_array();
        //print_r($result);
    }
    
    
	
	 public function get_profile_settings($id)
	{
		$sql="select * from tab_artists where int_artist_id='$id'";
		//print_r($sql);exit;
		$query=$this->db->query($sql);
		$result=$query->result_array();
		//print_r($result);exit;
		return $result;
		
	}
	
	public function insert_update($id,$file,$cover_img)
	{
		$data=$this->input->post();
		//print_r($data);exit;
		
		//print_r($file);exit;
		 $sql="select int_artist_id from tab_artist_links where int_artist_id=$id";
		//print_r($sql);exit;
		$query=$this->db->query($sql);
	//print_r($query);exit;
		$result=$query->result_array();
		//print_r($result);exit;
		$sql="update tab_artists set txt_profile_image='$file',txt_cover_image='$cover_img',txt_fname='".$data['fname']."',txt_lname='".$data['lname']."',txt_password='$password',txt_email='".$data['email']."',txt_cell_no='".$data['phone_no']."',txt_description='".$data['description']."'".$extra_query." where int_artist_id=".$data['id']."";
			$query=$this->db->query($sql);
		
		//$result=$sql->result_array();
		//print_r($result);exit;
		if(count($result)>0)
		{
			$data=$this->input->post();
			//print_r($data);exit;
			 $sql1="select * from tab_artist_links";
			//print_r($sql1);exit;
			$query1=$this->db->query($sql1);
			$result=$query1->result_array();
			//print_r($result);exit;
			
			
			$sql="update tab_artist_links set txt_facebook='".$data['facebook']."',txt_website_url='".$data['website_url']."',txt_twitter='".$data['twitter']."',txt_google_plus='".$data['google_plus']."',txt_youtube='".$data['youtube']."',txt_vimeo='".$data['vimeo']."',txt_pinterest='".$data['pinterest']."',txt_instagram='".$data['instagram']."',txt_linkedin='".$data['linkedin']."' where int_artist_id=".$data['id']."";

			$query=$this->db->query($sql);
			//print_r($query);exit;
			return $result;
		}
		else
		{
			//$data=$this->input->post();
			//print_r($data);exit;
			$facebook=$data['facebook'];
			$twitter=$data['twitter'];
			$google_plus=$data['google_plus'];
			$youtube=$data['youtube'];
			$vimeo=$data['vimeo'];
			$pinterest=$data['pinterest'];
			$instagram=$data['instagram'];
			$linkedin=$data['linkedin'];
			$website_url=$data['website_url'];
			
		$sql="insert into tab_artist_links values(Default,'".$data['int_artist_id']."','$website_url','$facebook','$twitter','$google_plus','$youtube','$vimeo','$pinterest','$instagram','$linkedin')";
		//print_r($sql);exit;
		$result=$this->db->query($sql);
		//print_r($result);exit;
		//return $result;
		}
	}
}
