<?php
/**
 * Created by PhpStorm.
 * User: chenjunchi
 * Date: 13/12/16
 * Time: 9:09 AM
 */


function get_db_config()
{
    if (getenv('IS_IN_HEROKU')) {
        $url = parse_url(getenv("DATABASE_URL"));

        return $db_config = [
            'connetion' => 'pgsql',
            'host' => $url["host"],
            'database'  => substr($url["path"], 1),
            'username'  => $url["user"],
            'password'  => $url["pass"],
        ];
    } else {
        return $db_config = [
            'connetion' => env('DB_CONNECTION', 'mysql'),
            'host' => env('DB_HOST', 'localhost'),
            'database'  => env('DB_DATABASE', 'forge'),
            'username'  => env('DB_USERNAME', 'forge'),
            'password'  => env('DB_PASSWORD', ''),
        ];
    }
}

function get_mail_config()
{
    if (getenv('IS_IN_HEROKU')) {
        return $mail_config = [
            'username' => getenv('MAIL_USERNAME'),
            'password' => getenv('MAIL_PASSWORD'),
            'domain'=>getenv('MAIL_DOMAIN'),
            'secret'=>getenv('MAIL_SECRET')
        ];
    } else {
        return $mail_config = [
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'domain'=>env('MAILGUN_DOMAIN'),
            'secret'=>env('MAILGUN_SECRET')
        ];
    }
}