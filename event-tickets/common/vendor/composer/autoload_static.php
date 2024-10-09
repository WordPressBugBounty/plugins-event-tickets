<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3ae5bc47eb9353a360f97b3691e81473
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tribe\\' => 6,
            'TEC\\Event_Automator\\' => 20,
            'TEC\\Common\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tribe\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Tribe',
        ),
        'TEC\\Event_Automator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Common/Event_Automator',
        ),
        'TEC\\Common\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Common',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'TEC\\Common\\Admin\\Entities\\Base_Entity' => __DIR__ . '/../..' . '/src/Common/Admin/Entities/Base_Entity.php',
        'TEC\\Common\\Admin\\Entities\\Br' => __DIR__ . '/../..' . '/src/Common/Admin/Entities/Br.php',
        'TEC\\Common\\Admin\\Entities\\Container' => __DIR__ . '/../..' . '/src/Common/Admin/Entities/Container.php',
        'TEC\\Common\\Admin\\Entities\\Div' => __DIR__ . '/../..' . '/src/Common/Admin/Entities/Div.php',
        'TEC\\Common\\Admin\\Entities\\Element' => __DIR__ . '/../..' . '/src/Common/Admin/Entities/Element.php',
        'TEC\\Common\\Admin\\Entities\\Element_With_Children' => __DIR__ . '/../..' . '/src/Common/Admin/Entities/Element_With_Children.php',
        'TEC\\Common\\Admin\\Entities\\Field_Wrapper' => __DIR__ . '/../..' . '/src/Common/Admin/Entities/Field_Wrapper.php',
        'TEC\\Common\\Admin\\Entities\\H2' => __DIR__ . '/../..' . '/src/Common/Admin/Entities/H2.php',
        'TEC\\Common\\Admin\\Entities\\H3' => __DIR__ . '/../..' . '/src/Common/Admin/Entities/H3.php',
        'TEC\\Common\\Admin\\Entities\\Heading' => __DIR__ . '/../..' . '/src/Common/Admin/Entities/Heading.php',
        'TEC\\Common\\Admin\\Entities\\Image' => __DIR__ . '/../..' . '/src/Common/Admin/Entities/Image.php',
        'TEC\\Common\\Admin\\Entities\\Link' => __DIR__ . '/../..' . '/src/Common/Admin/Entities/Link.php',
        'TEC\\Common\\Admin\\Entities\\List_Item' => __DIR__ . '/../..' . '/src/Common/Admin/Entities/List_Item.php',
        'TEC\\Common\\Admin\\Entities\\Paragraph' => __DIR__ . '/../..' . '/src/Common/Admin/Entities/Paragraph.php',
        'TEC\\Common\\Admin\\Entities\\Plain_Text' => __DIR__ . '/../..' . '/src/Common/Admin/Entities/Plain_Text.php',
        'TEC\\Common\\Admin\\Entities\\Separator' => __DIR__ . '/../..' . '/src/Common/Admin/Entities/Separator.php',
        'TEC\\Common\\Admin\\Entities\\Unordered_List' => __DIR__ . '/../..' . '/src/Common/Admin/Entities/Unordered_List.php',
        'TEC\\Common\\Admin\\Entities\\Validate_Elements' => __DIR__ . '/../..' . '/src/Common/Admin/Entities/Validate_Elements.php',
        'TEC\\Common\\Admin\\Section' => __DIR__ . '/../..' . '/src/Common/Admin/Section.php',
        'TEC\\Common\\Admin\\Settings_Section' => __DIR__ . '/../..' . '/src/Common/Admin/Settings_Section.php',
        'TEC\\Common\\Admin\\Settings_Sidebar' => __DIR__ . '/../..' . '/src/Common/Admin/Settings_Sidebar.php',
        'TEC\\Common\\Configuration\\Configuration' => __DIR__ . '/../..' . '/src/Common/Configuration/Configuration.php',
        'TEC\\Common\\Configuration\\Configuration_Loader' => __DIR__ . '/../..' . '/src/Common/Configuration/Configuration_Loader.php',
        'TEC\\Common\\Configuration\\Configuration_Provider_Interface' => __DIR__ . '/../..' . '/src/Common/Configuration/Configuration_Provider_Interface.php',
        'TEC\\Common\\Configuration\\Constants_Provider' => __DIR__ . '/../..' . '/src/Common/Configuration/Constants_Provider.php',
        'TEC\\Common\\Context\\Post_Request_Type' => __DIR__ . '/../..' . '/src/Common/Context/Post_Request_Type.php',
        'TEC\\Common\\Contracts\\Container' => __DIR__ . '/../..' . '/src/Common/Contracts/Container.php',
        'TEC\\Common\\Contracts\\Provider\\Controller' => __DIR__ . '/../..' . '/src/Common/Contracts/Provider/Controller.php',
        'TEC\\Common\\Contracts\\Service_Provider' => __DIR__ . '/../..' . '/src/Common/Contracts/Service_Provider.php',
        'TEC\\Common\\Editor\\Full_Site\\Template_Utils' => __DIR__ . '/../..' . '/src/Common/Editor/Full_Site/Template_Utils.php',
        'TEC\\Common\\Exceptions\\Container_Exception' => __DIR__ . '/../..' . '/src/Common/Exceptions/Container_Exception.php',
        'TEC\\Common\\Exceptions\\Not_Bound_Exception' => __DIR__ . '/../..' . '/src/Common/Exceptions/Not_Bound_Exception.php',
        'TEC\\Common\\Integrations\\Integration_Abstract' => __DIR__ . '/../..' . '/src/Common/Integrations/Integration_Abstract.php',
        'TEC\\Common\\Integrations\\Plugin_Merge_Provider_Abstract' => __DIR__ . '/../..' . '/src/Common/Integrations/Plugin_Merge_Provider_Abstract.php',
        'TEC\\Common\\Integrations\\Provider' => __DIR__ . '/../..' . '/src/Common/Integrations/Provider.php',
        'TEC\\Common\\Integrations\\Traits\\Module_Integration' => __DIR__ . '/../..' . '/src/Common/Integrations/Traits/Module_Integration.php',
        'TEC\\Common\\Integrations\\Traits\\Plugin_Integration' => __DIR__ . '/../..' . '/src/Common/Integrations/Traits/Plugin_Integration.php',
        'TEC\\Common\\Integrations\\Traits\\Server_Integration' => __DIR__ . '/../..' . '/src/Common/Integrations/Traits/Server_Integration.php',
        'TEC\\Common\\Integrations\\Traits\\Theme_Integration' => __DIR__ . '/../..' . '/src/Common/Integrations/Traits/Theme_Integration.php',
        'TEC\\Common\\Libraries\\Installer\\Provider' => __DIR__ . '/../..' . '/src/Common/Libraries/Installer/Provider.php',
        'TEC\\Common\\Libraries\\Provider' => __DIR__ . '/../..' . '/src/Common/Libraries/Provider.php',
        'TEC\\Common\\Site_Health\\Factory' => __DIR__ . '/../..' . '/src/Common/Site_Health/Factory.php',
        'TEC\\Common\\Site_Health\\Fields\\Generic_Info_Field' => __DIR__ . '/../..' . '/src/Common/Site_Health/Fields/Generic_Info_Field.php',
        'TEC\\Common\\Site_Health\\Fields\\Post_Status_Count_Field' => __DIR__ . '/../..' . '/src/Common/Site_Health/Fields/Post_Status_Count_Field.php',
        'TEC\\Common\\Site_Health\\Info_Field_Abstract' => __DIR__ . '/../..' . '/src/Common/Site_Health/Info_Field_Abstract.php',
        'TEC\\Common\\Site_Health\\Info_Field_Interface' => __DIR__ . '/../..' . '/src/Common/Site_Health/Info_Field_Interface.php',
        'TEC\\Common\\Site_Health\\Info_Section_Abstract' => __DIR__ . '/../..' . '/src/Common/Site_Health/Info_Section_Abstract.php',
        'TEC\\Common\\Site_Health\\Info_Section_Interface' => __DIR__ . '/../..' . '/src/Common/Site_Health/Info_Section_Interface.php',
        'TEC\\Common\\Site_Health\\Provider' => __DIR__ . '/../..' . '/src/Common/Site_Health/Provider.php',
        'TEC\\Common\\Storage\\Timed_Option' => __DIR__ . '/../..' . '/src/Common/Storage/Timed_Option.php',
        'TEC\\Common\\Telemetry\\Migration' => __DIR__ . '/../..' . '/src/Common/Telemetry/Migration.php',
        'TEC\\Common\\Telemetry\\Opt_In' => __DIR__ . '/../..' . '/src/Common/Telemetry/Opt_In.php',
        'TEC\\Common\\Telemetry\\Provider' => __DIR__ . '/../..' . '/src/Common/Telemetry/Provider.php',
        'TEC\\Common\\Telemetry\\Telemetry' => __DIR__ . '/../..' . '/src/Common/Telemetry/Telemetry.php',
        'TEC\\Common\\Translations_Loader' => __DIR__ . '/../..' . '/src/Common/Translations_Loader.php',
        'TEC\\Event_Automator\\Admin\\Tabs\\Integrations' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Admin/Tabs/Integrations.php',
        'TEC\\Event_Automator\\Admin\\Tabs\\Tabs_Provider' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Admin/Tabs/Tabs_Provider.php',
        'TEC\\Event_Automator\\Hooks' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Hooks.php',
        'TEC\\Event_Automator\\Integrations\\Admin\\Abstract_Dashboard' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Integrations/Admin/Abstract_Dashboard.php',
        'TEC\\Event_Automator\\Integrations\\Admin\\Abstract_Endpoints_Manager' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Integrations/Admin/Abstract_Endpoints_Manager.php',
        'TEC\\Event_Automator\\Integrations\\Assets' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Integrations/Assets.php',
        'TEC\\Event_Automator\\Integrations\\Connections\\Integration_AJAX' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Integrations/Connections/Integration_AJAX.php',
        'TEC\\Event_Automator\\Integrations\\Connections\\Integration_Connections' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Integrations/Connections/Integration_Connections.php',
        'TEC\\Event_Automator\\Integrations\\Connections\\Integration_Settings' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Integrations/Connections/Integration_Settings.php',
        'TEC\\Event_Automator\\Integrations\\Connections\\Integration_Template_Modifications' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Integrations/Connections/Integration_Template_Modifications.php',
        'TEC\\Event_Automator\\Integrations\\Connections\\Integration_Url' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Integrations/Connections/Integration_Url.php',
        'TEC\\Event_Automator\\Integrations\\REST\\V1\\Documentation\\Integration_Swagger_Documentation' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Integrations/REST/V1/Documentation/Integration_Swagger_Documentation.php',
        'TEC\\Event_Automator\\Integrations\\REST\\V1\\Endpoints\\Queue\\Integration_REST_Endpoint' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Integrations/REST/V1/Endpoints/Queue/Integration_REST_Endpoint.php',
        'TEC\\Event_Automator\\Integrations\\REST\\V1\\Interfaces\\REST_Endpoint_Interface' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Integrations/REST/V1/Interfaces/REST_Endpoint_Interface.php',
        'TEC\\Event_Automator\\Integrations\\REST\\V1\\Utilities\\Action_Endpoints' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Integrations/REST/V1/Utilities/Action_Endpoints.php',
        'TEC\\Event_Automator\\Integrations\\Trigger_Queue\\Integration_Trigger_Queue' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Integrations/Trigger_Queue/Integration_Trigger_Queue.php',
        'TEC\\Event_Automator\\Plugin' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Plugin.php',
        'TEC\\Event_Automator\\Plugin_Register' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Plugin_Register.php',
        'TEC\\Event_Automator\\Power_Automate\\Actions' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/Actions.php',
        'TEC\\Event_Automator\\Power_Automate\\Admin\\Dashboard' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/Admin/Dashboard.php',
        'TEC\\Event_Automator\\Power_Automate\\Admin\\Endpoints_Manager' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/Admin/Endpoints_Manager.php',
        'TEC\\Event_Automator\\Power_Automate\\Api' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/Api.php',
        'TEC\\Event_Automator\\Power_Automate\\Power_Automate_Provider' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/Power_Automate_Provider.php',
        'TEC\\Event_Automator\\Power_Automate\\REST\\V1\\Documentation\\Swagger_Documentation' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/REST/V1/Documentation/Swagger_Documentation.php',
        'TEC\\Event_Automator\\Power_Automate\\REST\\V1\\Endpoints\\Abstract_REST_Endpoint' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/REST/V1/Endpoints/Abstract_REST_Endpoint.php',
        'TEC\\Event_Automator\\Power_Automate\\REST\\V1\\Endpoints\\Actions\\Create_Events' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/REST/V1/Endpoints/Actions/Create_Events.php',
        'TEC\\Event_Automator\\Power_Automate\\REST\\V1\\Endpoints\\Queue\\Attendees' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/REST/V1/Endpoints/Queue/Attendees.php',
        'TEC\\Event_Automator\\Power_Automate\\REST\\V1\\Endpoints\\Queue\\Canceled_Events' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/REST/V1/Endpoints/Queue/Canceled_Events.php',
        'TEC\\Event_Automator\\Power_Automate\\REST\\V1\\Endpoints\\Queue\\Checkin' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/REST/V1/Endpoints/Queue/Checkin.php',
        'TEC\\Event_Automator\\Power_Automate\\REST\\V1\\Endpoints\\Queue\\New_Events' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/REST/V1/Endpoints/Queue/New_Events.php',
        'TEC\\Event_Automator\\Power_Automate\\REST\\V1\\Endpoints\\Queue\\Orders' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/REST/V1/Endpoints/Queue/Orders.php',
        'TEC\\Event_Automator\\Power_Automate\\REST\\V1\\Endpoints\\Queue\\Refunded_Orders' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/REST/V1/Endpoints/Queue/Refunded_Orders.php',
        'TEC\\Event_Automator\\Power_Automate\\REST\\V1\\Endpoints\\Queue\\Updated_Attendees' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/REST/V1/Endpoints/Queue/Updated_Attendees.php',
        'TEC\\Event_Automator\\Power_Automate\\REST\\V1\\Endpoints\\Queue\\Updated_Events' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/REST/V1/Endpoints/Queue/Updated_Events.php',
        'TEC\\Event_Automator\\Power_Automate\\REST\\V1\\Traits\\REST_Namespace' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/REST/V1/Traits/REST_Namespace.php',
        'TEC\\Event_Automator\\Power_Automate\\Settings' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/Settings.php',
        'TEC\\Event_Automator\\Power_Automate\\Template_Modifications' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/Template_Modifications.php',
        'TEC\\Event_Automator\\Power_Automate\\Trigger_Queue\\Abstract_Trigger_Queue' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/Trigger_Queue/Abstract_Trigger_Queue.php',
        'TEC\\Event_Automator\\Power_Automate\\Triggers\\Attendees' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/Triggers/Attendees.php',
        'TEC\\Event_Automator\\Power_Automate\\Triggers\\Canceled_Events' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/Triggers/Canceled_Events.php',
        'TEC\\Event_Automator\\Power_Automate\\Triggers\\Checkin' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/Triggers/Checkin.php',
        'TEC\\Event_Automator\\Power_Automate\\Triggers\\New_Events' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/Triggers/New_Events.php',
        'TEC\\Event_Automator\\Power_Automate\\Triggers\\Orders' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/Triggers/Orders.php',
        'TEC\\Event_Automator\\Power_Automate\\Triggers\\Refunded_Orders' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/Triggers/Refunded_Orders.php',
        'TEC\\Event_Automator\\Power_Automate\\Triggers\\Updated_Attendees' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/Triggers/Updated_Attendees.php',
        'TEC\\Event_Automator\\Power_Automate\\Triggers\\Updated_Events' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/Triggers/Updated_Events.php',
        'TEC\\Event_Automator\\Power_Automate\\Url' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Power_Automate/Url.php',
        'TEC\\Event_Automator\\Service_Providers\\Context_Provider' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Service_Providers/Context_Provider.php',
        'TEC\\Event_Automator\\Templates\\Admin_Template' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Templates/Admin_Template.php',
        'TEC\\Event_Automator\\Traits\\Last_Access' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Traits/Last_Access.php',
        'TEC\\Event_Automator\\Traits\\Maps\\Attendees' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Traits/Maps/Attendees.php',
        'TEC\\Event_Automator\\Traits\\Maps\\Commerce\\EDD' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Traits/Maps/Commerce/EDD.php',
        'TEC\\Event_Automator\\Traits\\Maps\\Commerce\\Tickets_Commerce' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Traits/Maps/Commerce/Tickets_Commerce.php',
        'TEC\\Event_Automator\\Traits\\Maps\\Commerce\\WooCommerce' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Traits/Maps/Commerce/WooCommerce.php',
        'TEC\\Event_Automator\\Traits\\Maps\\Event' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Traits/Maps/Event.php',
        'TEC\\Event_Automator\\Traits\\Maps\\Ticket' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Traits/Maps/Ticket.php',
        'TEC\\Event_Automator\\Traits\\With_AJAX' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Traits/With_AJAX.php',
        'TEC\\Event_Automator\\Traits\\With_Nonce_Routes' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Traits/With_Nonce_Routes.php',
        'TEC\\Event_Automator\\Updater' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Updater.php',
        'TEC\\Event_Automator\\Zapier\\Abstract_API_Key_Api' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/Abstract_API_Key_Api.php',
        'TEC\\Event_Automator\\Zapier\\Actions' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/Actions.php',
        'TEC\\Event_Automator\\Zapier\\Admin\\Dashboard' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/Admin/Dashboard.php',
        'TEC\\Event_Automator\\Zapier\\Admin\\Endpoints_Manager' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/Admin/Endpoints_Manager.php',
        'TEC\\Event_Automator\\Zapier\\Api' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/Api.php',
        'TEC\\Event_Automator\\Zapier\\Assets' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/Assets.php',
        'TEC\\Event_Automator\\Zapier\\Privacy_Notice' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/Privacy_Notice.php',
        'TEC\\Event_Automator\\Zapier\\REST\\V1\\Documentation\\Swagger_Documentation' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/REST/V1/Documentation/Swagger_Documentation.php',
        'TEC\\Event_Automator\\Zapier\\REST\\V1\\Endpoints\\Abstract_REST_Endpoint' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/REST/V1/Endpoints/Abstract_REST_Endpoint.php',
        'TEC\\Event_Automator\\Zapier\\REST\\V1\\Endpoints\\Actions\\Create_Events' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/REST/V1/Endpoints/Actions/Create_Events.php',
        'TEC\\Event_Automator\\Zapier\\REST\\V1\\Endpoints\\Actions\\Find_Attendees' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/REST/V1/Endpoints/Actions/Find_Attendees.php',
        'TEC\\Event_Automator\\Zapier\\REST\\V1\\Endpoints\\Actions\\Find_Events' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/REST/V1/Endpoints/Actions/Find_Events.php',
        'TEC\\Event_Automator\\Zapier\\REST\\V1\\Endpoints\\Actions\\Find_Tickets' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/REST/V1/Endpoints/Actions/Find_Tickets.php',
        'TEC\\Event_Automator\\Zapier\\REST\\V1\\Endpoints\\Actions\\Update_Events' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/REST/V1/Endpoints/Actions/Update_Events.php',
        'TEC\\Event_Automator\\Zapier\\REST\\V1\\Endpoints\\Attendees' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/REST/V1/Endpoints/Attendees.php',
        'TEC\\Event_Automator\\Zapier\\REST\\V1\\Endpoints\\Authorize' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/REST/V1/Endpoints/Authorize.php',
        'TEC\\Event_Automator\\Zapier\\REST\\V1\\Endpoints\\Canceled_Events' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/REST/V1/Endpoints/Canceled_Events.php',
        'TEC\\Event_Automator\\Zapier\\REST\\V1\\Endpoints\\Checkin' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/REST/V1/Endpoints/Checkin.php',
        'TEC\\Event_Automator\\Zapier\\REST\\V1\\Endpoints\\New_Events' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/REST/V1/Endpoints/New_Events.php',
        'TEC\\Event_Automator\\Zapier\\REST\\V1\\Endpoints\\Orders' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/REST/V1/Endpoints/Orders.php',
        'TEC\\Event_Automator\\Zapier\\REST\\V1\\Endpoints\\Refunded_Orders' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/REST/V1/Endpoints/Refunded_Orders.php',
        'TEC\\Event_Automator\\Zapier\\REST\\V1\\Endpoints\\Updated_Attendees' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/REST/V1/Endpoints/Updated_Attendees.php',
        'TEC\\Event_Automator\\Zapier\\REST\\V1\\Endpoints\\Updated_Events' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/REST/V1/Endpoints/Updated_Events.php',
        'TEC\\Event_Automator\\Zapier\\REST\\V1\\Traits\\REST_Namespace' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/REST/V1/Traits/REST_Namespace.php',
        'TEC\\Event_Automator\\Zapier\\REST\\V1\\Utilities\\Action_Endpoints' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/REST/V1/Utilities/Action_Endpoints.php',
        'TEC\\Event_Automator\\Zapier\\Settings' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/Settings.php',
        'TEC\\Event_Automator\\Zapier\\Template_Modifications' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/Template_Modifications.php',
        'TEC\\Event_Automator\\Zapier\\Traits\\Last_Access' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/Traits/Last_Access.php',
        'TEC\\Event_Automator\\Zapier\\Trigger_Queue\\Abstract_Trigger_Queue' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/Trigger_Queue/Abstract_Trigger_Queue.php',
        'TEC\\Event_Automator\\Zapier\\Triggers\\Attendees' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/Triggers/Attendees.php',
        'TEC\\Event_Automator\\Zapier\\Triggers\\Canceled_Events' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/Triggers/Canceled_Events.php',
        'TEC\\Event_Automator\\Zapier\\Triggers\\Checkin' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/Triggers/Checkin.php',
        'TEC\\Event_Automator\\Zapier\\Triggers\\New_Events' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/Triggers/New_Events.php',
        'TEC\\Event_Automator\\Zapier\\Triggers\\Orders' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/Triggers/Orders.php',
        'TEC\\Event_Automator\\Zapier\\Triggers\\Refunded_Orders' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/Triggers/Refunded_Orders.php',
        'TEC\\Event_Automator\\Zapier\\Triggers\\Updated_Attendees' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/Triggers/Updated_Attendees.php',
        'TEC\\Event_Automator\\Zapier\\Triggers\\Updated_Events' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/Triggers/Updated_Events.php',
        'TEC\\Event_Automator\\Zapier\\Url' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/Url.php',
        'TEC\\Event_Automator\\Zapier\\Zapier_Provider' => __DIR__ . '/../..' . '/src/Common/Event_Automator/Zapier/Zapier_Provider.php',
        'Tribe\\Admin\\Conditional_Content\\Black_Friday' => __DIR__ . '/../..' . '/src/Tribe/Admin/Conditional_Content/Black_Friday.php',
        'Tribe\\Admin\\Conditional_Content\\Datetime_Conditional_Abstract' => __DIR__ . '/../..' . '/src/Tribe/Admin/Conditional_Content/Datetime_Conditional_Abstract.php',
        'Tribe\\Admin\\Conditional_Content\\End_Of_Year_Sale' => __DIR__ . '/../..' . '/src/Tribe/Admin/Conditional_Content/End_Of_Year_Sale.php',
        'Tribe\\Admin\\Conditional_Content\\Service_Provider' => __DIR__ . '/../..' . '/src/Tribe/Admin/Conditional_Content/Service_Provider.php',
        'Tribe\\Admin\\Notice\\Date_Based' => __DIR__ . '/../..' . '/src/Tribe/Admin/Notice/Date_Based.php',
        'Tribe\\Admin\\Notice\\Marketing\\Black_Friday' => __DIR__ . '/../..' . '/src/Tribe/Admin/Notice/Marketing/Black_Friday.php',
        'Tribe\\Admin\\Notice\\Marketing\\End_Of_Year_Sale' => __DIR__ . '/../..' . '/src/Tribe/Admin/Notice/Marketing/End_Of_Year_Sale.php',
        'Tribe\\Admin\\Notice\\Marketing\\Stellar_Sale' => __DIR__ . '/../..' . '/src/Tribe/Admin/Notice/Marketing/Stellar_Sale.php',
        'Tribe\\Admin\\Notice\\Service_Provider' => __DIR__ . '/../..' . '/src/Tribe/Admin/Notice/Service_Provider.php',
        'Tribe\\Admin\\Notice\\WP_Version' => __DIR__ . '/../..' . '/src/Tribe/Admin/Notice/WP_Version.php',
        'Tribe\\Admin\\Pages' => __DIR__ . '/../..' . '/src/Tribe/Admin/Pages.php',
        'Tribe\\Admin\\Settings' => __DIR__ . '/../..' . '/src/Tribe/Admin/Settings.php',
        'Tribe\\Admin\\Troubleshooting' => __DIR__ . '/../..' . '/src/Tribe/Admin/Troubleshooting.php',
        'Tribe\\Admin\\Upsell_Notice\\Main' => __DIR__ . '/../..' . '/src/Tribe/Admin/Upsell_Notice/Main.php',
        'Tribe\\Admin\\Wysiwyg' => __DIR__ . '/../..' . '/src/Tribe/Admin/Wysiwyg.php',
        'Tribe\\Customizer\\Control' => __DIR__ . '/../..' . '/src/Tribe/Customizer/Control.php',
        'Tribe\\Customizer\\Controls\\Heading' => __DIR__ . '/../..' . '/src/Tribe/Customizer/Controls/Heading.php',
        'Tribe\\Customizer\\Controls\\Number' => __DIR__ . '/../..' . '/src/Tribe/Customizer/Controls/Number.php',
        'Tribe\\Customizer\\Controls\\Radio' => __DIR__ . '/../..' . '/src/Tribe/Customizer/Controls/Radio.php',
        'Tribe\\Customizer\\Controls\\Range_Slider' => __DIR__ . '/../..' . '/src/Tribe/Customizer/Controls/Range_Slider.php',
        'Tribe\\Customizer\\Controls\\Separator' => __DIR__ . '/../..' . '/src/Tribe/Customizer/Controls/Separator.php',
        'Tribe\\Customizer\\Controls\\Toggle' => __DIR__ . '/../..' . '/src/Tribe/Customizer/Controls/Toggle.php',
        'Tribe\\DB_Lock' => __DIR__ . '/../..' . '/src/Tribe/DB_Lock.php',
        'Tribe\\Dialog\\View' => __DIR__ . '/../..' . '/src/Tribe/Dialog/View.php',
        'Tribe\\Editor\\Compatibility' => __DIR__ . '/../..' . '/src/Tribe/Editor/Compatibility.php',
        'Tribe\\Editor\\Compatibility\\Classic_Editor' => __DIR__ . '/../..' . '/src/Tribe/Editor/Compatibility/Classic_Editor.php',
        'Tribe\\Editor\\Compatibility\\Divi' => __DIR__ . '/../..' . '/src/Tribe/Editor/Compatibility/Divi.php',
        'Tribe\\Log\\Action_Logger' => __DIR__ . '/../..' . '/src/Tribe/Log/Action_Logger.php',
        'Tribe\\Log\\Canonical_Formatter' => __DIR__ . '/../..' . '/src/Tribe/Log/Canonical_Formatter.php',
        'Tribe\\Log\\Monolog_Logger' => __DIR__ . '/../..' . '/src/Tribe/Log/Monolog_Logger.php',
        'Tribe\\Log\\Service_Provider' => __DIR__ . '/../..' . '/src/Tribe/Log/Service_Provider.php',
        'Tribe\\Models\\Post_Types\\Base' => __DIR__ . '/../..' . '/src/Tribe/Models/Post_Types/Base.php',
        'Tribe\\Models\\Post_Types\\Nothing' => __DIR__ . '/../..' . '/src/Tribe/Models/Post_Types/Nothing.php',
        'Tribe\\Onboarding\\Hints_Abstract' => __DIR__ . '/../..' . '/src/Tribe/Onboarding/Hints_Abstract.php',
        'Tribe\\Onboarding\\Main' => __DIR__ . '/../..' . '/src/Tribe/Onboarding/Main.php',
        'Tribe\\Onboarding\\Tour_Abstract' => __DIR__ . '/../..' . '/src/Tribe/Onboarding/Tour_Abstract.php',
        'Tribe\\PUE\\Update_Prevention' => __DIR__ . '/../..' . '/src/Tribe/PUE/Update_Prevention.php',
        'Tribe\\Repository\\Core_Read_Interface' => __DIR__ . '/../..' . '/src/Tribe/Repository/Core_Read_Interface.php',
        'Tribe\\Repository\\Filter_Validation' => __DIR__ . '/../..' . '/src/Tribe/Repository/Filter_Validation.php',
        'Tribe\\Service_Providers\\Body_Classes' => __DIR__ . '/../..' . '/src/Tribe/Service_Providers/Body_Classes.php',
        'Tribe\\Service_Providers\\Crons' => __DIR__ . '/../..' . '/src/Tribe/Service_Providers/Crons.php',
        'Tribe\\Service_Providers\\Dialog' => __DIR__ . '/../..' . '/src/Tribe/Service_Providers/Dialog.php',
        'Tribe\\Service_Providers\\Onboarding' => __DIR__ . '/../..' . '/src/Tribe/Service_Providers/Onboarding.php',
        'Tribe\\Service_Providers\\PUE' => __DIR__ . '/../..' . '/src/Tribe/Service_Providers/PUE.php',
        'Tribe\\Service_Providers\\Shortcodes' => __DIR__ . '/../..' . '/src/Tribe/Service_Providers/Shortcodes.php',
        'Tribe\\Service_Providers\\Tooltip' => __DIR__ . '/../..' . '/src/Tribe/Service_Providers/Tooltip.php',
        'Tribe\\Service_Providers\\Widgets' => __DIR__ . '/../..' . '/src/Tribe/Service_Providers/Widgets.php',
        'Tribe\\Shortcode\\Manager' => __DIR__ . '/../..' . '/src/Tribe/Shortcode/Manager.php',
        'Tribe\\Shortcode\\Shortcode_Abstract' => __DIR__ . '/../..' . '/src/Tribe/Shortcode/Shortcode_Abstract.php',
        'Tribe\\Shortcode\\Shortcode_Interface' => __DIR__ . '/../..' . '/src/Tribe/Shortcode/Shortcode_Interface.php',
        'Tribe\\Shortcode\\Utils' => __DIR__ . '/../..' . '/src/Tribe/Shortcode/Utils.php',
        'Tribe\\Tooltip\\View' => __DIR__ . '/../..' . '/src/Tribe/Tooltip/View.php',
        'Tribe\\Traits\\Array_Access' => __DIR__ . '/../..' . '/src/Tribe/Traits/Array_Access.php',
        'Tribe\\Traits\\Cache_User' => __DIR__ . '/../..' . '/src/Tribe/Traits/Cache_User.php',
        'Tribe\\Traits\\With_DB_Lock' => __DIR__ . '/../..' . '/src/Tribe/Traits/With_DB_Lock.php',
        'Tribe\\Traits\\With_Meta_Updates_Handling' => __DIR__ . '/../..' . '/src/Tribe/Traits/With_Meta_Updates_Handling.php',
        'Tribe\\Traits\\With_Post_Attribute_Detection' => __DIR__ . '/../..' . '/src/Tribe/Traits/With_Post_Attribute_Detection.php',
        'Tribe\\Utils\\Body_Classes' => __DIR__ . '/../..' . '/src/Tribe/Utils/Body_Classes.php',
        'Tribe\\Utils\\Collection_Interface' => __DIR__ . '/../..' . '/src/Tribe/Utils/Collection_Interface.php',
        'Tribe\\Utils\\Collection_Trait' => __DIR__ . '/../..' . '/src/Tribe/Utils/Collection_Trait.php',
        'Tribe\\Utils\\Compatibility_Classes' => __DIR__ . '/../..' . '/src/Tribe/Utils/Compatibility_Classes.php',
        'Tribe\\Utils\\Date_I18n' => __DIR__ . '/../..' . '/src/Tribe/Utils/Date_I18n.php',
        'Tribe\\Utils\\Date_I18n_Immutable' => __DIR__ . '/../..' . '/src/Tribe/Utils/Date_I18n_Immutable.php',
        'Tribe\\Utils\\Element_Attributes' => __DIR__ . '/../..' . '/src/Tribe/Utils/Element_Attributes.php',
        'Tribe\\Utils\\Element_Classes' => __DIR__ . '/../..' . '/src/Tribe/Utils/Element_Classes.php',
        'Tribe\\Utils\\Lazy_Collection' => __DIR__ . '/../..' . '/src/Tribe/Utils/Lazy_Collection.php',
        'Tribe\\Utils\\Lazy_Events' => __DIR__ . '/../..' . '/src/Tribe/Utils/Lazy_Events.php',
        'Tribe\\Utils\\Lazy_String' => __DIR__ . '/../..' . '/src/Tribe/Utils/Lazy_String.php',
        'Tribe\\Utils\\Paths' => __DIR__ . '/../..' . '/src/Tribe/Utils/Paths.php',
        'Tribe\\Utils\\Post_Thumbnail' => __DIR__ . '/../..' . '/src/Tribe/Utils/Post_Thumbnail.php',
        'Tribe\\Utils\\Query' => __DIR__ . '/../..' . '/src/Tribe/Utils/Query.php',
        'Tribe\\Utils\\Strings' => __DIR__ . '/../..' . '/src/Tribe/Utils/Strings.php',
        'Tribe\\Utils\\Taxonomy' => __DIR__ . '/../..' . '/src/Tribe/Utils/Taxonomy.php',
        'Tribe\\Utils\\Theme_Compatibility' => __DIR__ . '/../..' . '/src/Tribe/Utils/Theme_Compatibility.php',
        'Tribe\\Values\\Abstract_Currency' => __DIR__ . '/../..' . '/src/Tribe/Values/Abstract_Currency.php',
        'Tribe\\Values\\Abstract_Value' => __DIR__ . '/../..' . '/src/Tribe/Values/Abstract_Value.php',
        'Tribe\\Values\\Currency_Interface' => __DIR__ . '/../..' . '/src/Tribe/Values/Currency_Interface.php',
        'Tribe\\Values\\Value_Calculation' => __DIR__ . '/../..' . '/src/Tribe/Values/Value_Calculation.php',
        'Tribe\\Values\\Value_Formatting' => __DIR__ . '/../..' . '/src/Tribe/Values/Value_Formatting.php',
        'Tribe\\Values\\Value_Interface' => __DIR__ . '/../..' . '/src/Tribe/Values/Value_Interface.php',
        'Tribe\\Values\\Value_Update' => __DIR__ . '/../..' . '/src/Tribe/Values/Value_Update.php',
        'Tribe\\Widget\\Manager' => __DIR__ . '/../..' . '/src/Tribe/Widget/Manager.php',
        'Tribe\\Widget\\Widget_Abstract' => __DIR__ . '/../..' . '/src/Tribe/Widget/Widget_Abstract.php',
        'Tribe\\Widget\\Widget_Interface' => __DIR__ . '/../..' . '/src/Tribe/Widget/Widget_Interface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3ae5bc47eb9353a360f97b3691e81473::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3ae5bc47eb9353a360f97b3691e81473::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3ae5bc47eb9353a360f97b3691e81473::$classMap;

        }, null, ClassLoader::class);
    }
}
