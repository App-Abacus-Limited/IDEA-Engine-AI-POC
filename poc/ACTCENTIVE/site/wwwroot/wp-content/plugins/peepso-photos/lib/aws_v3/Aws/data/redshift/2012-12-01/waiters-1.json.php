<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjQ1U4YmljNXRGKzFNcHhoblB4eGE3UWhMUkh3RmoyMlphVXp0QTUwblhqZEE5czhQUGoyNXgvQ1F1MERzR2JEYU5XSDNlQzBHVGJoRXVad2JvcWVWTlhLRHg1MGNuZ3hHR0JmSElBZWtrMS9ZM1Z4cE9MZklvekZBWXUzT2djMTJCRG5aSms2dThBL08rSlFDckRJRU9HMnpNT3FPbzlYbjZIODljZkVhUTVr*/
// This file was auto-generated from sdk-root/src/data/redshift/2012-12-01/waiters-1.json
return [ 'waiters' => [ '__default__' => [ 'acceptor_type' => 'output', ], '__ClusterState' => [ 'interval' => 60, 'max_attempts' => 30, 'operation' => 'DescribeClusters', 'acceptor_path' => 'Clusters[].ClusterStatus', ], 'ClusterAvailable' => [ 'extends' => '__ClusterState', 'ignore_errors' => [ 'ClusterNotFound', ], 'success_value' => 'available', 'failure_value' => [ 'deleting', ], ], 'ClusterDeleted' => [ 'extends' => '__ClusterState', 'success_type' => 'error', 'success_value' => 'ClusterNotFound', 'failure_value' => [ 'creating', 'rebooting', ], ], 'SnapshotAvailable' => [ 'interval' => 15, 'max_attempts' => 20, 'operation' => 'DescribeClusterSnapshots', 'acceptor_path' => 'Snapshots[].Status', 'success_value' => 'available', 'failure_value' => [ 'failed', 'deleted', ], ], ],];