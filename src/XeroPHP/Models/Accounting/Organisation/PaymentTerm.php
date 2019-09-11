<?php

namespace XeroPHP\Models\Accounting\Organisation;

use XeroPHP\Remote;

class PaymentTerm extends Remote\Model
{
     /**
      * Default payment terms for bills (accounts payable) – see Payment Terms.
      *
      * @property Bill[] Bills
      */

     /**
      * Default payment terms for sales invoices(accounts receivable) – see Payment Terms.
      *
      * @property Sale[] Sales
      */
     const DAYSAFTERBILLDATE = 'DAYSAFTERBILLDATE';

     const DAYSAFTERBILLMONTH = 'DAYSAFTERBILLMONTH';

     const OFCURRENTMONTH = 'OFCURRENTMONTH';

     const OFFOLLOWINGMONTH = 'OFFOLLOWINGMONTH';

    /**
     * Get the resource uri of the class (Contacts) etc.
     *
     * @return string
     */
    public static function getResourceURI()
    {
        return 'PaymentTerms';
    }

    /**
     * Get the root node name.  Just the unqualified classname.
     *
     * @return string
     */
    public static function getRootNodeName()
    {
        return 'PaymentTerm';
    }

    /**
     * Get the guid property.
     *
     * @return string
     */
    public static function getGUIDProperty()
    {
        return '';
    }

    /**
     * Get the stem of the API (core.xro) etc.
     *
     * @return string|null
     */
    public static function getAPIStem()
    {
        return Remote\URL::API_CORE;
    }

    /**
     * Get the supported methods.
     */
    public static function getSupportedMethods()
    {
        return [
        ];
    }

    /**
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Type
     *  [2] - PHP type
     *  [3] - Is an Array
     *  [4] - Saves directly.
     *
     * @return array
     */
    public static function getProperties()
    {
        return [
            'Bills' => [false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\Organisation\\Bill', false, false],
            'Sales' => [false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\Organisation\\Sale', false, false],
        ];
    }

    public static function isPageable()
    {
        return false;
    }

    /**
     * @return Bill
     */
    public function getBills()
    {
        return $this->_data['Bills'];
    }

    /**
     * @param Bill $value
     *
     * @return PaymentTerm
     */
    public function setBill(Bill $value)
    {
        $this->propertyUpdated('Bills', $value);
        $this->_data['Bills'] = $value;

        return $this;
    }

    /**
     * @return Sale
     */
    public function getSales()
    {
        return $this->_data['Sales'];
    }

    /**
     * @param Sale $value
     *
     * @return PaymentTerm
     */
    public function setSale(Sale $value)
    {
        $this->propertyUpdated('Sales', $value);
        $this->_data['Sales'] = $value;

        return $this;
    }
}
