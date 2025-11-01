<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller {  


    public function basicinfos() {
        $this->load->library('email');
    
        // Email config
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.hostinger.com',
            'smtp_port' => 587,
            'smtp_user' => 'email@nexmoves.in',
            'smtp_pass' => 'Nexmove@24',
            'charset'   => 'utf-8',
            'newline'   => "\r\n",
            'mailtype'  => 'html'
        ];
    
        $this->email->initialize($config);
    
        // Retrieve all input fields
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $gender = $this->input->post('gender');
        $city = $this->input->post('city');
        $day = $this->input->post('day');
        $month = $this->input->post('month');
        $year = $this->input->post('year');
        $age = $this->input->post('age');
        $height = $this->input->post('height');
        $weight = $this->input->post('weight');
        $bgrp = $this->input->post('bgrp');
        $religion = $this->input->post('religion');
        $caste = $this->input->post('caste');
        $subcaste = $this->input->post('subcaste');
        $marital = $this->input->post('marital');
        $number = $this->input->post('number');
        $highedu = $this->input->post('highedu');
        $occupation = $this->input->post('occupation');
        $edudetail = $this->input->post('edudetail');
        $hobby = $this->input->post('hobby');
        $read = $this->input->post('read');
        $annual = $this->input->post('income');
        $native = $this->input->post('native');
        $partnerprefer = $this->input->post('preference');
        $children = $this->input->post('child_acceptance');
    
        // Since 'movie', 'music', 'sportlik' are multiple select, they come as arrays
        $movie = $this->input->post('movie[]');
        $music = $this->input->post('music[]');
        $sport = $this->input->post('sport');
        $sportlik = $this->input->post('sportlik[]');
    
        $eating = $this->input->post('eating');
        $favfood = $this->input->post('favfood');
        $travel = $this->input->post('travel');
        $social = $this->input->post('social');
        $family = $this->input->post('family');
        $relation = $this->input->post('relation');
        $timefam = $this->input->post('timefam');
        $actfam = $this->input->post('actfam');
        $marriage = $this->input->post('marriage');
        $exp = $this->input->post('exp');
        $goal = $this->input->post('goal');
        $pursue = $this->input->post('pursue');
        $children = $this->input->post('children');
        $many = $this->input->post('many');
        $parsty = $this->input->post('parsty');
        $household = $this->input->post('household');
        $traveljob = $this->input->post('traveljob');
        $shift = $this->input->post('shift');
        $partner = $this->input->post('partner');
        $friendcir = $this->input->post('friendcir');
        $addon = $this->input->post('addon');

        $tchildren   = $this->input->post('total_children', TRUE);
        $children_s  = $this->input->post('children_status', TRUE);
    
        // Convert multiple selections to string for email
        $movie_str = is_array($movie) ? implode(", ", $movie) : '';  
        $music_str = is_array($music) ? implode(", ", $music) : '';
        $sportlik_str = is_array($sportlik) ? implode(", ", $sportlik) : '';

        // --------- DEBUG: log POST to see what's arriving (remove in production) ----------
        log_message('debug', 'basicinfo POST: ' . print_r($_POST, TRUE));
        // -------------------------------------------------------------------------------

                $children_section = '';
            if (in_array($marital, ['Married', 'Divorced', 'Widowed'], TRUE)) {
                if ($tchildren !== NULL && $tchildren !== '') {
                    $children_section .= '<p><strong>Total Children:</strong> ' . html_escape($tchildren) . '</p>';
                }
                if ($children_s !== NULL && $children_s !== '') {
                    $children_section .= '<p><strong>Children Status:</strong> ' . html_escape($children_s) . '</p>';
                }
            }
    
        // Compose the email body
        $message = "
            <h3>***Basic Information***</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email ID:</strong> $email</p>
            <p><strong>Gender:</strong> $gender</p>
            <p><strong>City:</strong> $city</p>
            <p><strong>Date of Birth:</strong> $day-$month-$year</p>
            <p><strong>Age:</strong> $age</p>
            <p><strong>Height:</strong> $height ft</p>
            <p><strong>Weight:</strong> $weight </p>
            <p><strong>Blood Group:</strong> $bgrp</p>
            
            <p><strong>Contact Number:</strong> $number</p>
            <p><strong>Higher Education:</strong> $highedu</p>
            <p><strong>Occupation:</strong> $occupation</p>
            <p><strong>Education in Detail:</strong> $edudetail</p>
    
            <h3>***Personal Information***</h3>
            <p><strong>Religion:</strong> $religion</p>
            <p><strong>Caste:</strong> $caste</p>
            <p><strong>Sub-Caste:</strong> $subcaste</p>
            <p><strong>Annual Income:</strong> $annual</p>
            <p><strong>Native Place:</strong> $native</p>
            <p><strong>Marital Status:</strong> $marital</p>
            <p><strong>Partner Preference (Caste):</strong> $partnerprefer</p>
            <p><strong>Hobbies:</strong> $hobby</p>
            <p><strong>Do you like to read?:</strong> $read</p>
            <p><strong>What kind of movies do you like?:</strong> $movie_str</p>
            <p><strong>What kind of music do you like?:</strong> $music_str</p>
            <p><strong>Do you play any sports?:</strong> $sport</p>
            <p><strong>Sports Liking:</strong> $sportlik_str</p>
    
            <h3>***Lifestyle***</h3>
            <p><strong>Eating Habit:</strong> $eating</p>
            <p><strong>What are your favourite foods?:</strong> $favfood</p>
            <p><strong>What kind of places do you like to travel?:</strong> $travel</p>
            <p><strong>How much time you spend on social media:</strong> $social</p>
    
            <h3>***Family Information***</h3>
            <p><strong>Members of your family:</strong> $family</p>
            <p><strong>How is your relationship with your parents?:</strong> $relation</p>
            <p><strong>How much time do you spend with your family?:</strong> $timefam</p>
            <p><strong>What activities do you do with your family?:</strong> $actfam</p>
            <p><strong>What does marriage mean to you?:</strong> $marriage</p>
            <p><strong>What do you expect from your partner?:</strong> $exp</p>
    
            <h3>***Future Plans (Career & Family)***</h3>
            <p><strong>What are your future goals?:</strong> $goal</p>
            <p><strong>What kind of career do you want to pursue?:</strong> $pursue</p>
            <p><strong>Do you want children?:</strong> $children</p>
            <p><strong>How many?:</strong> $many</p>
            <p><strong>What are your views on parenting styles and raising children?:</strong> $parsty</p>
            <p><strong>How do you envision dividing household chores and responsibilities?:</strong> $household</p>
            <p><strong>Would you mind if your partner had to travel for their job?:</strong> $traveljob</p>
            <p><strong>Would you mind if your partner had late meetings or night shifts?:</strong> $shift</p>
            <p><strong>What do you expect from your partner?:</strong> $partner</p>
            <p><strong>Your views about the friend circle of your partner:</strong> $friendcir</p>
    
            <h3>***Additional Information***</h3>
            <p><strong>Any other information you like to add:</strong> $addon</p>
        ";
    
        // Setup email parameters
        $this->email->from('email@nexmoves.in', 'Sobat Ayushybharasathi');
        $this->email->to('prachi@nexmoves.in');
        $this->email->subject('New Profile Information Submission');
        $this->email->message($message);
    
        // Send email and output result
        if ($this->email->send()) {
            echo 'Message sent successfully';
        } else {
            echo 'Message sending failed. Please try again.';
            log_message('error', 'Email sending failed: ' . $this->email->print_debugger());
        }
    }

    public function basicinfo() 
    {
        $this->load->library('email');
        $this->load->helper('security'); // for html_escape

        // Email config (keep yours)
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.hostinger.com',
            'smtp_port' => 587,
            'smtp_user' => 'email@nexmoves.in',
            'smtp_pass' => 'Nexmove@24',
            'charset'   => 'utf-8',
            'newline'   => "\r\n",
            'mailtype'  => 'html'
        ];
        $this->email->initialize($config);

        // -------------------------
        // Grab inputs (use xss_clean true)
        // -------------------------
        $name        = $this->input->post('name', TRUE);
        $gender      = $this->input->post('gender', TRUE);
        $city        = $this->input->post('city', TRUE);
        $day         = $this->input->post('day', TRUE);
        $month       = $this->input->post('month', TRUE);
        $year        = $this->input->post('year', TRUE);
        $age         = $this->input->post('age', TRUE);
        $height      = $this->input->post('height', TRUE);
        $weight      = $this->input->post('weight', TRUE);
        $bgrp        = $this->input->post('bgrp', TRUE);
        $religion    = $this->input->post('religion', TRUE); 
        $caste       = $this->input->post('caste', TRUE);
        $subcaste    = $this->input->post('subcaste', TRUE);
        $marital     = $this->input->post('marital', TRUE);
        $number      = $this->input->post('number', TRUE);
        $highedu     = $this->input->post('highedu', TRUE);
        $occupation  = $this->input->post('occupation', TRUE);
        $edudetail   = $this->input->post('edudetail', TRUE);
        $hobby       = $this->input->post('hobby', TRUE);
        $read        = $this->input->post('read', TRUE);
        $annual      = $this->input->post('income', TRUE); // use this name consistently
        $native      = $this->input->post('native', TRUE);
        $partnerprefer = $this->input->post('preference', TRUE);

        // CHILDREN fields (the ones you only want when Married/Divorced/Widowed)
        $tchildren   = $this->input->post('total_children', TRUE);
        $children_s  = $this->input->post('children_status', TRUE);

        // Example of multiple fields - CI will return array when form name="movie[]"
        $movie       = $this->input->post('movie'); // returns array if movie[]
        $music       = $this->input->post('music');
        $sport       = $this->input->post('sport', TRUE);
        $sportlik    = $this->input->post('sportlik');

        // ... (rest of your inputs)
        $eating      = $this->input->post('eating', TRUE);
        $favfood     = $this->input->post('favfood', TRUE);
        $travel      = $this->input->post('travel', TRUE);
        $social      = $this->input->post('social', TRUE);
        $family      = $this->input->post('family', TRUE);
        $relation    = $this->input->post('relation', TRUE);
        $timefam     = $this->input->post('timefam', TRUE);
        $actfam      = $this->input->post('actfam', TRUE);
        $marriage    = $this->input->post('marriage', TRUE);
        $exp         = $this->input->post('exp', TRUE);
        $goal        = $this->input->post('goal', TRUE);
        $pursue      = $this->input->post('pursue', TRUE);
        $many        = $this->input->post('many', TRUE);
        $parsty      = $this->input->post('parsty', TRUE);
        $household   = $this->input->post('household', TRUE);
        $traveljob   = $this->input->post('traveljob', TRUE);
        $shift       = $this->input->post('shift', TRUE);
        $partner     = $this->input->post('partner', TRUE);
        $friendcir   = $this->input->post('friendcir', TRUE);
        $addon       = $this->input->post('addon', TRUE);

        // Convert arrays to strings (safely)
        $movie_str = is_array($movie) ? implode(', ', array_map('html_escape', $movie)) : html_escape($movie);
        $music_str = is_array($music) ? implode(', ', array_map('html_escape', $music)) : html_escape($music);
        $sportlik_str = is_array($sportlik) ? implode(', ', array_map('html_escape', $sportlik)) : html_escape($sportlik);

        // --------- DEBUG: log POST to see what's arriving (remove in production) ----------
        log_message('debug', 'basicinfo POST: ' . print_r($_POST, TRUE));
        // -------------------------------------------------------------------------------

        // Build children section only for Married/Divorced/Widowed
        $children_section = '';
        if (in_array($marital, ['Married', 'Divorced', 'Widowed'], TRUE)) {
            if ($tchildren !== NULL && $tchildren !== '') {
                $children_section .= '<p><strong>Total Children:</strong> ' . html_escape($tchildren) . '</p>';
            }
            if ($children_s !== NULL && $children_s !== '') {
                $children_section .= '<p><strong>Children Status:</strong> ' . html_escape($children_s) . '</p>';
            }
        }

        // Compose email (use escaped values)
        $message = "
            <h3>***Basic Information***</h3>
            <p><strong>Name:</strong> " . html_escape($name) . "</p>
            <p><strong>Gender:</strong> " . html_escape($gender) . "</p>
            <p><strong>City:</strong> " . html_escape($city) . "</p>
            <p><strong>Date of Birth:</strong> " . html_escape($day). "-" . html_escape($month) . "-" . html_escape($year) . "</p>
            <p><strong>Age:</strong> " . html_escape($age) . "</p>
            <p><strong>Height:</strong> " . html_escape($height) . "</p>
            <p><strong>Weight:</strong> " . html_escape($weight) . "</p>

            <h3>***Personal Information***</h3>
            <p><strong>Religion:</strong> " . html_escape($religion) . "</p>
            <p><strong>Caste:</strong> " . html_escape($caste) . "</p>
            <p><strong>Sub-Caste:</strong> " . html_escape($subcaste) . "</p>
            <p><strong>Annual Income:</strong> " . html_escape($annual) . "</p>
            <p><strong>Native Place:</strong> " . html_escape($native) . "</p>
            <p><strong>Marital Status:</strong> " . html_escape($marital) . "</p>
            " . $children_section . "
            <p><strong>Partner Preference (Caste):</strong> " . html_escape($partnerprefer) . "</p>
            <p><strong>Hobbies:</strong> " . html_escape($hobby) . "</p>
            <p><strong>Do you like to read?:</strong> " . html_escape($read) . "</p>
            <p><strong>What kind of movies do you like?:</strong> " . $movie_str . "</p>
            <p><strong>What kind of music do you like?:</strong> " . $music_str . "</p>
            <p><strong>Do you play any sports?:</strong> " . html_escape($sport) . "</p>
            <p><strong>Sports Liking:</strong> " . $sportlik_str . "</p>

            <h3>***Lifestyle***</h3>
                <p><strong>Eating Habit:</strong> $eating</p>
                <p><strong>What are your favourite foods?:</strong> $favfood</p>
                <p><strong>What kind of places do you like to travel?:</strong> $travel</p>
                <p><strong>How much time you spend on social media:</strong> $social</p>
        
            <h3>***Family Information***</h3>
                <p><strong>Members of your family:</strong> $family</p>
                <p><strong>How is your relationship with your parents?:</strong> $relation</p>
                <p><strong>How much time do you spend with your family?:</strong> $timefam</p>
                <p><strong>What activities do you do with your family?:</strong> $actfam</p>
                <p><strong>What does marriage mean to you?:</strong> $marriage</p>
                <p><strong>What do you expect from your partner?:</strong> $exp</p>    
        
            <h3>***Future Plans (Career & Family)***</h3>
                <p><strong>What are your future goals?:</strong> $goal</p>
                <p><strong>What kind of career do you want to pursue?:</strong> $pursue</p>
                <p><strong>Do you want children?:</strong> $children</p>
                <p><strong>How many?:</strong> $many</p>
                <p><strong>What are your views on parenting styles and raising children?:</strong> $parsty</p>
                <p><strong>How do you envision dividing household chores and responsibilities?:</strong> $household</p>
                <p><strong>Would you mind if your partner had to travel for their job?:</strong> $traveljob</p>
                <p><strong>Would you mind if your partner had late meetings or night shifts?:</strong> $shift</p>
                <p><strong>What do you expect from your partner?:</strong> $partner</p>
                <p><strong>Your views about the friend circle of your partner:</strong> $friendcir</p>    

            <h3>***Additional Information***</h3>
            <p><strong>Any other information:</strong> " . html_escape($addon) . "</p>
        ";

        // Email send
        $this->email->from('email@nexmoves.in', 'Sobat Ayushybharasathi');
        $this->email->to('prachi@nexmoves.in');
        $this->email->subject('New Profile Information Submission');
        $this->email->message($message);

        if ($this->email->send()) {
            echo 'Message sent successfully';
        } else {
            log_message('error', 'Email send failed: ' . $this->email->print_debugger());
            echo 'Message sending failed. Please try again.';
        }
    }


    }
?>
