/*
 * Created by PhpStorm.
 * User: ritwik.shanker
 * Copyright of Esterline Technologies (c) 2018.
 */

// Edit Home Page Buttons functions
function ShowEditProjectPage(str)
{
    if (str == "")
    {
        document.getElementById("ProjectPage").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("ProjectPage").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "EditProjectPage.php?h=" + str, true);
        xmlhttp.send();
    }
}

function ShowAddProjectPage(str)
{
    if (str == "")
    {
        document.getElementById("ProjectPage").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("ProjectPage").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "AddProjectPage.php?i=" + str, true);
        xmlhttp.send();
    }
}

function ShowTeamReport(str)
{
    if (str == "")
    {
        document.getElementById("ProjectPage").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("ProjectPage").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "TeamReport.php?j=" + str, true);
        xmlhttp.send();
    }
}

function ShowTeamReport(str)
{
    if (str == "")
    {
        document.getElementById("ProjectPage").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("ProjectPage").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "TeamReport.php?j=" + str, true);
        xmlhttp.send();
    }
}

function ShowIndividualSummary(str)
{
    if (str == "")
    {
        document.getElementById("ProjectPage").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("ProjectPage").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "IndividualSummary.php?j=" + str, true);
        xmlhttp.send();
    }
}


// Edit Project Page Buttons functions
function ShowEditProjectButtons(str)
{
    if (str == "")
    {
        document.getElementById("EditProjectButtons").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("EditProjectButtons").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetEditProjectButtons.php?p=" + str, true);
        xmlhttp.send();
    }
}

function ShowAssociatedWO(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedWO").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedWO").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetAssociatedWO.php?q=" + str, true);
        xmlhttp.send();
    }
}

function ShowAddWOFields(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedWO").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedWO").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetAddWOFields.php?r=" + str, true);
        xmlhttp.send();
    }
}

function ShowEditWOFields(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedWO").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedWO").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetEditWOFields.php?s=" + str, true);
        xmlhttp.send();
    }
}

function ShowEditWOButtons(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedWO").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedWO").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetEditWOButtons.php?aa=" + str, true);
        xmlhttp.send();
    }
}

function ShowPMAddEditComments(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedWO").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedWO").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetPMAddEditComments.php?t=" + str, true);
        xmlhttp.send();
    }
}

// Associated WO Page Buttons functions
function ShowAssociatedWoButtons(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedWoButtons").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedWoButtons").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetAssociatedWoButtons.php?u=" + str, true);
        xmlhttp.send();
    }
}

function ShowStartWIPFields(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedWOProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedWOProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetStartWIPFields.php?v=" + str, true);
        xmlhttp.send();
    }
}

function ShowOwnerAddEditCommentFields(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedWOProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedWOProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetOwnerAddEditCommentFields.php?w=" + str, true);
        xmlhttp.send();
    }
}

function ShowAssociatedIO(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedWOProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedWOProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "AssociatedIoData.php?x" + str, true);
        xmlhttp.send();
    }
}

function ShowAddRaisingIlluFields(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedWOProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedWOProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetAddRaisingIlluFields.php?x=" + str, true);
        xmlhttp.send();
    }
}

function ShowEditRaisingIlluFields(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedWOProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedWOProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetEditRaisingIlluFields.php?y=" + str, true);
        xmlhttp.send();
    }
}

function ShowSfckWoFields(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedWOProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedWOProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetSfckWoFields.php?z=" + str, true);
        xmlhttp.send();
    }
}

function ShowAddReviewerQAFields(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedWOProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedWOProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetAddReviewerQAFields.php?a=" + str, true);
        xmlhttp.send();
    }
}

function ShowEditReviewerQAButtons(str)
{
    //alert("Ritwik");
    if (str == "")
    {
        document.getElementById("AssociatedWOProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedWOProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetEditReviewerQAFieldsButtons.php?b=" + str, true);
        xmlhttp.send();
    }
}

function ShowEditReviewerQAFields(str)
{
    //alert("RItwik");
    if (str == "")
    {
        document.getElementById("AssociatedWOProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedWOProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetEditReviewerQAFields.php?b=" + str, true);
        xmlhttp.send();
    }
}

function ShowDeleteReviewerQAFields(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedWOProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedWOProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetDeleteReviewerQAFields.php?b=" + str, true);
        xmlhttp.send();
    }
}

function CalculateReviewScore(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedWOProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedWOProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", " CalculateReviewScore.php?b=" + str, true);
        xmlhttp.send();
    }
}

function SubmitReview(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedWOProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedWOProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", " SubmitReview.php?b=" + str, true);
        xmlhttp.send();
    }
}


function ShowEnterCustomerQAFields(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedWOProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedWOProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetEnterCustomerQAFields.php?d=" + str, true);
        xmlhttp.send();
    }
}

function ShowAcceptCustomerQAFields(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedWOProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedWOProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetAcceptCustomerQAFields.php?e=" + str, true);
        xmlhttp.send();
    }
}

function ShowVandVFields(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedWOProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedWOProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetVandVFields.php?f=" + str, true);
        xmlhttp.send();
    }
}

function ShowCstmrComntsCompletionFields(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedWOProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedWOProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetCstmrComntsCompletionFields.php?g=" + str, true);
        xmlhttp.send();
    }
}

function ShowSendToCustomerFields(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedWOProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedWOProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetSendToCustomerFields.php?h=" + str, true);
        xmlhttp.send();
    }
}

function ShowAssociatedIoTab(str)
{
    //alert("ritwik");
    if (str == "")
    {
        document.getElementById("AssociatedilluButton").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedilluButton").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetAssociatedIoTab.php?az=" + str, true);
        xmlhttp.send();
    }
}

// Associated Illu Page Buttons functions
function ShowStartWIPIOFields(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedilluProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedilluProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetStartWIPIOFields.php?i=" + str, true);
        xmlhttp.send();
    }
}

function ShowIlluAddEditCommentsFields(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedilluProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedilluProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetIlluAddEditCommentsFields.php?j=" + str, true);
        xmlhttp.send();
    }
}

function ShowSfckIOFields(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedilluProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedilluProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetSfckIOFields.php?k=" + str, true);
        xmlhttp.send();
    }
}

function ShowAddReviewerQAIOFields(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedilluProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedilluProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetAddReviewerQAIOFields.php?l=" + str, true);
        xmlhttp.send();
    }
}

function ShowEditReviewerQAIOButtons(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedilluProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedilluProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "QAIOFieldsButton.php?qq=" + str, true);
        xmlhttp.send();
        //alert("ritwik");
    }
}

function ShowEditReviewerQAIOFields(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedilluProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedilluProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetEditReviewerQAIOFields.php?m=" + str, true);
        xmlhttp.send();
    }
}


function ShowDeleteReviewerQAIOFields(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedilluProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedilluProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetDeleteReviewerQAIOFields.php?n=" + str, true);
        xmlhttp.send();
    }
}

//Calculate Score Review IO
function CalculateReviewScoreIO(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedilluProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedilluProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "CalculateReviewScoreIO.php?m=" + str, true);
        xmlhttp.send();
    }
}

function SubmitReviewIO(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedilluProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedilluProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", " SubmitReviewIO.php?b=" + str, true);
        xmlhttp.send();
    }
}

function ShowEnterOwnerQAFields(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedilluProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedilluProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetEnterOwnerQAFields.php?o=" + str, true);
        xmlhttp.send();
    }
}


function ShowAcceptOwnerQAFields(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedilluProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedilluProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetAcceptOwnerQAFields.php?p=" + str, true);
        xmlhttp.send();
    }
}

function ShowVandVIOFields(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedilluProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedilluProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetVandVIOFields.php?q=" + str, true);
        xmlhttp.send();
    }
}

function ShowSendToOwnerFields(str)
{
    if (str == "")
    {
        document.getElementById("AssociatedilluProgress").innerHTML = "";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("AssociatedilluProgress").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "GetSendToOwnerFields.php?r=" + str, true);
        xmlhttp.send();
    }
}

$(document).ready(function ()
{
    $('body').click(function (event)
    {

        if ($(event.target).is("#AddCustomerDeliveryDate"))
        {
            $("#AddCustomerDeliveryDate").datepicker({
                showOn: 'focus',
                minDate: "-1d+1",
                dateFormat: 'dd/mm/yy'
            }).focus();
        }
        if ($(event.target).is("#AddWOAdatepicker"))
        {
            $("#AddWOAdatepicker").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
        if ($(event.target).is("#EditWOAdatepicker"))
        {
            $("#EditWOAdatepicker").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
        if ($(event.target).is("#AddSFCKPdatepicker"))
        {
            $("#AddSFCKPdatepicker").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
        if ($(event.target).is(".EditSFCKPdatepicker"))
        {
            $(".EditSFCKPdatepicker").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
        if ($(event.target).is("#AddPRQACPdatepicker"))
        {
            $("#AddPRQACPdatepicker").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
        if ($(event.target).is(".EditPRQACPdatepicker"))
        {
            $(".EditPRQACPdatepicker").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
        if ($(event.target).is("#AddIRQACPdatepicker"))
        {
            $("#AddIRQACPdatepicker").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
        if ($(event.target).is(".EditIRQACPdatepicker"))
        {
            $(".EditIRQACPdatepicker").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
        if ($(event.target).is("#EditCDdatepicker"))
        {
            $("#EditCDdatepicker").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
        if ($(event.target).is("#Raiseddatepicker"))
        {
            $("#Raiseddatepicker").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
        if ($(event.target).is("#Requireddatepicker"))
        {
            $("#Requireddatepicker").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
        if ($(event.target).is("#Sdatepicker"))
        {
            $("#Sdatepicker").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
        if ($(event.target).is("#Receiveddatepicker"))
        {
            $("#Receiveddatepicker").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
        if ($(event.target).is("#CCCdatepicker"))
        {
            $("#CCCdatepicker").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
        if ($(event.target).is("#STCdatepicker"))
        {
            $("#STCdatepicker").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
        if ($(event.target).is("#SdatepickerIO"))
        {
            $("#SdatepickerIO").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
        if ($(event.target).is("#SdatepickerARIO"))
        {
            $("#SdatepickerARIO").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
        if ($(event.target).is("#Cdatepicker"))
        {
            $("#Cdatepicker").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
        if ($(event.target).is("#Rdatepicker"))
        {
            $("#Rdatepicker").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
        if ($(event.target).is("#STOdatepicker"))
        {
            $("#STOdatepicker").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
        if ($(event.target).is("#RaisedDate"))
        {
            $("#RaisedDate").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
        if ($(event.target).is("#RequiredDate"))
        {
            $("#RequiredDate").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
        if ($(event.target).is("#EditWOAdatepicker"))
        {
            $("#EditWOAdatepicker").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
        if ($(event.target).is("#EditSFCKPdatepicker"))
        {
            $("#EditSFCKPdatepicker").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
        if ($(event.target).is("#EditPRQACPdatepicker"))
        {
            $("#EditPRQACPdatepicker").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
        if ($(event.target).is("#EditIRQACPdatepicker"))
        {
            $("#EditIRQACPdatepicker").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
        if ($(event.target).is("#AddStartDate"))
        {
            $("#AddStartDate").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
        if ($(event.target).is("#AddCompletionDate"))
        {
            $("#AddCompletionDate").datepicker({showOn: 'focus', minDate: "-1d+1", dateFormat: 'dd/mm/yy'}).focus();
        }
    });
});


//Function to submit the form onclick

$(document).ready(function ()
{
    $('body').submit(function (event)
    {
        event.preventDefault();

        //Add Project Page
        if ($(event.target).is("#PostAddProject"))
        {
            var FormId = "#PostAddProject";
            var Partner = $("#AddPartner").val();
            var Project = $("#AddProject").val();
            var Manual = $("#AddManual").val();
            var Target = $("#AddTarget").val();
            var DescriptionTitle = $("#AddDescriptionTitle").val();
            var TypeofWork = $("#AddTypeofWork").val();
            var CustomerDeliveryDate = $("#AddCustomerDeliveryDate").val();
            var Remarks = $("#AddRemarks").val();

            // Returns successful data submission message when the entered information is stored in database.
            var dataString = 'Partner=' + Partner + '&Project=' + Project + '&Manual=' + Manual + '&Target=' + Target + '&DescriptionTitle=' + DescriptionTitle + '&TypeofWork=' + TypeofWork + '&CustomerDeliveryDate=' + CustomerDeliveryDate + '&Remarks=' + Remarks;
        }
        //Edit Project Page Comments
        if ($(event.target).is("#PostEditProject"))
        {
            var FormId = "#SelectedProject";
            //window.alert(FormId);
            var ProjectRowsCount = $("#ProjectRowsCount").val();
            for (i = 0; i <= ProjectRowsCount; i++)
            {
                var EditPartner = $("#EditPartner").val();
                var EditProject = $("#EditProject").val();
                var EditManual = $("#EditManual").val();
                var EditTarget = $("#EditTarget").val();
                var EditDescriptionTitle = $("#EditDescription").val();
                var EditTypeofWork = $("#EditTypeOfWork").val();
                var EditCustomerDeliveryDate = $("#EditCDdatepicker").val();
                var EditRemarks = $("#EditRemarks").val();
            }
            //window.alert(4+5);
            var SelectedProject = $("#SelectedProject").val();
            //window.alert(SelectedProject)
            // Returns successful data submission message when the entered information is stored in database.
            var dataString = 'EditPartner=' + EditPartner + '&EditProject=' + EditProject + '&EditManual=' + EditManual + '&EditTarget=' + EditTarget + '&EditDescriptionTitle=' + EditDescriptionTitle + '&EditTypeofWork=' + EditTypeofWork + '&EditCustomerDeliveryDate=' + EditCustomerDeliveryDate + '&EditRemarks=' + EditRemarks;
            //window.alert(dataString);
        }


        //Add Add WO Page
        if ($(event.target).is("#PostAddWO"))
        {
            var FormId = "#PostAddWO";
            var AddWONo = $("#AddWONo").val();
            var AddATANumber = $("#AddATANumber").val();
            var AddOwner = $("#AddOwner").val();
            var AddWOAdatepicker = $("#AddWOAdatepicker").val();
            var AddSFCKPdatepicker = $("#AddSFCKPdatepicker").val();
            var AddPR = $("#AddPR").val();
            var AddPRQACPdatepicker = $("#AddPRQACPdatepicker").val();
            var AddIR = $("#AddIR").val();
            var AddIRQACPdatepicker = $("#AddIRQACPdatepicker").val();
            var SelectedProject = $("#SelectedProject").val();

            // Returns successful data submission message when the entered information is stored in database.
            var dataString = 'AddWONo=' + AddWONo + '&AddATANumber=' + AddATANumber + '&AddOwner=' + AddOwner + '&AddWOAdatepicker=' + AddWOAdatepicker + '&AddSFCKPdatepicker=' + AddSFCKPdatepicker + '&AddPR=' + AddPR + '&AddPRQACPdatepicker=' + AddPRQACPdatepicker + '&AddIR=' + AddIR + '&AddIRQACPdatepicker=' + AddIRQACPdatepicker + '&SelectedProject=' + SelectedProject;
        }

        //Edit WO Page
        if ($(event.target).is("#PostEditWO"))
        {
            var FormId = "#PostEditWO";
            var WORowsCount = $("#WORowsCount").val();
            for (i = 0; i <= WORowsCount; i++)
            {
                var EditWONo = $("#EditWONo").val();
                var EditATANumber = $("#EditATANumber").val();
                var EditOwner = $("#EditOwner").val();
                var EditWOAdatepicker = $("#EditWOAdatepicker").val();
                var EditSFCKPdatepicker = $("#EditSFCKPdatepicker").val();
                var EditPR = $("#EditPR").val();
                var EditPRQACPdatepicker = $("#EditPRQACPdatepicker").val();
                var EditIR = $("#EditIR").val();
                var EditIRQACPdatepicker = $("#EditIRQACPdatepicker").val();
            }
            var SelectedProject = $("#SelectedProject").val();

            // Returns successful data submission message when the entered information is stored in database.
            var dataString = 'EditWONo=' + EditWONo + '&EditATANumber=' + EditATANumber + '&EditOwner=' + EditOwner + '&EditWOAdatepicker=' + EditWOAdatepicker + '&EditSFCKPdatepicker=' + EditSFCKPdatepicker + '&EditPR=' + EditPR + '&EditPRQACPdatepicker=' + EditPRQACPdatepicker + '&EditIR=' + EditIR + '&EditIRQACPdatepicker=' + EditIRQACPdatepicker + '&SelectedProject=' + SelectedProject;
            //window.alert(dataString);
        }

        if ($(event.target).is("#PostAddIllu"))
        {
            var FormId = "#PostAddIllu";
            var AddIllu = $('#Illustrator').val();
            var AddReviewer = $('#Reviewer').val();
            var AddGraphicID = $('#GraphicID').val();
            var AddType = $('#Type').val();
            var AddRemarksIllu = $('#Remarks').val();
            var AddRaisedDate = $('#Raiseddatepicker').val();
            var AddRequiredDate = $('#Requireddatepicker').val();

            var dataString = 'AddIllu=' + AddIllu + '&AddReviewer=' + AddReviewer + '&AddGraphicID=' + AddGraphicID + '&AddType=' + AddType + '&AddRemarksIllu=' + AddRemarksIllu + '&AddRaisedDate=' + AddRaisedDate + '&AddRequiredDate=' + AddRequiredDate;
            //alert(dataString);

        }
        //Edit Illustration Function
        if ($(event.target).is("#PostEditIllu"))
        {
            var FormId = "#PostEditIllu";
            var IORowsCount = $("#IORowsCount").val();
            for (i = 0; i <= IORowsCount; i++)
            {
                var EditIllustrator = $("#Illustrator").val();
                var EditReviewer = $("#Reviewer").val();
                var EditGraphicIDOld = $("#GraphicIDOld").val();
                var EditType = $("#Type").val();
                var EditRemarks = $("#Remarks").val();
                var EditRaisedDate = $("#RaisedDate").val();
                var EditRequiredDate = $("#RequiredDate").val();
            }

            var dataString = 'EditIllustrator=' + EditIllustrator + '&EditReviewer=' + EditReviewer + '&EditGraphicIDOld=' + EditGraphicIDOld + '&EditType=' + EditType + '&EditRemarks=' + EditRemarks + '&EditRaisedDate=' + EditRaisedDate + '&EditRequiredDate=' + EditRequiredDate;
            //alert(dataString);
        }
        if ($(event.target).is("#PostAcceptWO"))
        {
            var dataString = 'AcceptWO';
        }

        if ($(event.target).is("#PostAcceptIO"))
        {
            var dataString = 'AcceptIO';
        }

        if ($(event.target).is("#PostAddOwnerRemarks"))
        {
            var FormId = "#PostAddOwnerRemarks";
            //window.alert(5+6);
            var AddOwnerRemark = $("#AddOwnRem").val();

            var dataString = 'AddOwnRem=' + AddOwnerRemark;

            //window.alert(dataString);
        }

        if ($(event.target).is("#PostAddIlluRemarks"))
        {
            var FormId = "#PostAddIlluRemarks";
            //window.alert(5+6);
            var AddIlluRemark = $("#AddIlluRem").val();

            var dataString = 'AddIlluRem=' + AddIlluRemark;

            //window.alert(dataString);
        }


        if ($(event.target).is("#PostAddSFCKWO"))
        {
            var FormId = "#PostAddSFCKWO";
            var SFCKValue = $("#SFCKVal").val();
            var SubDate = $("#Sdatepicker").val();

            var dataString = 'SFCKValue=' + SFCKValue + '&SubDate=' + SubDate;
            //alert(dataString);
        }
        if ($(event.target).is("#PostAddSFCKIO"))
        {
            var FormId = "#PostAddSFCKIO";
            var SFCKIOValue = $("#SFCKVal").val();
            var SubDateIO = $("#SdatepickerIO").val();

            var dataString = 'SFCKIOValue=' + SFCKIOValue + '&SubDateIO=' + SubDateIO;
            alert(dataString);
        }
        if ($(event.target).is("#PostAddReviewerQAFields"))
        {
            var FormId = "#PostAddReviewerQAFields";
            var AddErrorCode = $("#AddErrorCode").val();
            var AddErrorDescription = $("#AddErrorDescription").val();
            var AddQuantity = $("#AddQuantity").val();
            var AddStartDate = $("#AddStartDate").val();
            var AddCompletionDate = $("#AddCompletionDate").val();
            var AddReviewType = $("AddReviewType").val();
            var dataString = 'AddErrorCode=' + AddErrorCode + '&AddErrorDescription=' + AddErrorDescription + '&AddQuantity=' + AddQuantity + '&AddStartDate=' + AddStartDate + '&AddCompletionDate=' + AddCompletionDate + '&AddReviewType=' + AddReviewType;
            //alert(dataString);
        }
//QAIO
        if ($(event.target).is("#PostAddReviewerQAIOFields"))
        {
            var FormId = "#PostAddReviewerQAIOFields";
            var AddErrorCodeIO = $("#AddErrorCode").val();
            var AddErrorDescriptionIO = $("#AddErrorDescription").val();
            var AddQuantityIO = $("#AddQuantity").val();
            var AddStartDateIO = $("#SdatepickerARIO").val();
            var AddCompletionDateIO = $("#Cdatepicker").val();

            var dataString = 'AddErrorCodeIO=' + AddErrorCodeIO + '&AddErrorDescriptionIO=' + AddErrorDescriptionIO + '&AddQuantityIO=' + AddQuantityIO + '&AddStartDateIO=' + AddStartDateIO + '&AddCompletionDateIO=' + AddCompletionDateIO;
            //alert(dataString);
        }

        if ($(event.target).is("#PostEditReviewQA"))
        {
            var FormId = "#PostEditReviewQA";
            var EditErrorCode = $("#EditErrorCode").val();
            var EditErrorDescription = $("#EditDescription").val();
            var EditQuantity = $("#EditQuantity").val();

            var dataString = 'EditErrorCode=' + EditErrorCode + '&EditErrorDescription=' + EditErrorDescription + '&EditQuantity=' + EditQuantity;
            //alert(dataString);
        }
        //EDIT QA IO
        if ($(event.target).is("#PostEditReviewQAIO"))
        {
            var FormId = "#PostEditReviewQAIO";
            var EditErrorCodeIO = $("#EditErrorCodeIO").val();
            var EditErrorDescriptionIO = $("#EditDescriptionIO").val();
            var EditQuantityIO = $("#EditQuantityIO").val();

            var dataString = 'EditErrorCodeIO=' + EditErrorCodeIO + '&EditErrorDescriptionIO=' + EditErrorDescriptionIO + '&EditQuantityIO=' + EditQuantityIO;
            //alert(dataString);
        }

        if ($(event.target).is("#DeleteReviewQA"))
        {
            var FormId = "#DeleteReviewQA";
            var DeleteErrorID = $("#QAReviewID").val();

            var dataString = 'DeleteErrorID=' + DeleteErrorID;
            //alert(dataString);
        }

        //DELETE IO REVIEW
        if ($(event.target).is("#PostDeleteReviewQAIO"))
        {
            var FormId = "#DeleteReviewQAIO";
            var Selected_ErrorIDIO = $("#QAReviewID").val();

            var dataString = 'Selected_DeleteErrorIDIO=' + Selected_ErrorIDIO;
            //alert(dataString);
        }
        //Calculating Score for a Review
        if ($(event.target).is("#CalculateQA"))
        {
            var FormId = "#CalculateQA";
            var CalculateReviewID = $('input[name=DisplayQAReviewButtons]:checked').val();

            var dataString = 'CalculateReviewID=' + CalculateReviewID;
            //alert(dataString);
        }
//      Calculating Score for Review IO
        if ($(event.target).is("#CalculateQAIO"))
        {
            var FormId = "#CalculateQAIO";

            var dataString = "CalculateQAIO";
            //alert(dataString);
        }

        // Submitting a review i.e. adding closing date
        if ($(event.target).is("#SubmitQA"))
        {
            var FormId = "#SubmitQA";
            var SubmitReviewID = $('input[name=DisplayQASubmitReviewButtons]:checked').val();

            var dataString = 'SubmitReviewID=' + SubmitReviewID;
            //alert(dataString);
        }

        // Submitting a IO review i.e. adding closing date

        if ($(event.target).is("#SubmitQAIO"))
        {
            var FormId = "#SubmitQAIO";
            var SubmitReviewIDIO = $('input[name=DisplayQASubmitReviewButtonsIO]:checked').val();

            var dataString = 'SubmitReviewIDIO=' + SubmitReviewIDIO;
            //alert(dataString);
        }

        if ($(event.target).is("#PostAddCSTMRQA"))
        {
            var FormId = "#PostAddCSTMRQA";
            var extErrorCode = $("#ErrorCode").val();
            var extErrorDesc = $("#ErrorDescription").val();
            var extEscapes = $("#Escapes").val();
            var extReceivedDate = $("#Receiveddatepicker").val();

            var dataString = 'extErrorCode=' + extErrorCode + '&extErrorDesc=' + extErrorDesc + '&extEscapes=' + extEscapes + '&extReceivedDate=' + extReceivedDate;
            //alert(dataString);
        }
//IO OWNER ADD
        if ($(event.target).is("#PostAddOWNERQA"))
        {
            var FormId = "#PostAddOWNERQA";
            var extErrorCode = $("#ErrorCode").val();
            var extErrorDesc = $("#ErrorDescription").val();
            var extEscapes = $("#Escapes").val();
            var extReceivedDate = $("#Receiveddatepicker").val();

            var dataString = 'extErrorCode=' + extErrorCode + '&extErrorDesc=' + extErrorDesc + '&extEscapes=' + extEscapes + '&extReceivedDate=' + extReceivedDate;
            //alert(dataString);
        }
        if ($(event.target).is("#PostAcceptCSTMRQA"))
        {
            var FormId = "#PostAcceptCSTMRQA";

            var dataString = 'AcceptCSTMRQA'
        }

        if ($(event.target).is("#PostCSTMRComment"))
        {
            var FormId = "#PostCSTMRComment";
            var extCompletionDate = $("#CCCdatepicker").val();
            var dataString = 'extCompletionDate=' + extCompletionDate;
            //alert(dataString);
        }

        if ($(event.target).is("#PostSNDCSTMR"))
        {
            var FormId = "#PostSNDCSTMR";
            var extSNDDate = $("#STCdatepicker").val();
            var dataString = 'extSNDDate=' + extSNDDate;
            //alert(dataString);
        }

        // AJAX Code To Submit Form.
        $.ajax({
            type: "POST",
            url: "PostToDB.php",
            data: dataString,
            cache: false,
            success: function (result)
            {
                alert(result);
                $(FormId)[0].reset();
            }
        });
        return false;

    });
});









