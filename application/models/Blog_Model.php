<?php
 class Blog_Model extends CI_Model{

 public function blog(){
	 $q=$this->db->query("select B.*,A.txt_fname,A.txt_lname,(select count(int_comment_id) from tab_comments c where c.int_blog_id=b.int_blog_id) as t_comments from tab_artists as A inner join tab_blogs as B on A.int_artist_id=B.int_artist_id limit 4");
	return $q = $q->result_array();               
  }
  
 public function blog_single($id){
   $q=$this->db->query("select B.*,A.txt_fname,A.txt_lname,A.txt_description as txt_user_description,A.txt_profile_image as txt_user_pro_image,(select count(int_comment_id) from tab_comments c where c.int_blog_id=b.int_blog_id) as t_comments from tab_artists as A inner join tab_blogs as B on A.int_artist_id=B.int_artist_id where int_blog_id=$id");	
	return $q = $q->result_array();         
  }
  public function update_views($id,$counter){
	  $counter1=$counter+1;
	  $data = array(
                   'int_views' => $counter1);
					$this->db->where('int_blog_id',$id);
					return $this->db->update("tab_blogs",$data);   
  }
	public function comments($id){
	$q=$this->db->query("select * from tab_comments where int_blog_id=$id");
	return $q=$q->result_array();
        
  }
    public function most_viewed(){
	$q=$this->db->query("select B.*,A.txt_fname,A.txt_lname from tab_artists as A right join tab_blogs as B on A.int_artist_id=B.int_artist_id order by int_views desc limit 5");
	return $q->result_array();      
  }
    public function get_login_user_detail($id){
	if($id){
		$q=$this->db->query("select * from tab_artists where int_artist_id=$id");
		return $q->result_array();      
	}
  }
  public function add_comment($id){
	  $data = array(
	          'int_blog_id' => $this->input->post('blog_id'),
			  'int_user_id' => $id['int_artist_id'],
                   'txt_comment' => $this->input->post('commentText'));
		   return $this->db->insert("tab_comments",$data);
  }

}
?>