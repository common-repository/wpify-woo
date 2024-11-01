<?php

declare(strict_types=1);

namespace WpifyWoo\PacketeraSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaimWithPasswordAttributes StructType
 * @subpackage Structs
 */
class ClaimWithPasswordAttributes extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The number
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 24
     * @var string|null
     */
    protected ?string $number = null;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - pattern: |.*@.*\..*
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The phone
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - pattern: \s*(\+?42[01])?\s*[0-9]{3}\s*[0-9]{3}\s*[0-9]{3}\s*
     * @var string|null
     */
    protected ?string $phone = null;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - base: xsd:decimal
     * - fractionDigits: 2
     * @var float|null
     */
    protected ?float $value = null;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 3
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The eshop
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 64
     * @var string|null
     */
    protected ?string $eshop = null;
    /**
     * The consignCountry
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 2
     * @var string|null
     */
    protected ?string $consignCountry = null;
    /**
     * The sendEmailToCustomer
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $sendEmailToCustomer = null;
    /**
     * Constructor method for ClaimWithPasswordAttributes
     * @uses ClaimWithPasswordAttributes::setId()
     * @uses ClaimWithPasswordAttributes::setNumber()
     * @uses ClaimWithPasswordAttributes::setEmail()
     * @uses ClaimWithPasswordAttributes::setPhone()
     * @uses ClaimWithPasswordAttributes::setValue()
     * @uses ClaimWithPasswordAttributes::setCurrency()
     * @uses ClaimWithPasswordAttributes::setEshop()
     * @uses ClaimWithPasswordAttributes::setConsignCountry()
     * @uses ClaimWithPasswordAttributes::setSendEmailToCustomer()
     * @param string $id
     * @param string $number
     * @param string $email
     * @param string $phone
     * @param float $value
     * @param string $currency
     * @param string $eshop
     * @param string $consignCountry
     * @param bool $sendEmailToCustomer
     */
    public function __construct(?string $id = null, ?string $number = null, ?string $email = null, ?string $phone = null, ?float $value = null, ?string $currency = null, ?string $eshop = null, ?string $consignCountry = null, ?bool $sendEmailToCustomer = null)
    {
        $this
            ->setId($id)
            ->setNumber($number)
            ->setEmail($email)
            ->setPhone($phone)
            ->setValue($value)
            ->setCurrency($currency)
            ->setEshop($eshop)
            ->setConsignCountry($consignCountry)
            ->setSendEmailToCustomer($sendEmailToCustomer);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \WpifyWoo\PacketeraSDK\StructType\ClaimWithPasswordAttributes
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \WpifyWoo\PacketeraSDK\StructType\ClaimWithPasswordAttributes
     */
    public function setNumber(?string $number = null): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        // validation for constraint: maxLength(24)
        if (!is_null($number) && mb_strlen((string) $number) > 24) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 24', mb_strlen((string) $number)), __LINE__);
        }
        $this->number = $number;
        
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \WpifyWoo\PacketeraSDK\StructType\ClaimWithPasswordAttributes
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        // validation for constraint: pattern(|.*@.*\..*)
        if (!is_null($email) && !preg_match('/|.*@.*\\..*/', $email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /|.*@.*\\..*/', var_export($email, true)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get phone value
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }
    /**
     * Set phone value
     * @param string $phone
     * @return \WpifyWoo\PacketeraSDK\StructType\ClaimWithPasswordAttributes
     */
    public function setPhone(?string $phone = null): self
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        // validation for constraint: pattern(\s*(\+?42[01])?\s*[0-9]{3}\s*[0-9]{3}\s*[0-9]{3}\s*)
        if (!is_null($phone) && !preg_match('/\\s*(\\+?42[01])?\\s*[0-9]{3}\\s*[0-9]{3}\\s*[0-9]{3}\\s*/', $phone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /\\s*(\\+?42[01])?\\s*[0-9]{3}\\s*[0-9]{3}\\s*[0-9]{3}\\s*/', var_export($phone, true)), __LINE__);
        }
        $this->phone = $phone;
        
        return $this;
    }
    /**
     * Get value value
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param float $value
     * @return \WpifyWoo\PacketeraSDK\StructType\ClaimWithPasswordAttributes
     */
    public function setValue(?float $value = null): self
    {
        // validation for constraint: float
        if (!is_null($value) && !(is_float($value) || is_numeric($value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($value) && mb_strlen(mb_substr((string) $value, false !== mb_strpos((string) $value, '.') ? mb_strpos((string) $value, '.') + 1 : mb_strlen((string) $value))) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($value, true), mb_strlen(mb_substr((string) $value, mb_strpos((string) $value, '.') + 1))), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \WpifyWoo\PacketeraSDK\StructType\ClaimWithPasswordAttributes
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($currency) && mb_strlen((string) $currency) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get eshop value
     * @return string|null
     */
    public function getEshop(): ?string
    {
        return $this->eshop;
    }
    /**
     * Set eshop value
     * @param string $eshop
     * @return \WpifyWoo\PacketeraSDK\StructType\ClaimWithPasswordAttributes
     */
    public function setEshop(?string $eshop = null): self
    {
        // validation for constraint: string
        if (!is_null($eshop) && !is_string($eshop)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eshop, true), gettype($eshop)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($eshop) && mb_strlen((string) $eshop) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $eshop)), __LINE__);
        }
        $this->eshop = $eshop;
        
        return $this;
    }
    /**
     * Get consignCountry value
     * @return string|null
     */
    public function getConsignCountry(): ?string
    {
        return $this->consignCountry;
    }
    /**
     * Set consignCountry value
     * @param string $consignCountry
     * @return \WpifyWoo\PacketeraSDK\StructType\ClaimWithPasswordAttributes
     */
    public function setConsignCountry(?string $consignCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($consignCountry) && !is_string($consignCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consignCountry, true), gettype($consignCountry)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($consignCountry) && mb_strlen((string) $consignCountry) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $consignCountry)), __LINE__);
        }
        $this->consignCountry = $consignCountry;
        
        return $this;
    }
    /**
     * Get sendEmailToCustomer value
     * @return bool|null
     */
    public function getSendEmailToCustomer(): ?bool
    {
        return $this->sendEmailToCustomer;
    }
    /**
     * Set sendEmailToCustomer value
     * @param bool $sendEmailToCustomer
     * @return \WpifyWoo\PacketeraSDK\StructType\ClaimWithPasswordAttributes
     */
    public function setSendEmailToCustomer(?bool $sendEmailToCustomer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sendEmailToCustomer) && !is_bool($sendEmailToCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sendEmailToCustomer, true), gettype($sendEmailToCustomer)), __LINE__);
        }
        $this->sendEmailToCustomer = $sendEmailToCustomer;
        
        return $this;
    }
}
