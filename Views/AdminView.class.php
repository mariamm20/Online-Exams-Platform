<?php
class AdminView extends AdminCont
{

  public function showProfessors()
  {
    $Prof_data = $this->getProfessors();
    foreach ($Prof_data as $professors) {
      $s_data = $this->getSubjects($professors['id']); ?>
      <tr>
        <td><?= $professors['id']; ?>
          <input type="hidden" name="id" id="one" value="<?php echo $professors['id'] ?>">
        </td>

        <td><?= $professors['user_name']; ?> </td>

        <td style="width:478.56px">
          <?php foreach ($s_data as $subjects) { ?>
            <div class="d-flex justify-content-between subject">
              <p><?= $subjects['subject_name']; ?> </p>
              <a href="#" data-bs-toggle="modal" data-fid="<?= $subjects['id']; ?>" data-pid="<?= $professors['id']; ?>" class="delete_subject" data-bs-target="#remove-subj"><i class="fa-solid fa-x del-subj"></i></a>
            </div>
          <?php } ?>

        </td>
        <td class="prof-add-subj"><a href="#" data-fid="<?= $professors['id']; ?>" class="add-subject"><i title="Add Subject" class="fa-solid fa-square-plus " data-bs-toggle="modal" data-bs-target="#exampleModal"></a></i>
        </td>
        <td class="text-center"><a href="#" data-fid="<?= $professors['id'] ?>" class="delete-professor-btn" data-fid="<?= $professors['id'];  ?>" data-bs-toggle="modal" data-bs-target="#remove-prof"><i class="fa-solid fa-trash-can"></i></a></td>
      </tr>
    <?php
    }
  }

  public function showProfessorRequests()
  {
    $data = $this->getProfessorRequests();
    foreach ($data as $request) {
    ?>
      <tr>
        <td scope="row"><?= $request['id'] ?></td>
        <td><?= $request['user_name'] ?></td>
        <td><?= $request['academic_id'] ?></td>
        <td><?= $request['email'] ?></td>
        <td>
          <a href="../Admin/requests.php?state=1&id=<?php echo $request['id'] ?>" \><i class="fa-solid fa-check"></i></a>
        </td>
        <td class="del">
          <a href="#" data-bs-toggle="modal" data-bs-target="#remove-request"><i class="fa-solid fa-x">
            </i></a>
        </td>
      </tr>
    <?php
    }

    if (isset($_GET["state"]) and $_GET["state"] == 1) {
      $this->acceptRequest();
    }
  }

  public function showRequestsNumber()
  {
    $this->getRequestsNumber();
  }

  public function showProfessorsNumber()
  {
    $this->getProfessorsNumber();
  }

  public function showStudentsNumber()
  {
    $this->getStudentsNumber();
  }
  public function showFinishedExams()
  {
    $this->getFinishedExams();
  }
  public function showSuccessExams()
  {
    $this->getSuccessExams();
  }

  public function deleteProfessor($id)
  {
    $this->deleteProf($id);
  }

  public function addSubject($id, $subject_name)
  {
    $this->addSubjectCont($id, $subject_name);
  }


  // show them when adding a subject to the professor
  public function showAllSubjects()
  {
    $data = $this->getAllSubjects();
    foreach ($data as $subject) {
    ?>
      <option value="<?= $subject['id'] ?>"> <?= $subject['subject_name'] ?></option>
    <?php
    }
  }

  public function deleteSubject($sub_id, $prof_id)
  {
    $this->deleteSubjectCont($sub_id, $prof_id);
  }


  //  the part of levels
  public function showLevels()
  {
    $l_data = $this->getLevels();
    foreach ($l_data as $level) {
      $d_data = $this->getDepartments($level['id']);
    ?>

      <tr class="lvl">
        <td colspan="2" class="lvl-name"><?= "Level " . $level['level_name'] ?> </td>
        <td colspan="2" class="second-row"><button type="button" data-bs-toggle="modal" data-bs-target="#add-dept" class="add_department" data-lid="<?= $level['id'] ?>">Add Dept</button></td>
      </tr>
      <tr class="lvl-head">
        <td>Dept&nbsp;Name</td>
        <td>Subjects</td>
        <td>Add&nbsp;Subjects</td>
        <td>Delete</td>
      </tr>
      <?php
      foreach ($d_data as $department) {
        $sub_data = $this->getDepartmentSubjects($level['id'], $department['id']);
      ?>
        <tr>
          <td style="width: 220px;"><?= $department['dept_name'] ?> </td>
          <td style="width:478.56px">
            <?php
            foreach ($sub_data as $subject) {
            ?>
              <div class="d-flex justify-content-between subject">
                <p><?= $subject['subject_name'] ?> </p>
                <a href="#" data-bs-toggle="modal" class="remove_subject" data-sid="<?= $subject['id'] ?>" data-bs-target="#remove-subj"><i class="fa-solid fa-x del-subj"></i></a>
              </div>
            <?php } ?>
          </td>
          <td class="edit">
            <a href="#" data-bs-toggle="modal" class="add_subject" data-did="<?= $department['id']; ?>" data-lid="<?= $level['id']; ?>" data-bs-target="#add-subject"><i class="fa-solid fa-square-plus"></i></a>
          </td>
          <td class="del"><a href="#" data-bs-toggle="modal" class="remove_dept" data-fid="<?= $department['id']; ?>" data-bs-target="#remove-dept"><i class="fa-solid fa-trash-can"></i></a></td>
        </tr>


      <?php
      }
    }
  }

  public function addLevel($level_name)
  {
    $this->addLevelContr($level_name);
  }

  public function addDeptSubject($name, $level_id, $dept_id)
  {
    $this->addDeptSubjectCont($name, $level_id, $dept_id);
  }

  public function deleteTheSubject($id)
  {
    $this->deleteSub($id);
  }

  public function deleteDepartment($id)
  {
    $this->deleteDepartmentCont($id);
  }

  public function addDepartment($name, $level_id)
  {
    $this->addDepartmentCont($name, $level_id);
  }


  // the part of contact us
  public function showContact()
  {
    $contact_data = $this->getContact();
    foreach ($contact_data as $contact) { ?>
      <tr>
        <td scope="row"><?= $contact['id']; ?></td>
        <td><?= $contact['name']; ?> </td>
        <td><?= $contact['email']; ?> </td>


        <?php
        $state = $contact['state'];
        if($state == "Accepted")
        {?>
          <td class="accepted_td"><?= $contact['state']; ?> </td>
          <td class=""><a href="#" data-fid="<?= $contact['id']; ?>" data-rid="<?= $contact['msg']; ?>" class="previewed-contact-btn" data-bs-toggle="modal" data-bs-target="#previewed_contact">Previewed </a></td>  
        <?php }
        
        else if($state=="Rejected")
        {?>
            <td class="rejected_td"><?= $contact['state']; ?> </td>  
            <td class=""><a href="#" data-fid="<?= $contact['id']; ?>" data-rid="<?= $contact['msg']; ?>" class="previewed-contact-btn" data-bs-toggle="modal" data-bs-target="#previewed_contact">Previewed </a></td>  
        <?php }

        else if($state=="")
        {?>
            <td><?= $contact['state']; ?> </td>  
            <td class=""><a href="#" data-fid="<?= $contact['id']; ?>" data-rid="<?= $contact['msg']; ?>" class="preview-contact-btn" data-bs-toggle="modal" data-bs-target="#preview_contact"><i class="fa-solid fa-eye"></i></a></td>
        <?php }
        ?>



      </tr> <?php }
  }

  public function acceptContact($state, $id)
  {
    $this->acceptContactContr($state, $id);
  }

  public function rejectContact($state, $id)
  {
    $this->rejectContactContr($state, $id);
  }
    

}
