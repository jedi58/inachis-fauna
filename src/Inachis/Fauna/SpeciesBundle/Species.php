<?php

namespace Inachis\Fauna\SpeciesBundle;

/**
 * Object for handling species entity
 * @Entity @Table
 */
class Species
{
    /**
     * @Id @Column(type="string", unique=true, nullable=false)
     * @GeneratedValue(strategy="UUID")
     * @var string
     */
    protected $id;
    /**
     * @Column(type="string", length=255, nullable=false)
     * @var string The name of the category
     */
    protected $name;
    /**
     * @Column(type="string", length=255, nullable=false)
     * @var string The name of the category
     */
    protected $latin;
    /**
     * @Column(type="string", length=255, nullable=false)
     * @var string The name of the category
     */
    protected $genus;
    /**
     * @Column(type="string", length=255, nullable=false)
     * @var string The name of the category
     */   
    protected $iucn;
    /**
     * Default constructor
     * @param string $name The name of the {@link Species}
     * @param string $latin The latin/scientific name for the {@link Species}
     * @param string $genus The UUID of the genus the {@link Species} belongs to
     * @param string $iucn The current IUCN status of the {@link Species}
     */
    public function __construct($name = '', $latin = '', $genus = '', $iucn = '')
    {
        $this->setName($name);
        $this->setLatin($latin);
        $this->setGenus($genus);
        $this->setIucn($iucn);
    }
    /**
     * Returns the {@link id} of the {@link Species}
     * @return string Returns the value of {@link id}
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Returns the {@link name} of the {@link Species}
     * @return string Returns the value of {@link name}
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Returns the {@link latin} name of the {@link Species}
     * @return string Returns the value of {@link latin}
     */
    public function getLatin()
    {
        return $this->latin;
    }
    /**
     * Returns the {@link genus} of the {@link Species}
     * @return string Returns the value of {@link genus}
     */
    public function getGenus()
    {
        return $this->genus;
    }
    /**
     * Returns the {@link iucn} status of the {@link Species}
     * @return string Returns the value of {@link iucn}
     */
    public function getIucn()
    {
        return $this->iucn;
    }
    /**
     * Sets the value of {@link id}
     * @param string $value The value to set
     */
    public function setId($value)
    {
        $this->id = $value;
    }
    /**
     * Sets the value of {@link name}
     * @param string $value The value to set
     */
    public function setName($value)
    {
        $this->name = $value;
    }
    /**
     * Sets the value of {@link latin}
     * @param string $value The value to set
     */
    public function setLatin($value)
    {
        $this->latin = $value;
    }
    /**
     * Sets the value of {@link genus}
     * @param string $value The value to set
     */
    public function setGenus($value)
    {
        $this->genus = $value;
    }
    /**
     * Sets the value of {@link iucn}
     * @param string $value The value to set
     */
    public function setIucn($value)
    {
        $this->iucn = $value;
    }
    /**
     * Returns the result of testing if the current {@link Species} is valid
     * @return string[] The array of errors from validating the entity
     */
    public function validate()
    {
        $errors = array();
        if (!$this->hasLatin()) { $errors[] = 'latin'; }
        if (!$this->hasGenus()) { $errors[] = 'genus'; }
        return $errors;
    }
    /**
     * Returns the result of checking of the {@link Species} has a latin name
     * @return bool The result of testing if {@link latin} is empty
     */
    public function hasLatin()
    {
        return !empty($this->getLatin());
    }
    /**
     * Returns the result of checking of the {@link Species} belongs to a genus
     * @return bool The result of checking if {@link genus} is empty
     */
    public function hasGenus()
    {
        return !empty($this->getGenus());
    }
}
