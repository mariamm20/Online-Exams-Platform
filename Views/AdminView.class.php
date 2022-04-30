<?php
class AdminView extends AdminCont
{
    public function showProfessors()
    {
        $Prof_data = $this->getProfessors();
        $s_data = $this->getSubjects();
        
        foreach($Prof_data as $professors)
        {?>
            
            <tr>
                <td><?= $professors['id']; ?>
                <input type="hidden" name="id" id="one" value="<?php echo $professors['id']?>">
                </td>

                <td><?= $professors['user_name']; ?> </td>
                <td style="width:478.56px">
            <?php  foreach($s_data as $subjects){?> 
                  <div class="d-flex justify-content-between subject">
                    <p><?= $subjects['subject_name']; ?> </p>
                    <a href="#" data-bs-toggle="modal" data-fid="<?= $subjects['id']; ?>" class="delete_subject"
                    data-bs-target="#remove-subj"><i class="fa-solid fa-x del-subj"></i></a>
                  </div>
            <?php }?>

                </td>
                <td class="prof-add-subj"><a href="#" data-fid="<?= $professors['id'] ;?>" class="add-subject"><i title="Add Subject" class="fa-solid fa-square-plus " data-bs-toggle="modal"
                  data-bs-target="#exampleModal"></a></i>
                </td>
                <td class="text-center"><a href="#" data-fid="<?= $professors['id'] ?>" class="delete-professor-btn" data-fid="<?= $professors['id'];  ?>" data-bs-toggle="modal"
                  data-bs-target="#remove-prof" ><i class="fa-solid fa-trash-can" ></i></a></td>
              </tr>

        <?php
        }
    }

    public function showProfessorRequests()
    {
      $data = $this->getProfessorRequests();
      foreach($data as $request)
      {?>
      <tr>
                <td scope="row"><?=$request['id'] ?></td>
                <td><?=$request['user_name'] ?></td>
                <td><?=$request['academic_id'] ?></td>
                <td><?=$request['email'] ?></td>
                <td>
                <a href="../Admin/requests.php?state=1&id=<?php echo $request['id'] ?>" \><i class="fa-solid fa-check"></i></a></td>
                <td class="del">
                <a href="#" data-bs-toggle="modal" data-bs-target="#remove-request"><i class="fa-solid fa-x">
                </i></a></td>
              </tr>

      <?php }

      if (isset($_GET["state"]) and $_GET["state"] == 1)
      {
            
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
    public function showAllSubjects()
    {
      $data = $this->getAllSubjects();
      foreach($data as $subject )
      {?>
        <option value="<?= $subject['subject_name'] ?>"> <?= $subject['subject_name'] ?></option>
        <?php
      }
    }
    public function deleteSubject($id)
    {
      $this->deleteSubjectCont($id);
    }
   
}