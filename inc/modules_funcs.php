<?php
/*
 * modules_funcs.php
 * 
 * Copyright 2022 Metodi Tashev <admin@tashev-net.com>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */

function do_login()
{
    
    $acc = $_POST['account'];
    $pass = $_POST['password'];
    $show_msg=array(
        'error'=>array()
    );
    
    if (empty($acc) || empty($pass)) {
        $show_msg['error'][] = 'Some fields are empty!';
    } elseif (preg_match('/[^a-zA-Z0-9\\-_\.@\s]/', $acc) || preg_match('/[^a-zA-Z0-9\\-_\.@\s]/', $pass)) {
        $show_msg['error'][] = 'Invalid symbols!';
    } else {
        $sql = $conn->prepare("SELECT memb___id FROM MEMB_INFO WHERE memb___id='". $acc ."' AND memb__pwd='". $pass ."'");
        $sql->execute();
        $is_acc_pass = $sql->fetch(PDO::FETCH_ASSOC);
        
        if ($is_acc_pass == 0) {
            $show_msg['error'][] = 'Wrong Account or Password!';
        } else {
            $_SESSION['username'] = $acc;
            $_SESSION['password'] = $pass;
            header('Location: ?p=home');
        }
    }
    return $show_msg;
}

function do_registration()
{
    $acc = $_POST['account'];
    $pass = $_POST['password'];
    $repass = $_POST['repassword'];
    $mail = $_POST['email'];
    $sq = $_POST['question'];
    $sa = $_POST['answer'];
    $show_msg=array(
        'error'=>array()
    );
    $error=0;
    
    if (empty($acc) || empty($pass) || empty($repass) || empty($mail) || empty($sq) || empty($sa)) {
        $show_msg['error'][] = 'Some fields are empty!';
    } elseif (preg_match('/[^a-zA-Z0-9\\-_\.@\s]/', $acc) || preg_match('/[^a-zA-Z0-9\\-_\.@\s]/', $pass) || preg_match('/[^a-zA-Z0-9\\-_\.@\s]/', $repass) || preg_match('/[^a-zA-Z0-9\\-_\.@\s]/', $sq) || preg_match('/[^a-zA-Z0-9\\-_\.@\s]/', $sa)) {
        $show_msg['error'][] = 'Invalid symbols!';
    } elseif (!preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$/D', $mail)) {
        $show_msg['error'][] = 'Invalid Email address! Example: email@mail.com';
    } else {
        if (strlen($acc) < 4 || strlen($acc) > 10) {
            $show_msg['error'][] = 'Account need to be between 4-10 symbols!';
            $error=1;
        }
        if (strlen($pass) < 4 || strlen($pass) > 10) {
            $show_msg['error'][] = 'Password need to be between 4-10 symbols!';
            $error=1;
        }
        if ($pass!=$repass) {
            $show_msg['error'][] = 'The Passwords don&#39;t match!';
            $error=1;
        }
        if (strlen($mail) > 60) {
            $show_msg['error'][] = 'The Email Address can&#39;t be more than 60 symbols!';
            $error=1;
        }
        if ($sq==$sa) {
            $show_msg['error'][] = 'Secret Question and Answer must be different!';
            $error=1;
        }
        if (strlen($sq) < 6 || strlen($sq) > 10) {
            $show_msg['error'][] = 'Secret Question need to be between 6-10 symbols!';
            $error=1;
        }
        if (strlen($sa) < 6 || strlen($sa) > 10) {
            $show_msg['error'][] = 'Secret Answer need to be between 6-10 symbols!';
            $error=1;
        }
        if ($error===0) {
            $sql = $conn->prepare("SELECT memb___id FROM MEMB_INFO WHERE memb___id='". $acc ."' OR mail_addr='". $mail ."'");
            $sql->execute();
            $is_acc_mail = $sql->fetch(PDO::FETCH_ASSOC);
            
            if ($is_acc_mail!=0) {
                $show_msg['error'][] = 'This Account OR Email Address is already used!';
            } else {
                $conn->query("INSERT INTO MEMB_INFO (memb___id,memb__pwd,memb_name,sno__numb,post_code,addr_info,addr_deta,tel__numb,mail_addr,phon_numb,fpas_ques,fpas_answ,job__code,appl_days,modi_days,out__days,true_days,mail_chek,bloc_code,ctl1_code) VALUES ('". $acc ."','". $pass ."','Server','1111111111111','1234', '11111', '111111111','12343','". $mail ."', '0','". $sq ."','". $sa ."','1','2003-11-23', '2003-11-23', '2003-11-23', '2003-11-23', '1', '0', '1')");
                $show_msg['success'][0] = 'Thank you "'.$acc.'", your registration is complete.';
            }
        }
    }
    return $show_msg;
}
