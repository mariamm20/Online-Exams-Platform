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
  public function addLevel($level_name)
  {
    $this->addLevelContr($level_name);
  }

  public function showLevels()
  {
    
    $level_data = $this->getLevels();
    foreach ($level_data as $levels) {
    ?>
      <tr class="lvl">
        <td colspan="2" class="lvl-name"><?= $levels['level_name']; ?> </td>
        <td colspan="2" class="second-row"><button type="button" data-bs-toggle="modal" data-bs-target="#add-dept" data-fid="<?= $levels['id']; ?>">Add Dept</button></td>
        <?php $this->showDepts(); ?>
      </tr>
    <?php
    }
  }


  //  the part of departments
  public function addDeptLvl($id, $dept_id)
  {
    $this->addDeptLvlCont($id, $dept_id);
  }

  public function showAllLevels()
  {
    $data = $this->getAllLevels();

    foreach ($data as $levels) {
    ?>
      <option value="<?= $levels['id'] ?>"> <?= $levels['level_name'] ?> </option>
    <?php
    }
  }


  public function showDepts()
  {
    $dept_data = $this->getDepts();
    foreach ($dept_data as $depts) {
      $sub_data = $this->getDeptSub($depts['id']);
    ?>
      <tr class="lvl-head">
        <td>Dept&nbsp;Name</td>
        <td>Subjects</td>
        <td>Add&nbsp;Subjects</td>
        <td>Delete</td>
      </tr>
      <tr>
        
        <td style="width: 220px;"><?= $depts['dept_name']; ?> </td>
        <td style="width:478.56px">
          <?php foreach ($sub_data as $subjects) { ?>
            <div class="d-flex justify-content-between subject">
              <p><?= $subjects['subject_name']; ?> </p>
              <a href="#" data-bs-toggle="modal" data-fid="<?= $subjects['id']; ?>" data-pid="<?= $depts['id']; ?>" class="delete_subject" data-bs-target="#remove-subj"><i class="fa-solid fa-x del-subj"></i></a>
            </div>
          <?php } ?>
        <td class="edit">
          <a href="#" data-bs-toggle="modal" data-bs-target="#add-subject"><i class="fa-solid fa-square-plus"></i></a>
        </td>
        <td class="del"><a href="#" data-bs-toggle="modal" data-bs-target="#remove-dept"><i class="fa-solid fa-trash-can"></i></a></td>
      </tr>
    <?php
    }
  }

  public function addDeptSub($id, $subject_name)
  {
    $this->addDeptSubCont($id, $subject_name);
  }


  // the part of contact us
  public function showContact()
  {
    $contact_data = $this->getContact();
    foreach ($contact_data as $contact) {
    ?>
      <tr>
        <td><?= $contact['id']; ?>
          <input type="hidden" name="id" id="one" value="<?php echo $contact['id'] ?>">
        </td>
        <td><?= $contact['name']; ?> </td>
        <td><?= $contact['email']; ?> </td>
        <td><?= $contact['msg']; ?> </td>
        <td><?= $contact['state']; ?> </td>

        <td class=""><a href="#" data-fid="<?= $contact['id']; ?>" class="preview-msg" data-bs-toggle="modal" data-bs-target="#preview-msg"><i class="fa-solid fa-eye"></i></a>
        </td>

        <td class="text-center"><a href="#" data-fid="<?= $contact['id'] ?>" class="delete-contact-btn" data-fid="<?= $contact['id'];  ?>" data-bs-toggle="modal" data-bs-target="#remove-msg"><i class="fa-solid fa-trash-can"></i></a>
        </td>

      </tr>
<?php }
  }


  public function deleteContact($id)
  {
    $this->deleteContactContr($id);
  }
}
