<?php 

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\models;
use application\core\Model;
use application\lib\System;

class Ajax extends Model
{

    public function selectlang($post)
    {
        setcookie('lang', $post['selectlang']);
        
        return true;
    }

    public function load_style()
    {
        $STH = $this->db->row('SELECT * FROM `web`');

        if (!empty($STH[0]['style'])) {
            $result = $this->db->fromBase64($STH[0]['style']);
       

            foreach ($result as $key => $value) {
                ?>
                <tr>
                    <th scope="col" class="text-center">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">ID</div>
                            </div>
                            <input type="text" class="form-control" id="id-<?php echo $key?>" value="<?php echo $key?>" readonly>
                        </div>
                    </th>
                    <th scope="col">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><?=VI_ADMIN_INDEX_TABLE_NAME?></div>
                            </div>
                            <input type="text" class="form-control" id="name-<?php echo $key?>" value="<?php echo $value?>">
                        </div>
                    </th>
                    <th scope="col">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary" onclick="edit_style(<?php echo $key?>)"><?=VI_ADMIN_INDEX_SUBMIT_EDIT?></button>
                            <button type="button" class="btn btn-danger" onclick="delete_style(<?php echo $key?>)"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </th>
                </tr>
                <?php
            }
        }
    }

    public function addStyle($post)
    {
        $STH = $this->db->row('SELECT * FROM `web`');
        $result = $this->db->fromBase64($STH[0]['style']);
        if (isset($result[$post['id']])) {
            unset($result[$post['id']]);
        }
        $result[$post['id']] = $post['name'];

        $params = [
            'style' => $this->db->inBase64($result)
        ];
        $this->db->query('UPDATE `web` SET `style` = :style WHERE `id` = 1', $params);

        return true;
    }

    public function deleteStyle($post)
    {
        $STH = $this->db->row('SELECT * FROM `web`');
        $result = $this->db->fromBase64($STH[0]['style']);
        if (isset($result[$post['id']])) {
            unset($result[$post['id']]);
        }

        $params = [
            'style' => $this->db->inBase64($result)
        ];
        $this->db->query('UPDATE `web` SET `style` = :style WHERE `id` = 1', $params);

        return true;
    }

    public function addAdmin($post)
    {
        $STH = $this->db->row('SELECT * FROM `web`');
        $result = $this->db->fromBase64($STH[0]['admins']);
        if (empty($result)) {
            $result[1] = [
                'name' => $post['name'],
                'pass' => $post['pass'],
                'auth' => $post['auth']
            ];
        }else{
           $array = [
                'name' => $post['name'],
                'pass' => $post['pass'],
                'auth' => $post['auth']
            ]; 
            array_push($result, $array);
        }

        $params = [
            'admin' => $this->db->inBase64($result)
        ];
        $this->db->query('UPDATE `web` SET `admins` = :admin WHERE `id` = 1', $params);

        return true;
    }

    public function load_admin()
    {
        $STH = $this->db->row('SELECT * FROM `web`');
        $result = $this->db->fromBase64($STH[0]['admins']);
        if (count($result) == 1) {
            foreach ($result as $key => $value) {
                $id = $key;
            }
        }else{
            $id = 1;
        }
        ?>
            <div class="col-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <button type="button" class="list-group-item list-group-item-action"role="tab" data-bs-toggle="modal" data-bs-target="#addAdminModal"><?=VI_ADMIN_ADMINS_MENU_ADD_ADMIN?></button>
                    <?php foreach ($result as $key => $value): ?>
                        <a class="list-group-item list-group-item-action <?php if ($key == $id){echo 'active';}?>" id="list-<?php echo $value['name'];?>-list" data-toggle="list" href="#list-<?php echo $value['name'];?>" role="tab" aria-controls="<?php echo $value['name'];?>"><?php echo $value['name'];?></a>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <?php foreach ($result as $key => $value): ?>
                        <div class="tab-pane fade show <?php if ($key == $id){echo 'active';}?>" id="list-<?php echo $value['name'];?>" role="tabpanel" aria-labelledby="list-<?php echo $value['name'];?>-list">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label"><?=VI_ADMIN_ADMINS_FORM_LOGIN?>:</label>
                                <input class="form-control" id="admin-Login-<?php echo $key?>" type="text" value="<?php echo $value['name'];?>">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label"><?=VI_ADMIN_ADMINS_FORM_PASS?>:</label>
                                <input class="form-control" id="admin-Pass-<?php echo $key?>" type="password" value="<?php echo $value['pass'];?>">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-outline-secondary" type="button" data-container="body" data-toggle="popover" data-placement="top" data-content="<em>Подсказка:</em><br><b>STEAM_x:x:xxxxx<br>[U:x:xxxxx]<br>STEAMID64"><i class="fas fa-info-circle"></i></button>
                                <label for="message-text" class="col-form-label"><?=VI_ADMIN_ADMINS_FORM_STEAMID?>:</label>
                                <input class="form-control" id="admin-Steam-<?php echo $key?>" type="text" value="<?php echo $value['auth'];?>">
                            </div>
                            <br>
                            <button class="btn btn-danger" onclick="delete_admin(<?php echo $key?>)"><?=VI_ADMIN_ADMINS_FORM_SYBMIT_DELETE?></button>
                            <button data-bs-dismiss="modal" class="btn btn-secondary" onclick="edit_admin(<?php echo $key?>)"><?=VI_ADMIN_ADMINS_FORM_SYBMIT_EDIT?></button>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        <?php
    }

    public function edit_admin($post)
    {
        $STH = $this->db->row('SELECT * FROM `web`');
        $result = $this->db->fromBase64($STH[0]['admins']);
        $result[$post['id']] = [
                'name' => $post['name'],
                'pass' => $post['pass'],
                'auth' => $post['auth']
            ];

        $params = [
            'admin' => $this->db->inBase64($result)
        ];
        $this->db->query('UPDATE `web` SET `admins` = :admin WHERE `id` = 1', $params);
    }

    public function delete_admin($post)
    {
        $STH = $this->db->row('SELECT * FROM `web`');
        $result = $this->db->fromBase64($STH[0]['admins']);

        unset($result[$post['id']]);

        $params = [
            'admin' => $this->db->inBase64($result)
        ];
        $this->db->query('UPDATE `web` SET `admins` = :admin WHERE `id` = 1', $params);
    }

    public function load_allrecords($post)
    {
        $system = new System;
        $style = $system->style();
        $params = [
            'map' => $post['map'],
        ];
        $result = $this->db->row("SELECT * FROM `playertimes` WHERE `map` = :map ORDER BY `date` DESC", $params);

        foreach ($result as $key => $value) {
        ?>
        <tr data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="<?php echo $system->expand_date($value['date']);?>">
            <td><?php echo $system->userName($value['auth']);?></td>
            <td class="text-center"><?php echo $system->expand_date($value['date'], 5);?></td>
            <td class="text-center"><?php echo $system->secToStr(round($value['time']));?></td>
            <td class="text-center"><?php echo $system->track($value['track']);?></td>
            <td class="text-center"><?php echo $value['style']?>
                <?php
                    if (empty($style[$value['style']])) {
                        echo '<i class="fas fa-frog" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="'.ERROR_STYLE_TITLE.'"></i>';
                    }else{
                        echo $style[$value['style']];
                    }
                ?>
            </td>
            <td class="text-center"><?php echo $value['jumps'];?></td>
            <td class="text-center"><?php echo $value['strafes'];?></td>
            <td class="text-center"><?php echo $value['sync'];?>%</td>
            <td class="text-center"><?php echo $value['points'];?></td>
            <?php if (isset($_SESSION['admin'])):?>
                <td class="text-center">
                    <button type="button" class="btn btn-danger btn-sm" onclick="delete_record(<?php echo $lastrecordsItem['id']?>)">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </td>
            <?php endif?>
        </tr>
        <?php
        }
    }

    function allrecords_search($post)
    {
        $system = new System;
        $style = $system->style();
        $params = [
            'map' => $post['map'],
            'style' => $post['style'],
            'track' => $post['track'],
        ];
        $result = $this->db->row("SELECT * FROM `playertimes` WHERE `map` = :map and `style` = :style and `track` = :track ORDER BY `date` DESC", $params);

        if (!empty($result)) {
            foreach ($result as $key => $value) {
            ?>
            <tr data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="<?php echo $system->expand_date($value['date']);?>">
                <td><?php echo $system->userName($value['auth']);?></td>
                <td class="text-center"><?php echo $system->expand_date($value['date'], 5);?></td>
                <td class="text-center"><?php echo $system->secToStr(round($value['time']));?></td>
                <td class="text-center"><?php echo $system->track($value['track']);?></td>
                <td class="text-center"><?php echo $value['style']?>
                    <?php
                        if (empty($style[$value['style']])) {
                            echo '<i class="fas fa-frog" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="'.ERROR_STYLE_TITLE.'"></i>';
                        }else{
                            echo $style[$value['style']];
                        }
                    ?>
                </td>
                <td class="text-center"><?php echo $value['jumps'];?></td>
                <td class="text-center"><?php echo $value['strafes'];?></td>
                <td class="text-center"><?php echo $value['sync'];?>%</td>
                <td class="text-center"><?php echo $value['points'];?></td>
                <?php if (isset($_SESSION['admin'])):?>
                    <td class="text-center">
                        <button type="button" class="btn btn-danger btn-sm" onclick="delete_record(<?php echo $lastrecordsItem['id']?>)">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                <?php endif?>
            </tr>
            <?php
            }
        }else{
            echo 'Результатов не найдено';
        }
    }

    public function delete_record($post)
    {
        $params = ['id'=> $post['id']];
        $this->db->query('DELETE FROM `playertimes` WHERE `id` = :id', $params);
    }
}