<?php namespace LD\Model;

class User
{
    public $id;
    public $email;
    public $password;
    public $first_name;
    public $last_name;
    public $date_created;

    /**
     * @param $id
     * @return \LD\Model\User|null
     */
    public static function withId($id)
    {
        $stmt = \LD\Helper\DB::instance()->prepare('
            SELECT id, email, first_name, last_name, date_created, password
            FROM Users
            WHERE id = :id
        ');
        $stmt->execute(array(':id' => $id));

        $instance = new self();
        $stmt->setFetchMode(\PDO::FETCH_INTO, $instance);
        $user = $stmt->fetch();

        return $user;
    }

    /**
     * @param string $email
     * @param string $password not hashed!
     * @return bool|\LD\Model\User
     */
    public static function withEmailAndPassword($email, $password)
    {
        $stmt = \LD\Helper\DB::instance()->prepare('
            SELECT id, email, first_name, last_name, date_created, password
            FROM Users
            WHERE email = :email
        ');
        $stmt->execute(array(':email' => strtolower($email)));

        $stmt->setFetchMode(\PDO::FETCH_INTO, new self());
        $user = $stmt->fetch();

        if ($user == false) {
            return false;
        }

        if (password_verify($password, $user->password)) {
            $app = \Slim\Slim::getInstance();
            $app->setEncryptedCookie('user_id', $user->id);
        } else {
            return false;
        }

        return $user;
    }

    public static function withSession()
    {
        $app = \Slim\Slim::getInstance();
        $user_id = $app->getEncryptedCookie('user_id');

        return User::withId($user_id);
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        return ucfirst($this->first_name) . ' ' . ucfirst($this->last_name);
    }

    public function getInitials()
    {
        return strtoupper(substr($this->first_name, 0, 1) . substr($this->last_name, 0, 1));
    }

}