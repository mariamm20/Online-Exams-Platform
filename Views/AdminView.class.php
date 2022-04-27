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
                <td><?= $professors['id']; ?></td>
                <td><?= $professors['user_name']; ?> </td>
                <td style="width:478.56px">
            <?php  foreach($s_data as $subjects){?> 
                  <div class="d-flex justify-content-between subject">
                    <p><?= $subjects['subject_name']; ?> </p>
                    <a href="../includes/add_sub.inc.php?id=<?php echo $subjects['prof_id'] ;?>" data-bs-toggle="modal"
                    data-bs-target="#remove-subj"><i class="fa-solid fa-x del-subj"></i></a>
                  </div>
            <?php }?>

                </td>
                <td class="prof-add-subj"><i title="Add Subject" class="fa-solid fa-square-plus " data-bs-toggle="modal"
                  data-bs-target="#exampleModal"></i>
                </td>
                <td class="text-center"><a href="#" data-bs-toggle="modal"
                  data-bs-target="#remove-prof"><i class="fa-solid fa-trash-can"></i></a></td>
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
   
}