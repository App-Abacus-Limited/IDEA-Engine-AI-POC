<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjQ1U4YmljNXRGKzFNcHhoblB4eGE3UUdrd0VERE91Q0N3OTB6bHA2NzFsUmxDRCtWeEJnN2RxNUlaeGtrbnVISnJYT3JUVzF1dFRiY2UzbDRxWHJ6aVpaTXlzZmJqR0F5c0RqdHF4RjdzVXdzR3UvMGNxNitSRGtpd3ZDQXdIeHZZazNtdW01OVhuTGdXSThSQnpvemxvPQ==*/
// This file was auto-generated from sdk-root/src/data/appconfigdata/2021-11-11/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2021-11-11', 'endpointPrefix' => 'appconfigdata', 'jsonVersion' => '1.0', 'protocol' => 'rest-json', 'serviceFullName' => 'AWS AppConfig Data', 'serviceId' => 'AppConfigData', 'signatureVersion' => 'v4', 'signingName' => 'appconfig', 'uid' => 'appconfigdata-2021-11-11', ], 'operations' => [ 'GetLatestConfiguration' => [ 'name' => 'GetLatestConfiguration', 'http' => [ 'method' => 'GET', 'requestUri' => '/configuration', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetLatestConfigurationRequest', ], 'output' => [ 'shape' => 'GetLatestConfigurationResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalServerException', ], ], ], 'StartConfigurationSession' => [ 'name' => 'StartConfigurationSession', 'http' => [ 'method' => 'POST', 'requestUri' => '/configurationsessions', 'responseCode' => 201, ], 'input' => [ 'shape' => 'StartConfigurationSessionRequest', ], 'output' => [ 'shape' => 'StartConfigurationSessionResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalServerException', ], ], ], ], 'shapes' => [ 'BadRequestDetails' => [ 'type' => 'structure', 'members' => [ 'InvalidParameters' => [ 'shape' => 'InvalidParameterMap', ], ], 'union' => true, ], 'BadRequestException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], 'Reason' => [ 'shape' => 'BadRequestReason', ], 'Details' => [ 'shape' => 'BadRequestDetails', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'BadRequestReason' => [ 'type' => 'string', 'enum' => [ 'InvalidParameters', ], ], 'GetLatestConfigurationRequest' => [ 'type' => 'structure', 'required' => [ 'ConfigurationToken', ], 'members' => [ 'ConfigurationToken' => [ 'shape' => 'Token', 'location' => 'querystring', 'locationName' => 'configuration_token', ], ], ], 'GetLatestConfigurationResponse' => [ 'type' => 'structure', 'members' => [ 'NextPollConfigurationToken' => [ 'shape' => 'Token', 'location' => 'header', 'locationName' => 'Next-Poll-Configuration-Token', ], 'NextPollIntervalInSeconds' => [ 'shape' => 'Integer', 'location' => 'header', 'locationName' => 'Next-Poll-Interval-In-Seconds', ], 'ContentType' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'Content-Type', ], 'Configuration' => [ 'shape' => 'SyntheticGetLatestConfigurationResponseBlob', ], ], 'payload' => 'Configuration', ], 'Identifier' => [ 'type' => 'string', 'max' => 64, 'min' => 1, ], 'Integer' => [ 'type' => 'integer', ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], 'InvalidParameterDetail' => [ 'type' => 'structure', 'members' => [ 'Problem' => [ 'shape' => 'InvalidParameterProblem', ], ], ], 'InvalidParameterMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'String', ], 'value' => [ 'shape' => 'InvalidParameterDetail', ], ], 'InvalidParameterProblem' => [ 'type' => 'string', 'enum' => [ 'Corrupted', 'Expired', 'PollIntervalNotSatisfied', ], ], 'OptionalPollSeconds' => [ 'type' => 'integer', 'box' => true, 'max' => 86400, 'min' => 15, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], 'ResourceType' => [ 'shape' => 'ResourceType', ], 'ReferencedBy' => [ 'shape' => 'StringMap', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'ResourceType' => [ 'type' => 'string', 'enum' => [ 'Application', 'ConfigurationProfile', 'Deployment', 'Environment', 'Configuration', ], ], 'StartConfigurationSessionRequest' => [ 'type' => 'structure', 'required' => [ 'ApplicationIdentifier', 'EnvironmentIdentifier', 'ConfigurationProfileIdentifier', ], 'members' => [ 'ApplicationIdentifier' => [ 'shape' => 'Identifier', ], 'EnvironmentIdentifier' => [ 'shape' => 'Identifier', ], 'ConfigurationProfileIdentifier' => [ 'shape' => 'Identifier', ], 'RequiredMinimumPollIntervalInSeconds' => [ 'shape' => 'OptionalPollSeconds', ], ], ], 'StartConfigurationSessionResponse' => [ 'type' => 'structure', 'members' => [ 'InitialConfigurationToken' => [ 'shape' => 'Token', ], ], ], 'String' => [ 'type' => 'string', ], 'StringMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'String', ], 'value' => [ 'shape' => 'String', ], ], 'SyntheticGetLatestConfigurationResponseBlob' => [ 'type' => 'blob', 'sensitive' => true, ], 'ThrottlingException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], 'Token' => [ 'type' => 'string', 'pattern' => '\\S{1,8192}', ], ],];