<?php
    //$five,$four �ȱ�����ʾ��ĸ�������������ǰ�߹���6λ
    function Counter()
    {                                   //���庯��
        $five = "00000";                                      //��������
        $four = "0000";
        $three = "000";
        $two = "00";
        $one = "0";
        $counter = dirname(__FILE__).'/record.txt';                      //��ŷ�������Ŀ���ļ���.dat��ʽ
        if(!file_exists($counter))                    //�ж��ļ��Ƿ����
        {
            $counter = fopen($counter,"w");
            fputs($counter,"0");                      //д���ļ�
            fclose($counter);
        }
        else
        {
            $fp = fopen($counter,"r");
            $num = fgets($fp,"1024");                //����ļ�����������ļ������� 1
            $num = $num + 1;
            if($num < 10)
                print "$five"."$num";
            elseif($num < 100)
                print "$four"."$num";
            elseif($num < 1000)
                print "$three"."$num";
            elseif($num < 10000)
                print "$two"."$num";
            elseif($num < 100000)
                print "$one"."$num";
            else
                print "$num";
        }
        $fp = fopen($counter,"w");
        fputs($fp,"$num");
        fclose($fp);
    }
?>