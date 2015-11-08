<?php
// This file was auto-generated from sdk-root/src/data/cloudtrail/2013-11-01/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2013-11-01', 'endpointPrefix' => 'cloudtrail', 'jsonVersion' => '1.1', 'serviceAbbreviation' => 'CloudTrail', 'serviceFullName' => 'AWS CloudTrail', 'signatureVersion' => 'v4', 'targetPrefix' => 'com.amazonaws.cloudtrail.v20131101.CloudTrail_20131101', 'protocol' => 'json', ], 'operations' => [ 'AddTags' => [ 'name' => 'AddTags', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'AddTagsRequest', ], 'output' => [ 'shape' => 'AddTagsResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', 'error' => [ 'code' => 'ResourceNotFound', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'CloudTrailARNInvalidException', 'error' => [ 'code' => 'CloudTrailARNInvalid', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'ResourceTypeNotSupportedException', 'error' => [ 'code' => 'ResourceTypeNotSupported', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'TagsLimitExceededException', 'error' => [ 'code' => 'TagsLimitExceeded', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidTrailNameException', 'error' => [ 'code' => 'InvalidTrailName', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidTagParameterException', 'error' => [ 'code' => 'InvalidTagParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'UnsupportedOperationException', 'error' => [ 'code' => 'UnsupportedOperation', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'OperationNotPermittedException', 'error' => [ 'code' => 'OperationNotPermitted', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ], ], 'CreateTrail' => [ 'name' => 'CreateTrail', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateTrailRequest', ], 'output' => [ 'shape' => 'CreateTrailResponse', ], 'errors' => [ [ 'shape' => 'MaximumNumberOfTrailsExceededException', 'error' => [ 'code' => 'MaximumNumberOfTrailsExceeded', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'TrailAlreadyExistsException', 'error' => [ 'code' => 'TrailAlreadyExists', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'S3BucketDoesNotExistException', 'error' => [ 'code' => 'S3BucketDoesNotExist', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InsufficientS3BucketPolicyException', 'error' => [ 'code' => 'InsufficientS3BucketPolicy', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InsufficientSnsTopicPolicyException', 'error' => [ 'code' => 'InsufficientSnsTopicPolicy', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InsufficientEncryptionPolicyException', 'error' => [ 'code' => 'InsufficientEncryptionPolicy', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidS3BucketNameException', 'error' => [ 'code' => 'InvalidS3BucketName', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidS3PrefixException', 'error' => [ 'code' => 'InvalidS3Prefix', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidSnsTopicNameException', 'error' => [ 'code' => 'InvalidSnsTopicName', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidKmsKeyIdException', 'error' => [ 'code' => 'InvalidKmsKeyId', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidTrailNameException', 'error' => [ 'code' => 'InvalidTrailName', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'TrailNotProvidedException', 'error' => [ 'code' => 'TrailNotProvided', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'KmsKeyNotFoundException', 'error' => [ 'code' => 'KmsKeyNotFound', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'KmsKeyDisabledException', 'error' => [ 'code' => 'KmsKeyDisabled', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidCloudWatchLogsLogGroupArnException', 'error' => [ 'code' => 'InvalidCloudWatchLogsLogGroupArn', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidCloudWatchLogsRoleArnException', 'error' => [ 'code' => 'InvalidCloudWatchLogsRoleArn', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'CloudWatchLogsDeliveryUnavailableException', 'error' => [ 'code' => 'CloudWatchLogsDeliveryUnavailable', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'UnsupportedOperationException', 'error' => [ 'code' => 'UnsupportedOperation', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'OperationNotPermittedException', 'error' => [ 'code' => 'OperationNotPermitted', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ], ], 'DeleteTrail' => [ 'name' => 'DeleteTrail', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteTrailRequest', ], 'output' => [ 'shape' => 'DeleteTrailResponse', ], 'errors' => [ [ 'shape' => 'TrailNotFoundException', 'error' => [ 'code' => 'TrailNotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidTrailNameException', 'error' => [ 'code' => 'InvalidTrailName', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ], ], 'DescribeTrails' => [ 'name' => 'DescribeTrails', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeTrailsRequest', ], 'output' => [ 'shape' => 'DescribeTrailsResponse', ], 'errors' => [ [ 'shape' => 'UnsupportedOperationException', 'error' => [ 'code' => 'UnsupportedOperation', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'OperationNotPermittedException', 'error' => [ 'code' => 'OperationNotPermitted', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ], ], 'GetTrailStatus' => [ 'name' => 'GetTrailStatus', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetTrailStatusRequest', ], 'output' => [ 'shape' => 'GetTrailStatusResponse', ], 'errors' => [ [ 'shape' => 'TrailNotFoundException', 'error' => [ 'code' => 'TrailNotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidTrailNameException', 'error' => [ 'code' => 'InvalidTrailName', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ], ], 'ListPublicKeys' => [ 'name' => 'ListPublicKeys', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListPublicKeysRequest', ], 'output' => [ 'shape' => 'ListPublicKeysResponse', ], 'errors' => [ [ 'shape' => 'InvalidTimeRangeException', 'error' => [ 'code' => 'InvalidTimeRange', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'UnsupportedOperationException', 'error' => [ 'code' => 'UnsupportedOperation', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'OperationNotPermittedException', 'error' => [ 'code' => 'OperationNotPermitted', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidTokenException', 'error' => [ 'code' => 'InvalidToken', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ], ], 'ListTags' => [ 'name' => 'ListTags', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListTagsRequest', ], 'output' => [ 'shape' => 'ListTagsResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', 'error' => [ 'code' => 'ResourceNotFound', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'CloudTrailARNInvalidException', 'error' => [ 'code' => 'CloudTrailARNInvalid', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'ResourceTypeNotSupportedException', 'error' => [ 'code' => 'ResourceTypeNotSupported', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidTrailNameException', 'error' => [ 'code' => 'InvalidTrailName', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'UnsupportedOperationException', 'error' => [ 'code' => 'UnsupportedOperation', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'OperationNotPermittedException', 'error' => [ 'code' => 'OperationNotPermitted', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidTokenException', 'error' => [ 'code' => 'InvalidToken', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ], ], 'LookupEvents' => [ 'name' => 'LookupEvents', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'LookupEventsRequest', ], 'output' => [ 'shape' => 'LookupEventsResponse', ], 'errors' => [ [ 'shape' => 'InvalidLookupAttributesException', 'error' => [ 'code' => 'InvalidLookupAttributes', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidTimeRangeException', 'error' => [ 'code' => 'InvalidTimeRange', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidMaxResultsException', 'error' => [ 'code' => 'InvalidMaxResults', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidNextTokenException', 'error' => [ 'code' => 'InvalidNextToken', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ], ], 'RemoveTags' => [ 'name' => 'RemoveTags', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'RemoveTagsRequest', ], 'output' => [ 'shape' => 'RemoveTagsResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', 'error' => [ 'code' => 'ResourceNotFound', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'CloudTrailARNInvalidException', 'error' => [ 'code' => 'CloudTrailARNInvalid', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'ResourceTypeNotSupportedException', 'error' => [ 'code' => 'ResourceTypeNotSupported', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidTrailNameException', 'error' => [ 'code' => 'InvalidTrailName', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidTagParameterException', 'error' => [ 'code' => 'InvalidTagParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'UnsupportedOperationException', 'error' => [ 'code' => 'UnsupportedOperation', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'OperationNotPermittedException', 'error' => [ 'code' => 'OperationNotPermitted', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ], ], 'StartLogging' => [ 'name' => 'StartLogging', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartLoggingRequest', ], 'output' => [ 'shape' => 'StartLoggingResponse', ], 'errors' => [ [ 'shape' => 'TrailNotFoundException', 'error' => [ 'code' => 'TrailNotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidTrailNameException', 'error' => [ 'code' => 'InvalidTrailName', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ], ], 'StopLogging' => [ 'name' => 'StopLogging', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StopLoggingRequest', ], 'output' => [ 'shape' => 'StopLoggingResponse', ], 'errors' => [ [ 'shape' => 'TrailNotFoundException', 'error' => [ 'code' => 'TrailNotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidTrailNameException', 'error' => [ 'code' => 'InvalidTrailName', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ], ], 'UpdateTrail' => [ 'name' => 'UpdateTrail', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateTrailRequest', ], 'output' => [ 'shape' => 'UpdateTrailResponse', ], 'errors' => [ [ 'shape' => 'S3BucketDoesNotExistException', 'error' => [ 'code' => 'S3BucketDoesNotExist', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InsufficientS3BucketPolicyException', 'error' => [ 'code' => 'InsufficientS3BucketPolicy', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InsufficientSnsTopicPolicyException', 'error' => [ 'code' => 'InsufficientSnsTopicPolicy', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InsufficientEncryptionPolicyException', 'error' => [ 'code' => 'InsufficientEncryptionPolicy', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'TrailNotFoundException', 'error' => [ 'code' => 'TrailNotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidS3BucketNameException', 'error' => [ 'code' => 'InvalidS3BucketName', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidS3PrefixException', 'error' => [ 'code' => 'InvalidS3Prefix', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidSnsTopicNameException', 'error' => [ 'code' => 'InvalidSnsTopicName', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidKmsKeyIdException', 'error' => [ 'code' => 'InvalidKmsKeyId', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidTrailNameException', 'error' => [ 'code' => 'InvalidTrailName', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'TrailNotProvidedException', 'error' => [ 'code' => 'TrailNotProvided', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'KmsKeyNotFoundException', 'error' => [ 'code' => 'KmsKeyNotFound', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'KmsKeyDisabledException', 'error' => [ 'code' => 'KmsKeyDisabled', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidCloudWatchLogsLogGroupArnException', 'error' => [ 'code' => 'InvalidCloudWatchLogsLogGroupArn', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidCloudWatchLogsRoleArnException', 'error' => [ 'code' => 'InvalidCloudWatchLogsRoleArn', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'CloudWatchLogsDeliveryUnavailableException', 'error' => [ 'code' => 'CloudWatchLogsDeliveryUnavailable', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'UnsupportedOperationException', 'error' => [ 'code' => 'UnsupportedOperation', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'OperationNotPermittedException', 'error' => [ 'code' => 'OperationNotPermitted', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ], ], ], 'shapes' => [ 'AddTagsRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceId', ], 'members' => [ 'ResourceId' => [ 'shape' => 'String', ], 'TagsList' => [ 'shape' => 'TagsList', ], ], ], 'AddTagsResponse' => [ 'type' => 'structure', 'members' => [], ], 'Boolean' => [ 'type' => 'boolean', ], 'ByteBuffer' => [ 'type' => 'blob', ], 'CloudTrailARNInvalidException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'CloudTrailARNInvalid', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'CloudWatchLogsDeliveryUnavailableException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'CloudWatchLogsDeliveryUnavailable', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'CreateTrailRequest' => [ 'type' => 'structure', 'required' => [ 'Name', 'S3BucketName', ], 'members' => [ 'Name' => [ 'shape' => 'String', ], 'S3BucketName' => [ 'shape' => 'String', ], 'S3KeyPrefix' => [ 'shape' => 'String', ], 'SnsTopicName' => [ 'shape' => 'String', ], 'IncludeGlobalServiceEvents' => [ 'shape' => 'Boolean', ], 'EnableLogFileValidation' => [ 'shape' => 'Boolean', ], 'CloudWatchLogsLogGroupArn' => [ 'shape' => 'String', ], 'CloudWatchLogsRoleArn' => [ 'shape' => 'String', ], 'KmsKeyId' => [ 'shape' => 'String', ], ], ], 'CreateTrailResponse' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'String', ], 'S3BucketName' => [ 'shape' => 'String', ], 'S3KeyPrefix' => [ 'shape' => 'String', ], 'SnsTopicName' => [ 'shape' => 'String', ], 'IncludeGlobalServiceEvents' => [ 'shape' => 'Boolean', ], 'TrailARN' => [ 'shape' => 'String', ], 'LogFileValidationEnabled' => [ 'shape' => 'Boolean', ], 'CloudWatchLogsLogGroupArn' => [ 'shape' => 'String', ], 'CloudWatchLogsRoleArn' => [ 'shape' => 'String', ], 'KmsKeyId' => [ 'shape' => 'String', ], ], ], 'Date' => [ 'type' => 'timestamp', ], 'DeleteTrailRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'String', ], ], ], 'DeleteTrailResponse' => [ 'type' => 'structure', 'members' => [], ], 'DescribeTrailsRequest' => [ 'type' => 'structure', 'members' => [ 'trailNameList' => [ 'shape' => 'TrailNameList', ], ], ], 'DescribeTrailsResponse' => [ 'type' => 'structure', 'members' => [ 'trailList' => [ 'shape' => 'TrailList', ], ], ], 'Event' => [ 'type' => 'structure', 'members' => [ 'EventId' => [ 'shape' => 'String', ], 'EventName' => [ 'shape' => 'String', ], 'EventTime' => [ 'shape' => 'Date', ], 'Username' => [ 'shape' => 'String', ], 'Resources' => [ 'shape' => 'ResourceList', ], 'CloudTrailEvent' => [ 'shape' => 'String', ], ], ], 'EventsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Event', ], ], 'GetTrailStatusRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'String', ], ], ], 'GetTrailStatusResponse' => [ 'type' => 'structure', 'members' => [ 'IsLogging' => [ 'shape' => 'Boolean', ], 'LatestDeliveryError' => [ 'shape' => 'String', ], 'LatestNotificationError' => [ 'shape' => 'String', ], 'LatestDeliveryTime' => [ 'shape' => 'Date', ], 'LatestNotificationTime' => [ 'shape' => 'Date', ], 'StartLoggingTime' => [ 'shape' => 'Date', ], 'StopLoggingTime' => [ 'shape' => 'Date', ], 'LatestCloudWatchLogsDeliveryError' => [ 'shape' => 'String', ], 'LatestCloudWatchLogsDeliveryTime' => [ 'shape' => 'Date', ], 'LatestDigestDeliveryTime' => [ 'shape' => 'Date', ], 'LatestDigestDeliveryError' => [ 'shape' => 'String', ], 'LatestDeliveryAttemptTime' => [ 'shape' => 'String', ], 'LatestNotificationAttemptTime' => [ 'shape' => 'String', ], 'LatestNotificationAttemptSucceeded' => [ 'shape' => 'String', ], 'LatestDeliveryAttemptSucceeded' => [ 'shape' => 'String', ], 'TimeLoggingStarted' => [ 'shape' => 'String', ], 'TimeLoggingStopped' => [ 'shape' => 'String', ], ], ], 'InsufficientEncryptionPolicyException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'InsufficientEncryptionPolicy', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InsufficientS3BucketPolicyException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'InsufficientS3BucketPolicy', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'InsufficientSnsTopicPolicyException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'InsufficientSnsTopicPolicy', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'InvalidCloudWatchLogsLogGroupArnException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'InvalidCloudWatchLogsLogGroupArn', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InvalidCloudWatchLogsRoleArnException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'InvalidCloudWatchLogsRoleArn', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InvalidKmsKeyIdException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'InvalidKmsKeyId', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InvalidLookupAttributesException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'InvalidLookupAttributes', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InvalidMaxResultsException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'InvalidMaxResults', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InvalidNextTokenException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'InvalidNextToken', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InvalidS3BucketNameException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'InvalidS3BucketName', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InvalidS3PrefixException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'InvalidS3Prefix', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InvalidSnsTopicNameException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'InvalidSnsTopicName', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InvalidTagParameterException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'InvalidTagParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InvalidTimeRangeException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'InvalidTimeRange', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InvalidTokenException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'InvalidToken', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InvalidTrailNameException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'InvalidTrailName', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'KmsKeyDisabledException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'KmsKeyDisabled', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'KmsKeyNotFoundException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'KmsKeyNotFound', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'ListPublicKeysRequest' => [ 'type' => 'structure', 'members' => [ 'StartTime' => [ 'shape' => 'Date', ], 'EndTime' => [ 'shape' => 'Date', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListPublicKeysResponse' => [ 'type' => 'structure', 'members' => [ 'PublicKeyList' => [ 'shape' => 'PublicKeyList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListTagsRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceIdList', ], 'members' => [ 'ResourceIdList' => [ 'shape' => 'ResourceIdList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListTagsResponse' => [ 'type' => 'structure', 'members' => [ 'ResourceTagList' => [ 'shape' => 'ResourceTagList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'LookupAttribute' => [ 'type' => 'structure', 'required' => [ 'AttributeKey', 'AttributeValue', ], 'members' => [ 'AttributeKey' => [ 'shape' => 'LookupAttributeKey', ], 'AttributeValue' => [ 'shape' => 'String', ], ], ], 'LookupAttributeKey' => [ 'type' => 'string', 'enum' => [ 'EventId', 'EventName', 'Username', 'ResourceType', 'ResourceName', ], ], 'LookupAttributesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'LookupAttribute', ], ], 'LookupEventsRequest' => [ 'type' => 'structure', 'members' => [ 'LookupAttributes' => [ 'shape' => 'LookupAttributesList', ], 'StartTime' => [ 'shape' => 'Date', ], 'EndTime' => [ 'shape' => 'Date', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'LookupEventsResponse' => [ 'type' => 'structure', 'members' => [ 'Events' => [ 'shape' => 'EventsList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'MaxResults' => [ 'type' => 'integer', 'min' => 1, 'max' => 50, ], 'MaximumNumberOfTrailsExceededException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'MaximumNumberOfTrailsExceeded', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'NextToken' => [ 'type' => 'string', ], 'OperationNotPermittedException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'OperationNotPermitted', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'PublicKey' => [ 'type' => 'structure', 'members' => [ 'Value' => [ 'shape' => 'ByteBuffer', ], 'ValidityStartTime' => [ 'shape' => 'Date', ], 'ValidityEndTime' => [ 'shape' => 'Date', ], 'Fingerprint' => [ 'shape' => 'String', ], ], ], 'PublicKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'PublicKey', ], ], 'RemoveTagsRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceId', ], 'members' => [ 'ResourceId' => [ 'shape' => 'String', ], 'TagsList' => [ 'shape' => 'TagsList', ], ], ], 'RemoveTagsResponse' => [ 'type' => 'structure', 'members' => [], ], 'Resource' => [ 'type' => 'structure', 'members' => [ 'ResourceType' => [ 'shape' => 'String', ], 'ResourceName' => [ 'shape' => 'String', ], ], ], 'ResourceIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'ResourceList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Resource', ], ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'ResourceNotFound', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'ResourceTag' => [ 'type' => 'structure', 'members' => [ 'ResourceId' => [ 'shape' => 'String', ], 'TagsList' => [ 'shape' => 'TagsList', ], ], ], 'ResourceTagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceTag', ], ], 'ResourceTypeNotSupportedException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'ResourceTypeNotSupported', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'S3BucketDoesNotExistException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'S3BucketDoesNotExist', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'StartLoggingRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'String', ], ], ], 'StartLoggingResponse' => [ 'type' => 'structure', 'members' => [], ], 'StopLoggingRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'String', ], ], ], 'StopLoggingResponse' => [ 'type' => 'structure', 'members' => [], ], 'String' => [ 'type' => 'string', ], 'Tag' => [ 'type' => 'structure', 'required' => [ 'Key', ], 'members' => [ 'Key' => [ 'shape' => 'String', ], 'Value' => [ 'shape' => 'String', ], ], ], 'TagsLimitExceededException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'TagsLimitExceeded', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'TagsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ], 'Trail' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'String', ], 'S3BucketName' => [ 'shape' => 'String', ], 'S3KeyPrefix' => [ 'shape' => 'String', ], 'SnsTopicName' => [ 'shape' => 'String', ], 'IncludeGlobalServiceEvents' => [ 'shape' => 'Boolean', ], 'TrailARN' => [ 'shape' => 'String', ], 'LogFileValidationEnabled' => [ 'shape' => 'Boolean', ], 'CloudWatchLogsLogGroupArn' => [ 'shape' => 'String', ], 'CloudWatchLogsRoleArn' => [ 'shape' => 'String', ], 'KmsKeyId' => [ 'shape' => 'String', ], ], ], 'TrailAlreadyExistsException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'TrailAlreadyExists', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'TrailList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Trail', ], ], 'TrailNameList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'TrailNotFoundException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'TrailNotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'TrailNotProvidedException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'TrailNotProvided', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'UnsupportedOperationException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'UnsupportedOperation', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'UpdateTrailRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'String', ], 'S3BucketName' => [ 'shape' => 'String', ], 'S3KeyPrefix' => [ 'shape' => 'String', ], 'SnsTopicName' => [ 'shape' => 'String', ], 'IncludeGlobalServiceEvents' => [ 'shape' => 'Boolean', ], 'EnableLogFileValidation' => [ 'shape' => 'Boolean', ], 'CloudWatchLogsLogGroupArn' => [ 'shape' => 'String', ], 'CloudWatchLogsRoleArn' => [ 'shape' => 'String', ], 'KmsKeyId' => [ 'shape' => 'String', ], ], ], 'UpdateTrailResponse' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'String', ], 'S3BucketName' => [ 'shape' => 'String', ], 'S3KeyPrefix' => [ 'shape' => 'String', ], 'SnsTopicName' => [ 'shape' => 'String', ], 'IncludeGlobalServiceEvents' => [ 'shape' => 'Boolean', ], 'TrailARN' => [ 'shape' => 'String', ], 'LogFileValidationEnabled' => [ 'shape' => 'Boolean', ], 'CloudWatchLogsLogGroupArn' => [ 'shape' => 'String', ], 'CloudWatchLogsRoleArn' => [ 'shape' => 'String', ], 'KmsKeyId' => [ 'shape' => 'String', ], ], ], ],];