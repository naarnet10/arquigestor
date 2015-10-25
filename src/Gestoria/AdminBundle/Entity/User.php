<?php

namespace Gestoria\AdminBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToMany;
use Symfony\Component\Yaml\Yaml;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

/**
 * @ORM\Entity(repositoryClass="Gestoria\AdminBundle\Repository\UserRepository")
 * @ORM\Table(name="users")
 */
class User implements UserInterface, \Serializable {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $lastName;

    /**
     * @Assert\Email()
     * @ORM\Column(type="string", length=100, unique=true)
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $password;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $salt;

    /**
     * @ORM\ManyToMany(targetEntity="Role")
     * @ORM\JoinTable(name="user_roles",
     *     joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="role_id", referencedColumnName="id")}
     * )
     */
    protected $user_roles;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $verified;

    public function __construct() {
        $this->user_roles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->salt = base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername() {
        return $this->email;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set lastName
     *
     * @param string lastName
     */
    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    /**
     * Get lastName
     *
     * @param string lastName
     */
    public function getLastName() {
        return  $this->lastName;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail() {
        return $this->email;
    }
    /**
     * Set verified
     *
     * @param boolean $verified
     */
    public function setVerified($verified) {
        $this->verified = $verified;
    }

    /**
     * Get verified
     *
     * @return boolean
     */
    public function getVerified() {
        return $this->verified;
    }


    

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password) {
        $confg = Yaml::parse(__DIR__ . '/../../../../app/config/security.yml');
        $params = $confg['security']['encoders']["Gestoria\\ConsultorBundle\\Entity\\User"];//Nombre de la clase hardcoded ya que si usas get_class($this) a veces regresa Proxies\__CG__\Apptibase\SafetyBundle\Entity\User
        $encode = new MessageDigestPasswordEncoder(
                $params['algorithm'], true, $params['iterations']
        );

        $this->password = $encode->encodePassword($password, $this->salt);
        //$this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     */
    public function setSalt($salt) {
        //$this->salt = $salt;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt() {
        return $this->salt;
    }

    /**
     * {@inheritdoc}
     */
    function eraseCredentials() {
        
    }

    /**
     * {@inheritdoc}
     */
    function equals(UserInterface $user) {
        return $user->getUsername() == $this->getUsername();
    }

    

    public function __toString() {
        return $this->name.' '.$this->lastName;
    }

    public function getRoles() {
        return $this->user_roles->toArray();
    }

    /**
     * Add user_roles
     *
     * @param Gestoria\ConsultorBundle\Entity\Role $userRoles
     */
    public function addRole(\Gestoria\ConsultorBundle\Entity\Role $userRoles) {
        $this->user_roles[] = $userRoles;
    }

    /**
     * Get user_roles
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getUserRoles() {
        return $this->user_roles;
    }

    public function setUserRoles($user_roles) {
        $this->user_roles = $user_roles;
    }


    public function getClass() {
        return "ConsultorBundle:User";
    }
    /**
     * Add user_roles
     *
     * @param \Gestoria\ConsultorBundle\Entity\Role $userRoles
     * @return User
     */
    public function addUserRole(\Gestoria\ConsultorBundle\Entity\Role $userRoles)
    {
        $this->user_roles[] = $userRoles;
    
        return $this;
    }

    /**
     * Remove user_roles
     *
     * @param \Gestoria\ConsultorBundle\Entity\Role $userRoles
     */
    public function removeUserRole(\Gestoria\ConsultorBundle\Entity\Role $userRoles)
    {
        $this->user_roles->removeElement($userRoles);
    }

    public function serialize()
    {
           return serialize($this->id);
    }

    public function unserialize($data)
    {
           $this->id = unserialize($data);
    }  
    
}