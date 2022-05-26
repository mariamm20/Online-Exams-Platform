<?php
class AdminView extends AdminCont
{

  //the part of dashboard
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

  public function showFinishedExamsNum()
  {
    $this->getFinishedExamsNum();
  }

  public function showSuccessExamsNum()
  {
    $this->getSuccessExamsNum();
  }


  //the part of professors
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



  //the part of requests
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


  //  the part of levels
  public function showLevels()
  {
    $l_data = $this->getLevels();
    foreach ($l_data as $level) {
      ?>
        <tr>
          <td><?= $level['id'] ?> </td>
          <td ><?= "Level " . $level['level_name'] ?> </td>
          <td class="edit">
            <a href="#" data-bs-toggle="modal" data-bs-target="#edit-level" class="edit_level" data-lid="<?= $level['id'] ?>" data-nid="<?= $level['level_name'] ?>"><i class="fa-solid fa-edit"></i></a>
          </td>
          <td class="del">
            <a href="#" data-bs-toggle="modal" data-bs-target="#delete-level" class="delete_level" data-lid="<?= $level['id'] ?>"><i class="fa-solid fa-trash-can"></i></a></td>
        </tr>
      <?php
      }
    
  }
  
  public function addLevel($level_name)
  {
    $this->addLevelContr($level_name);
  }

  public function deleteLevel($level_id)
  {
    $this->deleteLevelCont($level_id);
  }

  public function editLevel($level_name, $level_id)
  {
    $this->editLevelCont($level_name, $level_id);
  }


  //the part of departments
  public function showAllLevels()
  {
    $data = $this->getLevels();
    foreach ($data as $level) {
    ?>
      <option value="<?= $level['id'] ?>"> <?= $level['level_name'] ?></option>
    <?php
    }
  }

  public function showDepts()
  {
    $l_data = $this->getLevels();
    foreach ($l_data as $level) {
      $d_data = $this->getDepartments($level['id']);
    ?>
      <tr class="lvl">
        <td colspan="4" class="lvl-name"><?= "Level " . $level['level_name'] ?> </td>
      </tr>
      <tr class="lvl-head">
        <td>#</td>
        <td>Dept&nbsp;Name</td>
        <td>Edit</td>
        <td>Delete</td>
      </tr>
      <?php
      foreach ($d_data as $department) {
      ?>
        <tr>
          <td></td>
          <td style="width: 75%;"><?= $department['dept_name'] ?> </td>
          <td class="edit">
            <a href="#" data-bs-toggle="modal" class="edit_dept" data-did="<?= $department['id']; ?>" data-nid="<?= $department['dept_name']; ?>" data-bs-target="#edit-dept"><i class="fa-solid fa-edit"></i></a>
          </td>
          <td class="del">
            <a href="#" data-bs-toggle="modal" class="delete_dept" data-did="<?= $department['id']; ?>" data-bs-target="#delete-dept"><i class="fa-solid fa-trash-can"></i></a>
          </td>
        </tr>
      <?php
      }
    }
  }

  public function addDepartment($dept_name, $level_id)
  {
    $this->addDepartmentCont($dept_name, $level_id);
  }

  public function editDept($dept_name, $dept_id)
  {
    $this->editDeptCont($dept_name, $dept_id);
  }
  
  public function deleteDepartment($dept_id)
  {
    $this->deleteDepartmentCont($dept_id);
  }
  

  
  //the part of subjects
  public function showDeptName($level_name)
  {
    ?><option selected disabled>Choose Department</option><?php
    $data = $this->getDeptName($level_name);
    foreach($data as $department)
    {?>
        <option value="<?= $department['id'] ?>"><?= $department['dept_name'] ?> </option>
    <?php    
    }
  }

  public function showSubjects()
  {
    $l_data = $this->getLevels();
    foreach ($l_data as $level) {
      $d_data = $this->getDepartments($level['id']);
    ?>
      <tr class="lvl">
        <td colspan="7" class="lvl-name"><?= "Level " . $level['level_name'] ?> </td>
      </tr>
      <tr class="lvl-head">
        <td>#</td>
        <td>Dept&nbsp;Name</td>
        <td>Subjects</td>
        <td>Edit</td>
        <td>Delete</td>
       
      </tr>
      <?php
      foreach ($d_data as $department) {
        $sub_data = $this->getDepartmentSubjects($level['id'], $department['id']);
      ?>
        <tr>
          <td><?= $department['id'] ?></td>
          <td><?= $department['dept_name'] ?> </td>
          <td>
            <?php
            foreach ($sub_data as $subject) {
            ?>
              <table  class="table-inside" >
                <tr>
                  <td><p><?= $subject['subject_name']?></p></td>
                  <td><a href="#" data-bs-toggle="modal" class="edit_subject" data-sid="<?= $subject['id']; ?>" data-nid="<?= $subject['subject_name']; ?>" data-bs-target="#edit-subject"><i class="fa-solid fa-edit"></i></a></td>
                  <td><a href="#" data-bs-toggle="modal" class="delete_subject" data-sid="<?= $subject['id'] ?>" data-bs-target="#delete-subject"><i class="fa-solid fa-trash-can"></i></a></td>
                </tr>
              </table>
            <?php } ?>
          </td>
        </tr>


      <?php
      }
    }
  }
  
  public function addDeptSubject($subject_name, $level_id, $dept_id)
  {
    $this->addDeptSubjectCont($subject_name, $level_id, $dept_id);
  }

  public function editSubject($subject_name, $subject_id)
  {
    $this->editSubjectCont($subject_name, $subject_id);
  }

  public function deleteDeptSubject($subject_id)
  {
    $this->deleteDeptSubjectCont($subject_id);
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
