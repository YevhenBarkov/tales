<?php

namespace Src\DB;

use Src\Entity\Chapter;
use Src\Entity\Status;
use Src\Entity\Tag;
use Src\Entity\Tale;
use Src\Entity\User;
use Src\Entity\UserType;

class DBManager
{

    /**
     * @return array|null
     */
    public function getAllTales()
    {
        $con = PDOConnection::getConnection();
        $tales = null;
        $result = $con->query("SELECT * FROM tales");

        if ($result) {
            foreach ($result as $tale) {
                $tales[] = $this->extractTale($tale);
            }
        }
        $con = null;

        return $tales;
    }

    public function getUserByLogin($login)
    {
        $con = PDOConnection::getConnection();
        $stmt = $con->prepare("SELECT * FROM users WHERE login = ?");
        $resultUser = null;

        if ($stmt->execute(array($login))) {
            while ($row = $stmt->fetch()) {
                $resultUser = $this->extractUser($row);
            }
        }

        $some = null;
        $con = null;

        return $resultUser;
    }

    public function getUserByEmail($email)
    {
        $con = PDOConnection::getConnection();
        $stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
        $resultUser = null;

        if ($stmt->execute(array($email))) {
            while ($row = $stmt->fetch()) {
                $resultUser = $this->extractUser($row);
            }
        }

        $some = null;
        $con = null;

        return $resultUser;
    }

    public function insertUser(User $usr)
    {
        $con = PDOConnection::getConnection();
        $stmt = $con->prepare("INSERT INTO users(type_id, login, password, email) VALUES (?,?,?,?)");
        $resultUser = null;

        $stmt->execute(
            array(
                $usr->getUserType(),
                $usr->getLogin(),
                $usr->getPassword(),
                $usr->getEmail()));

        $some = null;
        $con = null;
    }

    //some util functions

    public function getUserById($id)
    {
        $con = PDOConnection::getConnection();
        $stmt = $con->prepare("SELECT * FROM users WHERE id = ?");
        $resultUser = null;

        if ($stmt->execute(array($id))) {
            while ($row = $stmt->fetch()) {
                $resultUser = $this->extractUser($row);
            }
        }

        $some = null;
        $con = null;

        return $resultUser;
    }

    public function getChapterById($id)
    {
        $con = PDOConnection::getConnection();
        $stmt = $con->prepare("SELECT * FROM chapters WHERE id = ?");
        $resultChapter = null;

        if ($stmt->execute(array($id))) {
            while ($row = $stmt->fetch()) {
                $resultChapter = $this->extractChapter($row);
            }
        }

        $some = null;
        $con = null;

        return $resultChapter;
    }

    public function getChaptersByTaleId($taleId)
    {
        $con = PDOConnection::getConnection();
        $stmt = $con->prepare("SELECT * FROM chapters WHERE tale_id = ?");
        /**
         * @var array
         */
        $resultChapter = null;

        if ($stmt->execute(array($taleId))) {
            while ($row = $stmt->fetch()) {
                $resultChapter[] = $this->extractChapter($row);
            }
        }

        $some = null;
        $con = null;

        return $resultChapter;
    }

    public function getStatusById($id)
    {
        $con = PDOConnection::getConnection();
        $stmt = $con->prepare("SELECT * FROM status WHERE id = ?");
        $resultStatus = null;

        if ($stmt->execute(array($id))) {
            while ($row = $stmt->fetch()) {
                $resultStatus = $this->extractStatus($row);
            }
        }

        $some = null;
        $con = null;

        return $resultStatus;
    }

    public function getTagById($id)
    {
        $con = PDOConnection::getConnection();
        $stmt = $con->prepare("SELECT * FROM tags WHERE id = ?");
        $resultTag = null;

        if ($stmt->execute(array($id))) {
            while ($row = $stmt->fetch()) {
                $resultTag = $this->extractTag($row);
            }
        }

        $some = null;
        $con = null;

        return $resultTag;
    }

    public function getTaleTags($taleId)
    {
        $con = PDOConnection::getConnection();
        $stmt = $con->prepare("SELECT * FROM tale_tags WHERE tale_id = ?");
        $taleTags = null;
        if ($stmt->execute(array($taleId))) {
            while ($row = $stmt->fetch()) {
                $taleTags[] = $this->getTagById($row[1]);
            }
        }

        $some = null;
        $con = null;

        return $taleTags;
    }

    public function getTaleById($id)
    {
        $con = PDOConnection::getConnection();
        $stmt = $con->prepare("SELECT * FROM tales WHERE id = ?");
        $resultTale = null;

        if ($stmt->execute(array($id))) {
            while ($row = $stmt->fetch()) {
                $resultTale = $this->extractTale($row);
            }
        }

        $some = null;
        $con = null;

        return $resultTale;
    }

    public function getUserTypeById($id)
    {
        $con = PDOConnection::getConnection();
        $stmt = $con->prepare("SELECT * FROM user_types WHERE id = ?");
        $resultUserType = null;

        if ($stmt->execute(array($id))) {
            while ($row = $stmt->fetch()) {
                $resultUserType = $this->extractUserType($row);
            }
        }

        $some = null;
        $con = null;

        return $resultUserType;
    }

    private function extractUser(array $rowFromDB)
    {
        $usr = new User();

        $usr->setId($rowFromDB[0]);
        $usr->setUserType($this->getUserById($rowFromDB[1]));
        $usr->setLogin($rowFromDB[2]);
        $usr->setPassword($rowFromDB[3]);
        $usr->setEmail($rowFromDB[4]);

        return $usr;
    }

    private function extractChapter(array $rowFromDB)
    {
        $chapter = new Chapter();

        $chapter->setId($rowFromDB[0]);
        $chapter->setTale($this->getTaleById($rowFromDB[1]));
        $chapter->setName($rowFromDB[2]);
        $chapter->setContent($rowFromDB[3]);
        $chapter->setCost($rowFromDB[4]);

        return $chapter;
    }

    private function extractTale(array $rowFromDB)
    {
        $tale = new Tale();

        $tale->setId($rowFromDB[0]);
        $tale->setUser($this->getUserById($rowFromDB[1]));
        $tale->setStatus($this->getStatusById($rowFromDB[2]));
        $tale->setName($rowFromDB[3]);
        $tale->setDescription($rowFromDB[4]);
        $tale->setCover($rowFromDB[5]);
        $tale->setTags($this->getTaleTags($rowFromDB[0]));

        return $tale;
    }

    //

    private function extractUserType(array $rowFromDB)
    {
        $type = new UserType();

        $type->setId($rowFromDB[0]);
        $type->setName($rowFromDB[1]);

        return $type;
    }

    private function extractStatus(array $rowFromDB)
    {
        $status = new Status();

        $status->setId($rowFromDB[0]);
        $status->setName($rowFromDB[1]);

        return $status;
    }

    private function extractTag(array $rowFromDB)
    {
        $tag = new Tag();

        $tag->setId($rowFromDB[0]);
        $tag->setName($rowFromDB[1]);

        return $tag;
    }
}