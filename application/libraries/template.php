<?php class Template{
	


    function spk_saw($view=null,$data=null){
        $ci =& get_instance();

        $ci->load->model('enduser/model_user');
        
		$ci->load->view('enduser/template/bg_header', $data);
		$ci->load->view('enduser/template/bg_nav_right', $data);         
		//$ci->load->view('enduser/template/bg_top', $data);
		$ci->load->view('enduser/template/bg_left', $data);         
        $ci->load->view('enduser/'.$view, $data);
        $ci->load->view('enduser/template/bg_bottom', $data);
        //$ci->load->view('enduser/template/bg_footer', $data);
    }


    function spk_saw_signin($view=null,$data=null){
        $ci =& get_instance();
        
		$ci->load->view('enduser/template/bg_header_login', $data);        		
        $ci->load->view('enduser/'.$view, $data);
        $ci->load->view('enduser/template/bg_footer_login', $data);
    }

    	
		function paging1($pg,$uri,$url,$limit){
        $ci =& get_instance();
        $pg=$pg;
		
		$config['base_url'] = base_url($url);
		$config['total_rows'] = $pg->num_rows();
		$config['per_page']=$limit;
		$config['uri_segment']=$uri;
		$config['full_tag_open']="<ul class='pagination'>";
		$config['full_tag_close']='</ul>';
		
		$config['num_tag_open'] = "<li class='waves-effect'>";
		$config['num_tag_close'] = "</li>";
		$config['cur_tag_open'] = "<li class='active'><a href='javascript:void(0);'>";
		$config['cur_tag_close'] = "</a></li>";
		$config['first_link']="<li class='waves-effect'>First</li>";
		$config['last_link']="<li class='waves-effect'>Last</li>";
		$config['next_link']="<li class='waves-effect'><i class='mdi-navigation-chevron-right'></i></li>";
		$config['prev_link']="<li class='waves-effect'><i class='mdi-navigation-chevron-left'></i></li>";
		
		$ci->pagination->initialize($config);
		return $ci->pagination->create_links();
    }
	
	function paging2($pg,$uri,$url,$limit){
        $ci =& get_instance();
        $pg=$pg;
		
		$config['base_url'] = base_url($url);
		$config['total_rows'] = $pg->num_rows();
		$config['per_page']=$limit;
		$config['uri_segment']=$uri;
		$config['full_tag_open']="<ul class='pagination pagination-sm no-margin pull-right'>";
		$config['full_tag_close']="</ul>";
		$config['uri_segment']		= $uri;
		$config['num_tag_open'] = "<li>";
		$config['num_tag_close'] = "</li>";
		$config['cur_tag_open'] = "<li class='active'><span>";
		$config['cur_tag_lose'] = "</span></li>";
		$config['first_link']		= "First";
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['next_link']		= "&raquo;";
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_link']		= "Last";
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['prev_link']		= "&laquo;";
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		
		$ci->pagination->initialize($config);
		return $ci->pagination->create_links();
    }

    function paging4($pg,$uri,$url,$limit){
        $ci =& get_instance();
        $pg=$pg;
		
		$config['base_url'] = base_url($url);
		$config['total_rows'] = $pg->num_rows();
		$config['per_page']=$limit;
		$config['uri_segment']=$uri;
		$config['full_tag_open']="<ul id='pagination-4' class='pagination pagination-sm no-margin pull-right'>";
		$config['full_tag_close']="</ul>";
		$config['uri_segment']		= $uri;
		$config['num_tag_open'] = "<li>";
		$config['num_tag_close'] = "</li>";
		$config['cur_tag_open'] = "<li class='active'><span>";
		$config['cur_tag_lose'] = "</span></li>";
		$config['first_link']		= "First";
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['next_link']		= "&raquo;";
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_link']		= "Last";
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['prev_link']		= "&laquo;";
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		
		$ci->pagination->initialize($config);
		return $ci->pagination->create_links();
    }
    
	function paging3($pg,$uri,$url,$limit){
        $ci =& get_instance();
        $pg=$pg;
		
		$config['base_url'] = base_url($url);
		$config['total_rows'] = $pg->num_rows();
		$config['per_page']=$limit;
		$config['uri_segment']=$uri;
		$config['full_tag_open']="<ul class='right'>";
		$config['full_tag_close']="</ul>";
		$config['uri_segment']		= $uri;
		$config['num_tag_open'] = "<li id='paging'>";
		$config['num_tag_close'] = "</li>";
		$config['cur_tag_open'] = "<li id='paging' class='active'><span> ";
		$config['cur_tag_lose'] = "</span></li>";
		$config['first_link']		= "First";
		$config['first_tag_open'] = "<li id='paging'>";
		$config['first_tag_close'] = '</li>';
		$config['next_link']		= "&raquo;";
		$config['next_tag_open'] = "<li id='paging'>";
		$config['next_tag_close'] = '</li>';
		$config['last_link']		= "Last";
		$config['last_tag_open'] = "<li id='paging'>";
		$config['last_tag_close'] = '</li>';
		$config['prev_link']		= "&laquo;";
		$config['prev_tag_open'] = "<li id='paging'>";
		$config['prev_tag_close'] = '</li>';
		
		$ci->pagination->initialize($config);
		return $ci->pagination->create_links();
    }
	
	
	
	function rand($length){
        $key = '';
        $keys = array_merge(range(0, 9), range('a', 'z'));
        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }
        return $key;
    }
		
    # ENCRIPTION
    //$key = 'juado@12345'; ojo diganti
    var $key = 'juado@12345';
    function encrypt($string) {
            $result = '';
            for($i = 0; $i < strlen($string); $i++) {
                    $char = substr($string, $i, 1);
                    $keychar = substr($this->key, ($i % strlen($this->key))-1, 1);
                    $char = chr(ord($char) + ord($keychar));
                    $result .= $char;
            }

            return base64_encode($result);
    }

    function decrypt($string) {
            $result = '';
            $string = base64_decode($string);

            for($i = 0; $i < strlen($string); $i++) {
                    $char = substr($string, $i, 1);
                    $keychar = substr($this->key, ($i % strlen($this->key))-1, 1);
                    $char = chr(ord($char) - ord($keychar));
                    $result .= $char;
            }

            return $result;
    }
	
	
	
	function sluggify($url){
		# Prep string with some basic normalization
		$url = strtolower($url);
		$url = strip_tags($url);
		$url = stripslashes($url);
		$url = html_entity_decode($url);
	
		# Remove quotes (can't, etc.)
		$url = str_replace('\'', '', $url);
	
		# Replace non-alpha numeric with hyphens
		$match = '/[^a-z0-9]+/';
		$replace = '-';
		$url = preg_replace($match, $replace, $url);
	
		$url = trim($url, '-');
	
		return $url;
	}

    function removeSlash($text){
        # Prep string with some basic normalization
        $text = stripslashes($text);
    
        # Remove quotes (can't, etc.)
        $text = str_replace('\'', '', $text);
    
        # Replace non-alpha numeric with hyphens
        $match = '/[^a-z0-9]+/';
        $replace = '';
        $text = preg_replace($match, $replace, $text);
    
        return $text;
    }

    function clearInput($text){
        $name   = mysql_real_escape_string($text);
        $name   = preg_replace('/\\\\/', '', $name);
        return $name;
    }
	
	function limitChar($content, $limit=15){
		if (strlen($content) <= $limit) {
			return $content;
		} else {
			$hasil = substr($content, 0, $limit);
			return $hasil . "...";
		}
	}
	
	function notif($patern,$data1=null,$data2=null,$data3=null){
		$notif = lang($patern);
		
		if(!empty($data1)){
			$notif = str_replace("[1?]",$data1,$notif);
		}
		
		if(!empty($data2)){
			$notif = str_replace("[2?]",$data2,$notif);
		}
		
		if(!empty($data3)){
			$notif = str_replace("[3?]",$data3,$notif);
		}
		
		$notif = str_replace("[1?]","",$notif);
		$notif = str_replace("[2?]","",$notif);
		$notif = str_replace("[3?]","",$notif);
		
		return $notif;
	}

	function closetags ( $html )
        {
        #put all opened tags into an array
        preg_match_all ( "#<([a-z]+)( .*)?(?!/)>#iU", $html, $result );
        $openedtags = $result[1];
        #put all closed tags into an array
        preg_match_all ( "#</([a-z]+)>#iU", $html, $result );
        $closedtags = $result[1];
        $len_opened = count ( $openedtags );
        # all tags are closed
        if( count ( $closedtags ) == $len_opened )
        {
        return $html;
        }
        $openedtags = array_reverse ( $openedtags );
        # close tags
        for( $i = 0; $i < $len_opened; $i++ )
        {
            if ( !in_array ( $openedtags[$i], $closedtags ) )
            {
            $html .= "</" . $openedtags[$i] . ">";
            }
            else
            {
            unset ( $closedtags[array_search ( $openedtags[$i], $closedtags)] );
            }
        }
        return $html;
    }
	
	function xTimeAgo ($oldTime, $newTime) {
        $timeCalc = strtotime($newTime) - strtotime($oldTime);       
        $timeCalc = round($timeCalc/60/60);
        return $timeCalc;
    }


    function xTimeAgoDesc ($oldTime, $newTime) {
        $timeCalc = strtotime($newTime)-strtotime($oldTime);

        if ($timeCalc > (60*60*24)) {$timeCalc = round($timeCalc/60/60/24) . " hari yang lalu";}
        else if ($timeCalc > (60*60)) {$timeCalc = round($timeCalc/60/60) . " jam yang lalu";}
        else if ($timeCalc > 60) {$timeCalc = round($timeCalc/60) . " menit yang lalu";}
        else if ($timeCalc > 0) {$timeCalc .= " detik yang lalu";}

        return $timeCalc;
    }    

    
	function limitc($text, $limit=18){
		$cetak = substr($text,0,$limit);
		return $cetak;
	}

	function print2pdf($title='',$content='')
	{
		$ci =& get_instance();
		$ci->load->helper('pdf_helper');
		
		$data['title']  	= $title;
		$data['content']	= $content;
	    $ci->load->view('pdfreport', $data);
	}

		function print2pdfkecil($title='',$content='')
	{
		$ci =& get_instance();
		$ci->load->helper('pdf_helper');
		
		$data['title']  	= $title;
		$data['content']	= $content;
	    $ci->load->view('pdfreportkecil', $data);
	}	
	
}
	