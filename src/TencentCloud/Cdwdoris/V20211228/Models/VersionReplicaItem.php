<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检查doris内核是否支持新语法。
 *
 * @method integer getReplicaFlag() 获取版本描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicaFlag(integer $ReplicaFlag) 设置版本描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMsg() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMsg(string $ErrorMsg) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class VersionReplicaItem extends AbstractModel
{
    /**
     * @var integer 版本描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplicaFlag;

    /**
     * @var string 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMsg;

    /**
     * @param integer $ReplicaFlag 版本描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMsg 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ReplicaFlag",$param) and $param["ReplicaFlag"] !== null) {
            $this->ReplicaFlag = $param["ReplicaFlag"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }
    }
}
