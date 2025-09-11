<?php

namespace XeroPHP\Models\PracticeManager;

use XeroPHP\Models\PracticeManager\Client\AccountManager;
use XeroPHP\Models\PracticeManager\Client\AutoBasOptInCriteria;
use XeroPHP\Models\PracticeManager\Client\BillingClient;
use XeroPHP\Models\PracticeManager\Client\Contact;
use XeroPHP\Models\PracticeManager\Client\Group;
use XeroPHP\Models\PracticeManager\Client\JobManager;
use XeroPHP\Models\PracticeManager\Client\Note;
use XeroPHP\Models\PracticeManager\Client\Relationship;
use XeroPHP\Models\PracticeManager\Client\Type;

/**
 * @property string ID
 * @property string Name
 * @property string Title
 * @property string FirstName
 * @property string LastName
 * @property string OtherName
 * @property string DateOfBirth
 * @property string Email
 * @property string Address
 * @property string City
 * @property string Region
 * @property string PostCode
 * @property string Country
 * @property string PostalAddress
 * @property string PostalCity
 * @property string PostalRegion
 * @property string PostalPostCode
 * @property string PostalCountry
 * @property string Phone
 * @property string Fax
 * @property string Website
 * @property string ReferralSource
 * @property string ExportCode
 * @property string IsProspect
 * @property string IsDeleted
 * @property string IsArchived
 * where the tax number is masked with *** except last 3 digits
 * @property string TaxNumber
 * @property string CompanyNumber
 * @property string BusinessNumber
 * @property string BranchNumber
 * e.g. Individual, Company, Trust, etc
 * @property string BusinessStructure
 * @property string BalanceMonth
 * Yes or No
 * @property string PrepareGST
 * Yes or No
 * @property string GSTRegistered
 * Monthly, 2 Monthly, 6 Monthly
 * @property string GSTPeriod
 * Invoice, Payment, Hybrid
 * @property string GSTBasis
 * Standard Option, Estimate Option, Ratio Option
 * @property string ProvisionalTaxBasis
 * @property string ProvisionalTaxRatio
 * Yes or No
 * @property string SignedTaxAuthority
 * @property string TaxAgent
 * With EOT, Without EOT, Unlinked
 * @property string AgencyStatus
 * IR3, IR3NR, IR4, IR6, IR7, IR9, PTS
 * @property string ReturnType
 * The following fields apply to AU clients only
 * Yes or No
 * @property string PrepareActivityStatement
 * Yes or No
 * @property string PrepareTaxReturn
 * @property string ActiveAtoClient
 * @property string ClientCode
 *
 * Related Objects
 * @property Contact[] Contacts
 * @property AccountManager AccountManager
 * @property JobManager JobManager
 * @property AutoBasOptInCriteria AutoBasOptInCriteria
 * @property Type Type
 * @property BillingClient BillingClient
 * @property Note[] Notes
 * @property Group[] Groups
 * @property Relationship[] Relationship
 */
class PagedClient extends Client
{
    /**
     * Get the resource uri of the class (Clients) etc.
     */
    public static function getResourceURI(): string
    {
        return 'client.api/paged-list';
    }

    public static function isPageable(): bool
    {
        return true;
    }
}
