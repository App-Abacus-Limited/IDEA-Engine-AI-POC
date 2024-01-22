<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjQ1U4YmljNXRGKzFNcHhoblB4eGE3UjlpMFRQUGE2Q3RtRTRtVUdhU3oydys2K3lhTUpuOVZhM2tUazdlUC94RU52RHFibDd4QktaVHRGNno2SE5FZDBJRVBLY0MxR0t4NllnWEZScUVwZFhVSmgrbnJYRUxvcHRJMnc3SE45ZUhqeE1HOWlUMzZoSmlqNnRhUTVsaXNPTnJHN1pZc2lxSG4yK1Z2NzVEYjRV*/
// This file was auto-generated from sdk-root/src/data/cloudformation/2010-05-15/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'StackExists' => [ 'delay' => 5, 'operation' => 'DescribeStacks', 'maxAttempts' => 20, 'acceptors' => [ [ 'matcher' => 'status', 'expected' => 200, 'state' => 'success', ], [ 'matcher' => 'error', 'expected' => 'ValidationError', 'state' => 'retry', ], ], ], 'StackCreateComplete' => [ 'delay' => 30, 'operation' => 'DescribeStacks', 'maxAttempts' => 120, 'description' => 'Wait until stack status is CREATE_COMPLETE.', 'acceptors' => [ [ 'argument' => 'Stacks[].StackStatus', 'expected' => 'CREATE_COMPLETE', 'matcher' => 'pathAll', 'state' => 'success', ], [ 'argument' => 'Stacks[].StackStatus', 'expected' => 'CREATE_FAILED', 'matcher' => 'pathAny', 'state' => 'failure', ], [ 'argument' => 'Stacks[].StackStatus', 'expected' => 'DELETE_COMPLETE', 'matcher' => 'pathAny', 'state' => 'failure', ], [ 'argument' => 'Stacks[].StackStatus', 'expected' => 'DELETE_FAILED', 'matcher' => 'pathAny', 'state' => 'failure', ], [ 'argument' => 'Stacks[].StackStatus', 'expected' => 'ROLLBACK_FAILED', 'matcher' => 'pathAny', 'state' => 'failure', ], [ 'argument' => 'Stacks[].StackStatus', 'expected' => 'ROLLBACK_COMPLETE', 'matcher' => 'pathAny', 'state' => 'failure', ], [ 'expected' => 'ValidationError', 'matcher' => 'error', 'state' => 'failure', ], ], ], 'StackDeleteComplete' => [ 'delay' => 30, 'operation' => 'DescribeStacks', 'maxAttempts' => 120, 'description' => 'Wait until stack status is DELETE_COMPLETE.', 'acceptors' => [ [ 'argument' => 'Stacks[].StackStatus', 'expected' => 'DELETE_COMPLETE', 'matcher' => 'pathAll', 'state' => 'success', ], [ 'expected' => 'ValidationError', 'matcher' => 'error', 'state' => 'success', ], [ 'argument' => 'Stacks[].StackStatus', 'expected' => 'DELETE_FAILED', 'matcher' => 'pathAny', 'state' => 'failure', ], [ 'argument' => 'Stacks[].StackStatus', 'expected' => 'CREATE_FAILED', 'matcher' => 'pathAny', 'state' => 'failure', ], [ 'argument' => 'Stacks[].StackStatus', 'expected' => 'ROLLBACK_FAILED', 'matcher' => 'pathAny', 'state' => 'failure', ], [ 'argument' => 'Stacks[].StackStatus', 'expected' => 'UPDATE_ROLLBACK_IN_PROGRESS', 'matcher' => 'pathAny', 'state' => 'failure', ], [ 'argument' => 'Stacks[].StackStatus', 'expected' => 'UPDATE_ROLLBACK_FAILED', 'matcher' => 'pathAny', 'state' => 'failure', ], [ 'argument' => 'Stacks[].StackStatus', 'expected' => 'UPDATE_ROLLBACK_COMPLETE', 'matcher' => 'pathAny', 'state' => 'failure', ], ], ], 'StackUpdateComplete' => [ 'delay' => 30, 'maxAttempts' => 120, 'operation' => 'DescribeStacks', 'description' => 'Wait until stack status is UPDATE_COMPLETE.', 'acceptors' => [ [ 'argument' => 'Stacks[].StackStatus', 'expected' => 'UPDATE_COMPLETE', 'matcher' => 'pathAll', 'state' => 'success', ], [ 'expected' => 'UPDATE_FAILED', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'Stacks[].StackStatus', ], [ 'argument' => 'Stacks[].StackStatus', 'expected' => 'UPDATE_ROLLBACK_FAILED', 'matcher' => 'pathAny', 'state' => 'failure', ], [ 'expected' => 'UPDATE_ROLLBACK_COMPLETE', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'Stacks[].StackStatus', ], [ 'expected' => 'ValidationError', 'matcher' => 'error', 'state' => 'failure', ], ], ], 'StackImportComplete' => [ 'delay' => 30, 'maxAttempts' => 120, 'operation' => 'DescribeStacks', 'description' => 'Wait until stack status is IMPORT_COMPLETE.', 'acceptors' => [ [ 'argument' => 'Stacks[].StackStatus', 'expected' => 'IMPORT_COMPLETE', 'matcher' => 'pathAll', 'state' => 'success', ], [ 'expected' => 'ROLLBACK_COMPLETE', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'Stacks[].StackStatus', ], [ 'expected' => 'ROLLBACK_FAILED', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'Stacks[].StackStatus', ], [ 'argument' => 'Stacks[].StackStatus', 'expected' => 'IMPORT_ROLLBACK_IN_PROGRESS', 'matcher' => 'pathAny', 'state' => 'failure', ], [ 'argument' => 'Stacks[].StackStatus', 'expected' => 'IMPORT_ROLLBACK_FAILED', 'matcher' => 'pathAny', 'state' => 'failure', ], [ 'expected' => 'IMPORT_ROLLBACK_COMPLETE', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'Stacks[].StackStatus', ], [ 'expected' => 'ValidationError', 'matcher' => 'error', 'state' => 'failure', ], ], ], 'StackRollbackComplete' => [ 'delay' => 30, 'operation' => 'DescribeStacks', 'maxAttempts' => 120, 'description' => 'Wait until stack status is UPDATE_ROLLBACK_COMPLETE.', 'acceptors' => [ [ 'argument' => 'Stacks[].StackStatus', 'expected' => 'UPDATE_ROLLBACK_COMPLETE', 'matcher' => 'pathAll', 'state' => 'success', ], [ 'argument' => 'Stacks[].StackStatus', 'expected' => 'UPDATE_FAILED', 'matcher' => 'pathAny', 'state' => 'failure', ], [ 'argument' => 'Stacks[].StackStatus', 'expected' => 'UPDATE_ROLLBACK_FAILED', 'matcher' => 'pathAny', 'state' => 'failure', ], [ 'argument' => 'Stacks[].StackStatus', 'expected' => 'DELETE_FAILED', 'matcher' => 'pathAny', 'state' => 'failure', ], [ 'expected' => 'ValidationError', 'matcher' => 'error', 'state' => 'failure', ], ], ], 'ChangeSetCreateComplete' => [ 'delay' => 30, 'operation' => 'DescribeChangeSet', 'maxAttempts' => 120, 'description' => 'Wait until change set status is CREATE_COMPLETE.', 'acceptors' => [ [ 'argument' => 'Status', 'expected' => 'CREATE_COMPLETE', 'matcher' => 'path', 'state' => 'success', ], [ 'argument' => 'Status', 'expected' => 'FAILED', 'matcher' => 'path', 'state' => 'failure', ], [ 'expected' => 'ValidationError', 'matcher' => 'error', 'state' => 'failure', ], ], ], 'TypeRegistrationComplete' => [ 'delay' => 30, 'operation' => 'DescribeTypeRegistration', 'maxAttempts' => 120, 'description' => 'Wait until type registration is COMPLETE.', 'acceptors' => [ [ 'argument' => 'ProgressStatus', 'expected' => 'COMPLETE', 'matcher' => 'path', 'state' => 'success', ], [ 'argument' => 'ProgressStatus', 'expected' => 'FAILED', 'matcher' => 'path', 'state' => 'failure', ], ], ], ],];